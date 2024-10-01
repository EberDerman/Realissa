<style>
    /*-----------------------------nuestros diseños---------------------------------*/
    /* Estilos generales */
    .nuestrosDisenos {
        margin: 0 auto;
        padding-top: 20px;
        width: 100%;
        /* Asegúrate de que ocupe todo el ancho disponible */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: grey;
        border-radius: 6px;
    }

    .carousel-item {
        text-align: center;
        /* Esto asegura que todo dentro del carrusel esté centrado horizontalmente */
    }

    .imagen {
        width: 70%;
        max-width: 100%;
        height: auto;
        display: block;
        margin: auto;
        object-fit: cover;
    }



    /* Estilos para pantallas grandes (PC) */
    @media (min-width: 992px) {
        .nuestrosDisenos {
            display: flex;
            align-items: center;
        }

        .carousel {
            width: 75%;
        }

        .texto-disenos {
            width: 25%;

        }
    }

    /* Estilos para tabletas */
    @media (min-width: 768px) and (max-width: 991px) {
        .nuestrosDisenos {
            flex-direction: column;
            align-items: center;
        }

        .carousel {
            width: 100%;
            margin-bottom: 1rem;
        }

        .texto-disenos {
            width: 100%;
            text-align: center;
            order: -1;
        }
    }

    /* Estilos para pantallas móviles */
    @media (max-width: 767px) {
        .nuestrosDisenos {
            display: flex;
            flex-direction: column;
            /* Cambia la dirección del flex a columna para que el texto esté arriba */
            width: 100%;
            height: 100vh;
            /* Ocupa todo el alto de la pantalla */
            box-sizing: border-box;
            /* Asegura que el padding no afecte el ancho total */
        }

        .carousel {
            width: 100%;
        }

        .texto-disenos {
            width: 100%;
            padding: 0 1rem;
            text-align: center;
            order: -1;
            /* Coloca el texto arriba del carrusel */
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 3rem;
            height: 3rem;


        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 1.5rem;
            height: 1.5rem;


        }
    }

    .numero {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
</style>

<div class="nuestrosDisenos row">

    <div id="carruselDisenos" class="carousel col-8 slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/disenos/bariloche.jpg" class="d-block imagen" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/carilo.jpg" class="d-block imagen" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/cordoba.jpg" class="d-block imagen" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/duplex.jpg" class="d-block imagen" alt="Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/marDelPlata.jpg" class="d-block imagen" alt="Imagen 5">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/tucuman.jpg" class="d-block imagen" alt="Imagen 6">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselDisenos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselDisenos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="texto-disenos col-4">
        <h2 class="mb-4">Nuestros diseños</h2>
        <p>
            Adecuamos los modelos de las propiedades según
            la estrategia de la inversión en cuanto al tamaño y
            los requerimientos de particulares de cada locación.
            En Realissa, nos especializamos en buscar la mejor opción
            de inversión acompañando el dinamismo de la economía de
            los países en los que estamos presentes para potenciar la
            construcción de viviendas conforme a las posibilidades de
            nuestros clientes, teniendo en cuenta el acceso al
            financiamiento, el valor de la unidad, la revalorización y la <span class="numero">09</span> capacidad de pago del consumidor final
        </p>
    </div>
</div>