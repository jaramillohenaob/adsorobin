<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $operacion = $_POST['operacion'];
    
    switch ($operacion) {
        case 'suma':
            $resultado = $a + $b;
            echo "<h3>$a + $b = $resultado</h3>";
            break;
        case 'resta':
            $resultado = $a - $b;
            echo "<h3>$a - $b = $resultado</h3>";
            break;
        case 'multiplicacion':
            $resultado = $a * $b;
            echo "<h3>$a × $b = $resultado</h3>";
            break;
        case 'division':
            if ($b != 0) {
                $resultado = $a / $b;
                echo "<h3>$a ÷ $b = $resultado</h3>";
            } else {
                echo "<h3>Error: División por cero</h3>";
            }
            break;
    }
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Calculadora básica</h3>
    <input type="number" step="any" name="a" placeholder="Número 1" required>
    <select name="operacion" required>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>
    <input type="number" step="any" name="b" placeholder="Número 2" required>
    <button type="submit">Calcular</button>
</form>