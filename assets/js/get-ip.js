
    document.addEventListener('DOMContentLoaded', function() {
        // Mostrar la información inicial y cargar datos geográficos automáticamente
        document.getElementById('infoContainer').style.display = 'block';
        loadGeoData();
    });

    function loadGeoData() {
        // Obtener la IP que ya fue renderizada por PHP
        const currentIP = document.getElementById('ipAddress').textContent.trim();
        if (!currentIP || currentIP === 'Cargando...') return;

        // Llamar a ipinfo.io directamente desde el navegador (evita problemas de Docker)
        fetch(`https://ipinfo.io/${currentIP}/json`)
            .then(response => response.json())
            .then(data => {
                updateGeoUI(data);
            })
            .catch(() => {
                setGeoUnavailable();
            });
    }

    function updateGeoUI(data) {
        document.getElementById('country').textContent = data.country || 'No disponible';
        document.getElementById('city').textContent = data.city || 'No disponible';
        document.getElementById('isp').textContent = data.org || 'No disponible';

        if (data.loc) {
            const [lat, lng] = data.loc.split(',');
            const mapUrl = `https://maps.google.com/maps?q=${lat},${lng}&z=13&output=embed`;
            document.getElementById('map').innerHTML = `<iframe src="${mapUrl}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`;
        } else {
            document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full text-gray-500"><p>No se pudo cargar el mapa</p></div>';
        }
    }

    function setGeoUnavailable() {
        document.getElementById('country').textContent = 'No disponible';
        document.getElementById('city').textContent = 'No disponible';
        document.getElementById('isp').textContent = 'No disponible';
        document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full text-gray-500"><p>No se pudo cargar el mapa</p></div>';
    }

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

                    // Si el servidor trajo geo data, usarla; si no, llamar directo a ipinfo.io
                    if (data.country) {
                        document.getElementById('country').textContent = data.country;
                        document.getElementById('city').textContent = data.city || 'No disponible';
                        document.getElementById('isp').textContent = data.isp || 'No disponible';

                        if (data.latitude && data.longitude) {
                            const mapUrl = `https://maps.google.com/maps?q=${data.latitude},${data.longitude}&z=13&output=embed`;
                            document.getElementById('map').innerHTML = `<iframe src="${mapUrl}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`;
                        }
                    } else {
                        // Fallback: llamar ipinfo.io desde el navegador
                        fetch(`https://ipinfo.io/${data.ip}/json`)
                            .then(r => r.json())
                            .then(geo => updateGeoUI(geo))
                            .catch(() => setGeoUnavailable());
                    }

                    // Ocultar loader y mostrar info
                    loader.style.display = 'none';
                    infoContainer.style.display = 'block';
                })
                .catch(error => {
                    console.error('Error:', error);
                    loader.style.display = 'none';
                    infoContainer.style.display = 'block';
                    alert('Hubo un error al obtener la información de IP. Por favor, inténtalo de nuevo.');
                });
        }, 1000);
    }
