<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $radio = (float)$_POST['radio'];
    $area = round(pi() * pow($radio, 2), 2);
    $perimetro = round(2 * pi() * $radio, 2);
    
    echo "<h3>Resultados:</h3>";
    echo "Radio: $radio<br>";
    echo "Área: $area<br>";
    echo "Perímetro: $perimetro<br>";
    echo "<p><a href=''>Calcular otro</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Calculadora de Círculo</h3>
    <label for="radio">Radio:</label>
    <input type="number" step="0.01" name="radio" id="radio" required placeholder="Ingresa el radio">
    <button type="submit">Calcular</button>
</form>