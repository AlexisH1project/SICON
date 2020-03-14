
<?php
  $mysqli = new mysqli('localhost', 'root', '', 'p_fomopes');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FOMOPE</title>
				<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href='jquery/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='jquery/jquery-ui.css' type='text/css' rel='stylesheet'>

		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/funciones.js"></script>
		<script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	


		<script type="text/javascript">
			
			function pulsar(e) {
  				tecla = (document.all) ? e.keyCode :e.which; 
  				return (tecla!=13); 
			} 

		</script>

		
		<script type="text/javascript">

			$(document).ready(function(){
				$(document).on('keydown', '.cod2', function(){
					var id = this.id;
					var splitid = id.split('_');
					var indice = splitid[1];
					$('#'+id).autocomplete({
						source: function(request, response){
							$.ajax({
								url: "resultados_cmov.php",
								type: 'post',
								dataType: "json",
								data: {
									busqueda: request.term,request:1
								},
								success: function(data){
									response(data);
								}
							});
						},
						select: function (event, ui){
							$(this).val(ui.item.label);
							var buscarid = ui.item.value;
							$.ajax({
								url: 'resultados_cmov.php',
								type: 'post',
								data: {
									buscarid:buscarid,request:2
								},
								dataType: 'json',
								success:function(response){
									var len = response.length;
									if(len > 0){
										var idmov = response[0]['idmov'];
										var cod2 = response[0]['cod2'];
										var nomb_mov = response[0]['nomb_mov'];
										document.getElementById('cod2_'+indice).value = cod2;
										document.getElementById('nomb_mov_'+indice).value = nomb_mov;
									}
								}
							});
							return false;
						}
					});
				});
			});


			$(document).ready(function(){
				$(document).on('keydown', '.cod3', function(){
					var id = this.id;
					var splitid = id.split('_');
					var indice = splitid[1];
					$('#'+id).autocomplete({
						source: function(request, response){
							$.ajax({
								url: "resultados_estado.php",
								type: 'post',
								dataType: "json",
								data: {
									busqueda: request.term,request:1
								},
								success: function(data){
									response(data);
								}
							});
						},
						select: function (event, ui){
							$(this).val(ui.item.label);
							var buscarid = ui.item.value;
							$.ajax({
								url: 'resultados_estado.php',
								type: 'post',
								data: {
									buscarid:buscarid,request:2
								},
								dataType: 'json',
								success:function(response){
									var len = response.length;
									if(len > 0){
										var idmov = response[0]['idEstado'];
										var cod3 = response[0]['cod3'];
										var nomb_edo = response[0]['nomb_edo'];
										document.getElementById('cod3_'+indice).value = cod3;
										document.getElementById('nomb_edo_'+indice).value = nomb_edo;
									}
								}
							});
							return false;
						}
					});
				});
			});
		</script>

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


		<img class="img-responsive" src="img/img-salud.jpg" height="150" width="354">
		
		<center>
			<h3>Sistema de Control de Registro de Formato de Movimiento de Personal (SICON).</h3>
		</center>
		
		<div class="formulario_fomope">
