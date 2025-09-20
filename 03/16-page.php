<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $monto = (float)$_POST['monto'];
    
    if ($monto >= 1000) {
        $descuento = 0.2; 
    } elseif ($monto >= 500) {
        $descuento = 0.1; 
    } elseif ($monto >= 100) {
        $descuento = 0.05; 
    } else {
        $descuento = 0;
    }
    
    $montoDescuento = $monto * $descuento;
    $total = $monto - $montoDescuento;
    
    echo "<h3>Monto original: $$monto</h3>";
    echo "<h3>Descuento aplicado: " . ($descuento * 100) . "%</h3>";
    echo "<h3>Monto descontado: $$montoDescuento</h3>";
    echo "<h3>Total a pagar: $$total</h3>";
    echo "<p><a href=''>Volver</a></p>";
    exit;
}
?>

<form method="post">
    <h3>Calcular descuento</h3>
    <input type="number" step="0.01" name="monto" placeholder="Monto de compra" required>
    <button type="submit">Calcular descuento</button>
</form>