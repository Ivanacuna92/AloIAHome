
document.addEventListener('DOMContentLoaded', function () {

    // Funcionalidad del generador de WhatsApp
    const phoneInput = document.getElementById('phone');
    const messageInput = document.getElementById('message');
    const generateBtn = document.getElementById('generateBtn');
    const generatedLink = document.getElementById('generatedLink');
    const copyBtn = document.getElementById('copyBtn');
    const previewChat = document.getElementById('previewChat');
    const previewNumber = document.getElementById('previewNumber');
    const countryCode = document.getElementById('countryCode');

    // Actualizar preview en tiempo real
    function updatePreview() {
        const phoneNumber = phoneInput.value;
        const country = countryCode.value;

        // Actualizar número en preview
        previewNumber.textContent = `${country}${phoneNumber}`;

        // Actualizar mensaje en preview
        const message = messageInput.value;
        if (message) {
            previewChat.innerHTML = `
                    <div class="message-bubble">
                        ${message}
                        <div class="text-right mt-1">
                            <span class="text-xs text-gray-500">✓✓</span>
                        </div>
                    </div>
                `;
        } else {
            previewChat.innerHTML = '';
        }
    }

    // Event listeners para actualización en tiempo real
    phoneInput.addEventListener('input', updatePreview);
    messageInput.addEventListener('input', updatePreview);
    countryCode.addEventListener('change', updatePreview);

    // Generar enlace
    generateBtn.addEventListener('click', function () {
        const phone = countryCode.value + phoneInput.value.replace(/\D/g, '');
        const message = encodeURIComponent(messageInput.value);
        const link = `https://api.whatsapp.com/send?phone=${phone}&text=${message}`;
        generatedLink.value = link;

        // Efecto visual de confirmación
        this.innerHTML = '¡Enlace actualizado!';
        setTimeout(() => {
            this.innerHTML = 'Actualizar enlace';
        }, 2000);
    });

    // Copiar enlace
    copyBtn.addEventListener('click', function () {
        generatedLink.select();
        document.execCommand('copy');

        // Feedback visual
        this.textContent = '¡Copiado!';
        setTimeout(() => {
            this.textContent = 'Copiar enlace';
        }, 2000);
    });

    // Inicializar preview
    updatePreview();
});