<?php 

			include "configuracion.php";
			$noFomope = $_GET['noFomope'];
			//echo $noFomope;
			$id_rol = $_GET['id_rol'];
			//echo $id_rol;
			$usuario = $_GET['usuario'];
			//echo $usuario;

			$sql = "SELECT id_mov, cod_mov, tipo_mov, area_mov FROM ct_movimientosrh";
			$sql2 = "SELECT rfc, apellido_1,apellido_2, nombre, unidad, justificacionRechazo FROM fomope WHERE id_movimiento = '$noFomope'";
			if($result = mysqli_query($conexion,$sql2)){
				$row = mysqli_fetch_row($result);

			}

			 $hoy = "select CURDATE()";
		   	$tiempo ="select curTime()";

			 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
			 		$dia = mysqli_fetch_row($resultHoy);
			 		$hora = mysqli_fetch_row($resultTime);
			 }

			 $elDia = explode("-", $dia[0]);
			 $qnaMax = $elDia[1] * (2);
			 if($qnaMax == 24){
			 	$qnaActual = 1;
			 	$rango1 = 24;
			 	$qnaMax = 2;  //7

			 }else{
			 	$qnaActual = $qnaMax; //6
			 	$rango1 = $qnaMax -1 ; //5
			 	$qnaMax = $qnaMax + 1;  //7
			 	if($elDia[2] <= 15){
			 		$rango1 = $qnaMax - 2; //5
				}else{

				}
			 }
			 

		 ?>	

		 	<div class="form-group col-md-4">
						<label class="plantilla-label" for="NombrC">Empleado:</label>
						<input type="text" class="form-control border border-dark" id="rfcC" name="rfcC" value="<?php echo $row[0] ?>" readonly >
						<input type="text" class="form-control border border-dark" id="nameComp" name="nameComp" value="<?php echo $row[1]."   ".$row[2]."   ".$row[3] ?>" readonly >

			</div>
			<div class="form-group col-md-6">
						<label class="plantilla-label" for="NombrU">Unidad:</label>
						<input type="text" class="form-control border border-dark" id="nameComp" name="nameComp" value="<?php echo $row[4] ?>" readonly >
			</div>
			<br>

			<div class="form-group col-md-6">

							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalR" data-whatever="@getbootstrap">Rechazar por captura</button>
			</div>
							<div class="modal fade" id="exampleModalR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Motivo de rechazo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <form action="./Controller/rechazoAblanco.php" method="POST">
							         <textarea class="form-control border border-dark" id="obs" rows = "4" name="comentarioR" placeholder="Observación por rechazo"><?php echo $row[5] ?></textarea>
							          <div class="form-row">
										<input type="text" class="form-control" id="noFomope" name="noFomope" value="<?php echo $noFomope?>" style="display:none">
										</div>
										<div class="form-row">
											<input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $id_rol?>" style="display:none">
										</div>
										<div class="form-row">
											<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario?>" style="display:none">
										</div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>

							        <button type="submit" class="btn btn-primary">Aceptar</button>
							        </form>

							      </div>
							    </div>
							  </div>
							</div>

			<br><br>

			<form method="post" name="ffomope" action="agregar_FOMOPE.php"> 
				<div class="form-row">
						<div class="modal fade" id="exampleModalR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Motivo de rechazo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							         <textarea class="form-control z-depth-1" id="comentarioR" name="comentarioR" rows="3" placeholder="Escribe el motivo del rechazo..."></textarea>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
							        <input type="submit" class="btn btn-primary" value="Rechazar" name="botonAccion">
							      </div>
							    </div>
							  </div>
							</div>
							
								<div class="form-group col-md-2">
								<label  class="plantilla-label" for="laQna">*QNA: </label>
									 
									<select class="form-control unexp border border-dark custom-select" name="qnaOption">
										<option  value="<?php echo $qnaActual; ?>"><?php echo $qnaActual; ?></option>
										<option  value="<?php echo $rango1; ?>"><?php echo $rango1; ?></option>
										<option value="<?php echo $qnaMax; ?>"><?php echo $qnaMax ; ?></option>

									</select>
							</div>

							<div class="form-group col-md-2">
								<label  class="plantilla-label" for="elAnio">AÑO: </label>
									 <input type="text" class="form-control" id="anio" name="anio" value="<?php echo $elDia[0]?>" readonly >
							<div class="form-row">
							<input type="text" class="form-control" id="noFomope" name="noFomope" value="<?php echo $noFomope?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $id_rol?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario?>" style="display:none">
						</div>
						<br>

							
				</div>

							
				</div>
							
					<div class="form-row">
						<div class="form-group col-md-5">
								<label class="plantilla-label" for="ofunid">*Oficio unidad:</label>
								<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="ofunid" name="ofunid" placeholder="Ej. OAG-CA-3735-2020" value="" maxlength="80" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
					<div class="form-group col-md-6">
						<label class="plantilla-label" for="fechaofi">*Fecha de oficio:</label>
						<input type="date" class="form-control border border-dark" id="fechaofi" name="fechaofi" placeholder="Fecha Oficio" required>
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
				</div>
					<div class="form-row">
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="fechareci">*Fecha de recibido:</label>
						<input type="date" class="form-control border border-dark" id="fechareci" name="fechareci" placeholder="Fecha de recibido" required>
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
					<div class="form-group col-md-4">
						<label class="plantilla-label" for="codigo">*Código:</label><div class="container">
							 <input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="codigo" name="codigo" placeholder="Ej. 123" value="" maxlength="9" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
							</div>
					</div>
					<div class="form-group col-md-2">
						<label class="plantilla-label" for="NO">No. de puesto:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="num_pues" name="num_pues" placeholder="Ej. 0001" value="" maxlength="5" onkeyup="javascript:this.value=this.value.toUpperCase();">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label class="plantilla-label" for="NO">Clave presupuestaria:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="clavepres" name="clavepres" placeholder="Ej. 0001" value="" maxlength="35" onkeyup="javascript:this.value=this.value.toUpperCase();">
					</div>
					<div class="form-group col-md-8">
						<label class="plantilla-label" for="codmov">*Código de movimiento:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control cod2 border border-dark" id="cod2_1" name="cod2_1" placeholder="Ej. 4550" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
						
				</div>
				<div class="form-row">
					<div class="form-group col-md-5">
							<div class="text-center">
								<label class="plantilla-label" for="del2">*Del:</label>
							</div>
							<input type="date" class="form-control border border-dark" id="del2" name="del2" placeholder="Del"required>
							<small name= "alertVigencia" id= "alertVigencia" class="text-danger">
				        	</small> 
						</div>
						<div class="form-group col-md-5">
							<div class="text-center">
								<label class="plantilla-label" for="al3">al:</label>
							</div>
						<input  type="date" class="form-control border border-dark" id="al3" name="al3" placeholder="al"> <!--required-->
						</div>
					</div>
					<div class="form-row">
					<!-- <div class="form-group col-md-4">
						<label class="plantilla-label" for="estad">*Estado:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="estad" name="estad" placeholder="Ej. Ciudad de México" maxlength="13" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div> -->
					<div class="form-row">
						<div class="form-group col-mt-8">
						<label class="plantilla-label" for="estad">*Estado:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control cod3 border border-dark" id="cod3_1" name="cod3_1" placeholder="Ej. Ciudad de México" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>

					<div class="form-group col-mt-8">
						<label class="plantilla-label" for="consema">*Consecutivo maestro de puestos:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="consema" name="consema" placeholder="Ej. 170" value="" maxlength="5" onkeyup="javascript:this.value=this.value.toUpperCase();" >
					</div>
					<div class="col-md-4">
					</div>
				</div>
					<div class="form-group col-md-6">
						<label class="plantilla-label" for="observ">*Observaciones:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="observ" name="observ" placeholder="Ej. 11-01-19 LA DIRECTORA GENERAL INDICA QUE SE REQUIERE OFICIO DE AUTORIZACION CON JUSTIFICACION PARA OCUPACION." value="" maxlength="150" onkeyup="javascript:this.value=this.value.toUpperCase();" >
					</div>
					<div class="form-row">
					

					<div class="form-group col-md-6">
						<label class="plantilla-label" for="fecharecspc">*Fecha de recibido en SPC:</label>
						<input  type="date" class="form-control border border-dark" id="fecharecspc" name="fecharecspc" placeholder="Fecha de recibido en SPC"  >
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					
					</div>

					<div class="form-group col-md-6">
						<label class="plantilla-label" for="fechenvvb">*Fecha de envio a VoBo SPC:</label>
						<input type="date" class="form-control border border-dark" id="fechenvvb" name="fechenvvb" placeholder="Fecha de envio a VoBo SPC"  >
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
					<div class="form-group col-md-6">
						<label class="plantilla-label" for="fecharecdspo">*Fecha de recibo DSPO:</label>
						<input  type="date" class="form-control border border-dark" id="fecharecdspo" name="fecharecdspo" placeholder="Fecha de envio a VoBo SPC" >
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
					
					<div class="form-group col-md-6">
						<label class="plantilla-label" for="foliospc">*Folio SPC:</label>
						<input  type="text" class="form-control colon border border-dark" id="foliospc" name="foliospc" placeholder="Ej. 2020" value="" maxlength="5"  >
					</div>
						<div class="form-group col-md-12">
						
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
								Capturar Fomope 
						</button>
					</div>
					</div>
						


					<!-- <div class="form-group col-md-6">
						<label class="plantilla-label" for="fecharedgrh">*Fecha de recibido por parte de la DGRH:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control border border-dark" id="fecharedgrh" name="fecharedgrh" placeholder="Fecha de recibido por parte de la DGRH" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
					
					<div class="form-group col-md-6">
						<label class="plantilla-label" for="npuesto">*No de puesto:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="npuesto" name="npuesto" placeholder="Ej. 0005" maxlength="18" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required> 
					</div>
					<div class="form-group col-md-4">
						<label class="plantilla-label" for="ap_pat">*Apellido Paterno:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="ap_pat" name="ap_pat" placeholder="Apellido Paterno" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-4">
						<label class="plantilla-label" for="ap_mat">*Apellido Materno:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="ap_mat" name="ap_mat" placeholder="Apellido Materno" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-4">
						<label class="plantilla-label" for="nombre_s">*Nombre(s):</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="nombre_s" name="nombre_s" placeholder="Nombre(s)" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					
					<div class="form-group col-md-8">
						<label class="plantilla-label" for="rfc">*RFC:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="rfc" name="rfc" placeholder="Ej. JORL249105" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required >
					</div>
					<div class="form-group col-md-6">
						<label class="plantilla-label" for="fechaentseg">*Fecha de entrega de formato a seguros:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control border border-dark" id="fechaentseg" name="fechaentseg" placeholder="Fecha de entrega de formato a seguros" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="codmov">*Código de movimiento:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="codmov" name="codmov" placeholder="Ej. 4550" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="mesing">*Mes:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control am border border-dark" id="mesingmesing" name="mesing" placeholder="Ej. Enero" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>		
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="ofrel">*Oficio o Relación:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="ofrel" name="ofrel" placeholder="Ej. Captura directa" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="afecplan">*No. de afectación o adecuación plantilla:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="afecplan" name="afecplan" placeholder="Ej. No" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="modifp">*Modificacón plantilla:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="modifp" name="modifp" placeholder="Ej. No" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>

					<div class="form-group col-md-5">
						<label class="plantilla-label" for="justif">*Justificación:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="justif" name="justif" placeholder="Ej. No" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>

					<div class="form-group col-md-5">
						<label class="plantilla-label" for="nota1">*Nota adicional:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="nota1" name="nota1" placeholder="Ej. No" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="quinc">*Quincena aplicada:</label>
						<input type="text" class="form-control" id="quinc" name="quinc" placeholder="Ej. 1" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="foliospc">*Folio SPC:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="foliospc" name="foliospc" placeholder="Ej. 5" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>

					<div class="form-group col-md-5">
						<label class="plantilla-label" for="pasarf">*Pasar a firma:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="pasarf" name="pasarf" placeholder="Ej. JLATC-09-01-2020" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="ur1">*U.R.:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="ur1" name="ur1" placeholder="Ej. 160" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>

					<div class="form-group col-md-5">
						<label class="plantilla-label" for="noficio">*No de oficio:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="noficio" name="noficio" placeholder="Ej. 1835" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="segu">*Seguros:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="segu" name="segu" placeholder="Ej. No" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="desig">*Designación:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="desig" name="desig" placeholder="Ej. DESIGNACION POR ART.34" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="archiev">*Archivo:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="archiev" name="archiev" placeholder="Ej. ----" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>

					<div class="form-group col-md-5">
						<label class="plantilla-label" for="entreofi">*Entrega en oficios a pagos:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="entreofi" name="entreofi" placeholder="Ej. Disp" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="entreing">*Entrega a ingeniero Dario:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="entreing" name="entreing" placeholder="Ej. No" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>

					<div class="form-group col-md-5">
						<label class="plantilla-label" for="enviorig">*Envio originales a captura:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="enviorig" name="enviorig" placeholder="Ej. X" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="devorig">*Devuelven originales capturados:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control colon border border-dark" id="devorig" name="devorig" placeholder="" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>

					<div class="form-group col-md-5">
						<label class="plantilla-label" for="entregdir">*Se entrega con oficio a direct. de personal:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control colon border border-dark" id="entregdir" name="entregdir" placeholder="" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="enviarch">*Envio a archivo:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control colon border border-dark" id="enviarch" name="enviarch" placeholder="" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="entreorigin">*Entrega originales a unidad:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control colon border border-dark" id="entreorigin" name="entreorigin" placeholder="" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="afectvaca">*Se afecta a vacancia:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="afectvaca" name="afectvaca" placeholder="Ej. Si" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="afectpla">*Se afecta plantilla:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="afectpla" name="afectpla" placeholder="Ej. Si" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
					</div> -->

				 <form name="captura" action="observacion.php" method="POST"> 
					<div class="form-row">
					<div class="form-group col-md-8">
								

							
