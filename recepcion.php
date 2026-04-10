<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $apellido = htmlspecialchars(trim($_POST["apellido"]));
    $edad = intval($_POST["edad"]);

    if (empty($nombre) || empty($apellido) || $edad <= 0) {
        echo "<p>Error: todos los campos son obligartorios.</p>";
    exit;}


$letrasnombre = strlen($nombre);
$letrasapellido = strlen($apellido);
$nombremayuscula = strtoupper($nombre);
$edadinvertida = strrev(strval($edad));

echo "<h2>Resultados:</h2>";
echo "<p>Nombre: " . $nombre . " tiene " . $letrasnombre . " letras.</p>";
echo "<p>Apellido: " . $apellido . " tiene " . $letrasapellido . " letras.</p>";
echo "<p>Edad: " . $edad . " al reves es: " . $edadinvertida .  "</p>";
echo "<p>Nombre en mayuscula: " . $nombremayuscula . "</p>";

} else {
    echo "acceso no permitido.";
}
?>