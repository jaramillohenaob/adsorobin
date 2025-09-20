<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = (int)$_POST['num'];
    $esPrimo = true;
    
    if ($num <= 1) {
        $esPrimo = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
    }
    
    echo "<h3>$num " . ($esPrimo ? "es primo" : "no es primo") . "</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Verificar si un número es primo</h3>
    <input type="number" name="num" placeholder="Número" required>
    <button type="submit">Verificar</button>
</form>