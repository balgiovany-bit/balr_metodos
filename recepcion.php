<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $apellido = htmlspecialchars(trim($_POST["apellido"]));
    $edad = intval($_POST["edad"]);

    if (empty($nombre) || empty($apellido) || $edad <= 0) {
        echo "<p>Error: todos los campos son obligartorios.</p>";
    exit;}
}

$letrasnombre = strlen($nombre);
$letrasapellido = strlen($apellido);
$nombremayuscula = strtoupper($nombre);
$edadinvertida = strrev(strval($edad));