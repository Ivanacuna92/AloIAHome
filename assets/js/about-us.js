
    // Verificar si Font Awesome ya está cargado
    if (!document.querySelector('link[href*="font-awesome"]')) {
        // Si no está cargado, añadirlo dinámicamente
        const fontAwesome = document.createElement('link');
        fontAwesome.rel = 'stylesheet';
        fontAwesome.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css';
        document.head.appendChild(fontAwesome);
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Eliminar la sección de estadísticas separada ya que ahora está integrada en el hero
        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            statsSection.remove();
        }
    });

