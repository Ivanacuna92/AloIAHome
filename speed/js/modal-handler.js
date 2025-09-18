// Manejo del modal de cotización
let currentServices = [];

function showModal() {
    // Verificar que hay servicios seleccionados antes de mostrar el modal
    if (typeof collectServices === 'function') {
        const services = collectServices();
        if (!services || services.length === 0) {
            alert('Por favor selecciona al menos un servicio antes de generar la cotización.');
            return false;
        }
    }
    
    const modal = document.getElementById('cotizacionModal');
    if (modal) {
        modal.style.display = 'flex';
        document.getElementById('submitPdfForm').disabled = true;
        // Limpiar validaciones previas
        clearFormValidation();
        return true;
    }
    return false;
}

function updateModalJSON() {
    try {
        // Verificar que la función collectServices esté disponible
        if (typeof collectServices !== 'function') {
            console.error('collectServices function not available');
            return false;
        }
        
        const services = collectServices();
        
        if (!services || services.length === 0) {
            console.error('No services selected');
            return false;
        }
        
        const client = {
            companyName: document.getElementById('companyName')?.value.trim() || '',
            contactName: document.getElementById('contactName')?.value.trim() || '',
            contactPhone: document.getElementById('contactPhone')?.value.trim() || '',
            contactEmail: document.getElementById('contactEmail')?.value.trim() || ''
        };

        const dataToSend = { services: services, client: client };
        
        const hiddenInput = document.getElementById('modal_services_json');
        if (hiddenInput) {
            const jsonString = JSON.stringify(dataToSend);
            hiddenInput.value = jsonString;
            console.log('JSON data set successfully:', jsonString);
            return true;
        } else {
            console.error('Hidden input not found');
            return false;
        }
    } catch (error) {
        console.error('Error updating modal JSON:', error);
        return false;
    }
}

function closeModal() {
    const modal = document.getElementById('cotizacionModal');
    if (modal) {
        modal.style.display = 'none';
    }
}

function validateField(field) {
    if (!field) return false;
    
    let isValid = false;
    
    switch(field.id) {
        case 'companyName':
            isValid = field.value.trim().length > 0;
            break;
        case 'contactName':
            isValid = field.value.trim().length > 0;
            break;
        case 'contactPhone':
            const phoneRegex = /^\d{10}$/;
            isValid = phoneRegex.test(field.value);
            break;
        case 'contactEmail':
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            isValid = emailRegex.test(field.value);
            break;
    }
    
    if (isValid) {
        field.classList.remove('is-invalid');
        field.classList.add('is-valid');
    } else {
        field.classList.remove('is-valid');
        field.classList.add('is-invalid');
    }
    
    return isValid;
}

function checkAllFieldsValid() {
    const companyName = document.getElementById('companyName');
    const contactName = document.getElementById('contactName');
    const contactPhone = document.getElementById('contactPhone');
    const contactEmail = document.getElementById('contactEmail');
    const submitBtn = document.getElementById('submitPdfForm');
    
    if (!companyName || !contactName || !contactPhone || !contactEmail || !submitBtn) {
        return;
    }
    
    const companyNameValid = validateField(companyName);
    const contactNameValid = validateField(contactName);
    const contactPhoneValid = validateField(contactPhone);
    const contactEmailValid = validateField(contactEmail);
    
    submitBtn.disabled = !(companyNameValid && contactNameValid && contactPhoneValid && contactEmailValid);
}

function clearFormValidation() {
    const formInputs = document.querySelectorAll('#pdfModalForm .form-control');
    formInputs.forEach(input => {
        input.classList.remove('is-invalid');
        input.classList.remove('is-valid');
    });
}

// Configuración de eventos para el modal
document.addEventListener('DOMContentLoaded', function() {
    setupModalEvents();
});

