// Precios de los servicios
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

// Configurar eventos cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    setupPricingCalculator();
});

function setupPricingCalculator() {
    const toggles = ['db', 'chatbot', 'voicebot', 'mail'];
    
    toggles.forEach(service => {
        const toggle = document.getElementById(`${service}Toggle`);
        const level = document.getElementById(`${service}Level`);
        
        if (toggle && level) {
            toggle.addEventListener('change', function() {
                level.disabled = !this.checked;
                updateSummary();
            });
            
            level.addEventListener('change', updateSummary);
        }
    });

    const extraPhones = document.getElementById('extraPhones');
    if (extraPhones) {
        extraPhones.addEventListener('input', updateSummary);
    }
    
    const generatePdfBtn = document.getElementById('generatePdfBtn');
    if (generatePdfBtn) {
        generatePdfBtn.addEventListener('click', generatePDF);
    }
    
    // Actualización inicial
    updateSummary();
}

function updateSummary() {
    const summary = document.getElementById('serviceSummary');
    if (!summary) return;
    
    summary.innerHTML = '';
    let total = 0;

    // Base de datos
    if (document.getElementById('dbToggle')?.checked) {
        const level = document.getElementById('dbLevel').value;
        const price = prices.database[level];
        total += price;
        addServiceToSummary('Base de Datos', `${level.toLocaleString()} registros`, price);
    }

    // Chatbot
    if (document.getElementById('chatbotToggle')?.checked) {
        const level = document.getElementById('chatbotLevel').value;
        const price = prices.chatbot[level];
        total += price;
        addServiceToSummary('Chatbot', `${level.toLocaleString()} operaciones`, price);
    }

    // Voicebot
    if (document.getElementById('voicebotToggle')?.checked) {
        const level = document.getElementById('voicebotLevel').value;
        const price = prices.voicebot[level];
        total += price;
        addServiceToSummary('Voicebot', `${level.toLocaleString()} minutos`, price);
    }

    // Mail Composer
    if (document.getElementById('mailToggle')?.checked) {
        const level = document.getElementById('mailLevel').value;
        const price = prices.mailComposer[level];
        total += price;
        addServiceToSummary('Mail Composer', `${level.toLocaleString()} envíos`, price);
    }

    // Números telefónicos extra
    const extraPhones = parseInt(document.getElementById('extraPhones')?.value) || 0;
    if (extraPhones > 0) {
        const phonePrice = extraPhones * prices.phoneNumber;
        total += phonePrice;
        addServiceToSummary('Números Extra', `${extraPhones} números`, phonePrice);
    }

    // Actualizar total
    const totalElement = document.getElementById('totalPrice');
    if (totalElement) {
        totalElement.textContent = `$${total.toLocaleString()} MXN`;
    }
}

function addServiceToSummary(name, level, price) {
    const summary = document.getElementById('serviceSummary');
    if (!summary) return;
    
    summary.innerHTML += `
        <div class="service-item">
            <div>
                <div>${name}</div>
                <small class="text-white-50">${level}</small>
            </div>
            <div>$${price.toLocaleString()}</div>
        </div>
    `;
}

function generatePDF() {
    // Verificar si hay servicios seleccionados
    let hasServices = false;
    if (document.getElementById('dbToggle')?.checked ||
        document.getElementById('chatbotToggle')?.checked ||
        document.getElementById('voicebotToggle')?.checked ||
        document.getElementById('mailToggle')?.checked ||
        (parseInt(document.getElementById('extraPhones')?.value) || 0) > 0) {
        hasServices = true;
    }
    
    if (!hasServices) {
        alert('Por favor selecciona al menos un servicio para generar la cotización.');
        return;
    }
    
    // Mostrar modal si existe
    if (typeof showModal === 'function') {
        showModal();
    } else {
        // Generar PDF directamente
        generatePDFDirect();
    }
}

function generatePDFDirect() {
    const services = collectServices();
    
    if (services.length === 0) {
        alert('Por favor selecciona al menos un servicio para generar la cotización.');
        return;
    }
    
    // Crear formulario oculto
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'generate-pdf.php';
    form.style.display = 'none';
    
    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'services_json';
    input.value = JSON.stringify({ services: services });
    
    form.appendChild(input);
    document.body.appendChild(form);
    form.submit();
}

function collectServices() {
    const services = [];
    
    // Base de datos
    if (document.getElementById('dbToggle')?.checked) {
        const level = document.getElementById('dbLevel').value;
        const levelText = `${level.toLocaleString()} registros`;
        const price = prices.database[level];
        services.push({ name: 'Base de Datos', level: levelText, price: price });
    }
    
    // Chatbot
    if (document.getElementById('chatbotToggle')?.checked) {
        const level = document.getElementById('chatbotLevel').value;
        const levelText = `${level.toLocaleString()} operaciones`;
        const price = prices.chatbot[level];
        services.push({ name: 'Chatbot', level: levelText, price: price });
    }
    
    // Voicebot
    if (document.getElementById('voicebotToggle')?.checked) {
        const level = document.getElementById('voicebotLevel').value;
        const levelText = `${level.toLocaleString()} minutos`;
        const price = prices.voicebot[level];
        services.push({ name: 'Voicebot', level: levelText, price: price });
    }
    
    // Mail Composer
    if (document.getElementById('mailToggle')?.checked) {
        const level = document.getElementById('mailLevel').value;
        const levelText = `${level.toLocaleString()} envíos`;
        const price = prices.mailComposer[level];
        services.push({ name: 'Mail Composer', level: levelText, price: price });
    }
    
    // Números telefónicos extra
    const extraPhones = parseInt(document.getElementById('extraPhones')?.value) || 0;
    if (extraPhones > 0) {
        const levelText = `${extraPhones} números`;
        const price = extraPhones * prices.phoneNumber;
        services.push({ name: 'Números Extra', level: levelText, price: price });
    }
    
    return services;
}