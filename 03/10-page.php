<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $txt = $_POST['txt'];
    $invertida = strrev($txt);
    
    echo "<h3>Texto original: $txt</h3>";
    echo "<h3>Texto invertido: $invertida</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Invertir cadena de texto</h3>
    <input type="text" name="txt" placeholder="Texto" required>
    <button type="submit">Invertir</button>
</form>