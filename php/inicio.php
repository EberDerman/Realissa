<style>
    .numero {
        font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif
    }

    .contacto {
        display: inline-block;
        width: auto;
        padding: 10px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        max-width: 100%;
        /* Para asegurarse de que no crezca más que el ancho disponible */
    }

    .lista-contacto {
        display: flex;
        justify-content: center;
        position: relative
    }

    .lista-contacto ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .lista-contacto ul li {
        align-items: center;
        display: flex;
        margin: 10px 0
    }

    .lista-contacto ul li i {
        font-size: 1.5rem;
        margin-right: 10px
    }

    .mapa {
        height: 200px;
        width: 300px
    }

    @media (max-width:1024px) {
        .lista-contacto ul li {
            margin: 10px 0;
            font-size: 1.1rem;
        }

        .lista-contacto ul li i {
            margin-right: 8px
        }

        .mapa {
            height: 150px;
            width: 200px
        }
    }

    @media (max-width:992px) {
        .lista-contacto ul li {
            margin: 5px 0;
            font-size: 0.8rem;
        }

        .lista-contacto ul li i {
            margin-right: 8px
        }

        .mapa {
            height: 100px;
            width: 150px
        }
    }

    @media (max-width:768px) {
        .lista-contacto ul li {
            margin: 5px 0;
            font-size: 0.8rem;
        }

        .lista-contacto ul li i {
            margin-right: 8px
        }

        .mapa {
            height: 100px;
            width: 150px
        }
    }

    @font-face {
        font-family: bolt;
        font-weight: 700;
        src: url(fonts/MYRIADPRO-BOLD.OTF) format("opentype")
    }

    .lista-contacto ul li {
        font-family: bolt, sans-serif;
        font-weight: 700
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row"> <!-- Columna para el formulario -->
            <div class="col-md-7 mb-4 formulario numero">
                <h2 class="mb-4 text-center">Escríbenos</h2>
                <form action="php/process_form.php" method="post">
                    <div class="row mb-3">
                        <div class="col"> <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required> </div>
                        <div class="col"> <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required> </div>
                    </div>
                    <div class="mb-3"> <input type="email" class="form-control" id="email" name="email" placeholder="Email" required> </div>
                    <div class="mb-3"> <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular" pattern="\d{10,15}" required> </div>
                    <div class="mb-3"> <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea> </div> <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div> <!-- Columna para contacto -->
            <div class="col-md-5 col-12 d-flex justify-content-center">
                <div class="contacto">
                    <h2 class="text-center">Contacto</h2>
                    <div class="lista-contacto">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-telephone"></i> Tel:+1(329)460-4750</li>
                            <li><i class="bi bi-telephone"></i> Tel:+54(9)351 233-9134</li>
                            <li><i class="bi bi-envelope"></i> contacto@realissadevelopments.com</li>
                            <li><i class="bi bi-instagram"></i> @realissa.ok</li>
                            <li><i class="bi bi-geo-alt"></i> 606 SE 10TH St., Cape Coral, FL 33909</li>
                            <div class="mapa w-auto h-auto p-4"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.4535846658564!2d-81.96359972424318!3d26.63395597201384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db46ced26fdc19%3A0x4ca245980c8ced!2s606%20SE%2010th%20St%2C%20Cape%20Coral%2C%20FL%2033990%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1727807870465!5m2!1ses-419!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Mostrar alerta de éxito si hay un mensaje en la URL <?php if (isset($_GET['mensaje'])): ?> <?php if ($_GET['mensaje'] == 'success'): ?> alert('Tu mensaje ha sido enviado con éxito. ¡Gracias por contactarnos!'); <?php else: ?> alert('Error al enviar el mensaje. Por favor, inténtalo de nuevo.'); <?php endif; ?> <?php endif; ?> 
    </script>
</body>

</html>