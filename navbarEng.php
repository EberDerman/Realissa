<style>
    /*-----------------------------navbar--------------------------------------*/
    .custom-navbar {
        background-color: #6c757d;
        /* Gris oscuro */
    }

    nav {
        font-size: large;
    }

    .navbar-nav {
        padding-right: 150px;
    }

    .custom-navbar .navbar-nav .nav-link {
        color: white;
        /* Color de texto blanco para contraste */
    }

    .nav-link:hover,
    .nav-link:focus {
        color: black;
        /* Color de texto negro al pasar el mouse y cuando está en foco */
        text-decoration: none;
        /* Eliminar subrayado si es necesario */
        transform: translateY(-5px);
        /* Mueve el ícono 5px hacia arriba */
    }

    .dropdown-item:active {
        background-color: #505050;
        /* Color de fondo deseado cuando el ítem está activo */
        color: grey;
        /* Color de texto deseado cuando el ítem está activo */
    }

    .custom-navbar .dropdown-item {
        color: grey;
        /* Color de texto de los ítems del menú desplegable */
    }

    .custom-navbar .dropdown-item:hover {
        color: black;
        /* Color de texto negro al pasar el ratón sobre los ítems */
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
        <div class="container-fluid"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"> <img src="./img/logo realissa.webp" alt="Menu" width="50" height="auto"> </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03"> <img id="logo" src="./img/logo realissa.webp" alt="logo" width="120" height="auto" style="margin-left: 50px;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link" href="inicioEng">HOME</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="quienesSomosEng" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ABOUT US</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="misionEng">MISSION</a></li>
                            <li><a class="dropdown-item" href="queHacemosEng">WHAT WE DO?</a></li>
                            <li><a class="dropdown-item" href="aspectosPositivosEng">POSITIVE ASPECTS</a></li>
                            <li><a class="dropdown-item" href="trabajoEnEquipoEng">TEAMWORK</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="serviciosEng" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">SERVICES</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="crowfundingEng">FINANCING</a></li>
                            <li><a class="dropdown-item" href="facilitamosEng">WE FACILITATE YOUR INVESTMENT</a></li>
                            <li><a class="dropdown-item" href="lotesEng">LOTS</a></li>
                            <li><a class="dropdown-item" href="realStateCapeCoralEng">REAL STATE: CAPE CORAL</a></li>
                            <li><a class="dropdown-item" href="realStateLehighAcresEng">REAL STATE: LEHIGH ACRES</a></li>
                            <li><a class="dropdown-item" href="diferencialesEng">DIFFERENTIALS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="nuestrosDisenosEng">OUR DESIGNS</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">MORE</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="potenciamosEng">WE ENHANCE YOUR WORK</a></li>
                            <li><a class="dropdown-item" href="inversionesEng">INVESTMENTS</a></li>
                            <li><a class="dropdown-item" href="terminosEng">TERMS</a></a></li>
                            <li><a class="dropdown-item" href="disclaimerEng">DISCLAIMER</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="indexEsp"><img src="img/españa.webp" alt="" class="img-fluid m-2" style="height: 20px;"></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="indexEng"><img src="img/usa.webp" alt="" class="img-fluid m-2" style="height: 20px;"></a> </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var navLinks = document.querySelectorAll('.nav-link, .dropdown-item');
        var dropdownLinks = document.querySelectorAll('.navbar-nav .dropdown-toggle');
        var navbarCollapse = document.getElementById('navbarTogglerDemo03');

        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                if (!link.classList.contains('dropdown-toggle') && window.innerWidth < 992) {
                    var collapse = new bootstrap.Collapse(navbarCollapse, { toggle: true });
                    collapse.hide();
                }
            });
        });

        dropdownLinks.forEach(function (dropdown) {
            dropdown.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                dropdownLinks.forEach(function (otherDropdown) {
                    if (otherDropdown !== dropdown && otherDropdown.classList.contains('show')) {
                        var parentMenu = otherDropdown.nextElementSibling;
                        parentMenu.classList.remove('show');
                    }
                });

                var parentMenu = dropdown.nextElementSibling;
                parentMenu.classList.toggle('show');
            });
        });

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
