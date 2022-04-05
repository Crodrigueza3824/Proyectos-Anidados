<?php
session_start();

require 'db.php';



if(isset($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT id, email, password, nombre FROM usuarios WHERE id = :id');
    $records1 = $conn->prepare('SELECT nombre_proyecto FROM proyecto_inicio WHERE conexion_id = :conexionId');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records1->bindParam(':conexionId', $_SESSION['user_id']);
    $records->execute();
    $records1->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $results1 = $records1->fetchAll(PDO::FETCH_ASSOC);
    $array = [];

    if(!empty($results1)){
        $results2 = count($results1);
        
        
        

    }
    

    if(count($results) > 0) {
        $user = $results;
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
    <link rel="stylesheet" href="css/estilo3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b6af73380.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <nav class="nav">
            
            
            <button class="nav-toggle" aria-label = "Abrir Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-menu">             
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Por que Este Proyecto</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Contacto</a>
                </li>
                <li class="nav-menu-item">
                    <a href="logout.php" class="nav-menu-link nav-link nav-menu-link_active">Cerrar Sesion</a>
                </li>
                <a href="#" class="Logi">
                    <img src="imagenes/Pupis.jpeg" class="logoInicioSession">
                </a>
                <label class = "perfiModi">PERFIL</label>                   
            </ul>
        </nav>
    </header>
    <main class="inProcessMain">
        <?php if(!empty($results2)): ?>
            <?php for($i = 0; $i < $results2; $i++): ?>
                <div href="" class="inProcessItem"><?= implode($results1[$i])?>    >></div>

            <?php endfor; ?>   
        <?php endif; ?>   
    </main>

</body>
</html>    