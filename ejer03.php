<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio-03</title>
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
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white"><h4>Cálculo de Alquiler de automóviles</h4></div>
                    </div>
                    <div class="card-body">
		            <?php
			            $tarifa = $_POST["tarifa"];
			            $dias = $_POST["dias"];
			            $importe_bruto = $tarifa * $dias;
			            $descuento = $importe_bruto * 0.15;
			            $importe_neto = $importe_bruto - $descuento;
			            $obsequio = $dias * 3;
                        echo '<h3>Resultados</h3>';
						echo '<div class="table-responsive">';
						echo '<table class="table">';
			            echo "<tr><td>Importe bruto: </td><td>S/ ".number_format($importe_bruto, 2)."</td></tr>";
			            echo "<tr><td>Descuento: </td><td>S/ ".number_format($descuento, 2)."</td></tr>";
			            echo "<tr><td>Importe neto a pagar: </td><td>S/ ".number_format($importe_neto, 2)."</td></tr>";
			            echo "<tr><td> ➟ Lapiceros de obsequio: </td><td>".$obsequio."</td></tr>";
		            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
