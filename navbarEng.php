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
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <img src="./img/logo realissa.png" alt="Menu" width="30" height="30">
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <img id="logo" src="./img/logo realissa.png" alt="logo" width="120" height="100" style="margin-left: 50px;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="inicioEng">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="quienesSomosEng" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">ABOUT US</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="misionEng">MISSION</a></li>
                            <li><a class="dropdown-item" href="queHacemosEng">WHAT WE DO?</a></li>
                            <li><a class="dropdown-item" href="aspectosPositivosEng">POSITIVE ASPECTS</a></li>
                            <li><a class="dropdown-item" href="trabajoEnEquipoEng">TEAMWORK</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="serviciosEng" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">SERVICES</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="crowfundingEng">REAL ESTATE CROWDFUNDING</a></li>
                            <li><a class="dropdown-item" href="facilitamosEng">WE FACILITATE YOUR INVESTMENT</a></li>
                            <li><a class="dropdown-item" href="lotesEng">LOTS</a></li>
                            <li><a class="dropdown-item" href="realStateCapeCoralEng">REAL STATE: CAPE CORAL</a></li>
                            <li><a class="dropdown-item" href="realStateLehighAcresEng">REAL STATE: LEHIGH ACRES</a></li>
                            <li><a class="dropdown-item" href="diferencialesEng">DIFFERENTIATORS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nuestrosDisenosEng">OUR DESIGNS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">MORE</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="potenciamosEng">WE ENHANCE YOUR WORK</a></li>
                            <li><a class="dropdown-item" href="inversionesEng">INVESTMENTS</a></li>
                            <li><a class="dropdown-item" href="terminosEng">TERMS</a></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indexEsp"><img src="img/españa.png" alt="" class="img-fluid m-2" style="height: 20px;"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="indexEng"><img src="img/usa.png" alt="" class="img-fluid m-2" style="height: 20px;"></a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
</header>


<script>
    // Script para ocultar el menú en modo responsive al hacer clic en un enlace
    document.addEventListener('DOMContentLoaded', function() {
        var navLinks = document.querySelectorAll('.nav-link, .dropdown-item'); // Incluir todos los enlaces
        var navbarCollapse = document.getElementById('navbarTogglerDemo03');

        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    var collapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: true
                    });
                    collapse.hide();
                }
            });
        });
    });
</script>