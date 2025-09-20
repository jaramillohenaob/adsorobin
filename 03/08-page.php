<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $txt = $_POST['txt'];
    $txtLimpio = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $txt));
    $esPalindromo = $txtLimpio == strrev($txtLimpio);
    
    echo "<h3>'$txt' " . ($esPalindromo ? "es palíndromo" : "no es palíndromo") . "</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Verificar si una palabra es palíndromo</h3>
    <input type="text" name="txt" placeholder="Palabra o frase" required>
    <button type="submit">Verificar</button>
</form>