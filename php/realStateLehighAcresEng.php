<style>
    .numero {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    /* Estilo común para los items de la lista */
    .lista-item {
        list-style: none;
        display: flex;
        align-items: center;
        padding-left: 60px;
        height: 65px;
        background-repeat: no-repeat;
        background-size: 50px;
        background-position: left center;
        margin-bottom: 10px;
        transition: height 0.3s ease, background-size 0.3s ease;
    }

    /* Imágenes específicas para cada item */
    .crecimiento {
        background-image: url('./Iconos/iconosrealissa/r18.png');
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
        .lista-item {
            height: 50px;
            background-size: 45px;
            padding-left: 55px;
        }
    }

    @media (max-width: 992px) {
        .lista-item {
            height: 40px;
            background-size: 35px;
            padding-left: 45px;
        }
    }

    @media (max-width: 768px) {
        .lista-item {
            height: 30px;
            background-size: 25px;
            padding-left: 35px;
        }
    }

    @media (max-width: 576px) {
        .lista-item {
            height: 20px;
            background-size: 15px;
            padding-left: 25px;
        }
    }

    /* Estilo para los párrafos */
    ul li+p {
        margin-top: 0;
        margin-left: 60px;
    }

    /* Ajuste del párrafo para dispositivos móviles */
    @media (max-width: 768px) {
        ul li+p {
            margin-left: 35px;
        }
    }

    @media (max-width: 576px) {
        ul li+p {
            margin-left: 25px;
        }
    }

    /* Estilo responsivo para el mapa */
    .map-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 56.25%;
        /* Aspect ratio 16:9 */
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>

<div class="container mt-5">
    <div class="row">
        <!-- First Div -->
        <div class="col-md-5 mb-4 textoComponentes">
            <h2 class="mb-4">Real Estate: Lehigh Acres, Florida.</h2>
            <p>
                Lehigh Acres is experiencing exponential growth, becoming the bedroom community for neighboring areas such as Cape Coral and Fort Myers. Many people are purchasing properties in this area due to their affordability compared to the aforementioned cities.
            </p>
            <p>The county has nearly <span class="numero">120,000</span> residents and is a middle-class, ethnically diverse community, primarily composed of workers who provide services in nearby locations such as Fort Myers, which is currently the fastest-growing city in the U.S. Additionally, Lehigh Acres is, in a way, a well-kept secret among real estate investors.</p>

            <!-- Responsive container for the map -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228311.95312059595!2d-81.82615508006394!3d26.60444764220832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db103da8607e39%3A0x6649d476dcbd3453!2sLehigh%20Acres%2C%20Florida%2C%20US!5e0!3m2!1sen!2sus!4v1724515625088!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Second Div (Additional Space or Other Content) -->
        <div class="col-md-2 mb-4">
            <!-- Additional space or other content here -->
        </div>

        <!-- Third Div -->
        <div class="col-md-5 mb-4 textoComponentes">
            <h2 class="mb-4">Why Invest in Lehigh Acres</h2>
            <ul class="list-unstyled">
                <li class="lista-item growth"><strong>SUSTAINED GROWTH</strong></li>
                <p>The growth during the pandemic was extraordinary and difficult to replicate in the short term, but long-term statistics support a steady increase.</p>
                <li class="lista-item boost"><strong>REGIONAL BOOST</strong></li>
                <p>It is just <span class="numero">25</span> minutes from Ft. Myers, the city with the highest growth rate in the U.S. in recent years. Due to the high demand for housing in Fort Myers, prices have surged rapidly, making peripheral cities like Lehigh Acres very attractive to investors.</p>
                <li class="lista-item development"><strong>INFRASTRUCTURE DEVELOPMENT</strong></li>
                <p>It is just over half an hour from an airport with flights to major U.S. cities and many international connections. Additionally, the area is making significant investments in infrastructure and services, including shops, health centers, schools, and parks.</p>
                <li class="lista-item land"><strong>LAND IN SIGHT</strong></li>
                <p>While it maintains its growth rate, there is still land available for expansion, and prices remain very affordable, suggesting that prices will continue to rise.</p>
            </ul>
        </div>
    </div>
</div>