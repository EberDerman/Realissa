<style>
/*-----------------------------navbar--------------------------------------*/

.custom-navbar {
    background-color: #6c757d; /* Gris oscuro */

}
nav{
font-size: large;
}
.navbar-nav {
    padding-right: 150px;
}

.custom-navbar .navbar-nav .nav-link {
    color: white; /* Color de texto blanco para contraste */
}

.nav-link:hover,
.nav-link:focus {
    color: black; /* Color de texto negro al pasar el mouse y cuando está en foco */
    text-decoration: none; /* Eliminar subrayado si es necesario */
    transform: translateY(-5px); /* Mueve el ícono 5px hacia arriba */
}

.dropdown-item:active {
    background-color: #505050; /* Color de fondo deseado cuando el ítem está activo */
    color: grey; /* Color de texto deseado cuando el ítem está activo */
}

.custom-navbar .dropdown-item {
    color: grey; /* Color de texto de los ítems del menú desplegable */
}

.custom-navbar .dropdown-item:hover {
    color: black; /* Color de texto negro al pasar el ratón sobre los ítems */
}

/* Ocultar el logo en modo responsive */
@media (max-width: 992px) {
    #logo {
        display: none;
    }
}

/* Mostrar el menú al pasar el mouse sobre el dropdown */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}
</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <img src="./img/logo realissa.png" alt="Menu" width="30" height="30">
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <img id="logo" src="./img/logo realissa.png" alt="logo" width="120" height="100" style="margin-left: 50px;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="quienesSomos" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">QUIENES SOMOS</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="mision">MISION</a></li>
                            <li><a class="dropdown-item" href="queHacemos">QUE HACEMOS?</a></li>
                            <li><a class="dropdown-item" href="aspectosPositivos">ASPECTOS POSITIVOS</a></li>
                            <li><a class="dropdown-item" href="trabajoEnEquipo">TRABAJO EN EQUIPO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="servicios" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">SERVICIOS</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="crowfunding">CROWDFUNDING INMOBILIARIO</a></li>
                            <li><a class="dropdown-item" href="facilitamos">FACILITAMOS TU INVERSION</a></li>                            
                            <li><a class="dropdown-item" href="lotes">LOTES</a></li>
                            <li><a class="dropdown-item" href="realStateCapeCoral">REAL STATE: CAPE CORAL</a></li>
                            <li><a class="dropdown-item" href="realStateLehighAcres">REAL STATE: LEHIGH ACRES</a></li>
                            <li><a class="dropdown-item" href="diferenciales">DIFERENCIALES</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nuestrosDisenos">NUESTROS DISEÑOS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">+</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          
                            <li><a class="dropdown-item" href="potenciamos">POTENCIAMOS TU TRABAJO</a></li>
                            <li><a class="dropdown-item" href="inversiones">INVERSIONES</a></li>
                           
                            <li><a class="dropdown-item" href="terminos">TERMINOS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
// Script para controlar el comportamiento del navbar en modo responsive
document.addEventListener('DOMContentLoaded', function () {
    var navLinks = document.querySelectorAll('.nav-link:not(.dropdown-toggle), .dropdown-item'); // Enlaces que no son dropdown y los ítems del dropdown
    var dropdownLinks = document.querySelectorAll('.dropdown-toggle'); // Enlaces que son dropdown
    var navbarCollapse = document.getElementById('navbarTogglerDemo03');

    // Ocultar el menú en modo responsive al hacer clic en un enlace que no es un dropdown
    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            if (window.innerWidth < 992) {
                var collapse = new bootstrap.Collapse(navbarCollapse, {
                    toggle: true
                });
                collapse.hide();
            }
        });
    });

    // Mostrar/ocultar el menú dropdown en modo responsive
    dropdownLinks.forEach(function (dropdown) {
        dropdown.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (window.innerWidth < 992) {
                var isOpen = dropdown.nextElementSibling.classList.contains('show');
                if (!isOpen) {
                    var bsDropdown = new bootstrap.Dropdown(dropdown);
                    bsDropdown.show();
                } else {
                    var bsDropdown = new bootstrap.Dropdown(dropdown);
                    bsDropdown.hide();
                }
            }
        });
    });
});
</script>
