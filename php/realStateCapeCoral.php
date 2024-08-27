<style>
    /* Variables CSS para tamaños */
:root {
    --icon-size-large: 50px;
    --icon-size-medium: 45px;
    --icon-size-small: 35px;
    --icon-size-xsmall: 25px;
    --icon-size-xxsmall: 15px;
    --padding-left-large: 60px;
    --padding-left-medium: 55px;
    --padding-left-small: 45px;
    --padding-left-xsmall: 35px;
    --padding-left-xxsmall: 25px;
}

/* Estilos generales para los ítems de la lista */
.custom-list-item {
    list-style: none; /* Elimina los puntos de lista predeterminados */
    display: flex; /* Flexbox para alinear la imagen y el texto */
    align-items: center; /* Alinea el contenido al centro verticalmente */
    padding-left: var(--padding-left-large); /* Espacio a la izquierda para la imagen */
    height: 65px;
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    background-size: var(--icon-size-large); /* Ajusta el tamaño de la imagen */
    background-position: left center; /* Posiciona la imagen a la izquierda y centrada verticalmente */
    margin-bottom: 10px; /* Espacio inferior entre los ítems */
    transition: height 0.3s ease, background-size 0.3s ease; /* Transiciones suaves para altura y tamaño de imagen */
}

/* Imágenes específicas para cada item */
.custom-list-item.seguridad { background-image: url('./Iconos/iconosrealissa/r10.png'); }
.custom-list-item.naturaleza { background-image: url('./Iconos/iconosrealissa/r12.png'); }
.custom-list-item.educacion { background-image: url('./Iconos/iconosrealissa/r15.png'); }
.custom-list-item.casas { background-image: url('./Iconos/iconosrealissa/r11.png'); }
.custom-list-item.costo-vida { background-image: url('./Iconos/iconosrealissa/r13.png'); }
.custom-list-item.impuestos { background-image: url('./Iconos/iconosrealissa/r16.png'); }
.custom-list-item.salud { background-image: url('./Iconos/iconosrealissa/r17.png'); }

/* Media Queries para ajuste gradual */
@media (max-width: 1200px) {
    .custom-list-item {
        height: 50px;
        background-size: var(--icon-size-medium);
        padding-left: var(--padding-left-medium);
    }
}

@media (max-width: 992px) {
    .custom-list-item {
        height: 40px;
        background-size: var(--icon-size-small);
        padding-left: var(--padding-left-small);
    }
}

@media (max-width: 768px) {
    .custom-list-item {
        height: 30px;
        background-size: var(--icon-size-xsmall);
        padding-left: var(--padding-left-xsmall);
    }
}

@media (max-width: 576px) {
    .custom-list-item {
        height: 20px;
        background-size: var(--icon-size-xxsmall);
        padding-left: var(--padding-left-xxsmall);
    }
}

/* Estilo para los párrafos */
ul li + p {
    margin-top: 0;
    margin-left: var(--padding-left-large); /* Alinea el párrafo debajo del texto del li */
}

/* Ajuste del párrafo para dispositivos móviles */
@media (max-width: 768px) {
    ul li + p {
        margin-left: var(--padding-left-xsmall); /* Alinea el párrafo debajo del texto del li para pantallas pequeñas */
    }
}

@media (max-width: 576px) {
    ul li + p {
        margin-left: var(--padding-left-xxsmall); /* Alinea el párrafo debajo del texto del li para pantallas extra pequeñas */
    }
}

.numero {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

/* Estilo para el iframe del mapa */
#mapa iframe {
    width: 100%; /* Ajusta el ancho del iframe al 100% del contenedor */
    height: 300px; /* Altura fija del iframe para pantallas más grandes */
    border: 0; /* Elimina el borde del iframe */
    transition: height 0.3s ease; /* Transición suave para cambios en altura */
}

/* Media Queries para ajustar la altura del iframe en pantallas más pequeñas */
@media (max-width: 1200px) {
    #mapa iframe {
        height: 250px;
    }
}

