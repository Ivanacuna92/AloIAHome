
    document.addEventListener('DOMContentLoaded', function() {
        // Mostrar la información inicial
        document.getElementById('infoContainer').style.display = 'block';
    });

    function checkIP() {
        const loader = document.getElementById('loader');
        const infoContainer = document.getElementById('infoContainer');
        
        // Mostrar loader y ocultar info
        loader.style.display = 'block';
        infoContainer.style.display = 'none';

        // Realizar la solicitud AJAX
        setTimeout(() => {
            fetch(IP_INFO_URL)
                .then(response => response.json())
                .then(data => {
                    // Actualizar la información básica
                    document.getElementById('ipAddress').textContent = data.ip;
                    document.getElementById('userAgent').textContent = data.userAgent;
                    document.getElementById('language').textContent = data.language;
                    document.getElementById('referer').textContent = data.referer;
                    
                    // Actualizar la información geográfica
                    document.getElementById('country').textContent = data.country || 'No disponible';
                    document.getElementById('city').textContent = data.city || 'No disponible';
                    document.getElementById('isp').textContent = data.isp || 'No disponible';
                    
                    // Actualizar el mapa si hay coordenadas
                    if (data.latitude && data.longitude) {
                        const mapUrl = `https://maps.google.com/maps?q=${data.latitude},${data.longitude}&z=13&output=embed`;
                        document.getElementById('map').innerHTML = `<iframe src="${mapUrl}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`;
                    } else {
                        document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full text-gray-500"><p>No se pudo cargar el mapa</p></div>';
                    }

                    // Ocultar loader y mostrar info con animación
                    loader.style.display = 'none';
                    infoContainer.style.display = 'block';
                })
                .catch(error => {
                    console.error('Error:', error);
                    loader.style.display = 'none';
                    infoContainer.style.display = 'block';
                    alert('Hubo un error al obtener la información de IP. Por favor, inténtalo de nuevo.');
                });
        }, 1000); // Delay para mostrar el loader
    }

