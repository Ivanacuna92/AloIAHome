
    document.addEventListener('DOMContentLoaded', function () {
        // Elementos del DOM
        const searchInput = document.getElementById('searchTools');
        const categoryTabs = document.querySelectorAll('.category-tab');
        const toolCards = document.querySelectorAll('.tool-card');
        const noResults = document.getElementById('noResults');

        // Función para filtrar herramientas
        function filterTools() {
            const searchTerm = searchInput.value.toLowerCase();
            const activeCategory = document.querySelector('.category-tab.active').dataset.category;

            let visibleCount = 0;

            toolCards.forEach(card => {
                const toolName = card.querySelector('h3').textContent.toLowerCase();
                const toolDescription = card.querySelector('p').textContent.toLowerCase();
                const toolCategory = card.dataset.category;

                const matchesSearch = toolName.includes(searchTerm) || toolDescription.includes(searchTerm);
                const matchesCategory = activeCategory === 'all' || toolCategory === activeCategory;

                if (matchesSearch && matchesCategory) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Mostrar mensaje de no resultados si es necesario
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }

        // Event listeners
        searchInput.addEventListener('input', filterTools);

        categoryTabs.forEach(tab => {
            tab.addEventListener('click', function () {
                // Cambiar la clase activa
                categoryTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                // Filtrar herramientas
                filterTools();
            });
        });

        // Inicializar
        filterTools();
    });
