<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Autos - Volkswagen</title>
     <link href="https://bootswatch.com/5/morph/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">Volkswagen - Catálogo de 6 Modelos</h1>
        <p class="text-center text-muted mb-5">Práctica de Arreglos y Matrices en PHP</p>

        <div class="row">
            <?php
            $autos = array(
                array("modelo" => "Polo", "precio" => 280000, "version" => "basico", "multiplicador" => 1.0),
                array("modelo" => "Virtus", "precio" => 310000, "version" => "deportivo", "multiplicador" => 1.3),
                array("modelo" => "Jetta", "precio" => 360000, "version" => "lujo", "multiplicador" => 1.5),
                array("modelo" => "Taos", "precio" => 450000, "version" => "basico", "multiplicador" => 1.0),
                array("modelo" => "Tiguan", "precio" => 520000, "version" => "deportivo", "multiplicador" => 1.3),
                array("modelo" => "Teramont", "precio" => 700000, "version" => "lujo", "multiplicador" => 1.5)
            );
            foreach ($autos as $auto) {
                $precio_final = $auto["precio"] * $auto["multiplicador"];
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card shadow-sm h-100">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title text-primary">Modelo: ' . $auto["modelo"] . '</h5>';
                echo '<p class="card-text mb-1"><strong>Versión:</strong> ' . ucfirst($auto["version"]) . '</p>';
                echo '<p class="card-text mb-1">Precio Base: $' . number_format($auto["precio"], 2) . '</p>';
                echo '<p class="card-text text-success fw-bold">Precio con ajuste: $' . number_format($precio_final, 2) . '</p>';
                echo '</div>';
                echo '</div>';  
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>