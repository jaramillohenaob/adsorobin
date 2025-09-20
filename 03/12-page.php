<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numeros = explode(',', $_POST['numeros']);
    $numeros = array_map('floatval', $numeros);
    sort($numeros);
    
    echo "<h3>Arreglo ordenado: " . implode(', ', $numeros) . "</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Ordenar arreglo de números</h3>
    <input type="text" name="numeros" placeholder="Números separados por coma" required>
    <button type="submit">Ordenar</button>
</form>