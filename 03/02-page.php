<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = (int)$_POST['num'];
    
    echo "<h3>Tabla de multiplicar del $num:</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Generar tabla de multiplicar</h3>
    <input type="number" name="num" placeholder="Número" required>
    <button type="submit">Generar tabla</button>
</form>