<br>
								
						<div class="form-row">
							<input type="text" class="form-control" id="noFomope" name="noFomope" value="<?php echo $noFomope?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $id_rol?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario?>" style="display:none">
						</div>
					
								<br>
							
								<!-- Modal -->
								<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel1">Captura Fomope</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        ¿Está seguro que quiere capturar la información del FOMOPE? 
								      	NOTA: Las fechas no deben ser mayores a la actual 
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
								       	<button type="submit" class="btn btn-primary">Capturar</button>
								       	
								      </div>
								    </div>
								  </div>
								</div>
							</div>
						</div>
					

				</div>
			</form>
			

		 <form name="captura" action="observacion.php" method="POST"> 
							<div class="form-row">
							<div class="form-group col-md-8">
						<div class="form-row">
							<input type="text" class="form-control" id="noFomope" name="noFomope" value="<?php echo $noFomope?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $id_rol?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario?>" style="display:none">
						</div>
					
				<div class="form-group col-md-6">

							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalRT" data-whatever="@getbootstrap">Rechazo por validacion</button>
				</div>
							<div class="modal fade" id="exampleModalRT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Motivo de rechazo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <form action="./Controller/rechazoAblanco.php" method="POST">
							         <textarea class="form-control border border-dark" id="obs" rows = "4" name="comentarioR" placeholder="Observación por rechazo"><?php echo $row[5] ?></textarea>
							          <div class="form-row">
										<input type="text" class="form-control" id="noFomope" name="noFomope" value="<?php echo $noFomope?>" style="display:none">
										</div>
										<div class="form-row">
											<input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $id_rol?>" style="display:none">
										</div>
										<div class="form-row">
											<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario?>" style="display:none">
										</div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>

							        <button type="submit" class="btn btn-primary">Aceptar</button>
							        </form>

							      </div>
							    </div>
							  </div>
							</div>

				</div>
			</form>
				
			
		</div>

			

		</div>

		
		<br>
	</body>
</html>

