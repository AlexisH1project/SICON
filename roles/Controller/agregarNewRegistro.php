<?php 

		include "configuracion.php";
		//header ('Content-type: text/html; charset=utf-8');
		$usuarioEdito = $_POST['userName'];
		$unidadAdd = $_POST['unexp_1'];
		$rfcAdd = strtoupper($_POST['rfcL_1']);
		$curpAdd = strtoupper($_POST['curp']);	
		$apellido1Add = strtoupper($_POST['apellido1']);	
		$apellido2Add = strtoupper($_POST['apellido2']);	
		$nombreAdd = strtoupper($_POST['nombre']);
		$fechaIngresoAdd = $_POST['fechaIngreso'];
		$tipoEntregaAdd = strtoupper($_POST['TipoEntregaArchivo']);
		$radioAdd_rechazar = $_POST['botonAccion'];
		$motivoR = $_POST['comentarioR'];
		$fechaDel = $_POST['del2'];
		$fechaAl = $_POST['al3'];

		$fechaArchivoAdd = 'Pendiente'; //strtoupper($_POST['fechaArchivo']
		$fechaRLaboralesAdd = 'Pendiente'; // strtoupper($_POST['fechaRLaborales'];
		$ofEntregaRLAdd = 'Pendiente'; // strtoupper($_POST['ofEntregaRL'];
		$archivoScan = 'Pendiente';// strtoupper($_POST['ejemplo_archivo_1'];
		$fechaEntregaUnidadAdd = 'Pendiente';// strtoupper($_POST['fechaEntregaUnidad'];
		$ofEntregaUnidadAdd = 'Pendiente'; //strtoupper($_POST['ofEntregaUnidad'];

		$analista = $_POST['usuar'];
		
		$colorAccion = "";

			$hoy = "select CURDATE()";
		   	$tiempo ="select curTime()";


		$sqlRol = "SELECT id_rol FROM usuarios WHERE usuario = '$usuarioEdito'";
		if($resultSqlRol = mysqli_query($conexion,$sqlRol)){
			$idRolActual = mysqli_fetch_row($resultSqlRol);
		}

		  

		if($fechaArchivoAdd == "" || $fechaRLaboralesAdd == "" || $fechaEntregaUnidadAdd == ""){
			$fechaArchivoAdd = "Pendiente";
			$fechaRLaboralesAdd = "Pendiente";
			$fechaEntregaUnidadAdd = "Pendiente";
		}

		if($motivoR == "" && $radioAdd_rechazar == "Rechazar"){
               echo "<script> alert('Es necesario agregar el motivo del Rechazo'); window.location.href = '../blancoLulu.php?usuario_rol=$usuarioEdito'</script>";
			
		}else{
			
			if($radioAdd_rechazar == "Aceptar" AND $idRolActual[0] == 1){
				$colorAccion = "amarillo";
			}else if($radioAdd_rechazar == "Aceptar" AND $idRolActual[0] == 0){
				$colorAccion = "amarillo0";
			}else{
				$colorAccion = "negro";
			}
			if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
						 		$row = mysqli_fetch_row($resultHoy);
						 		$row2 = mysqli_fetch_row($resultTime);
					 		}

				$sql = "INSERT INTO fomope (color_estado,usuario_name,unidad,rfc,curp,apellido_1,apellido_2,nombre,fechaIngreso,tipoEntrega,tipoDeAccion,justificacionRechazo,quincenaAplicada,anio,oficioUnidad,fechaOficio,fechaRecibido,codigo,n_puesto,clavePresupuestaria,codigoMovimiento,descripcionMovimiento,vigenciaDel,vigenciaAl,entidad,consecutivoMaestroPuestos,puestos,observaciones,fechaEnviadaRubricaDspo,fechaEnviadaRubricaDipsp,fechaEnviadaRubricaDgrho,fechaRecepcionSpc,fechaEnvioSpc,fechaReciboDspo,folioSpc,fechaCapturaNomina,fechaEntregaArchivo,fechaEntregaRLaborales,OfEntregaRLaborales,fomopeDigital,fechaEntregaUnidad,OfEntregaUnidad,analistaCap,fechaCaptura) VALUES ('$colorAccion','$usuarioEdito','$unidadAdd','$rfcAdd','$curpAdd','$apellido1Add','$apellido2Add','$nombreAdd','$fechaIngresoAdd','$tipoEntregaAdd','$radioAdd_rechazar','$motivoR','','','','','','','','','','','$fechaDel','$fechaAl','','','','','','','','','','','','','$fechaArchivoAdd','$fechaRLaboralesAdd','$ofEntregaRLAdd','$archivoScan','$fechaEntregaUnidadAdd','$ofEntregaUnidadAdd','$analista','$row[0] - $usuarioEdito')";

			$sqlUser = "SELECT id_rol FROM usuarios WHERE usuario = '$usuarioEdito'";
			 $resultU = mysqli_query($conexion,$sqlUser);
			$rowRol = mysqli_fetch_row($resultU);

			if($rowRol[0] == 0){
				$sql = "INSERT INTO fomope (color_estado,usuario_name,unidad,rfc,curp,apellido_1,apellido_2,nombre,fechaIngreso,tipoEntrega,tipoDeAccion,justificacionRechazo,quincenaAplicada,anio,oficioUnidad,fechaOficio,fechaRecibido,codigo,n_puesto,clavePresupuestaria,codigoMovimiento,descripcionMovimiento,vigenciaDel,vigenciaAl,entidad,consecutivoMaestroPuestos,puestos,observaciones,fechaEnviadaRubricaDspo,fechaEnviadaRubricaDipsp,fechaEnviadaRubricaDgrho,fechaRecepcionSpc,fechaEnvioSpc,fechaReciboDspo,folioSpc,fechaCapturaNomina,fechaEntregaArchivo,fechaEntregaRLaborales,OfEntregaRLaborales,fomopeDigital,fechaEntregaUnidad,OfEntregaUnidad,analistaCap,fechaCaptura) VALUES ('$colorAccion','$usuarioEdito','$unidadAdd','$rfcAdd','$curpAdd','$apellido1Add','$apellido2Add','$nombreAdd','$fechaIngresoAdd','$tipoEntregaAdd','$radioAdd_rechazar','$motivoR','','','','','','','','','','','$fechaDel','$fechaAl','','','','','','','','','','','','','$fechaArchivoAdd','$fechaRLaboralesAdd','$ofEntregaRLAdd','$archivoScan','$fechaEntregaUnidadAdd','$ofEntregaUnidadAdd','$analista','$row[0] - $usuarioEdito')";
			

			}else if ($rowRol[0] == 1){
				$sql = "INSERT INTO fomope (color_estado,usuario_name,unidad,rfc,curp,apellido_1,apellido_2,nombre,fechaIngreso,tipoEntrega,tipoDeAccion,justificacionRechazo,quincenaAplicada,anio,oficioUnidad,fechaOficio,fechaRecibido,codigo,n_puesto,clavePresupuestaria,codigoMovimiento,descripcionMovimiento,vigenciaDel,vigenciaAl,entidad,consecutivoMaestroPuestos,puestos,observaciones,fechaEnviadaRubricaDspo,fechaEnviadaRubricaDipsp,fechaEnviadaRubricaDgrho,fechaRecepcionSpc,fechaEnvioSpc,fechaReciboDspo,folioSpc,fechaCapturaNomina,fechaEntregaArchivo,fechaEntregaRLaborales,OfEntregaRLaborales,fomopeDigital,fechaEntregaUnidad,OfEntregaUnidad, fechaAutorizacion,analistaCap) VALUES ('$colorAccion','$usuarioEdito','$unidadAdd','$rfcAdd','$curpAdd','$apellido1Add','$apellido2Add','$nombreAdd','$fechaIngresoAdd','$tipoEntregaAdd','$radioAdd_rechazar','$motivoR','','','','','','','','','','','$fechaDel','$fechaAl','','','','','','','','','','','','','$fechaArchivoAdd','$fechaRLaboralesAdd','$ofEntregaRLAdd','$archivoScan','$fechaEntregaUnidadAdd','$ofEntregaUnidadAdd','$row[0]','$analista')";

			}
			

			if (mysqli_query($conexion,$sql)) {
						
				if($colorAccion == "negro"){
						$sql2 = "SELECT MAX(id_movimiento) AS id FROM fomope";

		             	if($resultado = mysqli_query($conexion,$sql2)){

	             			if ($row = mysqli_fetch_row($resultado)) {
								$id = trim($row[0]);
							}

							if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
						 		$row = mysqli_fetch_row($resultHoy);
						 		$row2 = mysqli_fetch_row($resultTime);
					 		}
							$sqlH = "INSERT INTO historial (id_movimiento,usuario,fechaMovimiento,horaMovimiento) VALUES ('$id', '$usuarioEdito','$row[0]','$row2[0]')";
							 	mysqli_query($conexion,$sqlH);

							$sqlAgregarRechazo = "INSERT INTO rechazos (id_movimiento,justificacionRechazo,usuario,fechaRechazo) VALUES ('$id', '$motivoR', '$usuarioEdito','$row[0]')";  
							if (mysqli_query($conexion,$sqlAgregarRechazo)){

									$sqlUser = "SELECT id_rol FROM usuarios WHERE usuario = '$usuarioEdito'";
									if($resultU = mysqli_query($conexion,$sqlUser)){
										$rowRol = mysqli_fetch_row($resultU);
										if($rowRol[0] == 0){

										echo "<script> alert('Fomope enviado a revision'); window.location.href = '../luluConsulta.php?usuario_rol=$usuarioEdito'</script>";

										}else if ($rowRol[0] == 1){
										echo "<script> alert('Fomope enviado a revision'); window.location.href = '../lulu.php?usuario_rol=$usuarioEdito'</script>";

										}
									}

									
							}else{
								echo '<script type="text/javascript">alert("Error en la conexion");</script>';
								echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
							}  	
		             	}else{

							echo '<script type="text/javascript">alert("Error en la conexion");</script>';
							echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
		             	}

				}else{
					$sql2 = "SELECT MAX(id_movimiento) AS id FROM fomope";

		             	if($resultado = mysqli_query($conexion,$sql2)){

	             			if ($row = mysqli_fetch_row($resultado)) {
								$id = trim($row[0]);
							}
							if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
						 		$row = mysqli_fetch_row($resultHoy);
						 		$row2 = mysqli_fetch_row($resultTime);
					 		}
							$sqlH = "INSERT INTO historial (id_movimiento,usuario,fechaMovimiento,horaMovimiento) VALUES ('$id', '$usuarioEdito','$row[0]','$row2[0]')";
							 	mysqli_query($conexion,$sqlH);
							 
						}
					$sql3 = "SELECT rfc FROM ct_empleados WHERE rfc = '$rfcAdd'";
						if ($resulta = mysqli_query($conexion,$sql3)) {

							if($ves=mysqli_fetch_row($resulta)){
						
							}else {
								$sql4 = "INSERT INTO ct_empleados (rfc, curp, apellido_1, apellido_2, nombre) VALUES ('$rfcAdd', '$curpAdd', '$apellido1Add', '$apellido2Add', '$nombreAdd')";
								if (mysqli_query($conexion,$sql4)) {

								}
							}

						}

										if($idRolActual[0] == 0){

										echo "<script> alert('Fomope enviado a revision'); window.location.href = '../luluConsulta.php?usuario_rol=$usuarioEdito'</script>";

										}else if ($idRolActual[0] == 1){
										echo "<script> alert('Fomope enviado a revision'); window.location.href = '../lulu.php?usuario_rol=$usuarioEdito'</script>";

										}
								
				}
				

			}else {
				echo '<script type="text/javascript">alert("Error en la conexion");</script>';
				echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
			}

		}

 ?>