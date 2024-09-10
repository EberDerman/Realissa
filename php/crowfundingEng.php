<style>
    /*-------------------------------crowfunding-----------------------------------*/

    .crowfunding-iconos {
        display: flex;
        align-items: center;
        /* Alinea verticalmente las imágenes y los spans */
        justify-content: space-around;

    }

    .crowfunding-iconos img {
        width: 100px;
        height: 100px;
        transition: width 0.3s, height 0.3s;
        /* Transición suave para el cambio de tamaño */
    }

    .crowfunding-iconos span {
        font-size: 50px;
        margin: 0 20px;
        transition: font-size 0.3s;
        /* Transición suave para el cambio de tamaño */
    }

    /* Media Queries para ajuste gradual */
    @media (max-width: 1200px) {
        .crowfunding-iconos img {
            width: 80px;
            height: 80px;
        }

        .crowfunding-iconos span {
            font-size: 40px;
        }
    }

    @media (max-width: 992px) {
        .crowfunding-iconos img {
            width: 60px;
            height: 60px;
        }

        .crowfunding-iconos span {
            font-size: 30px;
        }
    }

    @media (max-width: 768px) {
        .crowfunding-iconos {
            justify-content: center;
            /* Centra los elementos en pantallas más pequeñas */
        }

        .crowfunding-iconos img {
            width: 50px;
            height: 50px;
        }

        .crowfunding-iconos span {
            font-size: 25px;
        }
    }

    @media (max-width: 576px) {
        .crowfunding-iconos img {
            width: 40px;
            height: 40px;
        }

        .crowfunding-iconos span {
            font-size: 20px;
        }
    }
</style>

<div class="container mt-5">
    <div class="col-md-7 mb-4 textoComponentes">
        <h2 class="mb-1">Real Estate Crowdfunding</h2>
        <h4 class="mb-4">Grow and Succeed Together.</h4>
        <p>
            It is a model of <strong>collective financing where investment is consolidated through the cooperation</strong> of
            multiple investors to purchase and/or build properties. In this model, the return on investment and the project's
            profitability will be realized at the time of the property's sale and will be distributed proportionally based on each
            investor's contribution.
        </p>

        <div class="crowfunding-iconos">
            <img src="./Iconos/iconosrealissa/r1.png" alt="inversion"><span>></span>
            <img src="./Iconos/iconosrealissa/r2.png" alt="compra de lote compra venta"><span>></span>
            <img src="./Iconos/iconosrealissa/r3.png" alt="ganancia">
        </div>
    </div>
</div>