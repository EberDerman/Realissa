<style>
    .map-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        /* 16:9 ratio */
        position: relative;
        height: 0;
    }

    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }

    .numero {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .lista-contacto {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .lista-contacto ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .lista-contacto ul li {
        display: flex;
        align-items: center;
        margin: 10px 0;
    }

    .lista-contacto ul li i {
        margin-right: 10px;
        font-size: 1.5rem;
        /* Ajustar tamaño del icono */
    }

    .mapa {
        width: 300px;
        height: 200px;
    }

    /* Media Queries */
    @media (max-width: 1024px) {
        .lista-contacto ul li {
            margin: 10px 0;
        }

        .lista-contacto ul li i {
            margin-right: 8px;
            font-size: 1.3rem;
        }

        .mapa {
            width: 200px;
            height: 150px;
        }
    }

    @media (max-width: 768px) {
        .lista-contacto ul li {
            margin: 5px 0;
        }

        .lista-contacto ul li i {
            margin-right: 8px;
            font-size: 1.2rem;
        }

        .mapa {
            width: 150px;
            height: 100px;
        }
    }

    @font-face {
        font-family: 'bolt';
        src: url('fonts/MYRIADPRO-BOLD.OTF') format('opentype');
        font-weight: bold;
    }

    li {
        font-family: 'bolt', sans-serif;
        font-weight: bold;
        /* Esto asegura que el texto aparezca en negrita */
    }
</style>


<div class="container mt-5">
    <div class="row">
        <!-- Columna para el formulario -->
        <div class="col-md-7 mb-4 formulario numero">
            <h2 class="mb-4 text-center">Contact Us</h2>
            <form action="form/process_form.php" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular" pattern="\d{10,15}" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
                </div>
                <button type="submit" onclick="sendEmail()" class="btn btn-primary">Send</button>
            </form>
        </div>

        <!-- Columna para contacto -->
        <div class="col-md-5">
            <div class="contacto">
                <h2 class="text-center">Contact</h2>
                <div class="lista-contacto">
                    <ul class="list-unstyled">
                        <li><i class="bi bi-telephone"></i> Tel:+1(329)460-4750</li>
                        <li><i class="bi bi-telephone"></i> Tel:+54(9)351 233-9134</li>
                        <li><i class="bi bi-envelope"></i> contacto@realissa.com</li>
                        <li><i class="bi bi-instagram"></i> @realissa.ok</li>
                        <li><i class="bi bi-geo-alt"></i> 606 SE 10TH St., Cape Coral, FL 33909</li>
                        <div class="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.4535846658564!2d-81.96359972424318!3d26.63395597201384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db46ced26fdc19%3A0x4ca245980c8ced!2s606%20SE%2010th%20St%2C%20Cape%20Coral%2C%20FL%2033990%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1727807870465!5m2!1ses-419!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>