<!DOCTYPE html>
<html lang="en">
<head>
<title>Frutas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1>Tienda de Frutas</h1><br><br>
<?php
date_default_timezone_set('America/Mexico_City');
include "fecha.php"; 
$fecha = strftime("%Y-%m-%d"); 
$fruta = $_POST['fruta'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = 0;
echo "Tu compra es: <br>";
echo "<table><tr><td>fruta</td><td>cantidad</td><td>precio</td><td>subtotal</td></tr>";

$i = 0;
$n = count($fruta);
while($i < $n) {
    while($cantidad[$i] == 0) {
        $i++;
    }
    $subtotal = $precio[$i] * $cantidad[$i];
    echo "<tr><td>".$fruta[$i]."</td><td>";
    echo $cantidad[$i]."</td><td>";
    echo $precio[$i]."</td><td>";
    echo $subtotal."</td></tr>";
    $total += $subtotal;
    $i++;
}
echo "<tr><td>Total a pagar: </td><td></td><td></td><td>".$total."</td></tr>";
echo "</table>";
?>
</body>
</html>