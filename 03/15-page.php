<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = (int)$_POST['n'];
    $a = 0;
    $b = 1;
    
    echo "<h3>Serie de Fibonacci con $n términos:</h3>";
    echo "$a, $b";
    
    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        echo ", $c";
        $a = $b;
        $b = $c;
    }
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Generar serie de Fibonacci</h3>
    <input type="number" name="n" placeholder="Número de términos" required>
    <button type="submit">Generar</button>
</form>