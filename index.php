<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realissa</title>
    <!--css boostrap-->
    <link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--css componentes-->
    <link rel="stylesheet" href="./css/styles.css">


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'es', // Cambia 'es' por el idioma principal de tu página
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</head>

<body>


    <style>
        /*-----------------------------navbar--------------------------------------*/
        .custom-navbar {
            background-color: #6c757d;
            color: grey;
            /* Gris oscuro */
        }

        nav {
            font-size: large;
        }

        .navbar-nav {
            padding-right: 150px;
        }

        .custom-navbar .navbar-nav .nav-link {
            color: white;
            /* Color de texto blanco para contraste */
        }



        /* Ocultar el logo en modo responsive */
        @media (max-width: 992px) {
            #logo {
                display: none;
            }
        }
    </style>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./img/logo realissa.png" alt="Menu" width="30" height="30">
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <img id="logo" src="./img/logo realissa.png" alt="logo" width="120" height="100" style="margin-left: 50px;">

                </div>
            </div>
        </nav>
    </header>

    <main class="container text-center">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6 mb-4 textoComponentes">
                <div class="espanol">
                    <h1>Bienvenido a Reallissa</h1>
                    <a href="indexEsp.php"><img src="img/españa.png" alt="" class="img-fluid"></a>
                    <h3>Click en la bandera para elegir idioma</h3>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 textoComponentes">
                <div class="english">
                    <h1>Welcome to Reallissa</h1>
                    <a href="indexEng.php"><img src="img/usa.png" alt="" class="img-fluid"></a>
                    <h3>Click on the flag to select your language</h3>
                </div>
            </div>
        </div>
    </main>




</body>

</html>