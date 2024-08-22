<style>
/*-----------------------------navbar--------------------------------------*/

.custom-navbar {
    background-color: #6c757d; /* Gris oscuro */
}

.custom-navbar .navbar-nav .nav-link {
    color: white; /* Color de texto blanco para contraste */
}

.nav-link:hover, .nav-link:focus {
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

    .collapse {
        display: none;
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover + .collapse,
    .collapse:hover {
        display: block;
    }

    .collapse .nav-item.dropdown:hover .dropdown-menu {
        display: block; /* Mostrar el dropdown al pasar el mouse sobre el dropdown */
    }
}

/* Asegúrate de que los menús se ocultan por defecto */
.dropdown-menu {
    display: none;
}

/* Mostrar el menú al pasar el mouse sobre el dropdown */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}

.collapse.show {
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
                <li class="nav-item dropdown">
                    <a class="nav-link" href="inicio">INICIO</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="quienesSomos">QUIENES SOMOS</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="mision">MISION</a></li>
                        <li><a class="dropdown-item" href="queHacemos">QUE HACEMOS?</a></li>
                        <li><a class="dropdown-item" href="aspectosPositivos">ASPECTOS POSITIVOS</a></li>
                        <li><a class="dropdown-item" href="trabajoEnEquipo">TRABAJO EN EQUIPO</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="servicios">SERVICIOS</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="crowfunding">CROWDFUNDING INMOBILIARIO</a></li>
                        <li><a class="dropdown-item" href="facilitamos">FACILITAMOS TU INVERSION</a></li>
                        <li><a class="dropdown-item" href="mercadoIdeal">MERCADO IDEAL</a></li>
                        <li><a class="dropdown-item" href="buenasEstrategias">BUENAS ESTRATEGIAS</a></li>
                        <li><a class="dropdown-item" href="lotes">LOTES</a></li>
                        <li><a class="dropdown-item" href="realState">REAL STATE</a></li>
                        <li><a class="dropdown-item" href="diferenciales">DIFERENCIALES</a></li>
                        <li><a class="dropdown-item" href="disclaimer">DISCLAIMER</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="nuestrosDisenos">NUESTROS DISEÑOS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var navbarToggler = document.querySelector('.navbar-toggler');
    var collapse = document.querySelector('.collapse');

    navbarToggler.addEventListener('mouseover', function () {
        collapse.classList.add('show');
    });

    collapse.addEventListener('mouseleave', function (event) {
        if (!collapse.contains(event.relatedTarget)) {
            collapse.classList.remove('show');
        }
    });

    collapse.addEventListener('mouseover', function () {
        collapse.classList.add('show');
    });

    collapse.addEventListener('click', function (event) {
        if (event.target.classList.contains('nav-link')) {
            collapse.classList.remove('show');
        }
    });
});
</script>


