
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar Flatpickr (datepicker)
    flatpickr("#fecha", {
        minDate: "today",
        dateFormat: "Y-m-d",
        disable: [
            function(date) {
                // Deshabilitar fines de semana
                return (date.getDay() === 0 || date.getDay() === 6);
            }
        ],
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado']
            },
            months: {
                shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                longhand: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            }
        }
    });

    // Validación del formulario
    const form = document.getElementById('demo-form');
    const submitBtn = document.getElementById('submit-btn');
    const successMessage = document.getElementById('success-message');
    const errorAlert = document.getElementById('error-alert');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validar formulario
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('error');
                isValid = false;
            } else {
                field.classList.remove('error');
            }
            
            // Validación específica para email
            if (field.type === 'email' && field.value.trim()) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value.trim())) {
                    field.classList.add('error');
                    isValid = false;
                }
            }
            
            // Validación específica para teléfono
            if (field.id === 'telefono' && field.value.trim()) {
                const phoneRegex = /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/;
                if (!phoneRegex.test(field.value.trim())) {
                    field.classList.add('error');
                    isValid = false;
                }
            }
        });
        
        if (!isValid) {
            return;
        }
        
        // Mostrar estado de carga
        submitBtn.classList.add('loading');
        submitBtn.disabled = true;
        
        // Simular envío del formulario (en producción, esto sería una petición AJAX real)
        setTimeout(function() {
            // Ocultar estado de carga
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
            
            // Mostrar mensaje de éxito
            successMessage.style.display = 'block';
            
            // Resetear formulario
            form.reset();
            
            // Desplazarse al mensaje de éxito
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Ocultar mensaje después de 5 segundos
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }, 1500);
    });
    
    // Validación en tiempo real
    const inputFields = form.querySelectorAll('.form-control, .form-select');
    inputFields.forEach(field => {
        field.addEventListener('blur', function() {
            if (field.hasAttribute('required') && !field.value.trim()) {
                field.classList.add('error');
            } else {
                field.classList.remove('error');
            }
            
            // Validación específica para email
            if (field.type === 'email' && field.value.trim()) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value.trim())) {
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            }
            
            // Validación específica para teléfono
            if (field.id === 'telefono' && field.value.trim()) {
                const phoneRegex = /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/;
                if (!phoneRegex.test(field.value.trim())) {
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            }
        });
    });
});
