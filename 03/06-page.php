<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = (int)$_POST['n'];
    
    echo "<h3>Números pares del 1 al $n:</h3>";
    for ($i = 2; $i <= $n; $i += 2) {
        echo "$i ";
    }
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Mostrar números pares hasta N</h3>
    <input type="number" name="n" placeholder="Número máximo" required>
    <button type="submit">Mostrar pares</button>
</form>