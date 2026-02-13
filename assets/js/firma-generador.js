
    document.addEventListener('DOMContentLoaded', function() {
        // Elementos del DOM
        const inputs = document.querySelectorAll('input');
        const previewContent = document.getElementById('previewContent');
        const btnBorrar = document.getElementById('btnBorrar');
        const btnCopiar = document.getElementById('btnCopiar');
        const btnDescargar = document.getElementById('btnDescargar');
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
                        <td style="vertical-align: middle; text-align: center; padding: 15px 20px; width: 160px;">
                            ${imgPerfil ? `<img src="${imgPerfil}" alt="Foto de perfil" style="width: 120px; height: 120px; border-radius: 8px;  object-fit: cover;">` : ''}
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
                        <td style="vertical-align: middle; text-align: center; padding: 15px 20px; width: 160px;">
                            ${imgLogo ? `<img src="${imgLogo}" alt="Logo empresa" style="max-width: 120px; height: auto; border-radius: 8px; ">` : ''}
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
                                <div style="margin-top: 10px; display: flex; align-items: center; gap: 10px;">
                                    ${linkedin ? `<a href="${linkedin}" style="text-decoration: none;" target="_blank"><img src="https://cdn-icons-png.flaticon.com/24/3536/3536505.png" alt="LinkedIn" width="20" height="20" style="width: 20px; height: 20px;"></a>` : ''}
                                    ${twitter ? `<a href="${twitter}" style="text-decoration: none;" target="_blank"><img src="https://cdn-icons-png.flaticon.com/24/5968/5968958.png" alt="Twitter / X" width="20" height="20" style="width: 20px; height: 20px;"></a>` : ''}
                                    ${instagram ? `<a href="${instagram}" style="text-decoration: none;" target="_blank"><img src="https://cdn-icons-png.flaticon.com/24/2111/2111463.png" alt="Instagram" width="20" height="20" style="width: 20px; height: 20px;"></a>` : ''}
                                    ${facebook ? `<a href="${facebook}" style="text-decoration: none;" target="_blank"><img src="https://cdn-icons-png.flaticon.com/24/5968/5968764.png" alt="Facebook" width="20" height="20" style="width: 20px; height: 20px;"></a>` : ''}
                                </div>
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
                await navigator.clipboard.writeText(previewContent.innerHTML);
                btnCopiar.textContent = '¡Codigo copiado!';
            } catch (e) {
                // Fallback
                const ta = document.createElement('textarea');
                ta.value = previewContent.innerHTML;
                document.body.appendChild(ta);
                ta.select();
                document.execCommand('copy');
                document.body.removeChild(ta);
                btnCopiar.textContent = '¡Codigo copiado!';
            }
            setTimeout(() => {
                btnCopiar.textContent = 'Copiar codigo HTML';
            }, 2000);
        });

        btnDescargar.addEventListener('click', () => {
            if(!document.getElementById('signatureForm').checkValidity()) {
                alert('Por favor completa los campos obligatorios');
                return;
            }
            const html = `<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>${previewContent.innerHTML}</body></html>`;
            const blob = new Blob([html], { type: 'text/html' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'firma-email.html';
            a.click();
            URL.revokeObjectURL(url);
        });

        // Inicializar la vista previa
        updatePreview();
    });
