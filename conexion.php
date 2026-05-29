<?php

$host = "sql302.infinityfree.com";
$bd = "if0_42049473_usuarios";
$usuario = "if0_42049473";
$contrasena = "zDIYevCGDA1";

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