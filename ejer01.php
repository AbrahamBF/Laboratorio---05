<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio-01</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white"><h4>Cálculo de Bonificación de Vendedores</h4></div>
                    </div>
                    <div class="card-body">
					<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						// Obtener los datos del formulario
						$venta = $_POST["venta"];
						$hijos = $_POST["hijos"];

						// Calcular la comisión, la bonificación, el sueldo bruto, el descuento y el sueldo neto
						$comision = $venta * 0.075;
						$bonificacion = $hijos * 50;
						$sueldo_bruto = 600 + $comision + $bonificacion;
						$descuento = $sueldo_bruto * 0.11;
						$sueldo_neto = $sueldo_bruto - $descuento;

						// Mostrar los resultados en una tabla
						echo '<h3>Resultados</h3>';
						echo '<div class="table-responsive">';
						echo '<table class="table">';
						echo '<tr><td>Importe total vendido del mes:</td><td>S/. ' . $venta . '</td></tr>';
						echo '<tr><td>Cantidad de hijos en edad escolar:</td><td>' . $hijos . '</td></tr>';
						echo '<tr><td>Comisión:</td><td>S/. ' . $comision . '</td></tr>';
						echo '<tr><td>Bonificación:</td><td>S/. ' . $bonificacion . '</td></tr>';
						echo '<tr><td>Sueldo bruto:</td><td>S/. ' . $sueldo_bruto . '</td></tr>';
						echo '<tr><td>Descuento:</td><td>S/. ' . $descuento . '</td></tr>';
						echo '<tr><td>Sueldo neto:</td><td>S/. ' . $sueldo_neto . '</td></tr>';
						echo '</table></div>';
					}
					?>
					</div>
	            </div>
            </div>
        </div>
    </div>
</body>
</html>
