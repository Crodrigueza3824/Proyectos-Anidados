<?php
session_start();

if(empty($_SESSION['user_id'])){
    header('Location: http://localhost/Proyectos%20Anidados/login.php');
}

require 'db.php';

if(isset($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT id, email, nombre, password FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);


}






if(!empty($results)){
    $user = $results;
}

$estru = '';
$estru1 = '';
$estru2 = '';


if(isset($_POST['tipoDiseño'])){
    $getInput = $_POST['tipoDiseño'];
    $selectedOption = "";
    foreach($getInput as $option =>$value){
        $selectedOption .= $value;
    }
    $estru =  strval($selectedOption);

}


if(isset($_POST['estructuraProcesos'])){
    $getInput1 = $_POST['estructuraProcesos'];
    $selectedOption1 = "";
    foreach($getInput1 as $option =>$value){
        $selectedOption1 .= $value;
    }
    $estru1 =  strval($selectedOption1);

}

if(isset($_POST['metodologiaProyecto'])){
    $getInput2 = $_POST['metodologiaProyecto'];
    $selectedOption2 = "";
    foreach($getInput2 as $option =>$value){
        $selectedOption2 .= $value;
    }
    $estru2 =  strval($selectedOption2);

}



$nom = 10;

$records1 = $conn->prepare('SELECT  * FROM proyecto_inicio WHERE conexion_id = :conexionId');
$records1->bindParam(':conexionId', $_SESSION['user_id']);
$records2 = $conn->prepare('SELECT  * FROM proyecto_inicio WHERE conexion_id = :conexionId');
$records2->bindParam(':conexionId', $_SESSION['user_id']);
$records3 = $conn->prepare('SELECT  * FROM proyecto_inicio');
$records3->execute();
$records1->execute();
$results1 = $records1->fetch(PDO::FETCH_ASSOC);
$records2->execute();
$results3 = $records2->fetch(PDO::FETCH_ASSOC);
$results5 = $records3->fetchAll(PDO::FETCH_ASSOC);





if(isset($_POST['timespent'])){
    $records7 = $conn->prepare('SELECT tiempo FROM tiempos_creacion_proyecto WHERE tiempo_id = :id2');
    $records7->bindParam(':id2', $_SESSION['user_id']);
    $records7->execute();
    $resu = $records7->fetch(PDO::FETCH_ASSOC);
    $resu1 = $resu['tiempo'];
    $cate = $_POST['timespent'];
    $sumi = intval($resu1) + intval($cate);
}




if(isset($_POST['timespent'])){
    $records6 = $conn->prepare('DELETE FROM tiempos_creacion_proyecto WHERE tiempo_id = :id4');
    $records6->bindParam(':id4', $_SESSION['user_id']);
    $records6->execute();

}



if(isset($_POST['timespent'])){
    $records4 = $conn->prepare('INSERT INTO tiempos_creacion_proyecto(tiempo, tiempo_id) VALUES (:tiempo, :id3)');
    $records4->bindParam(':tiempo', $sumi);
    $records4->bindParam(':id3', $_SESSION['user_id']);
    $records4->execute();
}





