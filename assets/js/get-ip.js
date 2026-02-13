
    document.addEventListener('DOMContentLoaded', function() {
        // Mostrar la información inicial y cargar datos geográficos automáticamente
        document.getElementById('infoContainer').style.display = 'block';
        loadGeoData();
    });

    function loadGeoData() {
        // Llamar a ipinfo.io SIN IP — él auto-detecta la IP del visitante
        // Funciona perfecto con IPv4 e IPv6
        fetch('https://ipinfo.io/json')
            .then(response => response.json())
            .then(data => {
                // Actualizar la IP mostrada con la que detectó ipinfo.io
                document.getElementById('ipAddress').textContent = data.ip;
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

        setTimeout(() => {
            // Llamar directo a ipinfo.io sin IP — auto-detecta IPv4/IPv6
            fetch('https://ipinfo.io/json')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('ipAddress').textContent = data.ip;
                    document.getElementById('userAgent').textContent = navigator.userAgent;
                    document.getElementById('language').textContent = navigator.language || 'No disponible';
                    document.getElementById('referer').textContent = document.referrer || 'Acceso directo';

                    updateGeoUI(data);

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
