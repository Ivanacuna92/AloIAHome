// Modal Handler for EAG.php
function showModal() {
    const modal = document.getElementById('cotizacionModal');
    modal.style.display = 'flex';

    // No limpiamos los campos para conservar los datos ingresados
    // (Elimina o comenta clearFormValidation() para que no se borren los datos)
    // clearFormValidation();

    // Deshabilitar el botón de envío inicialmente
    document.getElementById('submitPdfForm').disabled = true;
}

// Función para preparar los datos de servicios y cliente
function updateModalJSON() {
    const services = [];
    const extraPB = parseFloat(document.getElementById('extraPB').value) || 0;
    const adjustedPrice = (basePrice) => basePrice * (1 + extraPB / 100);

    // Base de Datos
    if(document.getElementById('dbToggle').checked) {
        const level = document.getElementById('dbLevel').value;
        const basePrice = prices.database[level];
        const finalPrice = adjustedPrice(basePrice);
        services.push({
            name: 'Base de Datos',
            level: `${parseInt(level).toLocaleString()} registros`,
            price: parseFloat(finalPrice.toFixed(2))
        });
    }

    // Chatbot
    if(document.getElementById('chatbotToggle').checked) {
        const level = document.getElementById('chatbotLevel').value;
        const basePrice = prices.chatbot[level];
        const finalPrice = adjustedPrice(basePrice);
        services.push({
            name: 'Chatbot',
            level: `${parseInt(level).toLocaleString()} operaciones`,
            price: parseFloat(finalPrice.toFixed(2))
        });
    }

    // Voicebot
    if(document.getElementById('voicebotToggle').checked) {
        const level = document.getElementById('voicebotLevel').value;
        const basePrice = prices.voicebot[level];
        const finalPrice = adjustedPrice(basePrice);
        services.push({
            name: 'Voicebot',
            level: `${parseInt(level).toLocaleString()} minutos`,
            price: parseFloat(finalPrice.toFixed(2))
        });
    }

    // Mail Composer
    if(document.getElementById('mailToggle').checked) {
        const level = document.getElementById('mailLevel').value;
        const basePrice = prices.mailComposer[level];
        const finalPrice = adjustedPrice(basePrice);
        services.push({
            name: 'Mail Composer',
            level: `${parseInt(level).toLocaleString()} envíos`,
            price: parseFloat(finalPrice.toFixed(2))
        });
    }

    // Números Telefónicos Extra
    const extraPhones = parseInt(document.getElementById('extraPhones').value) || 0;
    if(extraPhones > 0) {
        const basePrice = extraPhones * prices.phoneNumber;
        const finalPrice = adjustedPrice(basePrice);
        services.push({
            name: 'Números Extra',
            level: `${extraPhones} números`,
            price: parseFloat(finalPrice.toFixed(2))
        });
    }

    // Recopilar datos del cliente
    const client = {
        companyName: document.getElementById('companyName').value.trim(),
        contactName: document.getElementById('contactName').value.trim(),
        contactPhone: document.getElementById('contactPhone').value.trim(),
        contactEmail: document.getElementById('contactEmail').value.trim()
    };

    const dataToSend = { services: services, client: client };

    // Asignar el JSON actualizado al campo oculto
    document.getElementById('modal_services_json').value = JSON.stringify(dataToSend);
}


// Función para limpiar solo las clases de validación (sin borrar los datos)
function clearFormValidation() {
    const formInputs = document.querySelectorAll('#pdfModalForm .form-control');
    formInputs.forEach(input => {
        input.classList.remove('is-invalid');
        input.classList.remove('is-valid');
    });
}

// Función para cerrar el modal
function closeModal() {
    document.getElementById('cotizacionModal').style.display = 'none';
}

// Función para validar un campo específico
function validateField(field) {
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

// Función para verificar que todos los campos sean válidos
function checkAllFieldsValid() {
    const companyNameValid = validateField(document.getElementById('companyName'));
    const contactNameValid = validateField(document.getElementById('contactName'));
    const contactPhoneValid = validateField(document.getElementById('contactPhone'));
    const contactEmailValid = validateField(document.getElementById('contactEmail'));

    document.getElementById('submitPdfForm').disabled = !(companyNameValid && contactNameValid && contactPhoneValid && contactEmailValid);
}

// Función para mostrar el modal al generar el PDF
function generatePDF() {
    // Verificar que haya al menos un servicio seleccionado
    let hasServices = false;
    if(document.getElementById('dbToggle').checked ||
        document.getElementById('chatbotToggle').checked ||
        document.getElementById('voicebotToggle').checked ||
        document.getElementById('mailToggle').checked ||
        (parseInt(document.getElementById('extraPhones').value) || 0) > 0) {
        hasServices = true;
    }

    if (!hasServices) {
        alert('Por favor selecciona al menos un servicio para generar la cotización.');
        return;
    }

    // Mostrar el modal
    showModal();
}

// Configuración de eventos cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    // Configurar el botón de generar PDF
    const generatePdfBtn = document.getElementById('generatePdfBtn');
    if (generatePdfBtn) {
        generatePdfBtn.removeEventListener('click', generatePDF);
        generatePdfBtn.addEventListener('click', generatePDF);
    }

    // Eventos para cerrar el modal
    document.getElementById('closeModal').addEventListener('click', closeModal);
    document.getElementById('cancelModal').addEventListener('click', closeModal);

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
    document.getElementById('contactPhone').addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
        validateField(this);
        checkAllFieldsValid();
    });

    // Cerrar el modal si se hace clic fuera del mismo
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('cotizacionModal');
        if (event.target === modal) {
            closeModal();
        }
    });

    // Actualizar el JSON final justo antes de enviar el formulario y mostrarlo en consola
    document.getElementById('pdfModalForm').addEventListener('submit', function(e) {
        const companyNameValid = validateField(document.getElementById('companyName'));
        const contactNameValid = validateField(document.getElementById('contactName'));
        const contactPhoneValid = validateField(document.getElementById('contactPhone'));
        const contactEmailValid = validateField(document.getElementById('contactEmail'));

        if (!(companyNameValid && contactNameValid && contactPhoneValid && contactEmailValid)) {
            e.preventDefault();
            alert('Por favor completa correctamente todos los campos.');
        } else {
            updateModalJSON(); // Actualiza el JSON con los últimos datos
            // Aquí ya se imprimirá el JSON en consola si todos los datos están correctos
        }
    });
});