<?php
session_start();

if(isset($_SESSION['user_id'])){
    header('Location: http://localhost/Proyectos%20Anidados/loggedin.php');
}

require 'db.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);


    $message = '';

    if(!empty($results) && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header('Location: http://localhost/Proyectos%20Anidados/loggedin.php');
    }else {
        $message = "Lo siento sus credenciales no son validas";
    }


}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" CONTENT="Author: A.N. Author, Illustrator: P. Picture, Category: Books, Price:  £9.24, Length: 784 pages">
    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
    <meta name="robots" content="noindex,nofollow">
    <title>Manejo de Herrmientas Sin Estres</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b6af73380.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>  
</head>
<body class="body-login">
    <header class="header">
        <nav class="nav">
            <a href="index.php">
                <img src="https://img.freepik.com/vector-gratis/mujer-meditando-naturaleza-concepto-meditacion-relajacion-recreacion-estilo-vida-saludable-yoga-mujer-pose-loto-ilustracion-vectorial_186332-465.jpg?w=826" class="logo">
            </a>
            <button class="nav-toggle" aria-label = "Abrir Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Servicios</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Por que Este Proyecto</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Contacto</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link nav-menu-link_active">Iniciar Sesion</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="main-login">
        <div class="mainDiv">
            <form action="login.php" class="mainForm" method="post">
                <label for="" class="sesionLabel">Nombre de Usuario</label>
                <input type="text" class="sesionInput" id="email" name="email" placeholder="nombre de usuario" required></input>
                <label for="" class="passwordLabel" >Contraseña</label>
                <input type="password" class="passwordInput" id="password" name="password" placeholder="contraseña" required></input>
                <?php if(!empty($message)): ?>
                    <p class = "error-message"><?= $message ?></p>
                <?php endif; ?>    
                <button type="submit" class="submit-button">Iniciar Sesion</button>
            </form>
            <div class= "registroQuestion">
                <label for="" class="registrarseLabel">No eres miembro de la pagina?</label>
                <a href = "signup.php"><button class="registrarseButton">Registrarse</button></a>
            </div>
        </div>
        <div class = "mainDiv2">
            <img src="https://sel4114publicidad.files.wordpress.com/2015/12/aplicaciones-marketing-big.png" alt="" class="main2-image">
        </div>
    </main class = "main-login">
    <div class="footer-login">
        <ul class="footer-List">
            <h3 class = "footer-h3">Contactenos para mas info</h3>
            <li class = "listElement"><a href=""  class="footer-item">tel: 506 8492-1666</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Como puedo Ayudarle</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Sucribase para recibir emails</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Eventos</a></li>
        </ul>
        <ul class="footer-List">
            <h3 class = "footer-h3">Inovaciones en la nube</h3>
            <li class = "listElement"><a href=""  class="footer-item">Prueba Cloud Gratis</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Migracion a la nube</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Nuevos Procesadores</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Nueva Artificial inteligence</a></li>
        </ul>
        <ul class="footer-List">
            <h3 class = "footer-h3">Plantillas de Proyectos</h3>
            <li class = "listElement"><a href=""  class="footer-item">Plantillas Segun Ambitos Profesionales</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Creacion de Plantillas en linea</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Plantillas de Manejo de Personal</a></li>
            <li class = "listElement"><a href=""  class="footer-item">Proponer plantillas ecologicas</a></li>
        </ul>
    </div>

<?php include "inc/footer.php" ?>
</body>
</html>