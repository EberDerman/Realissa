<style>
    .numero {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .customs-items {
        list-style: none; /* Elimina los puntos de lista predeterminados */
        display: flex; /* Flexbox para alinear la imagen y el texto */
        align-items: center; /* Alinea el contenido al centro verticalmente */
        justify-content: center;
        height: 65px;
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        background-size: 50px; /* Ajusta el tamaño de la imagen */
        background-position: left center; /* Posiciona la imagen a la izquierda y centrada verticalmente */
        margin-bottom: 10px; /* Espacio inferior entre los ítems */
        transition: height 0.3s ease, background-size 0.3s ease; /* Transiciones suaves para altura y tamaño de imagen */
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
    ul li + p {
        margin-top: 0;
        margin-left: 60px; /* Alinea el párrafo debajo del texto del li */
    }

    /* Ajuste del párrafo para dispositivos móviles */
    @media (max-width: 768px) {
        ul li + p {
            margin-left: 35px; /* Alinea el párrafo debajo del texto del li para pantallas pequeñas */
        }
    }

    @media (max-width: 576px) {
        ul li + p {
            margin-left: 25px; /* Alinea el párrafo debajo del texto del li para pantallas extra pequeñas */
        }
    }
</style>


<div class="container mt-5">


    <div class="col-md-7 mb-4 textoComponentes">


        <h2 class="mb-4">INVERSIONES</h2>



        <p>Guiamos la ruta de tus inversiones</p>
        <li class="customs-items compra">
            <h4>FASE <span class="numero">1</span></h4>
            <h4>COMPRA DEL LOTE</h4>
        </li>
        <p>Aproximadamente de <span class="numero">30</span> días.</p>

        <li class="customs-items permisologia">
            <h4>FASE <span class="numero">2</span></h4>
            <h4>PERMISOLOGÍA</h4>
        </li>
        <p>Aproximadamente <span class="numero">6 a 7</span> meses.</p>

        <li class="customs-items construccion">
            <h4>FASE <span class="numero">3</span></h4>
            <h4>CONSTRUCCIÓN</h4>
        </li>
        <p>Aproximadamente <span class="numero">5 a 6</span> meses.</p>

        <li class="customs-items venta">
            <h4>FASE <span class="numero">4</span></h4>
            <h4>VENTA DE LA PROPIEDAD</h4>
        </li>
        <p>Aproximadamente <span class="numero">1</span> mes.</p>

        <h4>TIEMPO TOTAL ESTIMADO:</h4>
        <p>de <span class="numero">12 a 14</span> meses. Para lotes en stock con permisología aprobada, el tiempo estimado es de <span class="numero">8</span> meses aproximadamente.</p>

        <p>El Proceso de Seguimiento Durante el período de Permisología se presentarán informes cada dos meses aproximadamente.</p>

        <p>Los reportes de avances de construcción se entregarán acorde al progreso de obra.</p>

        <h4>Encontramos el mercado ideal para hacer rendir tus valores</h4>
        <p>Trabajamos cada día en encontrar nichos o mercados emplazados en países que cuenten con monedas estables y que permitan al pequeño y mediano inversor incrementar su patrimonio y mitigar los efectos de la inflación.</p>

        <h4>Superávit de buenas estrategias</h4>
        <p>Desde Realissa generamos las mejores oportunidades de inversión para pequeños y medianos empresarios, mediante negocios rentables en Real Estate, que permitan al inversor incrementar su patrimonio en el mediano y largo plazo.</p>

        <h4>Estudios necesarios para crecer y realizar tus sueños.</h4>
        <p>Analizamos todas las variables necesarias para que tu inversión sea segura. Queremos ser tus socios en cada inversión de confianza.</p>


    </div>
</div>