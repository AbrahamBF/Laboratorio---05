<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio-04</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-9 col-lg-7 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white"><h4>Cálculo de Descuentos <br>en tienda de conos de CD</h4></div>
                    </div>
                    <div class="card-body">
                    <?php
                    $precio = $_POST["precio"];
                    $cantidad = $_POST["cantidad"];

                    $importe_sin_descuento = $precio * $cantidad;

                    $descuento1 = $importe_sin_descuento * 0.05;

                    $importe_con_descuento1 = $importe_sin_descuento - $descuento1;

                    $descuento2 = $importe_con_descuento1 * 0.05;

                    $descuento_total = $descuento1 + $descuento2;

                    $importe_a_pagar = $importe_con_descuento1 - $descuento2;

                    echo '<h3>Resultados</h3>';
                    echo '<div class="table-responsive">';
                    echo '<table class="table">';
                    echo "<tr><td>Importe de la compra sin descuento: </td><td>S/ " . number_format($importe_sin_descuento, 2) . "</td></tr>";
                    echo "<tr><td>Importe del primer descuento: </td><td>S/ " . number_format($descuento1, 2) . "</td></tr>";
                    echo "<tr><td>Importe de la compra con el primer descuento aplicado: </td><td>S/" . number_format($importe_con_descuento1, 2) . "</td></tr>";
                    echo "<tr><td>Importe del segundo descuento: </td><td>S/ " . number_format($descuento2, 2) . "</td></tr>";
                    echo "<tr><td>Importe del descuento total: </td><td>S/ " . number_format($descuento_total, 2) . "</td></tr>";
                    echo "<tr><td>Importe a pagar: </td><td>S/ " . number_format($importe_a_pagar, 2) . "</td></tr>";
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
