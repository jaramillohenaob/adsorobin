<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $notas = explode(',', $_POST['notas']);
    $suma = 0;
    $cantidad = count($notas);
    
    foreach ($notas as $nota) {
        $suma += (float)$nota;
    }
    $promedio = round($suma / $cantidad, 2);
    
    echo "<h3>Promedio de $cantidad notas: $promedio</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Calcular promedio de notas</h3>
    <input type="text" name="notas" placeholder="Notas separadas por coma" required>
    <button type="submit">Calcular promedio</button>
</form>