
<html>
	<head>
		<meta charset="utf-8">
		<title>Consulta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<link href='css/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='css/jquery-ui.css' type='text/css' rel='stylesheet'>

		<script src="js/funciones.js"></script>
		<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
			<style type="text/css">
			
			.formulario_fomope{
				padding-left: 10%;
				padding-right: 10%;
			}
			
			input{
				text-transform: uppercase;
			}

			.estilo-color{
				color: red;
				font-weight: bold;
			}

			.plantilla-titulos{
				background-color: #A9D0F5;
				font-family: Verdana, Geneva, sans-serif;
				font-size: 22px;
				font-weight: bold;
				padding: 12px 12px 0px 12px;
			}

			.plantilla-subtitulos{
				font-family: Verdana, Geneva, sans-serif;
				font-size: 18px;
				font-weight: bold;
			}

			.plantilla-input{
				background-color: #CEE3F6;
				font-family: Verdana, Geneva, sans-serif;
				padding: 12px;
			}

			.plantilla-label{
				font-weight: bold;
			}

			.plantilla-lugnac{
				background-color: #A9D0F5;
				font-family: Verdana, Geneva, sans-serif;
				font-size: 21px;
				font-weight: bold;
				padding: 12px 12px 2px 12px;
			}

			.plantilla-depend{
				background-color: #A9D0F5;
				font-family: Verdana, Geneva, sans-serif;
				font-size: 22px;
				font-weight: bold;
				padding: 12px 12px 8px 12px;
			}

			.plantilla-inputdepend{
				background-color: #CEE3F6;
				font-family: Verdana, Geneva, sans-serif;
				padding: 36px 12px 36px 12px;
			}

			.tamanio-button{
				font-weight: bold;
				font-size: 25px;
			}

		</style>

	</head>
	<body>
		
		<img class="img-responsive" src="img/img-salud.jpg" height="150" width="400">
		
		<center>			
				<h3>Consulta de Estado FOMOPE</h3>
				<br>
				
			
			
			<?php
				include "configuracion.php";
				$usuarioSeguir =  $_GET['usuario_rol'];

			?>

			<br>
			<br>
			
			<form method="post" action=""> 
				<div class="rounded border border-dark plantilla-input text-center">
					<div class="form-row">
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label" for="elRfc">RFC:</label>
								<input type="text" class="form-control unexp border border-dark" id="rfc" name="rfc" placeholder="Ingresa rfc" maxlength="13">
							</div>

						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label" for="nombreB">Nombre:</label>
								<input type="text" class="form-control unexp border border-dark" id="nombreBus" name="nombreBus" placeholder="Nombre:" maxlength="40">
							</div>

						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label" for="apellidoB">Apellido Paterno:</label>
								<input type="text" class="form-control unexp border border-dark" id="apellidoBus" name="apellidoBus" placeholder="Apellido Parterno:" maxlength="30">
							</div>

						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label" for="apellidoM">Apellido Materno:</label>
								<input type="text" class="form-control unexp border border-dark" id="apellidoMb" name="apellidoMb" placeholder="Apellido Materno:" maxlength="30">
							</div>

						</div>
						<div class="col">
							<div class="form-group col-md-12">
								<label class="plantilla-label" for="unidadB">Unidad:</label>
								<input type="text" class="form-control unexp border border-dark" id="unidadBus" name="unidadBus" placeholder="Unidad:" maxlength="60">
							</div>

						</div>

						<div class="col">

							<div class="form-group col-md-12">
								<label  class="plantilla-label" for="laQna">QNA: </label>
									 
									<select class="form-control unexp border border-dark custom-select" name="qnaOption">
										<?php
										if (!$conexion->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
										       die("Error cargando el conjunto de caracteres utf8");
										}

										$consulta = "SELECT * FROM ct_quincena";
										$resultado = mysqli_query($conexion , $consulta);
										$contador=0;

										while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
										<option  data-subtext="<?php echo $misdatos["id_qna"]; ?>"><?php echo $misdatos["qna"]; ?></option>
										<?php }?>          
										</select>
							</div>
						</div>

						<div class="col">
							<div class="form-group col-md-12">
								<label  class="plantilla-label" for="elAnio">AÑO: </label>
									 
									<select class="form-control unexp border border-dark custom-select" name="anio">
										<option value=""></option>
										<option value="2019">2019</option>
	  									<option value="2020">2020</option>	
									</select>
							</div>
						</div>		
					</div>
			
				<div class="col-sm-12">
					<div class="form-row">

					<div class="form-group col-md-12">
						<div class="col text-center">
							<input type="submit" name="buscar" onclick="'<?php $_GET['usuario_rol']; ?>'" class="btn btn-outline-info tamanio-button" value="Buscar"><br>

							<!-- <button type="submit" name="buscar" class="btn btn-outline-info tamanio-button">Buscar</button> -->
						</div>
					</div>

					</div>
				</div>
			</form>

		</div>
	
	</div>

		<br>
		<br>
