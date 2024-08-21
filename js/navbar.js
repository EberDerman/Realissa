document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.nav-item.dropdown');

    dropdowns.forEach(function (dropdown) {
        var dropdownMenu = dropdown.querySelector('.dropdown-menu');

        dropdown.addEventListener('mouseover', function () {
            closeAllDropdowns(); // Cierra todos los dropdowns antes de abrir el nuevo

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

    function closeAllDropdowns() {
        dropdowns.forEach(function (dropdown) {
            var dropdownMenu = dropdown.querySelector('.dropdown-menu');
            if (dropdownMenu) {
                dropdownMenu.classList.remove('show');
            }
        });
    }
});
