
document.addEventListener('DOMContentLoaded', function () {
    const qrType = document.getElementById('qrType');
    const dynamicFields = document.getElementById('dynamicFields');
    const generateBtn = document.getElementById('generateBtn');
    const downloadBtn = document.getElementById('downloadBtn');
    let qrcode;

    const typeFields = {
        url: `
            <div class="mb-3">
                <label class="form-label">URL</label>
                <input type="url" class="form-control" id="urlInput" placeholder="https://">
            </div>
        `,
        text: `
            <div class="mb-3">
                <label class="form-label">Texto</label>
                <textarea class="form-control" id="textInput" rows="3"></textarea>
            </div>
        `,
        email: `
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput">
            </div>
            <div class="mb-3">
                <label class="form-label">Asunto (opcional)</label>
                <input type="text" class="form-control" id="subjectInput">
            </div>
        `,
        tel: `
            <div class="mb-3">
                <label class="form-label">Número de teléfono</label>
                <input type="tel" class="form-control" id="telInput">
            </div>
        `,
        sms: `
            <div class="mb-3">
                <label class="form-label">Número de teléfono</label>
                <input type="tel" class="form-control" id="smsNumberInput">
            </div>
            <div class="mb-3">
                <label class="form-label">Mensaje</label>
                <textarea class="form-control" id="smsTextInput" rows="2"></textarea>
            </div>
        `,
        wifi: `
            <div class="mb-3">
                <label class="form-label">Nombre de red (SSID)</label>
                <input type="text" class="form-control" id="ssidInput">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="passwordInput">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo de seguridad</label>
                <select class="form-select" id="securityInput">
                    <option value="WPA">WPA/WPA2</option>
                    <option value="WEP">WEP</option>
                    <option value="nopass">Sin contraseña</option>
                </select>
            </div>
        `
    };

    qrType.addEventListener('change', () => {
        dynamicFields.innerHTML = typeFields[qrType.value];
    });

    dynamicFields.innerHTML = typeFields.url;

    generateBtn.addEventListener('click', () => {
        const type = qrType.value;
        let data = '';

        switch (type) {
            case 'url':
                data = document.getElementById('urlInput').value;
                break;
            case 'text':
                data = document.getElementById('textInput').value;
                break;
            case 'email':
                const email = document.getElementById('emailInput').value;
                const subject = document.getElementById('subjectInput').value;
                data = `mailto:${email}?subject=${encodeURIComponent(subject)}`;
                break;
            case 'tel':
                data = `tel:${document.getElementById('telInput').value}`;
                break;
            case 'sms':
                const number = document.getElementById('smsNumberInput').value;
                const text = document.getElementById('smsTextInput').value;
                data = `SMSTO:${number}:${text}`;
                break;
            case 'wifi':
                const ssid = document.getElementById('ssidInput').value;
                const password = document.getElementById('passwordInput').value;
                const security = document.getElementById('securityInput').value;
                data = `WIFI:T:${security};S:${ssid};P:${password};;`;
                break;
        }

        if (!data.trim()) {
            alert('Por favor completa los campos requeridos');
            return;
        }

        const qrContainer = document.getElementById('qrcode');
        qrContainer.innerHTML = '';

        const size = parseInt(document.getElementById('qrSize').value) || 200;
        const color = document.getElementById('qrColor').value;

        qrcode = new QRCode(qrContainer, {
            text: data,
            width: size,
            height: size,
            colorDark: color,
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });

        downloadBtn.classList.remove('hidden');
    });

    downloadBtn.addEventListener('click', () => {
        const canvas = document.querySelector('#qrcode canvas');
        if (canvas) {
            const url = canvas.toDataURL('image/png');
            const a = document.createElement('a');
            a.download = 'qr-code.png';
            a.href = url;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
    });
});
