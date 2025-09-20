<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $peso = (float)$_POST['peso'];
    $altura = (float)$_POST['altura'];
    $imc = round($peso / ($altura * $altura), 2);
    
    echo "<h3>Peso: $peso kg</h3>";
    echo "<h3>Altura: $altura m</h3>";
    echo "<h3>IMC: $imc</h3>";
    
    if ($imc < 18.5) {
        echo "<h3>Categoría: Bajo peso</h3>";
    } elseif ($imc < 25) {
        echo "<h3>Categoría: Peso normal</h3>";
    } elseif ($imc < 30) {
        echo "<h3>Categoría: Sobrepeso</h3>";
    } else {
        echo "<h3>Categoría: Obesidad</h3>";
    }
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Calcular IMC</h3>
    <input type="number" step="0.01" name="peso" placeholder="Peso (kg)" required>
    <input type="number" step="0.01" name="altura" placeholder="Altura (m)" required>
    <button type="submit">Calcular IMC</button>
</form>