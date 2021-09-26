<?php
require_once __DIR__ . '/clases/Producto.php';
require_once __DIR__ . '/rutas/rutas.php';

$rutas = obtenerRutas();
$vista = $_GET['s'] ?? 'home';
if(!isset($rutas[$vista])) {
    $vista = '404';
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> VeloBike <?= $rutas[$vista]['title'];?></title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    </head>
    <body>

         <header>
            <p id="logo">Velobike</p>
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                        <li><a href="index.php?s=home">Home</a></li>
                        <li><a href="index.php?s=nosotros">Nosotros</a></li>
                        <li><a href="index.php?s=productos">Productos</a></li>
                        <li><a href="index.php?s=contacto">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <?php
        require 'vistas/' . $vista . '.php';
        ?>
        <footer>
            <div>
                <p>VELOBIKE</p>
                <p>Todos los derechos reservados</p>
            </div>
            <div class="redes">
                <ul>
                    <li><a href="https://www.facebook.com/" id="fb" target="_blank">Facebook </a></li>
                    <li><a href="https://www.instagram.com/" id="ig" target="_blank">Instagram </a></li>
                    <li><a href="https://web.whatsapp.com/%F0%9F%8C%90/es" id="wp" target="_blank">Whatsapp </a></li>
                </ul>
            </div>
        </footer>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>