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

        .textoComponente {
            height: 15vh;
            display: flex;
            flex-direction: column;
            justify-content: center;

            background-color: rgba(255, 255, 255, 0.80);
            color: black;

            border-radius: 6px;
            padding: 30px;

        }

        .textoComponente p {
            text-align: left;
        }


        .textoComponente h2 {
            padding-bottom: 50px;
            text-align: center;

        }



        /*logo index*/
        @media (max-width: 1366px) {

            .logoIndex {
                width: 27vw;
                height: auto;
            }
        }

        @media (min-width:1366px) {

            .logoIndex {
                width: 22vw;
                height: auto;
            }
        }

        /* Ocultar el logo en modo responsive */
        @media (max-width: 992px) {

            .logoIndex {
                width: 80vw;
                height: auto;
            }

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
                    <img src="./img/logo realissa.png" alt="Menu" width="30" height="auto">
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <img id="logo" src="./img/logo realissa.png" alt="logo" width="120" height="auto" style="margin-left: 50px;">

                </div>
            </div>


        </nav>
    </header>

    <main class="container text-center">

        <div class="container d-flex justify-content-center align-content-center">
            <img src="./img/logo realissa.png" alt="Menu" class="logoIndex">
        </div>
        <div class="row g-4 justify-content-center m-3">
            <div class="col-6 col-md-2 mb-4 textoComponente">
                <div class="espanol">

                    <a href="indexEsp.php"><img src="img/españa.png" alt="" class="img-fluid"></a>

                </div>
            </div>

            <div class="col-6 col-md-2 mb-4 textoComponente">
                <div class="english">

                    <a href="indexEng.php"><img src="img/usa.png" alt="" class="img-fluid"></a>

                </div>
            </div>
        </div>
    </main>




</body>

</html>