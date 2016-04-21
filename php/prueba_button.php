<?php
	include 'conectar 2.php';
	include 'crea_dropbutton.php';
	$datos = [];
	$roles = new extrae_datos("nombre_roles_usuario","000000001","idUsuarios",$consulta_db);
	$datos = $roles->obtener_datos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="../css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<br>
		<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" id="dpmenu1" data-toggle="dropdown" aria-expanded="true">
				Roles
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dpmenu1">

				<?php
					for ($i=0;$i<count($datos);$i++){
						?>
						<li role="presentation"><a role="item" href="#"><?php echo $datos[$i]; ?></a></li>
						<?php
					}
				?>
			</ul>
		</div>
	</div>
	<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>