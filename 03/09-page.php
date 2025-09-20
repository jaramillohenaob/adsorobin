<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $txt = $_POST['txt'];
    $vocales = preg_match_all('/[aeiouáéíóú]/i', $txt);
    
    echo "<h3>La cadena '$txt' tiene $vocales vocales</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Contar vocales en una cadena</h3>
    <input type="text" name="txt" placeholder="Texto" required>
    <button type="submit">Contar vocales</button>
</form>