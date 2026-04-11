<?php
if (isset($_GET["termino"]) && !empty($_GET["termino"])) {
    $termino = htmlspecialchars(trim($_GET["termino"]));
    $tipo = htmlspecialchars(trim($_GET["tipo"]));

    $cantLetras = strlen($termino);
    $minusculas = strtolower($termino);
    $tipoMayus = strtoupper($tipo);

    echo "<h2>Resultados de la búsqueda</h2>";
    echo "<p>Buscó: " . $termino . " (tipo: " . $tipoMayus . ")</p>";
    echo "<p>El término tiene " . $cantLetras . " letras.</p>";
    echo "<p>En minúsculas: " . $minusculas . "</p>";
} else {
    echo "Debe ingresar un término. <a href='buscar.html'>Volver</a>";
}
?>
