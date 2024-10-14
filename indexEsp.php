<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/logo realissa.png" type="image/x-icon">
    <link rel="shortcut icon" href="img/logo realissa.png" type="image/x-icon">

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
<body> <!--incluir navbar--> <?php include 'navbar.php'; ?> <main id="main-content"> <?php include 'php/inicio.php'; ?> </main> <!--Incluir footer--> <?php include 'footer.php'; ?> <!--script bootstrap--> <script src="./js/bootstrap/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> <!--funciones main--> <script src="./js/app.js"></script> <!--funciones realState--> <script src="./js/realState.js"></script></body></html>