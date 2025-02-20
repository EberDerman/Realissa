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

    function updateBodyClass(addClass) {
      const body = document.body;
  
      if (addClass) {
          body.classList.add('background-white');
          console.log('Clase background-white añadida:', body.classList);
      } else {
          body.classList.remove('background-white');
          console.log('Clase background-white eliminada:', body.classList);
      }
  }
  

  // Agregar eventos de clic a todos los enlaces de navegación
document.querySelectorAll('.navbar-nav a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Evitar el comportamiento por defecto del enlace
        
        const href = this.getAttribute('href');
        console.log(`Link clicked: ${href}`);

           // Verificar el valor del href y cargar el contenido adecuado
           switch (href) {
            case 'nuestrosDisenos':
                updateBodyClass(true); // Cambiar el fondo a blanco
                loadContent('php/nuestrosDisenos.php'); // Cargar el contenido para "Nuestros Diseños"
                break;
            case 'nuestrosDisenosEng':
                updateBodyClass(true); // Cambiar el fondo a blanco
                loadContent('php/nuestrosDisenosEng.php'); // Cargar el contenido para "Nuestros Diseños" en inglés
                break;
            case 'indexEsp':
                window.location.href = './indexEsp.php'; // Redirigir a indexEsp.php
                break;
            case 'indexEng':
                window.location.href = './indexEng.php'; // Redirigir a indexEng.php
                break;
            default:
                if (href && href !== '#') {
                    updateBodyClass(false); // Restaurar el fondo original
                    loadContent(`php/${href}.php`); // Cargar el contenido del archivo PHP correspondiente
                }
                break;
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
