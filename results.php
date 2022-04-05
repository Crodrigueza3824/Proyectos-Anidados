<?php

include "db.php";

$nom = 10;

$records1 = $conn->prepare('SELECT  * FROM proyecto_inicio WHERE conexion_id = :conexionId');
$records1->bindParam(':conexionId', $nom);
$records2 = $conn->prepare('SELECT  * FROM proyecto_inicio WHERE conexion_id = :conexionId');
$records2->bindParam(':conexionId', $nom);
$records3 = $conn->prepare('SELECT  * FROM proyecto_inicio');
$records3->execute();
$records1->execute();
$results1 = $records1->fetch(PDO::FETCH_ASSOC);
$records2->execute();
$results3 = $records2->fetch(PDO::FETCH_ASSOC);
$results5 = $records3->fetchAll(PDO::FETCH_ASSOC);

$results2 = json_encode($results1);

$results4 = json_encode($results3);

$results6 = json_encode($results5);


echo $results2;
echo $results4;
echo $results6;

?>