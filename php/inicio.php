<div class="container mt-5">
    <div class="row">
        <!-- Columna para el formulario -->
        <div class="col-md-7 mb-4 formulario">
            <h2 class="mb-4">Escríbenos</h2>
            <form action="" method="post">
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
                <h4>Contacto</h4>
                <p>
                    (USA) +1 (239) 8348617 / +1 (239) 2148904<br>
                    realissainvestments@gmail.com<br>
                    606 SE 10TH St., Cape Coral, FL 33909<br>
                    INSTAGRAM @realissa.ok
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3566.453584665756!2d-81.96359972580781!3d26.633955972016782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db46ced26fdc19%3A0x4ca245980c8ced!2s606%20SE%2010th%20St%2C%20Cape%20Coral%2C%20FL%2033990%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sar!4v1724515713532!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<!--

<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("5k1wXSSwu60da9CAJ"); // Reemplaza TU_USER_ID con tu ID de usuario de EmailJS
   })();
</script>



<script>
   function sendEmail() {
      var templateParams = {
         nombre: document.getElementById('nombre').value,
         apellido: document.getElementById('apellido').value,
         email: document.getElementById('email').value,
         celular: document.getElementById('celular').value,
         mensaje: document.getElementById('mensaje').value
      };

      emailjs.send('service_1tyzj38', 'template_6aymfvf', templateParams)
         .then(function(response) {
            alert('Correo enviado exitosamente!', response.status, response.text);
         }, function(error) {
            alert('Error al enviar el correo.', error);
         });
   }
</script>
                -->
