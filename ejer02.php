<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio-02</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white"><h4>Cálculo de precio de gaseosas</h4></div>
                    </div>
                    <div class="card-body">
                    <?php
                        // Obtener los datos del formulario
                        $precio_actual = $_POST['precio'];
                        $cantidad = $_POST['cantidad'];

                        // Calcular el nuevo precio de la gaseosa
                        $nuevo_precio = $precio_actual * 0.95;

                        // Calcular el importe de la compra
                        $importe = $nuevo_precio * $cantidad;

                        // Calcular el importe del descuento
                        $descuento = $importe * 0.07;

                        // Calcular el importe a pagar
                        $importe_pagar = $importe - $descuento;

                        // Calcular el obsequio
                        $obsequio = $cantidad * 2;

                        // Mostrar los resultados
                        echo '<h3>Resultados</h3>';
						echo '<div class="table-responsive">';
						echo '<table class="table">';
                        echo "<tr><td>El nuevo precio de la gaseosa es: </td><td>S/ " . number_format($nuevo_precio, 2) . "</td></tr>";
                        echo "<tr><td>El importe de la compra es: </td><td>S/ " . number_format($importe, 2) . "</td></tr>";
                        echo "<tr><td>El importe del descuento es: </td><td>S/ " . number_format($descuento, 2) . "</td></tr>";
                        echo "<tr><td>El importe a pagar es: </td><td>S/ " . number_format($importe_pagar, 2) . "</td></tr>";
                        echo "<tr><td> ➟ Se obsequiarán </td><td>" . $obsequio . " caramelos.";
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
