<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $c = (float)$_POST['c'];
    $mayor = max($a, $b, $c);
    
    echo "<h3>El mayor de $a, $b y $c es: $mayor</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Determinar el mayor de tres números</h3>
    <input type="number" step="any" name="a" placeholder="Número 1" required>
    <input type="number" step="any" name="b" placeholder="Número 2" required>
    <input type="number" step="any" name="c" placeholder="Número 3" required>
    <button type="submit">Determinar mayor</button>
</form>