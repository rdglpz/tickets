<?php
	include 'php/elem_html/input.php';
	include 'php/elem_html/label_solo_lectura.php';
	include 'php/elem_html/button.php';
?>

<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="UTF-8">
			<title>Registro de nuevo ususario</title>
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/form_registro.css">
		</head>
		<body>
			<?php
				/*definicion de inputs, labels, botones.*/
				$input_1 = new input("text","nombre","id_nombre","'Nombre:'","^[a-zA-Z]*$","",0);
				$input_2 = new input("text","id_emp","id_emp_2","'Número de empleado:'","^[0-9]*$","",0);
				$input_3 = new input("password","pass","pass_id","'Contraseña:'","^[a-zA-Z0-9]*$","",0);
				$input_4 = new input("password","pass_2","pass_id2","'Verifica contraseña:'","^[a-zA-Z0-9]*$","",0);
				$label_1 = new label_solo_lectura("id_nombre","Nombre:");
				$label_2 = new label_solo_lectura("id_emp_2","Número de empleado:");
				$label_3 = new label_solo_lectura("pass_id","Contraseña:");
				$label_4 = new label_solo_lectura("pass_id2","Verifica contraseña:");
				$button_1 = new button("submit","registro","Registrar");
				$inputs=[$input_1,$input_2,$input_3,$input_4];
				$labels=[$label_1,$label_2,$label_3,$label_4];
			?>
			<div class="container">
				<form method="post" class="col-md-7 form-margin" name="registro" onsubmit="return verifica_igual()" action ="php/crea_registro/formulario.php">
					<!-- entradas de texto -->
					<div class="form-group">
						<?php
							/*se imprimen los elmentos*/
							for($i=0;$i<count($inputs);$i++){
								$labels[$i]->crea_label();
								$inputs[$i]->crea_input();
							}
						?>
					</div>		
					<br>
					<?php
						/*se imprime el boton*/
						$button_1->crea_button();
					?>
				</form>
			</div>
			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/ver_pass.js"></script>
		</body>
	</html>