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
  
     .numero{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }


</style>

<div class="nuestrosDisenos row">


    <div id="carruselDisenos" class="carousel col-8 slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/disenos/bariloche.jpeg" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/carilo.jpeg" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/cordoba.jpeg" class="d-block w-100" alt="Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/duplex.jpeg" class="d-block w-100" alt="Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/marDelPlata.jpeg" class="d-block w-100" alt="Imagen 5">
            </div>
            <div class="carousel-item">
                <img src="./img/disenos/tucuman.jpeg" class="d-block w-100" alt="Imagen 6">
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
        <h2 class="mb-4">Our Designs</h2>
        <p>
            We tailor property models according to the investment strategy regarding size and specific requirements of each location.
            At Realissa, we specialize in finding the best investment options by aligning with the economic dynamics of the countries
            where we operate. We enhance the construction of homes based on our clients' possibilities, considering access to financing,
            the value of the unit, appreciation, and the <span class="numero">09</span> purchasing power of the end consumer.
        </p>

    </div>
</div>