function setupModalEvents() {
    // Eventos para cerrar el modal
    const closeModalBtn = document.getElementById('closeModal');
    const cancelModalBtn = document.getElementById('cancelModal');
    
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', closeModal);
    }
    
    if (cancelModalBtn) {
        cancelModalBtn.addEventListener('click', closeModal);
    }
    
    // Validación en tiempo real para los inputs del formulario
    const formInputs = document.querySelectorAll('#pdfModalForm .form-control');
    formInputs.forEach(input => {
        input.addEventListener('input', function() {
            validateField(this);
            checkAllFieldsValid();
        });
        input.addEventListener('blur', function() {
            validateField(this);
            checkAllFieldsValid();
        });
    });
    
    // Validación específica para el teléfono (solo números)
    const phoneInput = document.getElementById('contactPhone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            validateField(this);
            checkAllFieldsValid();
        });
    }
    
    // Cerrar el modal si se hace clic fuera del mismo
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('cotizacionModal');
        if (event.target === modal) {
            closeModal();
        }
    });
    
    // Envío del formulario del modal
    const modalForm = document.getElementById('pdfModalForm');
    if (modalForm) {
        modalForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevenir el envío automático
            
            const companyName = document.getElementById('companyName');
            const contactName = document.getElementById('contactName');
            const contactPhone = document.getElementById('contactPhone');
            const contactEmail = document.getElementById('contactEmail');
            
            const companyNameValid = validateField(companyName);
            const contactNameValid = validateField(contactName);
            const contactPhoneValid = validateField(contactPhone);
            const contactEmailValid = validateField(contactEmail);
            
            if (!(companyNameValid && contactNameValid && contactPhoneValid && contactEmailValid)) {
                alert('Por favor completa correctamente todos los campos.');
                return;
            }
            
            // Actualizar JSON antes del envío
            const jsonUpdateSuccess = updateModalJSON();
            if (!jsonUpdateSuccess) {
                alert('Error: No se pudieron preparar los datos. Verifica que hayas seleccionado al menos un servicio.');
                return;
            }
            
            // Debug: mostrar los datos que se van a enviar (remover en producción)
            const hiddenInput = document.getElementById('modal_services_json');
            console.log('Datos a enviar:', hiddenInput?.value);
            
            // Intentar usar el formulario original primero
            try {
                modalForm.submit();
            } catch (originalError) {
                console.error('Error with original form submit:', originalError);
                
                // Fallback: crear formulario nuevo
                setTimeout(() => {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = 'generate-pdf.php';
                    form.style.display = 'none';
                    
                    // Crear input con los datos JSON
                    const jsonInput = document.createElement('input');
                    jsonInput.type = 'hidden';
                    jsonInput.name = 'services_json';
                    jsonInput.value = hiddenInput.value;
                    form.appendChild(jsonInput);
                    
                    // Agregar todos los campos del cliente individualmente también
                    const companyInput = document.createElement('input');
                    companyInput.type = 'hidden';
                    companyInput.name = 'companyName';
                    companyInput.value = document.getElementById('companyName').value;
                    form.appendChild(companyInput);
                    
                    const contactInput = document.createElement('input');
                    contactInput.type = 'hidden';
                    contactInput.name = 'contactName';
                    contactInput.value = document.getElementById('contactName').value;
                    form.appendChild(contactInput);
                    
                    const phoneInput = document.createElement('input');
                    phoneInput.type = 'hidden';
                    phoneInput.name = 'contactPhone';
                    phoneInput.value = document.getElementById('contactPhone').value;
                    form.appendChild(phoneInput);
                    
                    const emailInput = document.createElement('input');
                    emailInput.type = 'hidden';
                    emailInput.name = 'contactEmail';
                    emailInput.value = document.getElementById('contactEmail').value;
                    form.appendChild(emailInput);
                    
                    document.body.appendChild(form);
                    console.log('Submitting fallback form with data:', {
                        services_json: jsonInput.value,
                        companyName: companyInput.value,
                        contactName: contactInput.value,
                        contactPhone: phoneInput.value,
                        contactEmail: emailInput.value
                    });
                    form.submit();
                }, 100);
            }
        });
    }
}