<?php

// Con este archivo nos conectamos a la bases de datos.

$contraseña = "U-p-Bu_Lios@7&#o";                   //Contraseña de la base de datos
$usuario = "id18347793_toor";                          //Usuario de la base de datos
$nombre_base_de_datos = "id18347793_identificame";     //Nombre de la base de datos

//Intentamos realizar la conexion.
try {
    return new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
} catch (Exception $e) {
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

