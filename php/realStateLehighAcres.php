<style>
    .numero {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    /* Estilo para los items de la lista */
    .crecimiento,
    .impulso,
    .desarrollo,
    .tierra {
        list-style: none; /* Elimina los puntos de lista predeterminados */
        display: flex; /* Flexbox para alinear la imagen y el texto */
        align-items: center; /* Alinea el contenido al centro verticalmente */
        padding-left: 60px; /* Espacio a la izquierda para la imagen */
        height: 65px;
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        background-size: 50px; /* Ajusta el tamaño de la imagen */
        background-position: left center; /* Posiciona la imagen a la izquierda y centrada verticalmente */
        margin-bottom: 10px; /* Espacio inferior entre los ítems */
        transition: height 0.3s ease, background-size 0.3s ease; /* Transiciones suaves para altura y tamaño de imagen */
    }

    /* Imágenes específicas para cada item */
    .crecimiento {
        background-image: url('./Iconos/iconosrealissa/r18.png'); /* Ajusta la ruta según tu estructura de proyecto */
    }

    .impulso {
        background-image: url('./Iconos/iconosrealissa/r20.png');
    }

    .desarrollo {
        background-image: url('./Iconos/iconosrealissa/r19.png');
    }

    .tierra {
        background-image: url('./Iconos/iconosrealissa/r21.png');
    }

    /* Media Queries para ajuste gradual */
    @media (max-width: 1200px) {
        .crecimiento,
        .impulso,
        .desarrollo,
        .tierra {
            height: 50px;
            background-size: 45px;
            padding-left: 55px;
        }
    }

    @media (max-width: 992px) {
        .crecimiento,
        .impulso,
        .desarrollo,
        .tierra {
            height: 40px;
            background-size: 35px;
            padding-left: 45px;
        }
    }

    @media (max-width: 768px) {
        .crecimiento,
        .impulso,
        .desarrollo,
        .tierra {
            height: 30px;
            background-size: 25px;
            padding-left: 35px;
        }
    }

    @media (max-width: 576px) {
        .crecimiento,
        .impulso,
        .desarrollo,
        .tierra {
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
    <div class="row">
        <!-- Primer Div -->
        <div class="col-md-5 mb-4 textoComponentes">
            <h2 class="mb-4">Real estate: Lehigh Acres, Florida.</h2>
            <p>
                Lehigh Acres está viviendo un
                desarrollo exponencial,
                convirtiéndose en la ciudad
                dormitorio de zonas vecinas de
                Cape Coral y Fort Myers. Muchas
                personas están adquiriendo
                propiedades en esta zona por ser
                más accesibles que las ciudades
                nombradas anteriormente.
            </p>
            <p>El condado cuenta con casi <span class="numero">120000</span> habitantes y es una localidad de clase media,
                diversa de etnias, donde viven principalmente trabajadores que brindan servicios en
                locaciones aledañas como Fort Myers, que al día de hoy es la ciudad con mayor
                crecimiento en EEUU. Además Lehigh Acres es, en cierta forma, un secreto bien
                guardado entre inversionistas de bienes raíces.
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228311.95312059595!2d-81.82615508006394!3d26.60444764220832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db103da8607e39%3A0x6649d476dcbd3453!2sLehigh%20Acres%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1724515625088!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Segundo Div (Espacio Adicional u Otro Contenido) -->
        <div class="col-md-2 mb-4">
            <!-- Espacio adicional u otro contenido aquí -->
        </div>

        <!-- Tercer Div -->
        <div class="col-md-5 mb-4 textoComponentes">
            <h2 class="mb-4">Por qué invertir
                Lehigh Acres</h2>
            <!-- Agregado 'list-unstyled' para eliminar los puntos -->
            <ul class="list-unstyled">
                <li class="crecimiento"><strong>CRECIMIENTO SOSTENIDO</strong></li>
                <p>El crecimiento que tuvo durante el periodo de
                    pandemia fue extraordinario y difícilmente se
                    puede repetir en el corto plazo, pero las
                    estadísticas en el largo sustentan un
                    crecimiento constante.</p>
                <li class="impulso"><strong>IMPULSO REGIONAL</strong></li>
                <p>Está a sólo <span class="numero">25</span> minutos de Ft. Myers, la ciudad
                    con mayor tasa de crecimiento en EEUU en los
                    últimos años. Debido a la gran demanda por
                    viviendas en Fort Myers, los precios han subido
                    a ritmos acelerados, y ciudades periféricas
                    como Lehigh Acres se tornan muy atractivas
                    para los inversores.</p>
                <li class="desarrollo"><strong>DESARROLLO DE INFRAESTRUCTURA</strong></li>
                <p>Se encuentra a poco más de media hora de un
                    aeropuerto con vuelos a las principales ciudades
                    de EEUU y muchas conexiones internacionales.
                    Además, la zona en la que se encuentra está
                    realizando importantes inversiones en
                    infraestructura y servicios, desde comercios,
                    centros de salud, escuelas y parques.
                </p>
                <li class="tierra"><strong>TIERRA A LA VISTA</strong></li>
                <p>Aunque mantiene su ritmo de crecimiento, aún
                    existe tierra para seguir expandiéndose y su
                    precio es todavía muy accesible por lo que todo
                    indica que los precios continuarán subiendo.</p>
            </ul>
        </div>
    </div>
</div>
