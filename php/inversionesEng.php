<style>
    .numero {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .customs-items {
        list-style: none;
        /* Elimina los puntos de lista predeterminados */
        display: flex;
        /* Flexbox para alinear la imagen y el texto */
        align-items: center;
        /* Alinea el contenido al centro verticalmente */
        justify-content: center;
        height: 65px;
        background-repeat: no-repeat;
        /* Evita que la imagen se repita */
        background-size: 50px;
        /* Ajusta el tamaño de la imagen */
        background-position: left center;
        /* Posiciona la imagen a la izquierda y centrada verticalmente */
        margin-bottom: 10px;
        /* Espacio inferior entre los ítems */
        transition: height 0.3s ease, background-size 0.3s ease;
        /* Transiciones suaves para altura y tamaño de imagen */
        gap: 20px;
    }

    /* Imágenes específicas para cada item */
    .compra {
        background-image: url('./Iconos/iconosrealissa/r21.png');
    }

    .permisologia {
        background-image: url('./Iconos/iconosrealissa/r7.png');
    }

    .construccion {
        background-image: url('./Iconos/iconosrealissa/r8.png');
    }

    .venta {
        background-image: url('./Iconos/iconosrealissa/r9.png');
    }

    /* Media Queries para ajuste gradual */
    @media (max-width: 1200px) {
        .customs-items {
            height: 50px;
            background-size: 45px;
            padding-left: 55px;
        }
    }

    @media (max-width: 992px) {
        .customs-items {
            height: 40px;
            background-size: 35px;
            padding-left: 45px;
        }
    }

    @media (max-width: 768px) {
        .customs-items {
            height: 30px;
            background-size: 25px;
            padding-left: 35px;
        }
    }

    @media (max-width: 576px) {
        .customs-items {
            height: 20px;
            background-size: 15px;
            padding-left: 25px;
        }
    }

    /* Estilo para los párrafos */
    ul li+p {
        margin-top: 0;
        margin-left: 60px;
        /* Alinea el párrafo debajo del texto del li */
    }

    /* Ajuste del párrafo para dispositivos móviles */
    @media (max-width: 768px) {
        ul li+p {
            margin-left: 35px;
            /* Alinea el párrafo debajo del texto del li para pantallas pequeñas */
        }
    }

    @media (max-width: 576px) {
        ul li+p {
            margin-left: 25px;
            /* Alinea el párrafo debajo del texto del li para pantallas extra pequeñas */
        }
    }
</style>


<div class="container mt-5">


    <div class="col-md-7 mb-4 textoComponentes">


        <h2 class="mb-4">INVESTMENTS</h2>

        <p>We guide the path of your investments</p>
        <li class="customs-items compra">
            <h4>PHASE <span class="numero">1</span></h4>
            <h4>LOT PURCHASE</h4>
        </li>
        <p>Approximately <span class="numero">30</span> days.</p>

        <li class="customs-items permisologia">
            <h4>PHASE <span class="numero">2</span></h4>
            <h4>PERMITS</h4>
        </li>
        <p>Approximately <span class="numero">6 to 7</span> months.</p>

        <li class="customs-items construccion">
            <h4>PHASE <span class="numero">3</span></h4>
            <h4>CONSTRUCTION</h4>
        </li>
        <p>Approximately <span class="numero">5 to 6</span> months.</p>

        <li class="customs-items venta">
            <h4>PHASE <span class="numero">4</span></h4>
            <h4>PROPERTY SALE</h4>
        </li>
        <p>Approximately <span class="numero">1</span> month.</p>

        <h4>ESTIMATED TOTAL TIME:</h4>
        <p>From <span class="numero">12 to 14</span> months. For stock lots with approved permits, the estimated time is approximately <span class="numero">8</span> months.</p>

        <p>The Follow-up Process During the permit period will include reports approximately every two months.</p>

        <p>Construction progress reports will be delivered according to the progress of the work.</p>

        <h4>We Find the Ideal Market to Maximize Your Investments</h4>
        <p>We work every day to find niches or markets in countries with stable currencies, allowing small and medium investors to grow their wealth and mitigate the effects of inflation.</p>

        <h4>Surplus of Good Strategies</h4>
        <p>At Realissa, we create the best investment opportunities for small and medium-sized businesses through profitable real estate ventures, enabling investors to increase their wealth in the medium and long term.</p>

        <h4>Essential Studies to Grow and Achieve Your Dreams</h4>
        <p>We analyze all necessary variables to ensure your investment is secure. We want to be your trusted partner in every investment.</p>



    </div>
</div>