<style>
    .numero {
        font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif
    }

    .customs-items {
        align-items: center;
        display: flex;
        gap: 20px;
        height: 65px;
        justify-content: flex-start;
        list-style: none;
        margin-bottom: 10px;
        transition: height .3s ease
    }

    .customs-items img {
        height: auto;
        margin-right: 10px;
        width: 50px
    }

    .customs-text {
        display: flex;
        flex-direction: column
    }

    h4 {
        font-size: 1.5rem;
        margin: 0
    }

    @media (max-width:1200px) {
        h4 {
            font-size: 1.25rem
        }

        .customs-items {
            height: 50px
        }
    }

    @media (max-width:992px) {
        h4 {
            font-size: 1rem
        }

        .customs-items {
            height: 40px
        }
    }

    @media (max-width:768px) {
        h4 {
            font-size: .9rem
        }

        .customs-items {
            height: auto
        }

        .customs-text {
            flex-direction: column
        }
    }

    @media (max-width:576px) {
        h4 {
            font-size: .8rem
        }

        .customs-items {
            height: auto
        }
    }

    ul li+p {
        margin-left: 60px;
        margin-top: 0
    }

    @media (max-width:768px) {
        ul li+p {
            margin-left: 35px
        }
    }

    @media (max-width:576px) {
        ul li+p {
            margin-left: 25px
        }
    }
</style>
<div class="container mt-5">
    <div class="col-md-7 mb-4 textoComponentes">
        <h2 class="mb-4">INVERSIONES</h2>
        <p>Guiamos la ruta de tus inversiones</p>
        <li class="customs-items compra"> <img src="./Iconos/iconosrealissa/r21.webp" alt="Compra" class="customs-icon">
            <div class="customs-text">
                <h4>FASE <span class="numero me-5">1 </span>COMPRA DEL LOTE</h4>
            </div>
        </li>
        <p>Aproximadamente de <span class="numero">30</span> días.</p>
        <li class="customs-items permisologia"> <img src="./Iconos/iconosrealissa/r7.webp" alt="Permisología" class="customs-icon">
            <div class="customs-text">
                <h4>FASE <span class="numero me-5">2</span> PERMISOLOGÍA</h4>
            </div>
        </li>
        <p>Aproximadamente <span class="numero">6 a 7</span> meses.</p>
        <li class="customs-items construccion"> <img src="./Iconos/iconosrealissa/r8.webp" alt="Construcción" class="customs-icon">
            <div class="customs-text">
                <h4>FASE <span class="numero me-5">3</span> CONSTRUCCIÓN</h4>
            </div>
        </li>
        <p>Aproximadamente <span class="numero">60 a 70</span> días.</p>
        <li class="customs-items venta"> <img src="./Iconos/iconosrealissa/r9.webp" alt="Venta" class="customs-icon">
            <div class="customs-text">
                <h4>FASE <span class="numero me-5">4</span> VENTA DE LA PROPIEDAD</h4>
            </div>
        </li>
        <p>Aproximadamente <span class="numero">1</span> mes.</p>
        <h4>TIEMPO TOTAL ESTIMADO:</h4>
        <p>de <span class="numero">12 a 14</span> meses. Para lotes en stock con permisología aprobada, el tiempo estimado es de <span class="numero">8</span> meses aproximadamente.</p>
        <p>El Proceso de Seguimiento Durante el período de permisología se presentarán informes cada dos meses aproximadamente.</p>
        <p>Los reportes de avances de construcción se entregarán acorde al progreso de obra.</p>
        <h4>Encontramos el mercado ideal para hacer rendir tus valores</h4>
        <p>Trabajamos cada día en encontrar nichos o mercados emplazados en países que cuenten con monedas estables y que permitan al pequeño y mediano inversor incrementar su patrimonio y mitigar los efectos de la inflación.</p>
        <h4>Superávit de buenas estrategias</h4>
        <p>Desde Realissa generamos las mejores oportunidades de inversión para pequeños y medianos empresarios, mediante negocios rentables en Real Estate, que permitan al inversor incrementar su patrimonio en el mediano y largo plazo.</p>
        <h4>Estudios necesarios para crecer y realizar tus sueños.</h4>
        <p>Analizamos todas las variables necesarias para que tu inversión sea segura. Queremos ser tus socios en cada inversión de confianza.</p>
    </div>
</div>