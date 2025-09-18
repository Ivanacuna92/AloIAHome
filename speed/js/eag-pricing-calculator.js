// Pricing Calculator for EAG.php
const prices = {
    database: {
        6000: 3999.68,
        14000: 7651.76,
        30000: 13999.07
    },
    chatbot: {
        3000: 5999.40,
        7000: 11477.43,
        15000: 20998.20
    },
    voicebot: {
        5000: 14300,
        11000: 29040,
        25000: 60500
    },
    mailComposer: {
        100000: 6000,
        500000: 25000,
        1000000: 30000,
        2000000: 50000
    },
    phoneNumber: 220
};

// Setup event listeners
document.addEventListener('DOMContentLoaded', function() {
    const toggles = ['db', 'chatbot', 'voicebot', 'mail'];
    
    toggles.forEach(service => {
        const toggle = document.getElementById(`${service}Toggle`);
        const level = document.getElementById(`${service}Level`);
        
        toggle.addEventListener('change', function() {
            level.disabled = !this.checked;
            updateSummary();
        });
        
        level.addEventListener('change', updateSummary);
    });

    document.getElementById('extraPhones').addEventListener('input', updateSummary);

    // Agregar evento al botón de generar PDF
    document.getElementById('generatePdfBtn').addEventListener('click', generatePDF);

    // Initial update
    updateSummary();
});

function updateSummary() {
    const summary = document.getElementById('serviceSummary');
    summary.innerHTML = '';
    let total = 0;
    // Leer el porcentaje extra (si no hay, se toma 0)
    const extraPB = parseFloat(document.getElementById('extraPB').value) || 0;

    // Función para calcular el precio final aplicando el porcentaje extra
    const adjustedPrice = (basePrice) => basePrice * (1 + extraPB / 100);

    // Base de Datos
    if(document.getElementById('dbToggle').checked) {
        const level = document.getElementById('dbLevel').value;
        const basePrice = prices.database[level];
        const finalPrice = adjustedPrice(basePrice);
        total += finalPrice;
        addServiceToSummary('Base de Datos', `${parseInt(level).toLocaleString()} registros`, finalPrice);
    }

    // Chatbot
    if(document.getElementById('chatbotToggle').checked) {
        const level = document.getElementById('chatbotLevel').value;
        const basePrice = prices.chatbot[level];
        const finalPrice = adjustedPrice(basePrice);
        total += finalPrice;
        addServiceToSummary('Chatbot', `${parseInt(level).toLocaleString()} operaciones`, finalPrice);
    }

    // Voicebot
    if(document.getElementById('voicebotToggle').checked) {
        const level = document.getElementById('voicebotLevel').value;
        const basePrice = prices.voicebot[level];
        const finalPrice = adjustedPrice(basePrice);
        total += finalPrice;
        addServiceToSummary('Voicebot', `${parseInt(level).toLocaleString()} minutos`, finalPrice);
    }

    // Mail Composer
    if(document.getElementById('mailToggle').checked) {
        const level = document.getElementById('mailLevel').value;
        const basePrice = prices.mailComposer[level];
        const finalPrice = adjustedPrice(basePrice);
        total += finalPrice;
        addServiceToSummary('Mail Composer', `${parseInt(level).toLocaleString()} envíos`, finalPrice);
    }

    // Números Telefónicos Extra
    const extraPhones = parseInt(document.getElementById('extraPhones').value) || 0;
    if(extraPhones > 0) {
        const basePrice = extraPhones * prices.phoneNumber;
        const finalPrice = adjustedPrice(basePrice);
        total += finalPrice;
        addServiceToSummary('Números Extra', `${extraPhones} números`, finalPrice);
    }

    // Actualizar el total en pantalla con 2 decimales
    document.getElementById('totalPrice').textContent = `$${total.toFixed(2)} MXN`;
}

function addServiceToSummary(name, details, price) {
    const summary = document.getElementById('serviceSummary');
    summary.innerHTML += `
        <div class="service-item">
            <div>
                <div>${name}</div>
                <small class="text-white-50">${details}</small>
            </div>
            <div>$${parseFloat(price).toFixed(2)}</div>
        </div>
    `;
}

// Listener para que se actualice automáticamente al modificar el input de comisión extra
document.getElementById('extraPB').addEventListener('input', updateSummary);

function generatePDF() {
    // Recopilar los servicios seleccionados
    const services = [];

    // Database
    if(document.getElementById('dbToggle').checked) {
        const level = document.getElementById('dbLevel').value;
        const levelText = `${level.toLocaleString()} registros`;
        const price = prices.database[level];
        services.push({
            name: 'Base de Datos',
            level: levelText,
            price: price
        });
    }

    // Chatbot
    if(document.getElementById('chatbotToggle').checked) {
        const level = document.getElementById('chatbotLevel').value;
        const levelText = `${level.toLocaleString()} operaciones`;
        const price = prices.chatbot[level];
        services.push({
            name: 'Chatbot',
            level: levelText,
            price: price
        });
    }

    // Voicebot
    if(document.getElementById('voicebotToggle').checked) {
        const level = document.getElementById('voicebotLevel').value;
        const levelText = `${level.toLocaleString()} minutos`;
        const price = prices.voicebot[level];
        services.push({
            name: 'Voicebot',
            level: levelText,
            price: price
        });
    }

    // Mail Composer
    if(document.getElementById('mailToggle').checked) {
        const level = document.getElementById('mailLevel').value;
        const levelText = `${level.toLocaleString()} envíos`;
        const price = prices.mailComposer[level];
        services.push({
            name: 'Mail Composer',
            level: levelText,
            price: price
        });
    }

    // Extra phone numbers
    const extraPhones = parseInt(document.getElementById('extraPhones').value) || 0;
    if(extraPhones > 0) {
        const levelText = `${extraPhones} números`;
        const price = extraPhones * prices.phoneNumber;
        services.push({
            name: 'Números Extra',
            level: levelText,
            price: price
        });
    }

    // Verificar si hay servicios seleccionados
    if (services.length === 0) {
        alert('Por favor selecciona al menos un servicio para generar la cotización.');
        return;
    }

    // Establecer el valor del campo oculto con los datos JSON
    document.getElementById('services_json').value = JSON.stringify({ services: services });

    // Mostrar mensaje de carga
    const btn = document.getElementById('generatePdfBtn');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Generando...';
    btn.disabled = true;

    // Enviar el formulario
    document.getElementById('pdfForm').submit();

    // Restaurar el botón después de un tiempo
    setTimeout(() => {
        btn.innerHTML = originalText;
        btn.disabled = false;
    }, 3000);
}