document.addEventListener("DOMContentLoaded", function () {
  const mainContent = document.querySelector("main"); // Obtén el elemento <main>
  const body = document.body;

  // Función para cargar el contenido del archivo PHP
  function loadContent(url, cssLinks = []) {
    mainContent.innerHTML = ""; // Limpiar el contenido de <main> antes de cargar el nuevo contenido
    fetch(url)
      .then((response) => response.text())
      .then((data) => {
        mainContent.innerHTML = data;
        loadCSS(cssLinks); // Cargar los estilos después de insertar el contenido
      })
      .catch((error) => {
        console.error("Error loading content:", error);
        mainContent.innerHTML =
          "<p>Error loading content. Please try again later.</p>";
      });
  }

  // Función para cambiar el fondo del body
  function updateBodyClass(addClass) {
    if (addClass) {
      body.classList.add("background-white");
      console.log("Background set to white");
    } else {
      body.classList.remove("background-white");
      console.log("Background reverted");
    }
  }

  // Función para cargar archivos CSS dinámicamente
  function loadCSS(cssLinks) {
    const head = document.querySelector("head");
    cssLinks.forEach((link) => {
      if (!document.querySelector(`link[href="${link}"]`)) {
        // Verificar si el CSS ya está cargado
        const linkElement = document.createElement("link");
        linkElement.rel = "stylesheet";
        linkElement.href = link;
        head.appendChild(linkElement); // Añadir el link de CSS al <head>
      }
    });
  }

  // Agregar eventos de clic a todos los enlaces de navegación
  document.querySelectorAll(".navbar-nav a").forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault(); // Evitar el comportamiento por defecto del enlace

      const href = this.getAttribute("href");
      console.log(`Link clicked: ${href}`);

      // Definir una función auxiliar para obtener el nombre base del archivo (sin el 'Eng')
      const getBaseName = (href) =>
        href.endsWith("Eng") ? href.slice(0, -3) : href;

      // Verificar el valor del href y cargar el contenido adecuado
      switch (href) {
        case "nuestrosDisenos":
        case "nuestrosDisenosEng":
          updateBodyClass(true); // Cambiar el fondo a blanco
          loadContent(`php/${href}.php`, ["css/nuestrosDisenos.css"]); // Cargar contenido y estilos para "Nuestros Diseños" en ambos idiomas
          break;
        case "indexEsp":
          window.location.href = "./indexEsp.php"; // Redirigir a indexEsp.php
          break;
        case "indexEng":
          window.location.href = "./indexEng.php"; // Redirigir a indexEng.php
          break;
        default:
          if (href && href !== "#") {
            updateBodyClass(false); // Restaurar el fondo original

            // Obtener el nombre base del archivo (sin el 'Eng')
            const baseHref = getBaseName(href);

            // Cargar el archivo PHP y su correspondiente CSS
            loadContent(`php/${href}.php`, [`css/${baseHref}.min.css`]);
          }
          break;
      }
    });
  });

  // Restaurar el color de fondo cuando el dropdown de servicios se despliega
  document.querySelectorAll(".dropdown-menu").forEach((menu) => {
    menu.addEventListener("click", function () {
      updateBodyClass(false); // Restaurar el fondo cuando se interactúa con el dropdown
    });
  });
});
