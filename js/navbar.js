document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.nav-item.dropdown');
    var navbarToggler = document.querySelector('.navbar-toggler');
    var collapse = document.querySelector('.collapse');

    dropdowns.forEach(function (dropdown) {
        var dropdownMenu = dropdown.querySelector('.dropdown-menu');

        dropdown.addEventListener('mouseover', function () {
            if (dropdownMenu) {
                dropdownMenu.classList.add('show');
            }
        });

        dropdown.addEventListener('mouseout', function () {
            if (dropdownMenu) {
                dropdownMenu.classList.remove('show');
            }
        });
    });

    navbarToggler.addEventListener('mouseover', function () {
        if (collapse) {
            collapse.classList.add('show');
        }
    });

    navbarToggler.addEventListener('mouseout', function () {
        // No hacer nada aquí para evitar que el menú se oculte prematuramente
    });

    // Añadir eventos al collapse para mostrar/ocultar dropdowns
    collapse.addEventListener('mouseover', function () {
        if (collapse) {
            collapse.classList.add('show');
        }
    });

    collapse.addEventListener('mouseout', function () {
        if (collapse) {
            collapse.classList.remove('show');
        }
    });

    // Ocultar el menú al hacer clic en un enlace
    collapse.addEventListener('click', function (event) {
        if (event.target.classList.contains('nav-link')) {
            collapse.classList.remove('show');
        }
    });
});
