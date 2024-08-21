document.addEventListener('DOMContentLoaded', function() {
    const mainContent = document.querySelector('main'); // Obtén el elemento <main>
    const body = document.body;

    // Función para cargar el contenido del archivo PHP
    function loadContent(url) {
        mainContent.innerHTML = ''; // Limpiar el contenido de <main> antes de cargar el nuevo contenido
        fetch(url)
            .then(response => response.text())
            .then(data => {
                mainContent.innerHTML = data;
            })
            .catch(error => {
                console.error('Error loading content:', error);
                mainContent.innerHTML = '<p>Error loading content. Please try again later.</p>';
            });
    }

    // Función para cambiar el fondo del body
    function updateBodyClass(addClass) {
        if (addClass) {
            body.classList.add('background-white');
            console.log('Background set to white');
        } else {
            body.classList.remove('background-white');
            console.log('Background reverted');
        }
    }

    // Agregar eventos de clic a todos los enlaces de navegación
    document.querySelectorAll('.navbar-nav a').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            console.log(`Link clicked: ${href}`);

            // Si el enlace es "Nuestros Diseños"
            if (href === 'nuestrosDisenos') {
                e.preventDefault(); // Evitar el comportamiento por defecto del enlace
                updateBodyClass(true); // Cambiar el fondo a blanco
                loadContent('php/nuestrosDisenos.php'); // Cargar el contenido para "Nuestros Diseños"
            } else if (href && href !== '#') {
                e.preventDefault(); // Evitar el comportamiento por defecto del enlace
                updateBodyClass(false); // Restaurar el fondo original
                loadContent(`php/${href}.php`); // Cargar el contenido del archivo PHP correspondiente
            }
        });
    });

    // Restaurar el color de fondo cuando el dropdown de servicios se despliega
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.addEventListener('click', function() {
            updateBodyClass(false); // Restaurar el fondo cuando se interactúa con el dropdown
        });
    });
});
