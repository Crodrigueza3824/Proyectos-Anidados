<?php
session_start();
include "db.php";

if(isset($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT id, email, nombre, password FROM usuarios WHERE id = :id');
    $records1 = $conn->prepare('SELECT nombre_proyecto, tipo_diseño, estructura_procesos, metodologia_proyecto FROM proyecto_inicio WHERE conexion_id = :id1');
    $records1->bindParam(':id1', $_SESSION['user_id']);
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $records1->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $results1 = $records1->fetch(PDO::FETCH_ASSOC);


}

if(!empty($results)){
    $user = $results;
}

$conti = 1;

if(!empty($results1)){
    $proyecto = $results1;
    if($proyecto['tipo_diseño'] == 'premium'){
        $recordsPlantilla1 = $conn->prepare('SELECT almacen, cambios, creacion_tickets, contabilidad, manejo_personal, estadisticas, codigo_identidad, permisos FROM tipo_diseño_plantilla_1 WHERE id = :id2');
        $recordsPlantilla1->bindParam(':id2', $conti);
        $recordsPlantilla1->execute();
        $resultsPlantilla1 = $recordsPlantilla1->fetch(PDO::FETCH_ASSOC);
    }

    if(!empty($resultsPlantilla1)){
        $plantilla = $resultsPlantilla1;
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
    <header class="header1">
        <nav class="nav">
            
            
            <button class="nav-toggle" aria-label = "Abrir Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="loggedin.php" class="nav-menu-link nav-link">Home</a>
                </li>  
                <?php if(!empty($proyecto)):?>
                    <li class="nav-menu-item">
                        <a href="" class="nav-menu-link nav-link"><?= $proyecto['metodologia_proyecto']?></a>
                    </li>
                <?php endif; ?>                                
                <?php if(!empty($proyecto)):?>
                    <li class="nav-menu-item">
                        <a href="" class="nav-menu-link nav-link"><?= $proyecto['estructura_procesos']?></a>
                    </li>
                <?php endif; ?>                             
                <?php if(!empty($proyecto)):?>
                    <li class="nav-menu-item">
                        <a href="" class="nav-menu-link nav-link"><?= $proyecto['tipo_diseño']?></a>
                    </li>
                <?php endif; ?> 
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
    <main class="mainDesign">
        <?php if(!empty($proyecto)):?>
            <a href="design.php" class="inProcessA"><div class="inProcessItem"><?= $plantilla['almacen']?>    >></div></a>
        <?php endif; ?>
        <?php if(!empty($proyecto)):?>
            <a href="design.php" class="inProcessA"><div class="inProcessItem"><?= $plantilla['cambios']?>    >></div></a>
        <?php endif; ?> 
        <?php if(!empty($proyecto)):?>
            <a href="design.php" class="inProcessA"><div class="inProcessItem"><?= $plantilla['creacion_tickets']?>    >></div></a>
        <?php endif; ?>        
        <?php if(!empty($proyecto)):?>
            <a href="design.php" class="inProcessA"><div class="inProcessItem"><?= $plantilla['manejo_personal']?>    >></div></a>
        <?php endif; ?>                         
    </main>



</body>
</html>