if(isset($_POST['nombreProyecto'])){
    $sql = "INSERT INTO proyecto_inicio(tipo_diseño, estructura_procesos, metodologia_proyecto, conexion_id, nombre_proyecto,tematica_proyecto, dia_inicio, metas_proyecto, dia_final, metas_secundarias, horario_inicio_diurno, horario_inicio_nocturno, horario_final_diurno, horario_final_nocturno, presupuesto_inicial, presupuesto_maximo, presupuesto_minimo, prototipo_conceptual, plantilla_proyecto, mapa_clientes, encuestas, posibles_inversores) VALUES (:tipo, :estructura, :metodologia, :conexionId, :nombreProyecto, :tematicaProyecto, :diaInicio, :metasProyecto, :diaFinal, :metasSecundarias, :horarioInicioDiurno, :horarioInicioNocturno, :horarioFinalDiurno, :horarioFinalNocturno, :presupuestoInicial, :presupuestoMaximo, :presupuestoMinimo, :prototipoConceptual, :plantillaProyecto, :mapaClientes, :encuestas, :posibleInversores)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':tipo', $estru);
    $stmt->bindParam(':estructura', $estru1);
    $stmt->bindParam(':metodologia', $estru2);
    $stmt->bindParam(':conexionId', $_SESSION['user_id']);
    $stmt->bindParam(':nombreProyecto', $_POST['nombreProyecto']);
    $stmt->bindParam(':tematicaProyecto', $_POST['tematicaProyecto']);
    $stmt->bindParam(':diaInicio', $_POST['diaInicio']);
    $stmt->bindParam(':metasProyecto', $_POST['metasProyecto']);
    $stmt->bindParam(':diaFinal', $_POST['diaFinal']);
    $stmt->bindParam('metasSecundarias', $_POST['metasSecundarias']);
    $stmt->bindParam(':horarioInicioDiurno', $_POST['horarioInicioDiurno']);
    $stmt->bindParam(':horarioInicioNocturno', $_POST['horarioInicioNocturno']);
    $stmt->bindParam(':horarioFinalDiurno', $_POST['horarioFinalDiurno']);
    $stmt->bindParam(':horarioFinalNocturno', $_POST['horarioFinalNocturno']);
    $stmt->bindParam(':presupuestoInicial', $_POST['presupuestoInicial']);
    $stmt->bindParam(':presupuestoMaximo', $_POST['presupuestoMaximo']);
    $stmt->bindParam(':presupuestoMinimo', $_POST['presupuestoMinimo']);
    $stmt->bindParam(':prototipoConceptual', $_POST['prototipoConceptual']);
    $stmt->bindParam(':plantillaProyecto', $_POST['plantillaProyecto']);
    $stmt->bindParam(':mapaClientes', $_POST['mapaClientes']);
    $stmt->bindParam(':encuestas', $_POST['encuestas']);
    $stmt->bindParam(':posibleInversores', $_POST['posibleInversores']);
    


    if($stmt->execute()){

        header('Location: http://localhost/Proyectos%20Anidados/loggedin.php');
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
    <script defer src="js/cronometro.js"></script>
</head>
<body>
<header class="header">
        <nav class="nav">
            
            <button class="nav-toggle" aria-label = "Abrir Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="loggedin.php" class="nav-menu-link nav-link">Home</a>
                </li>                      
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
                <label for="" class="createProyectLabel">Tematica de Proyecto</label>
                <input type="text" class="craateProyectInput" name="tematicaProyecto" required>
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
                <label for="" class="createProyectLabel">Horarios de Inicio</label>
                <label for="" class="createProyectLabel">Diurno</label>
                <input type="time" class="craateProyectInput" name="horarioInicioDiurno"required>
                <label for="" class="createProyectLabel">Nocturno</label>
                <input type="time" class="craateProyectInput" name="horarioInicioNocturno"required>
                <label for="" class="createProyectLabel">Horarios de Salida</label>
                <label for="" class="createProyectLabel">Diurno</label>
                <input type="time" class="craateProyectInput" name="horarioFinalDiurno"required>
                <label for="" class="createProyectLabel">Nocturno</label>
                <input type="time" class="craateProyectInput" name="horarioFinalNocturno"required>
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
                <input type="text" class="craateProyectInput" name="plantillaProyecto"required>
                <label for="tipoDiseño" class="createProyectLabel" >Tipo de Diseño</label>
                <select  class="craateProyectInput"  name="tipoDiseño[]" required>
                    <option value="standar">Standart</option>
                    <option value="conEstadisticas">Con estadisticas</option>
                    <option value="premium">Premium</option>
                </select>
                <label for="estructuraProcesos" class="createProyectLabel"  >Estructura de Procesos</label>
                <select class="craateProyectInput" name="estructuraProcesos[]"  required>
                    <option value="matematico">Matematico</option>
                    <option value="estadistico">Estadistico</option>
                    <option value="desarrolloSoftware">Desarrollo de Software</option>
                </select>
                <label for="metodologiaProyecto" class="createProyectLabel" >Metodologia de Proyecto</label>
                <select  class="craateProyectInput" name="metodologiaProyecto[]" required>
                    <option value="cascada">En cascada</option>
                    <option value="scrum">Scrum</option>
                    <option value="agilStandart">Agil Standart</option>
                </select>
            </div>
            <div class="div4 notVisible">
                <label for="" class="createProyectLabel">Mapa de Clientes</label>
                <input type="text" class="craateProyectInput" name="mapaClientes"required>
                <label for="" class="createProyectLabel">Encuestas a realizar</label>
                <input type="text" class="craateProyectInput" name="encuestas"required>
                <label for="" class="createProyectLabel">Posibles Inversores y contratistas</label>
                <input type="text" class="craateProyectInput" name="posibleInversores"required>               
            </div>

            <div class="circles">
                <i class="fa-solid fa-circle dot"></i>
                <i class="fa-regular fa-circle dot1"></i>
                <i class="fa-regular fa-circle dot2"></i>
                <i class="fa-regular fa-circle dot3"></i>
            </div>
            <input type = "button" class="next1 buttonVisible" value="Siguiente"></input>
            <input class="timepage buttonNotVisible" size="5" id="timespent" name="timespent"><br>
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