@media (max-width: 992px) {
    #mapa iframe {
        height: 200px;
    }
}

@media (max-width: 768px) {
    #mapa iframe {
        height: 180px;
    }
}

@media (max-width: 576px) {
    #mapa iframe {
        height: 150px;
    }
}

</style>

<div class="container mt-5">
    <div class="row">
        <!-- Primer Div -->
        <div class="col-md-5 mb-4 textoComponentes">
            <h2 class="mb-4">Real estate: Cape Coral, Florida.</h2>
            <ul class="list-unstyled">
                <li>Costa Oeste de Florida, sobre el Golfo de México.</li>
                <li>Pertenece al condado de Lee.</li>
                <li>Población actual: <span class="numero">750,000</span> habitantes.</li>
            </ul>
            <h6 class="m-4"><strong>Puntos cercanos</strong></h6>
            <!-- Agregado 'list-unstyled' para eliminar los puntos -->
            <ul class="list-unstyled">
                <!-- Botones para actualizar el mapa -->
                <li><button class="btn btn-primary" style="margin-top: 10px;" onclick="showMap('Fort')">Fort Myers <span class="numero">9</span> mi.</button></li>
                <li><button class="btn btn-primary" style="margin-top: 10px;" onclick="showMap('Naples')">Naples <span class="numero">43</span> mi.</button></li>
                <li><button class="btn btn-primary" style="margin-top: 10px;" onclick="showMap('Miami')">Miami <span class="numero">157</span> mi.</button></li>
                <li><button class="btn btn-primary" style="margin-top: 10px;" onclick="showMap('Orlando')">Orlando <span class="numero">166</span> mi.</button></li>
            </ul>
            <div id="mapa" class="d-flex justify-content-center align-items-center">
                <!-- El iframe se actualizará con JavaScript -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228311.95312059595!2d-81.82615508006394!3d26.60444764220832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db103da8607e39%3A0x6649d476dcbd3453!2sLehigh%20Acres%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1724515625088!5m2!1ses-419!2sar" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Segundo Div (Espacio Adicional u Otro Contenido) -->
        <div class="col-md-2 mb-4">
            <!-- Espacio adicional u otro contenido aquí -->
        </div>

        <!-- Tercer Div -->
        <div class="col-md-5 mb-4 textoComponentes">
            <h2 class="mb-4">Por qué invertir en Cape Coral</h2>
            <!-- Agregado 'list-unstyled' para eliminar los puntos -->
            <ul>
                <li class="custom-list-item seguridad"><strong>SEGURIDAD</strong></li>
                <p>Tiene una de las tasas de criminalidad más bajas del país.</p>
                <li class="custom-list-item naturaleza"><strong>EL PODER DE LA NATURALEZA</strong></li>
                <p>Las construcciones se desarrollan frente al agua y la naturaleza. Posee más de 640 km de canales.</p>
                <li class="custom-list-item educacion"><strong>EDUCACIÓN LIBRE Y DE CALIDAD</strong></li>
                <p>El promedio y los estándares de educación de las instituciones son elevados en formación y calidad. Además, existe amplia libertad para enviar a los niños a la escuela pública que cada familia desee.</p>
                <li class="custom-list-item casas"><strong>CASAS UNIFAMILIARES</strong></li>
                <p>La mayoría de las viviendas son casas sin costos de HOA / Expensas mensuales.</p>
                <li class="custom-list-item costo-vida"><strong>MENOR COSTO DE VIDA</strong></li>
                <p>El costo de vida en Cape Coral es un <span class="numero">4</span>% más bajo que el promedio americano.</p>
                <li class="custom-list-item impuestos"><strong>MENOS IMPUESTOS</strong></li>
                <p>No hay impuesto a las ganancias personales estatal.</p>
                <li class="custom-list-item salud"><strong>SALUD</strong></li>
                <p>El costo de la salud es un <span class="numero">5</span>% por debajo del promedio nacional.</p>
            </ul>
        </div>
    </div>
</div>
t