<div class="col-sm-12">
				
					<div class="card bg-secondary text-white">
						    <div class="card-body"><h2>Rechazados</h2></div>
					</div>
		<table class="table table-hover table-white">
						<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
							 <th scope="titulo">Nombre</th>
						      <th scope="titulo">Estado FOMOPE</th>
						      <th scope="titulo">Último usuario</th>
						      <th scope="titulo">Última modificación</th>
						      
						   </tr>
					 	 </thead>

				<?php 
						include "configuracion.php";

						if(isset($_POST['buscar'])){// $_SERVER['REQUEST_METHOD'] == 'POST' if(){
							
							$rfcBuscar = $_POST['rfc'];
							$nombreBuscar = $_POST['nombreBus'];
							$apellidoBuscar = $_POST['apellidoBus'];
							$apellidomBuscar = $_POST['apellidoMb'];
							$unidadBuscar = $_POST['unidadBus'];
							$qnaBuscar = $_POST['qnaOption'];
							$anioBuscar = $_POST['anio'];


							if($rfcBuscar != "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar != ""){

								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre='$nombreBuscar' AND apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar' AND unidad='$unidadBuscar')";

							}elseif ($rfcBuscar != "" && $nombreBuscar == "" && $apellidoBuscar == "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND apellido_1='$apellidoBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar' AND unidad='$unidadBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND apellido_1='$apellidoBuscar' AND unidad='$unidadBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar == "" && $apellidoBuscar == "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar == "" && $apellidoBuscar == "" && $apellidomBuscar == "" && $unidadBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND unidad='$unidadBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar != "" && $apellidoBuscar == "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre = '$nombreBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar != "" && $apellidoBuscar == "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre = '$nombreBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar != "" && $apellidoBuscar == "" && $apellidomBuscar != "" && $unidadBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre = '$nombreBuscar' AND apellido_2='$apellidomBuscar' AND unidad='$unidadBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre = '$nombreBuscar' AND apellido_1='$apellidoBuscar' AND unidad='$unidadBuscar')";
								
							}elseif($rfcBuscar != "" && $nombreBuscar != "" && $apellidoBuscar == "" && $apellidomBuscar == "" && $unidadBuscar != ""){

								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre='$nombreBuscar' AND unidad='$unidadBuscar')";

							}elseif ($rfcBuscar != "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre = '$nombreBuscar' AND apellido_1='$apellidoBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar'  AND apellido_1='$apellidoBuscar')";
								
							}elseif ($rfcBuscar != "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre = '$nombreBuscar' AND apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar == "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (nombre = '$nombreBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (nombre = '$nombreBuscar' AND apellido_1='$apellidoBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( nombre = '$nombreBuscar' AND apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar != ""){

								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (nombre='$nombreBuscar' AND apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar' AND unidad='$unidadBuscar')";

							}elseif ($rfcBuscar == "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (apellido_1='$apellidoBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif($rfcBuscar == "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar != ""){

								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar' AND unidad='$unidadBuscar')";

							}elseif ($rfcBuscar == "" && $nombreBuscar == "" && $apellidoBuscar == "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (apellido_2='$apellidomBuscar')";
								
							}elseif($rfcBuscar == "" && $nombreBuscar == "" && $apellidoBuscar == "" && $apellidomBuscar != "" && $unidadBuscar != ""){

								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (apellido_2='$apellidomBuscar' AND unidad='$unidadBuscar')";

							}elseif($rfcBuscar == "" && $nombreBuscar == "" && $apellidoBuscar == "" && $apellidomBuscar == "" && $unidadBuscar != ""){

								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (unidad='$unidadBuscar')";

							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar == "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( nombre = '$nombreBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( nombre = '$nombreBuscar' AND apellido_1='$apellidoBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( nombre = '$nombreBuscar' AND apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( nombre = '$nombreBuscar' AND apellido_1='$apellidoBuscar' AND unidad='$unidadBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar == "" && $apellidomBuscar == "" && $unidadBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( nombre = '$nombreBuscar' AND unidad='$unidadBuscar')";
								
							}elseif ($rfcBuscar == "" && $nombreBuscar == "" && $apellidoBuscar != "" && $apellidomBuscar == "" && $unidadBuscar != "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( apellido_1='$apellidoBuscar' AND unidad='$unidadBuscar')";
							}elseif ($rfcBuscar == "" && $nombreBuscar != "" && $apellidoBuscar != "" && $apellidomBuscar != "" && $unidadBuscar == "") {
								
								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE ( 
								apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar')";
								
							}elseif($rfcBuscar == "" && $nombreBuscar == "" && $apellidoBuscar == "" && $apellidomBuscar == "" && $unidadBuscar == ""){

								$sql="SELECT id_movimiento,color_estado,unidad,rfc,usuario_name,quincenaAplicada,fechaIngreso,codigoMovimiento, fechaAutorizacion FROM fomope WHERE (rfc='$rfcBuscar' AND nombre='$nombreBuscar' AND apellido_1='$apellidoBuscar' AND apellido_2='$apellidomBuscar' AND unidad='$unidadBuscar')";

							}
							




							$sqlColor="SELECT colorAsignado FROM usuarios WHERE usuario='$usuarioSeguir'";


							if ($result = mysqli_query($conexion,$sql)) {

								$totalFilas    =    mysqli_num_rows($result);  
								if($totalFilas == 0){
										
										echo('
											<br>
											<br>
											<div class="col-sm-12 ">
											<div class="p-3 mb-5 bg-warning text-dark ">
											    <div class="card-body"><h2 align="center">No existe resultados de la busqueda, vuelve intentar.</h2></div>
										</div>
										</div>');
								}else{


									while($ver=mysqli_fetch_row($result)){ 

										if($ver[1] == 'negro1'){

											$ver[1] = 'DDSCH Rechazo'
										}elseif($ver[1] == 'naranja'){

											$ver[1] = 'DIPSP Autorizacion'
										}

						 ?>
						<tr>
							<td><?php echo $ver[3] ?></td>
							<td><?php echo $ver[1] ?></td>
							<td><?php echo $ver[4] ?></td>
							<td><?php echo $ver[8] ?></td>


							<td>
								
								<?php

											if($ver[1] == "negro" ){
													$datosCaptura = $ver[0]."||".$usuarioSeguir."||1";

										
								?>
												<button type="button" class="btn btn-info" onclick="accionesRolL('<?php echo $datosCaptura ?>')" id="" >Editar</button>
								<?php	
											}else if($ver[1] == "verde"){

								?>	
												<button type="button" class="btn btn-info" onclick="accionesRolL('<?php echo $datosCaptura ?>')" id="" >Capturar</button>

								<?php
											}else if($ver[1] == "gris"){
												$datosCaptura = $ver[0]."||".$usuarioSeguir."||2";

								?>
												<button type="button" class="btn btn-info" onclick="accionesRolL('<?php echo $datosCaptura ?>')" id="" >Editar</button>

											
								<?php
											}
										
				
								
								?>	
															
							</td>
						</tr>
						<?php 
										}
									}
							}else{
								echo '<script type="text/javascript">alert("Error en la conexion");</script>';
								echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
							}
						}
						 ?>
		</table>

	</center>
	</body>

</html>

