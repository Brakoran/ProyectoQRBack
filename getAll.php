<?php
//Control de acceso
header("Access-Control-Allow-Origin: http://localhost:4200");

//llamamos la base de datos
$bd = include_once "bd.php";

//Preparamos la sentencia.
$sentencia = $bd->query("
SELECT
    * FROM usuarios
");
$informacion = $sentencia->fetchAll(PDO::FETCH_OBJ);
echo json_encode($informacion);