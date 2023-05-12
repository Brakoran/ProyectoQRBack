<?php
//Control de acceso
header("Access-Control-Allow-Origin: *");

$jsonDatos = json_decode(file_get_contents("php://input"));
if (!$jsonDatos) {
    exit("No hay datos");
}

//llamamos la base de datos
$bd = include_once "bd.php";

//Preparamos la sentencia.
$sentencia = $bd->prepare("select * from usuarios where id_usuario = ?");
$resultado = $sentencia->execute([$jsonDatos->id]);
$informacion = $sentencia->fetchAll(PDO::FETCH_OBJ);
echo json_encode($informacion);