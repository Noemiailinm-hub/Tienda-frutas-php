<html>
<head>
<title>Ticket de compra</title>
</head>
<body>
<?php
include "conexion.php"; // Mando a llamar a la conexión
include "fecha.php"; // Mando a llamar el programa que configura la fecha a la región
$fecha = strftime("%Y-%m-%d"); // configuro la fecha al formato año mes y día
echo $fecha."<br>"; // mando a imprimir la fecha

// recibo las variables de mi formulario
$productoID = $_POST['productoID'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$clienteID = $_POST['clienteID']; // recibo el cliente id para asignarle sus puntos en la tabla

$n = count($productoID); // declaro la variable n para medir la longitud del arreglo productoID
$i = 0; // declaro el contador i para recorrer el arreglo productoID[]

echo date('l jS \of F Y h:i:s A')."<br>"; // mando a imprimir la fecha y la hora en formato
$hora = date('H:i:s'); // declaro la variable hora con el formato horas, minutos y segundos
echo "Tu compra es: <br><ol>";
$acumulado = 0; // declaro acumulado igual a 0, para empezar a sumar los subtotales de mis ventas

try {
    $sql = "INSERT INTO venta (fecha, hora) VALUES ('$fecha', '$hora')";
    $conn->exec($sql);
} catch(PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

while($i < $n) {
    while($cantidad[$i] == 0) {
        $i++;
    }
    echo "<li><b>".$productoID[$i]."</b>";
    echo "<li><b>".$nombre[$i]."</b>";
    echo " cantidad: ".$cantidad[$i];
    echo " precio: ".$precio[$i]." subtotal: ".$precio[$i] * $cantidad[$i]."</li>";
    $subtotal = $precio[$i] * $cantidad[$i];
    $acumulado = $acumulado + $subtotal;
    
    try {
        $sql = "INSERT INTO venta_detalle(ventaid, productoID, nombre, precio, cantidad, subtotal) VALUES ('$ventaid', '$productoID[$i]', '$nombre[$i]', '$precio[$i]', '$cantidad[$i]', '$subtotal')";
        $conn->exec($sql);
    } catch(PDOException $e) {
        echo $sql."<br>".$e->getMessage();
    }
    $i++;
}

$puntos = $acumulado * 0.10;

try {
    $stmt = $conn->prepare("SELECT puntos FROM cliente WHERE clienteID = '$clienteID'");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $sumapuntos = $row['puntos'];
} catch(PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

try {
    $sql = "UPDATE cliente SET puntos = puntos + '$puntos' WHERE clienteID = '$clienteID'";
    $conn->exec($sql);
} catch(PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$totalpuntos = $sumapuntos + $puntos;
echo "<b>Total a Pagar: ".$acumulado."<br>";
echo "<b>Puntos acumulados: ".$sumapuntos."<br>";
echo "<b>Puntos ganados: ".$puntos."<br>";
echo "<b>Total acumulados: ".$totalpuntos."<br>";
echo "</ol>";
?>
</body>
</html>