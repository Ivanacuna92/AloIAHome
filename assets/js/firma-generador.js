
    document.addEventListener('DOMContentLoaded', function() {
        // Elementos del DOM
        const inputs = document.querySelectorAll('input');
        const previewContent = document.getElementById('previewContent');
        const btnBorrar = document.getElementById('btnBorrar');
        const btnCrear = document.getElementById('btnCrear');
        const btnCopiar = document.getElementById('btnCopiar');
        const colorTema = document.getElementById('colorTema');
        const colorTexto = document.getElementById('colorTexto');
        const colorEnlaces = document.getElementById('colorEnlaces');

        // Función para actualizar la vista previa
        function updatePreview() {
            const nombre = document.getElementById('nombre').value;
            const apellido = document.getElementById('apellido').value;
            const puesto = document.getElementById('puesto').value;
            const departamento = document.getElementById('departamento').value;
            const empresa = document.getElementById('empresa').value;
            const telOficina = document.getElementById('telOficina').value;
            const telMovil = document.getElementById('telMovil').value;
            const email = document.getElementById('email').value;
            const imgPerfil = document.getElementById('imgPerfil').value;
            const imgLogo = document.getElementById('imgLogo').value;
            const temaColor = colorTema.value;
            const textoColor = colorTexto.value;
            const enlacesColor = colorEnlaces.value;
            const linkedin = document.getElementById('linkedin').value;
            const twitter = document.getElementById('twitter').value;
            const instagram = document.getElementById('instagram').value;
            const facebook = document.getElementById('facebook').value;

            previewContent.innerHTML = `
                <table cellpadding="0" cellspacing="0" style="font-family: sans-serif; line-height: 1.4; color: ${textoColor};">
                    <tr>
                        <td style="vertical-align: top; padding-right: 15px;">
                            ${imgPerfil ? `<img src="${imgPerfil}" alt="Foto de perfil" style="width: 120px; height: 120px; border-radius: 8px; border: 3px solid ${temaColor};">` : ''}
                        </td>
                        <td style="vertical-align: top;">
                            <div style="font-size: 22px; font-weight: bold; color: ${temaColor}; margin-bottom: 5px;">
                                ${nombre} ${apellido}
                            </div>
                            ${puesto ? `
                                <div style="font-size: 16px; color: ${textoColor}; margin-bottom: 3px;">${puesto}</div>
                            ` : ''}
                            ${departamento ? `
                                <div style="font-size: 16px; color: ${textoColor}; margin-bottom: 3px;">${departamento}</div>
                            ` : ''}
                            ${empresa ? `
                                <div style="font-size: 16px; color: ${textoColor}; margin-bottom: 15px;">${empresa}</div>
                            ` : ''}
                            
                            <div style="border-top: 2px solid ${temaColor}; padding-top: 10px; margin: 10px 0;">
                                ${telOficina ? `
                                    <div style="margin: 5px 0;">
                                        <span style="color: ${temaColor}; font-weight: bold;">Tel:</span>
                                        <a href="tel:${telOficina}" style="color: ${enlacesColor}; text-decoration: none; margin-left: 10px;">${telOficina}</a>
                                    </div>
                                ` : ''}
                                ${telMovil ? `
                                    <div style="margin: 5px 0;">
                                        <span style="color: ${temaColor}; font-weight: bold;">Móvil:</span>
                                        <a href="tel:${telMovil}" style="color: ${enlacesColor}; text-decoration: none; margin-left: 10px;">${telMovil}</a>
                                    </div>
                                ` : ''}
                                ${email ? `
                                    <div style="margin: 5px 0;">
                                        <span style="color: ${temaColor}; font-weight: bold;">Email:</span>
                                        <a href="mailto:${email}" style="color: ${enlacesColor}; text-decoration: none; margin-left: 10px;">${email}</a>
                                    </div>
                                ` : ''}
                                ${(linkedin || twitter || instagram || facebook) ? `
                                <div style="margin-top: 10px;">
                                    ${linkedin ? `
                                        <a href="${linkedin}" style="color: ${enlacesColor}; text-decoration: none; margin-right: 15px;" target="_blank">
                                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5/icons/linkedin.svg" alt="LinkedIn" style="width: 20px; height: 20px; vertical-align: middle;">
                                        </a>
                                    ` : ''}
                                    ${twitter ? `
                                        <a href="${twitter}" style="color: ${enlacesColor}; text-decoration: none; margin-right: 15px;" target="_blank">
                                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5/icons/twitter.svg" alt="Twitter" style="width: 20px; height: 20px; vertical-align: middle;">
                                        </a>
                                    ` : ''}
                                    ${instagram ? `
                                        <a href="${instagram}" style="color: ${enlacesColor}; text-decoration: none; margin-right: 15px;" target="_blank">
                                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5/icons/instagram.svg" alt="Instagram" style="width: 20px; height: 20px; vertical-align: middle;">
                                        </a>
                                    ` : ''}
                                    ${facebook ? `
                                        <a href="${facebook}" style="color: ${enlacesColor}; text-decoration: none; margin-right: 15px;" target="_blank">
                                            <img src="https://cdn.jsdelivr.net/npm/simple-icons@v5/icons/facebook.svg" alt="Facebook" style="width: 20px; height: 20px; vertical-align: middle;">
                                        </a>
                                    ` : ''}
                                </div>
                            ` : ''}
                        </td>
                    </tr>
                    ${imgLogo ? `
                        <tr>
                            <td colspan="2" style="padding-top: 15px;">
                                <img src="${imgLogo}" alt="Logo empresa" style="max-width: 180px; height: auto;">
                            </td>
                        </tr>
                    ` : ''}
                </table>
            `;
        }

        // Event listeners
        inputs.forEach(input => {
            input.addEventListener('input', updatePreview);
        });

        btnBorrar.addEventListener('click', () => {
            document.getElementById('signatureForm').reset();
            colorTema.value = '#FD3244';
            colorTexto.value = '#000000';
            colorEnlaces.value = '#FD6144';
            updatePreview();
            btnCopiar.classList.add('hidden');
        });

        btnCrear.addEventListener('click', () => {
            if(document.getElementById('signatureForm').checkValidity()) {
                btnCopiar.classList.remove('hidden');
            } else {
                alert('Por favor completa los campos obligatorios');
            }
        });

        btnCopiar.addEventListener('click', () => {
            const range = document.createRange();
            range.selectNode(previewContent);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            
            btnCopiar.textContent = '¡Copiado!';
            setTimeout(() => {
                btnCopiar.textContent = 'Copiar firma';
            }, 2000);
        });
        
        // Inicializar la vista previa
        updatePreview();
    });
