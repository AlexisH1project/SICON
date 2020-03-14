<?php 

		include "configuracion.php";
		//header ('Content-type: text/html; charset=utf-8');
		$rolSegimiento = $_POST['userName'];
		$id_Fom = $_POST['noFomope'];
		$rol =  $_POST['noFomope'];


		$colorAccion = "amarillo0";
		//$accionB = $_POST['botonAccion'];
		$analista = $_POST['usuar'];
		$hoy = "select CURDATE()";
		$tiempo ="select curTime()";

			 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
			 		$row = mysqli_fetch_row($resultHoy);
			 		$row2 = mysqli_fetch_row($resultTime);
			 }

		if($fechaIngresoUp <= $row[0] ){

					$sqlRol = "SELECT id_rol FROM usuarios WHERE usuario = '$rolSegimiento'";
					if ($result = mysqli_query($conexion,$sqlRol)) {
						$rowRol = mysqli_fetch_row($result);

						if($rowRol[0] == '0'){
							$sqlL = "UPDATE fomope SET color_estado='$colorAccion',usuario_name='$rolSegimiento', unidad='$unidadUp',rfc='$rfcUp',curp='$curpUp',apellido_1='$apellido1Up',apellido_2='$apellido2Up',nombre='$nombreUp',fechaIngreso='$fechaIngresoUp',tipoEntrega='$tipoEntregaUp',tipoDeAccion='$radioUpRechazar',justificacionRechazo='$motivoRUp', fechaAutorizacion = '$row[0] - $rolSegimiento', analistaCap='$analista', vigenciaDel = '$fechaDel', vigenciaAl = '$fechaAl' WHERE id_movimiento = '$id_Fom'";
								mysqli_query($conexion,$sqlL);

		               			echo "<script> alert('Fomope Actualizado'); window.location.href = '../luluConsulta.php?usuario_rol=$rolSegimiento'</script>";


						}else if($rowRol[0] == '1'){
							$sqlCL = "UPDATE fomope SET color_estado='amarillo',usuario_name='$rolSegimiento', unidad='$unidadUp',rfc='$rfcUp',curp='$curpUp',apellido_1='$apellido1Up',apellido_2='$apellido2Up',nombre='$nombreUp',fechaIngreso='$fechaIngresoUp',tipoEntrega='$tipoEntregaUp',tipoDeAccion='$radioUpRechazar',justificacionRechazo='$motivoRUp', analistaCap='$analista', fechaCaptura = '$row[0] - $rolSegimiento' , vigenciaDel = '$fechaDel', vigenciaAl = '$fechaAl' WHERE id_movimiento = '$id_Fom'";
								mysqli_query($conexion,$sqlCL);
		               			echo "<script> alert('Fomope Actualizado'); window.location.href = '../lulu.php?usuario_rol=$rolSegimiento'</script>";

						}
						$sqlH = "INSERT INTO historial (usuario,fechaMovimiento,horaMovimiento) VALUES ('$rolSegimiento','$row[0]','$row2[0]')";
										$resultH = mysqli_query($conexion,$sqlH);	

					}else {
						echo '<script type="text/javascript">alert("Error en la conexion");</script>';
						echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
					}

		}else{
			 echo "<script> alert('La fecha no puede ser mayor a la actual'); window.location.href = '../negroEditar.php?usuario_rol=$rolSegimiento&id_mov=$id_Fom'</script>";


		}
 ?>