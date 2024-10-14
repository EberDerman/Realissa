<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/logo realissa.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/logo realissa.png" type="image/x-icon">

    <title>Realissa</title>

    <!-- Critical CSS inline -->
    <style>
        /*-----------------------------navbar--------------------------------------*/
        .custom-navbar {
            background-color: #6c757d;
            color: grey; /* Gris oscuro */
        }

        nav {
            font-size: large;
        }

        .navbar-nav {
            padding-right: 150px;
        }

        .custom-navbar .navbar-nav .nav-link {
            color: white; /* Color de texto blanco para contraste */
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

        @media (min-width: 1366px) {
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

        /* Definir un tamaño fijo para prevenir CLS */
        .logoIndex {
            width: 220px;
            height: auto;
        }

        /* Definir espacio reservado para el logo en navbar */
        #logo {
            width: 120px;
            height: auto;
            margin-left: 50px;
        }

        /* Mantener espacio para imágenes de banderas */
        .img-fluid {
            width: 100px;
            height: auto;
        }

    </style>

    <!-- Defer non-critical CSS (like Bootstrap and custom styles) -->
    <link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" media="print" onload="this.media='all'">
    <noscript><link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet"></noscript>

    <link rel="stylesheet" href="./css/styles.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="./css/styles.min.css"></noscript>
   
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./img/logo realissa.webp" alt="Menu" width="30" height="auto">
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <img id="logo" src="./img/logo realissa.webp" alt="logo" width="120" height="auto" style="margin-left: 50px;">
                </div>
            </div>
        </nav>
    </header>

    <main class="container text-center">
        <div class="container d-flex justify-content-center align-content-center">
            <img src="./img/logo realissa.webp" alt="Menu" class="logoIndex" width="220" height="auto">
        </div>
        <div class="row g-4 justify-content-center m-3">
            <div class="col-6 col-md-2 mb-4 textoComponente">
                <div class="espanol">
                    <a href="indexEsp.php"><img src="img/españa.webp" alt="Spain Flag" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-6 col-md-2 mb-4 textoComponente">
                <div class="english">
                    <a href="indexEng.php"><img src="img/usa.webp" alt="USA Flag" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </main>

    <!-- Defer Bootstrap JavaScript -->
    <script src="./js/bootstrap/bootstrap.bundle.min.js" defer></script>

</body>

</html>
