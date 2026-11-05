<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Frutas</title>
    <!-- Enlace de Bootswatch Minty -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/minty/bootstrap.min.css">
    <style>
        td img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        /* Clase personalizada para el color rosa claro */
        .text-rosa-claro {
            color: #ff6b81 !important;
        }
        .btn-outline-rosa {
            color: #ff6b81;
            border-color: #ff6b81;
        }
        .btn-outline-rosa:hover {
            background-color: #ff6b81;
            color: #fff;
        }
    </style>
</head>
<body class="bg-light py-5">

    <div class="container bg-white p-4 p-md-5 rounded-4 shadow-sm">
        <!-- Título con toque en rosa claro -->
        <h1 class="text-center mb-4 fw-bold text-rosa-claro">🍎 Tienda de Frutas 🍓</h1>

        <form action="ticketfrutas.php" method="post">
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead style="background-color: #ffeef2;" class="text-rosa-claro">
                        <tr>
                            <th>Producto</th>
                            <th>Producto</th>
                            <th>Producto</th>
                            <th>Producto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="d-block fw-semibold mb-2">Limón Agrio</span>
                                <img src="limon.jpg" alt="limon agrio"><br>
                                <span class="text-rosa-claro fw-bold d-block my-1">$30</span>
                                <input type="number" class="form-control text-center mx-auto" style="width: 90px;" min="0" max="10" value="0" name="cantidad[]">
                                <input type="hidden" name="precio[]" value="30">
                                <input type="hidden" name="fruta[]" value="limon agrio">
                            </td>
                            <td>
                                <span class="d-block fw-semibold mb-2">Fresa</span>
                                <img src="fresa.jpg" alt="fresa"><br>
                                <span class="text-rosa-claro fw-bold d-block my-1">$80</span>
                                <input type="number" class="form-control text-center mx-auto" style="width: 90px;" min="0" max="10" value="0" name="cantidad[]">
                                <input type="hidden" name="precio[]" value="80">
                                <input type="hidden" name="fruta[]" value="fresa">
                            </td>
                            <td>
                                <span class="d-block fw-semibold mb-2">Manzana</span>
                                <img src="manzana.jpg" alt="manzana"><br>
                                <span class="text-rosa-claro fw-bold d-block my-1">$70</span>
                                <input type="number" class="form-control text-center mx-auto" style="width: 90px;" min="0" max="10" value="0" name="cantidad[]">
                                <input type="hidden" name="precio[]" value="70">
                                <input type="hidden" name="fruta[]" value="manzana">
                            </td>
                            <td>
                                <span class="d-block fw-semibold mb-2">Uva</span>
                                <img src="uva.jpg" alt="uva"><br>
                                <span class="text-rosa-claro fw-bold d-block my-1">$55</span>
                                <input type="number" class="form-control text-center mx-auto" style="width: 90px;" min="0" max="10" value="0" name="cantidad[]">
                                <input type="hidden" name="precio[]" value="55">
                                <input type="hidden" name="fruta[]" value="uva">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="d-block fw-semibold mb-2">Pera</span>
                                <img src="pera.jpg" alt="pera"><br>
                                <span class="text-rosa-claro fw-bold d-block my-1">$45</span>
                                <input type="number" class="form-control text-center mx-auto" style="width: 90px;" min="0" max="10" value="0" name="cantidad[]">
                                <input type="hidden" name="precio[]" value="45">
                                <input type="hidden" name="fruta[]" value="pera">
                            </td>
                            <td>
                                <span class="d-block fw-semibold mb-2">Sandía</span>
                                <img src="sandia.jpg" alt="sandia"><br>
                                <span class="text-rosa-claro fw-bold d-block my-1">$78</span>
                                <input type="number" class="form-control text-center mx-auto" style="width: 90px;" min="0" max="10" value="0" name="cantidad[]">
                                <input type="hidden" name="precio[]" value="70">
                                <input type="hidden" name="fruta[]" value="sandia">
                            </td>
                            <td>
                                <span class="d-block fw-semibold mb-2">Mango</span>
                                <img src="mango.jpg" alt="mango"><br>
                                <span class="text-rosa-claro fw-bold d-block my-1">$80</span>
                                <input type="number" class="form-control text-center mx-auto" style="width: 90px;" min="0" max="10" value="0" name="cantidad[]">
                                <input type="hidden" name="precio[]" value="80">
                                <input type="hidden" name="fruta[]" value="mango">
                            </td>
                            <td>
                                <span class="d-block fw-semibold mb-2">Frambuesa</span>
                                <img src="frambuesa.jpg" alt="frambuesa"><br>
                                <span class="text-rosa-claro fw-bold d-block my-1">$140</span>
                                <input type="number" class="form-control text-center mx-auto" style="width: 90px;" min="0" max="10" value="0" name="cantidad[]">
                                <input type="hidden" name="precio[]" value="140">
                                <input type="hidden" name="fruta[]" value="frambuesa">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Botón con estilo de contorno en rosa -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-outline-rosa btn-lg px-5 shadow-sm">🛒 Realizar Compra</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>