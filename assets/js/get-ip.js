
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('infoContainer').style.display = 'block';
        loadGeoData();
    });

    function loadGeoData() {
        console.log('[GeoIP] Iniciando llamada a ipinfo.io/json ...');
        fetch('https://ipinfo.io/json')
            .then(response => {
                console.log('[GeoIP] Response status:', response.status);
                console.log('[GeoIP] Response headers:', [...response.headers.entries()]);
                return response.json();
            })
            .then(data => {
                console.log('[GeoIP] Datos recibidos:', JSON.stringify(data, null, 2));
                document.getElementById('ipAddress').textContent = data.ip;
                updateGeoUI(data);
            })
            .catch(error => {
                console.error('[GeoIP] ERROR en fetch:', error);
                setGeoUnavailable();
            });
    }

    function updateGeoUI(data) {
        console.log('[GeoUI] country:', data.country, '| city:', data.city, '| org:', data.org, '| loc:', data.loc);
        document.getElementById('country').textContent = data.country || 'No disponible';
        document.getElementById('city').textContent = data.city || 'No disponible';
        document.getElementById('isp').textContent = data.org || 'No disponible';

        if (data.loc) {
            const [lat, lng] = data.loc.split(',');
            console.log('[GeoUI] Mapa coords:', lat, lng);
            const mapUrl = `https://maps.google.com/maps?q=${lat},${lng}&z=13&output=embed`;
            document.getElementById('map').innerHTML = `<iframe src="${mapUrl}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`;
        } else {
            console.warn('[GeoUI] Sin coordenadas, no se carga el mapa');
            document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full text-gray-500"><p>No se pudo cargar el mapa</p></div>';
        }
    }

    function setGeoUnavailable() {
        console.warn('[GeoIP] Marcando todo como No disponible');
        document.getElementById('country').textContent = 'No disponible';
        document.getElementById('city').textContent = 'No disponible';
        document.getElementById('isp').textContent = 'No disponible';
        document.getElementById('map').innerHTML = '<div class="flex items-center justify-center h-full text-gray-500"><p>No se pudo cargar el mapa</p></div>';
    }

    function checkIP() {
        const loader = document.getElementById('loader');
        const infoContainer = document.getElementById('infoContainer');

        loader.style.display = 'block';
        infoContainer.style.display = 'none';

        setTimeout(() => {
            console.log('[checkIP] Llamando a ipinfo.io/json ...');
            fetch('https://ipinfo.io/json')
                .then(response => {
                    console.log('[checkIP] Response status:', response.status);
                    return response.json();
                })
                .then(data => {
                    console.log('[checkIP] Datos recibidos:', JSON.stringify(data, null, 2));
                    document.getElementById('ipAddress').textContent = data.ip;
                    document.getElementById('userAgent').textContent = navigator.userAgent;
                    document.getElementById('language').textContent = navigator.language || 'No disponible';
                    document.getElementById('referer').textContent = document.referrer || 'Acceso directo';

                    updateGeoUI(data);

                    loader.style.display = 'none';
                    infoContainer.style.display = 'block';
                })
                .catch(error => {
                    console.error('[checkIP] ERROR:', error);
                    loader.style.display = 'none';
                    infoContainer.style.display = 'block';
                    alert('Hubo un error al obtener la información de IP. Por favor, inténtalo de nuevo.');
                });
        }, 1000);
    }
