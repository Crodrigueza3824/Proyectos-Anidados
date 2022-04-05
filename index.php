<?php
session_start();

if(isset($_SESSION['user_id'])){
    header('Location: http://localhost/Proyectos%20Anidados/loggedin.php');
}

require 'db.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome-1">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <meta name="Description" CONTENT="Author: A.N. Author, Illustrator: P. Picture, Category: Books, Price:  £9.24, Length: 784 pages">
    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
    <meta name="robots" content="noindex,nofollow">
    <title>Manejo de Herramientas Sin Estres</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b6af73380.js" crossorigin="anonymous"></script>
    <script defer src="js/index.js"></script>
</head>
<body class="body-index">
    <header class="header">
        <nav class="nav">
            <a href="#">
                <img src="https://img.freepik.com/vector-gratis/mujer-meditando-naturaleza-concepto-meditacion-relajacion-recreacion-estilo-vida-saludable-yoga-mujer-pose-loto-ilustracion-vectorial_186332-465.jpg?w=826" class = "logo">
            </a>
            <button class="nav-toggle" aria-label = "Abrir Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <il class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link" >Servicios</a>
                </il>
                <il class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link" >Por que este Proyecto</a>
                </il>
                <il class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link" >Contacto</a>
                </il>
                <il class="nav-menu-item">
                    <a href="login.php" class="nav-menu-link nav-link nav-menu-link_active" >Iniciar Sesion</a>
                </il>
            </ul>
        </nav>
    </header>
    <main class="main">
        <ul class="mainContainer">
            <li class="mainList"><a href="#" class="mainItem">Actualizaciones</a></li>
            <li class="mainList"><a href="#" class="mainItem">Noticias</a></li>
            <li class="mainList"><a href="#" class="mainItem">Herramientas</a></li>
        </ul>
        <ul class="mainContainer">
            <li class="mainList"><a href="#" class="mainItem">Cloud</a></li>
            <li class="mainList"><a href="#" class="mainItem">Investigaciones</a></li>
            <li class="mainList"><a href="#" class="mainItem">IA</a></li>
        </ul>
    </main>
</body>
</html>