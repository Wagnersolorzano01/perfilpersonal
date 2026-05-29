<?php

$host = "localhost";
$bd = "usuarios";
$usuario = "root";
$contrasena = "";


try {

    $conexion = new PDO(
        "mysql:host=$host;dbname=$bd;charset=utf8",
        $usuario,
        $contrasena
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    die("Error de conexión con la base de datos.");

}

?>