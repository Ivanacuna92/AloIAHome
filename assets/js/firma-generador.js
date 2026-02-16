
    document.addEventListener('DOMContentLoaded', function() {
        // Elementos del DOM
        const inputs = document.querySelectorAll('input');
        const previewContent = document.getElementById('previewContent');
        const btnBorrar = document.getElementById('btnBorrar');
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
                <!-- Card 1: Identidad personal -->
                <table cellpadding="0" cellspacing="0" style="font-family: sans-serif; line-height: 1.4; color: ${textoColor}; width: 100%;">
                    <tr>
                        <td style="vertical-align: middle; text-align: center; padding: 15px 20px; width: 160px; max-width: 160px; overflow: hidden;">
                            ${imgPerfil ? `<img src="${imgPerfil}" alt="Foto de perfil" width="120" height="100" style="width: 120px; height: 100px; border-radius: 8px; object-fit: cover; display: block; margin: 0 auto;">` : ''}
                        </td>
                        <td style="vertical-align: middle; border-left: 2px solid ${temaColor}; padding: 15px 20px;">
                            <div style="font-size: 22px; font-weight: bold; color: ${temaColor}; margin-bottom: 4px;">
                                ${nombre} ${apellido}
                            </div>
                            ${puesto ? `<div style="font-size: 14px; color: ${textoColor}; margin-bottom: 2px;">${puesto}</div>` : ''}
                            ${departamento ? `<div style="font-size: 14px; color: ${textoColor}; margin-bottom: 2px;">${departamento}</div>` : ''}
                            ${empresa ? `<div style="font-size: 14px; font-weight: 600; color: ${temaColor};">${empresa}</div>` : ''}
                        </td>
                    </tr>
                </table>

                <!-- Card 2: Contacto y empresa -->
                ${(imgLogo || telOficina || telMovil || email || linkedin || twitter || instagram || facebook) ? `
                <table cellpadding="0" cellspacing="0" style="font-family: sans-serif; line-height: 1.4; color: ${textoColor}; width: 100%; margin-top: 10px;">
                    <tr>
                        <td style="vertical-align: middle; text-align: center; padding: 15px 20px; width: 160px; max-width: 160px; overflow: hidden;">
                            ${imgLogo ? `<img src="${imgLogo}" alt="Logo empresa" width="120" height="100" style="width: 120px; height: 100px; border-radius: 8px; object-fit: contain; display: block; margin: 0 auto;">` : ''}
                        </td>
                        <td style="vertical-align: middle; border-left: 2px solid ${temaColor}; padding: 15px 20px;">
                            ${telOficina ? `
                                <div style="margin: 4px 0;">
                                    <span style="color: ${temaColor}; font-weight: bold;">Tel:</span>
                                    <a href="tel:${telOficina}" style="color: ${enlacesColor}; text-decoration: none; margin-left: 8px;">${telOficina}</a>
                                </div>
                            ` : ''}
                            ${telMovil ? `
                                <div style="margin: 4px 0;">
                                    <span style="color: ${temaColor}; font-weight: bold;">Movil:</span>
                                    <a href="tel:${telMovil}" style="color: ${enlacesColor}; text-decoration: none; margin-left: 8px;">${telMovil}</a>
                                </div>
                            ` : ''}
                            ${email ? `
                                <div style="margin: 4px 0;">
                                    <span style="color: ${temaColor}; font-weight: bold;">Email:</span>
                                    <a href="mailto:${email}" style="color: ${enlacesColor}; text-decoration: none; margin-left: 8px;">${email}</a>
                                </div>
                            ` : ''}
                            ${(linkedin || twitter || instagram || facebook) ? `
                                <table cellpadding="0" cellspacing="0" style="margin-top: 10px;"><tr>
                                    ${linkedin ? `<td style="padding-right: 8px;"><a href="${linkedin}" style="text-decoration: none;" target="_blank"><img src="https://cdn-icons-png.flaticon.com/24/3536/3536505.png" alt="LinkedIn" width="20" height="20" style="width: 20px; height: 20px; display: block;"></a></td>` : ''}
                                    ${twitter ? `<td style="padding-right: 8px;"><a href="${twitter}" style="text-decoration: none;" target="_blank"><img src="https://cdn-icons-png.flaticon.com/24/5968/5968958.png" alt="Twitter / X" width="20" height="20" style="width: 20px; height: 20px; display: block;"></a></td>` : ''}
                                    ${instagram ? `<td style="padding-right: 8px;"><a href="${instagram}" style="text-decoration: none;" target="_blank"><img src="https://cdn-icons-png.flaticon.com/24/2111/2111463.png" alt="Instagram" width="20" height="20" style="width: 20px; height: 20px; display: block;"></a></td>` : ''}
                                    ${facebook ? `<td><a href="${facebook}" style="text-decoration: none;" target="_blank"><img src="https://cdn-icons-png.flaticon.com/24/5968/5968764.png" alt="Facebook" width="20" height="20" style="width: 20px; height: 20px; display: block;"></a></td>` : ''}
                                </tr></table>
                            ` : ''}
                        </td>
                    </tr>
                </table>
                ` : ''}
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
        });

        btnCopiar.addEventListener('click', async () => {
            if(!document.getElementById('signatureForm').checkValidity()) {
                alert('Por favor completa los campos obligatorios');
                return;
            }
            try {
                // Copiar como HTML rico para que Gmail lo acepte al pegar en firma
                const htmlContent = previewContent.innerHTML;
                const blob = new Blob([htmlContent], { type: 'text/html' });
                const clipboardItem = new ClipboardItem({ 'text/html': blob });
                await navigator.clipboard.write([clipboardItem]);
                btnCopiar.textContent = '¡Firma copiada! Pégala en tu correo';
            } catch (e) {
                // Fallback: seleccionar el contenido visual y copiar
                const range = document.createRange();
                range.selectNodeContents(previewContent);
                const selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(range);
                document.execCommand('copy');
                selection.removeAllRanges();
                btnCopiar.textContent = '¡Firma copiada! Pégala en tu correo';
            }
            setTimeout(() => {
                btnCopiar.textContent = 'Copiar firma';
            }, 2000);
        });


        // Inicializar la vista previa
        updatePreview();
    });
