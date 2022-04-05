<?php
session_start();

require 'db.php';



if(isset($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT id, email, password, nombre FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    
    

    if(count($results) > 0) {
        $user = $results;
    }
}


if(!empty($_POST['nombreProyecto']) && !empty($_POST['ambitoProyecto']) && !empty($_POST['diaInicio'])){
    $sql = "INSERT INTO proyecto_inicio(nombre_proyecto, ambito_proyecto, dia_inicio_proyecto, conexion_id) VALUES (:nombreProyecto, :ambitoProyecto, :diaInicio, :conexionId)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombreProyecto', $_POST['nombreProyecto']);
    $stmt->bindParam(':ambitoProyecto', $_POST['ambitoProyecto']);
    $stmt->bindParam(':diaInicio', $_POST['diaInicio']);
    $stmt->bindParam(':conexionId', $user['id']);
    
    
    if($stmt->execute()) {
        header('Location: http://localhost/Proyectos%20Anidados/loggedin.php');
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
    <script defer src="js/index.js"></script>
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
    <main class= "createProyectMain">
        <form action="crearProyecto.php" class="createProyectForm" method="post">
            <div class="div1 visible">
                <label for="" class="createProyectLabel">Nombre de Proyecto</label>
                <input type="text" class="craateProyectInput" name="nombreProyecto" required>
                <label for="" class="createProyectLabel">Ambito del Proyecto</label>
                <input type="text" class="craateProyectInput" name="ambitoProyecto" required>
                <label for="" class="createProyectLabel">Dia de Inicio del Proyecto</label>
                <input type="date" class="craateProyectInput" name="diaInicio" required>
                <label for="" class="createProyectLabel">Metas del Proyecto</label>
                <input type="text" class="craateProyectInput" name="metasProyecto" required>
                <label for="" class="createProyectLabel">Dia Final del Proyecto</label>
                <input type="date" class="craateProyectInput"name="diaFinal" required>
            </div>
            <div class="div2 notVisible">
                <label for="" class="createProyectLabel">Metas Secundarias</label>
                <input type="text" class="craateProyectInput" name="metasSecundarias" required>
                <label for="" class="createProyectLabel">Horarios de trabajo</label>
                <input type="time" class="craateProyectInput" name="horarioTrabajo"required>
                <label for="" class="createProyectLabel">Presupuesto Inicial</label>
                <input type="number" class="craateProyectInput" name="presupuestoInicial"required>
                <label for="" class="createProyectLabel">Presupuesto Maximo</label>
                <input type="number" class="craateProyectInput" name="presupuestoMaximo"required>
                <label for="" class="createProyectLabel">Presupuesto Minimo</label>
                <input type="number" class="craateProyectInput" name="presupuestoMinimo" required>
            </div>
            <div class="div3 notVisible">
                <label for="" class="createProyectLabel">Prototipo Conceptual</label>
                <input type="text" class="craateProyectInput" name="prototipoConceptual" required>
                <label for="" class="createProyectLabel">Plantilla Para Proyecto</label>
                <input type="select" class="craateProyectInput" name="plantillaProyecto"required>
                <label for="" class="createProyectLabel">Tipo de Diseño</label>
                <input type="number" class="craateProyectInput" name="tipoDiseño" required>
                <label for="" class="createProyectLabel">Estructura de Procesos</label>
                <input type="number" class="craateProyectInput" name="estructuraProcesos"required>
                <label for="" class="createProyectLabel">Metodologia de Proyecto</label>
                <input type="number" class="craateProyectInput" name="metodologiaProyecto" required>
            </div>
            <div class="div4 notVisible">
                <label for="" class="createProyectLabel">Mapa de Clientes</label>
                <input type="text" class="craateProyectInput" name="mapaClientes"required>
                <label for="" class="createProyectLabel">Encuestas a realizar</label>
                <input type="text" class="craateProyectInput" name="encuestasARealizar"required>
                <label for="" class="createProyectLabel">Posibles Inversores y contratistas</label>
                <input type="text" class="craateProyectInput" name="posiblesInversoresContratistas"required>               
            </div>

            <div class="circles">
                <i class="fa-solid fa-circle dot"></i>
                <i class="fa-regular fa-circle dot1"></i>
                <i class="fa-regular fa-circle dot2"></i>
                <i class="fa-regular fa-circle dot3"></i>
            </div>
            <input type = "button" class="next1 buttonVisible" value="Siguiente"></input>
            
            <div class="button2 buttonNotVisible">    
                <input type = "button" class="previous1" value="Atras"></input>
                <input type = "button" class="next2" value="Siguiente"></input>
            </div>
            <div class="button3 buttonNotVisible">
                <input type = "button" class="previous2" value="Atras"></input>
                <input type = "submit" class="submit1" value="Crear Proyecto"></input>
            </div>
        </form>


    </main>

</body>
</hmtl>