<script>
    // Script para ocultar el menú en modo responsive al hacer clic en un enlace
    document.addEventListener('DOMContentLoaded', function () {
        var navLinks = document.querySelectorAll('.nav-link, .dropdown-item'); // Incluir todos los enlaces
        var dropdownLinks = document.querySelectorAll('.navbar-nav .dropdown-toggle'); // Enlaces de dropdown
        var navbarCollapse = document.getElementById('navbarTogglerDemo03');

        // Para enlaces normales que no son dropdowns, colapsa el menú al hacer clic
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                // Solo colapsa si es un enlace dentro de un dropdown o si es un enlace común
                if (!link.classList.contains('dropdown-toggle') && window.innerWidth < 992) {
                    var collapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: true
                    });
                    collapse.hide();
                }
            });
        });

        // Para los dropdowns, cierra otros dropdowns abiertos cuando se abre uno nuevo
        dropdownLinks.forEach(function (dropdown) {
            dropdown.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation(); // Evita que el evento cierre el menú

                // Cierra otros dropdowns abiertos
                dropdownLinks.forEach(function (otherDropdown) {
                    if (otherDropdown !== dropdown && otherDropdown.classList.contains('show')) {
                        var parentMenu = otherDropdown.nextElementSibling;
                        parentMenu.classList.remove('show');
                    }
                });

                // Alterna el dropdown actual
                var parentMenu = dropdown.nextElementSibling;
                parentMenu.classList.toggle('show');
            });
        });

        // Cierra dropdowns si se hace clic fuera
        document.addEventListener('click', function (event) {
            dropdownLinks.forEach(function (dropdown) {
                var parentMenu = dropdown.nextElementSibling;
                if (!dropdown.contains(event.target) && !parentMenu.contains(event.target)) {
                    parentMenu.classList.remove('show');
                }
            });
        });
    });
</script>
