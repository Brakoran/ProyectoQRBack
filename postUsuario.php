<?php
//API PARA CREAR REGISTRO DE USUARIO

//Indicamos el control de acceso
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$jsonDatos = json_decode(file_get_contents("php://input"));
if (!$jsonDatos) {
    exit("No hay datos");
}

$bd = include_once "bd.php"; //Llamamos la base de datos


// echo json_encode($jsonDatos);

$sentencia = $bd->prepare("insert into usuarios(pais, ciudad, nombre, celular, telefono_alterno, correo, clave) values (?,?,?,?,?,?,?)");
$resultado = $sentencia->execute([$jsonDatos->pais,$jsonDatos->ciudad,$jsonDatos->nombre,$jsonDatos->celular,$jsonDatos->telefonoAlterno,$jsonDatos->correo,$jsonDatos->clave1]);
echo json_encode([
    "resultado" => $resultado,
]);