
<div class="container mt-5">
    <div class="row">
        <!-- Columna para el formulario -->
        <div class="col-md-7 mb-4 formulario">
            <h2 class="mb-4">Escríbenos</h2>
            <form action="php/process_form.php" method="post">
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
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <!-- Columna de separación -->
        <div class="col-md-2"></div>

        <!-- Columna para contacto -->
        <div class="col-md-3">
            <div class="contacto">
                <h4>Contacto</h4>
                <p>
                    (USA) +1 (239) 8348617 / +1 (239) 2148904<br>
                    realissainvestments@gmail.com<br>
                    606 SE 10TH St., Cape Coral, FL 33909<br>
                    INSTAGRAM @realissa.ok
                </p>
            </div>
        </div>
    </div>
</div>