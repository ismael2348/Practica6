
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="visualpractica6.css">
		<title>
			Practica 6 Programacion
		</title>
		
		
		
	</head>
	<body>
	<form action="" method="post">
	<fieldset>
		<legend>
			Producto 1
		</legend>
			<label>
				Nombre <input type="text" name="n1" />
			</label>
			<br/>
			<label>
				Precio <input type="text" name="p1" />
			</label>
	</fieldset>
	<fieldset>
		<legend>
			Producto 2
		</legend>
			<label>
				Nombre <input type="text" name="n2" />
			</label>
			<br/>
			<label>
				Precio <input type="text" name="p2" />
			</label>
	</fieldset>
	<fieldset>
		<legend>
			Producto 3
		</legend>
			<label>
				Nombre <input type="text" name="n3" />
			</label>
			<br/>
			<label>
				Precio <input type="text" name="p3" />
			</label>
	</fieldset>
	<input type="submit" value="Enviar y Terminar">
		</form>
		<?php if( (isset($_POST["n1"]) && isset($_POST["p1"])) or (isset($_POST["n2"]) && isset($_POST["p2"])) or (isset($_POST["n3"]) && isset($_POST["p3"])) ){?>
			<table>
				<tr>
					<th>
						#
					</th>
					<th>
						Nombre
					</th>
					<th>
						Precio
					</th>
				</tr>
				<br><br><br><br><br><br><br>
				<?php
					$subtotal = 0;
					for($x = 1; $x<=3; $x++){
						$p = $_POST["p".$x];
						$subtotal+=$p;
						echo"<tr><td>$x</td><td>".$_POST["n".$x]."</td><td>$p</td></tr>";
					}
					$iva = $subtotal * .16;
					$total = $iva + $subtotal;
				?>
				<tr><td colspan="2">SubTotal</td><td><?php echo $subtotal;?></td></tr>
				<tr><td colspan="2">Iva</td><td><?php echo $iva;?></td></tr>
				<tr><td colspan="2">Total</td><td><?php echo $total;?></td></tr>
			</table>
		<?php }?>

	</body>
</html>