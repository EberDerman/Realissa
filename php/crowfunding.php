<style>
    /*-------------------------------crowfunding-----------------------------------*/

    .crowfunding-iconos {
        display: flex;
        align-items: center; /* Alinea verticalmente las imágenes y los spans */
        justify-content: space-around;
        
    }

    .crowfunding-iconos img {
        width: 100px;
        height: 100px;
        transition: width 0.3s, height 0.3s; /* Transición suave para el cambio de tamaño */
    }

    .crowfunding-iconos span {
        font-size: 50px;
        margin: 0 20px;
        transition: font-size 0.3s; /* Transición suave para el cambio de tamaño */
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
            justify-content: center; /* Centra los elementos en pantallas más pequeñas */
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
        <h2 class="mb-1">Crowfunding Inmobiliario</h2>
        <h4 class="mb-4">Crecer y ganar en equipo.</h4>
        <p>Se trata de un modelo de <strong>financiación colectiva donde la inversión se consolida a través de la cooperación</strong> de
            varios inversores con el fin de comprar y/o construir propiedades.
            En esta modalidad, el retorno de inversión y la rentabilidad del proyecto, se producirán al momento de la venta de
            la propiedad y se distribuirá proporcionalmente acorde al aporte cada inversor.</p>

        <div class="crowfunding-iconos">
            <img src="./Iconos/iconosrealissa/r1.png" alt="inversion"><span>></span>
            <img src="./Iconos/iconosrealissa/r2.png" alt="compra de lote compra venta"><span>></span>
            <img src="./Iconos/iconosrealissa/r3.png" alt="ganancia">
        </div>
    </div>
</div>
