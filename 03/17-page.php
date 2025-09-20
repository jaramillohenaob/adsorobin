<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = (int)$_POST['num'];
    $min = (int)$_POST['min'];
    $max = (int)$_POST['max'];
    
    if ($num >= $min && $num <= $max) {
        echo "<h3>El número $num está dentro del rango [$min, $max]</h3>";
    } else {
        echo "<h3>El número $num está fuera del rango [$min, $max]</h3>";
    }
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Validar si un número está en un rango</h3>
    <input type="number" name="num" placeholder="Número a validar" required>
    <input type="number" name="min" placeholder="Límite inferior" required>
    <input type="number" name="max" placeholder="Límite superior" required>
    <button type="submit">Validar</button>
</form>