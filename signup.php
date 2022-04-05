<?php
session_start();

if(isset($_SESSION['user_id'])){
    header('Location: http://localhost/Proyectos%20Anidados/loggedin.php');
}

require 'db.php';

$message = '';

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO usuarios(nombre, email, password) VALUES (:name, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if($stmt->execute()) {
        header('Location: http://localhost/Proyectos%20Anidados/login.php');
    }else {
        $message = "Sorry an error has occured";
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
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b6af73380.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>  
</head>
<body class = "body-index">
    <?php if(!empty($message)):  ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <header class="header">
        <nav class="nav">
            <a href="#">
                <img src="https://img.freepik.com/vector-gratis/mujer-meditando-naturaleza-concepto-meditacion-relajacion-recreacion-estilo-vida-saludable-yoga-mujer-pose-loto-ilustracion-vectorial_186332-465.jpg?w=826" class="logo">
            </a>
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <h1 href="#" class="nav-h1">Proyectos anidados</h1>
                </li>
            </ul>
        </nav>
    </header>
    <main class = "mainSignUp">
        <div class="mainAdd">
            <div class="mainSubAdd1">
                <ul class="porque">
                    <li class="porqueList"><a href="#" class="porqueReferencia">Herramientas Optimizadas</a></li>
                    <li class="porqueList"><a href="#" class="porqueReferencia">Gestion de Proyectos</a></li>
                    <li class="porqueList"><a href="#" class="porqueReferencia">Solicitud de Servicios en Nube</a></li>
                    <li class="porqueList"><a href="#" class="porqueReferencia">Plantillas Unicas</a></li>
                    <li class="porqueList"><a href="#" class="porqueReferencia">Sevicio 24/7</a></li>
                </ul>
            </div>
            <div class="mainSubAdd2"></div>
        </div>

        <form action="" class="registroForm" method="post">
            <h3 class = "formText">Informacion de la Cuenta</h3>
            <input type = "text" class="inputItem" name = "name" placeholder = "Ingrese su Nombre"  required></input>
            <input type = "text" class ="inputItem" name = "email" placeholder = "Ingrese Correo Electronico" required></input>
            <input type = "password" class = "inputItem" name = "password" placeholder = "Ingrese su Contraseña" required></input>
            <input type = "password" class = "inputItem" name = "passwordConfirm" placeholder = "Confirme su Contraseña" required></input>
            <input type="submit" value="Registrase" class="IngresarButton">
        </form>
    </main>


</body>
</html>