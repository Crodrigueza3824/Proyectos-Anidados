<?php 
try{
    $conn = new PDO('mysql:utf8mb4;host=localhost;port=3307;dbname=proyecto_anidados', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_PERSISTENT, false);
}catch (PDOException $e){
    die('Conexión Fallida: '.$e->getMessage());
}


?>