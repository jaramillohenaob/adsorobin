<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = (int)$_POST['n'];
    $fact = 1;
    
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    
    echo "<h3>Factorial de $n es: $fact</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Calcular factorial</h3>
    <input type="number" name="n" placeholder="Número" required>
    <button type="submit">Calcular factorial</button>
</form>