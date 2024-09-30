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
</style>


<div class="container mt-5" >
    <div class="row">
        <!-- Columna para el formulario -->
        <div class="col-md-7 mb-4 formulario numero">
            <h2 class="mb-4 text-center">Escríbenos</h2>
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
                <button type="submit" onclick="sendEmail()" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <!-- Columna para contacto -->
        <div class="col-md-5">
            <div class="contacto">
                <h2 class="text-center">Contacto</h2>
                <p class="numero">
                    (USA) +1 (239) 8348617 / +1 (239) 2148904<br>
                    realissainvestments@gmail.com<br>
                    606 SE 10TH St., Cape Coral, FL 33909<br>
                    INSTAGRAM @realissa.ok
                </p>
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.453584665756!2d-81.96359972580781!3d26.633955972016782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db46ced26fdc19%3A0x4ca245980c8ced!2s606%20SE%2010th%20St%2C%20Cape%20Coral%2C%20FL%2033990%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1724515713532!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

