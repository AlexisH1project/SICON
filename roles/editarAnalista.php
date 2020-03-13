
<?php
  $mysqli = new mysqli('localhost', 'root', '', 'p_fomopes');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Autorizar FOMOPE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href='jquery/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='jquery/jquery-ui.css' type='text/css' rel='stylesheet'>
		 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	
		<script src="./js/qr.js"></script>

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
				background-color: #f2dfa5;
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
				background-color: #f2dfa5;
				font-family: Verdana, Geneva, sans-serif;
				padding: 12px;
			}

			.plantilla-label{
				font-weight: bold;
			}

			.plantilla-lugnac{
				background-color: #f2dfa5;
				font-family: Verdana, Geneva, sans-serif;
				font-size: 21px;
				font-weight: bold;
				padding: 12px 12px 2px 12px;
			}

			.plantilla-depend{
				background-color: #f2dfa5;
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
		<?php 

			include "configuracion.php";
				$noFomope = $_GET['noFomope'];
				//echo $noFomope;
				$id_rol = $_GET['id_rol'];
			//echo $id_rol;
			$usuario = $_GET['usuario'];
			//echo $usuario;
			$consulta2 = " SELECT * FROM fomope WHERE id_movimiento =" .$noFomope;

		        if($resultado2 = mysqli_query($conexion,$consulta2)){
	        		$row = mysqli_fetch_assoc($resultado2);
					$id_fomope = $row['id_movimiento'];
					$rfc_fom = $row['rfc'];
					$curp_fom = $row['curp'];
					$apellido_1 = $row['apellido_1'];
					$apellido_2 =  $row['apellido_2'];
					$nombre_s = $row['nombre'];
					$fecha_ingreso =  $row['fechaIngreso'];
					$oficio_entrega = $row['oficioEntrega'];
					$tipo_entrega =  $row['tipoEntrega'];
					$tipo_de_accion = $row['tipoDeAccion'];
					$justificacio_fom = $row['justificacionRechazo'];
					$unidad = $row['unidad'];
					$qna_Add = $row['quincenaAplicada'];
					$anio_Add = $row['anio'];
	        		$of_unidad = $row['oficioUnidad'];
					$fecha_oficio = $row['fechaOficio'];
					$fecha_recibido = $row['fechaRecibido'];
					$codigo = $row['codigo'];
					$no_puesto = $row['n_puesto'];
				
					$clave_presupuestaria = $row['clavePresupuestaria'];
					$codigo_movimiento = $row['codigoMovimiento'];
					$concepto = $row['descripcionMovimiento'];
					$del_1 = $row['vigenciaDel'];
					$al_1 = $row['vigenciaAl'];
					$estado_en = $row['entidad'];
					$consecutivo_maestro_impuestos = $row['consecutivoMaestroPuestos'];
					$plaza = $row['puestos'];
					$observaciones = $row['observaciones'];
					
					$fecha_envio_dipsp = $row['fechaEnviadaRubricaDipsp'];
					$fecha_envio_dgrh = $row['fechaEnviadaRubricaDgrho'];
					$fecha_recibido_spc = $row['fechaRecepcionSpc'];
					$fecha_envio_spc = $row['fechaEnvioSpc'];
					$fecha_recibo_dspo = $row['fechaReciboDspo'];
					$folio_spc = $row['folioSpc'];
					$fecha_capt_nomin = $row['fechaCapturaNomina'];
					$fecha_entrega_archivo_gral = $row['fechaEntregaArchivo'];
	        		$clave_concepto = "$codigo_movimiento"."_"."$concepto";
			}
	
			$v = "-";
	        	
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

		<center>
			<img class="img-responsive" src="img/img-salud.jpg" height="150" width="354">
				<h3>Sistema de Control de Registro de Formato de Movimiento de Personal (SICON).</h3>
				<br>
				<h5> DEPARTAMENTO DE SEGUIMIENTO DE PLANTILLAS OCUPACIONALES - DSPO</h5>
				
		</center>
		
		<div class="formulario_fomope">

		<div class="formulario_fomope">

			
			<br><br>

			 <form name="captura2" action="agregar_FOMOPE.php" method="POST"> 

				<div class="rounded border border-dark plantilla-input text-center">
						<div class="col text-center">
						<div class="form-row">
						<div class="form-group col-md-12">
						<label class="plantilla-label" for="justirech" style="color:red;">Justificación rechazo:</label>
						 <textarea class="form-control z-depth-1" onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="justirech" name="justirech" readonly ><?php echo $justificacio_fom; ?></textarea>
						</div>
				</div>
				<div class="form-row">
				<div class="form-group col-md-6">
						<label class="plantilla-label" for="unidad1">Unidad:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="unidad1" name="unidad1" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $unidad; ?>"   required readonly>
					</div>
				</div>
			</div>
			<div class="form-row">
							<input type="text" class="form-control" id="noFomope" name="noFomope" value="<?php echo $noFomope ?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $id_rol?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario?>" style="display:none">
						</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="plantilla-label" for="rfc_fomo">RFC:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="rfc_fomo" name="rfc_fomo" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $rfc_fom; ?>"  required readonly>
					</div>

					<div class="form-group col-md-6">
						<label class="plantilla-label" for="curp1">Curp:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="curp1" name="curp1" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $curp_fom; ?>"  required readonly>
					</div>
				</div>
					<div class="form-row">
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="apPater">Apellido Paterno:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="apPater" name="apPater" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $apellido_1; ?>"  required readonly>
					</div>
				<div class="form-row">
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="apmater">*Apellido Materno:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="apmater" name="apmater" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $apellido_2; ?>"  required readonly>
					</div>

					<div class="form-group col-md-5">
						<label class="plantilla-label" for="nombres">Nombre(s):</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="nombres" name="nombres" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $nombre_s; ?>"  required readonly>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="plantilla-label" for="fechIngr">*Fecha ingreso:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="fechIngr" name="fechIngr" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $fecha_ingreso; ?>"  required readonly>
					</div>

					<div class="form-group col-md-6">
						<label class="plantilla-label" for="ofentre">*Oficio entrega:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="ofentre" name="ofentre" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $oficio_entrega; ?>"  required readonly>
					</div>

					<div class="form-group col-md-6">
						<label class="plantilla-label" for="tipoentre">Tipo de entrega:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="tipoentre" name="tipoentre" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $tipo_entrega; ?>"  required readonly>
					</div>

					<div class="form-group col-md-6">
						<label class="plantilla-label" for="tipoacc">Tipo de acción:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="tipoacc" name="tipoacc" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $tipo_de_accion; ?>"  required readonly>
					</div>
				</div>

					
				
									 <div class="form-group col-md-3">
								<label  class="plantilla-label" for="laQna">*QNA: </label>
									 
									<select class="form-control unexp border border-dark custom-select" name="qnaOption">
										<option  value="<?php echo $qnaActual; ?>"><?php echo $qnaActual; ?></option>
										<option  value="<?php echo $rango1; ?>"><?php echo $rango1; ?></option>
										<option value="<?php echo $qnaMax; ?>"><?php echo $qnaMax ; ?></option>

									</select>
							</div>

				

							<div class="form-group col-md-3">
								<label  class="plantilla-label" for="elAnio">AÑO: </label>
									 
									<select class="form-control unexp border border-dark custom-select" name="anio">
										<option value="<?php echo $anio_Add;?>"><?php echo $anio_Add; ?></option>
										<option value="2019">2019</option>
	  									<option value="2020">2020</option>	
									</select>
							</div>
					<div class="form-group col-md-4">
						<label class="plantilla-label" for="ofunid">*Oficio Unidad:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="ofunid" name="ofunid" placeholder="Ej. OAG-CA-3735-2020" value="<?php echo $of_unidad; ?>" maxlength="80"  required >

				</div>
			</div>
				<div class="form-row">
					<div class="form-group col-mt-8">
						<label class="plantilla-label" for="fechaofi">*Fecha de oficio:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control border border-dark" id="fechaofi" name="fechaofi" placeholder="Fecha Oficio" value="<?php echo $fecha_oficio; ?>"  required >
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
				
			
					<div class="form-group col-mt-8">
						<label class="plantilla-label" for="fechareci">*Fecha de recibido:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control border border-dark" id="fechareci" name="fechareci" placeholder="Fecha de recibido" value="<?php echo $fecha_recibido; ?>"  required >
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
				
				
			
					<div class="form-group col-mt-8">
						<label class="plantilla-label" for="codigo">*Código:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="codigo" name="codigo" placeholder="Ej. 165" value="<?php echo $codigo; ?>" maxlength="9"  required >
					</div>
				

				<div class="form-group col-mt-8">
						<label class="plantilla-label" for="NO">No. de puesto:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="num_pues" name="num_pues" placeholder="Ej. 0001" value="<?php echo $no_puesto; ?>" maxlength="4"  required >

				</div>
					<div class="form-group col-md-8">
						<label class="plantilla-label" for="clavepres">Clave presupuestaria:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control border border-dark" id="clavepres" name="clavepres" placeholder="Ej. 0001" value="<?php echo $clave_presupuestaria; ?>" maxlength="35"  required >
					</div>
			</div>
				
					<div class="form-row">
					<div class="form-group col-md-12">
						<label class="plantilla-label" for="codmov">*Código de movimiento:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control cod2 border border-dark" id="cod2_1" name="cod2_1" placeholder="Ej. 4550" value="<?php echo $clave_concepto; ?>" maxlength="5"  required>
					</div>

						
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
							<div class="text-center">
								<label class="plantilla-label" for="del2">*Del:</label>
							</div>
							<input onkeypress="return pulsar(event)" type="date" class="form-control border border-dark" id="del2" name="del2" placeholder="Del" value="<?php echo $del_1; ?>"  required >
							<small name= "alertVigencia" id= "alertVigencia" class="text-danger">
				        	</small> 
						</div>
						<div class="form-group col-md-4">
							<div class="text-center">
								<label class="plantilla-label" for="al3">al:</label>
							</div>
							<input onkeypress="return pulsar(event)" type="date" class="form-control border border-dark" id="al3" name="al3" placeholder="al" value="<?php echo $al_1; ?>"  > <!---->
						</div>
				</div>
				<div class="form-row">

						<div class="form-group col-mt-4">
						<label class="plantilla-label" for="estad">*Estado:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control cod3 border border-dark" id="cod3_1" name="cod3_1" placeholder="Ej. Ciudad de México" value="<?php echo $estado_en; ?>" maxlength="30"  required>
					</div>
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="consema">*Consecutivo maestro de puestos:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="consema" name="consema" placeholder="Ej. 170" value="<?php echo $consecutivo_maestro_impuestos; ?>" maxlength="5"  required >
					</div>
				
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="observ">Observaciones:</label>
						<input onkeypress="return pulsar(event)" type="text" class="form-control colon border border-dark" id="observ" name="observ" placeholder="Ej. 11-01-19 LA DIRECTORA GENERAL INDICA QUE SE REQUIERE OFICIO DE AUTORIZACION CON JUSTIFICACION PARA OCUPACION." value="<?php echo $observaciones; ?>" maxlength="150" >
					</div>
					<div class="form-group col-mt-4">
						<label class="plantilla-label" for="fecharecspc">Fecha de recibido en SPC:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control border border-dark" id="fecharecspc" name="fecharecspc" placeholder="Fecha de recibido en SPC" value="<?php echo $fecha_recibido_spc; ?>" >
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>
			</div>

				<div class="form-row">

					<div class="form-group col-mt-5">
						<label class="plantilla-label" for="fechenvvb">Fecha de envio a VoBo SPC:</label>
						<input onkeypress="return pulsar(event)" type="date" class="form-control border border-dark" id="fechenvvb" name="fechenvvb" placeholder="Fecha de envio a VoBo SPC" value="<?php echo $fecha_envio_spc; ?>"   >
						<small name= "alertFechaIngreso" id= "alertFechaIngreso" class="text-danger">
				        </small>  
					</div>

					
					<div class="form-group col-md-5">
						<label class="plantilla-label" for="foliospc">Folio SPC:</label>
						<input onkeypress="return pulsar(event)"  type="text" class="form-control colon border border-dark" id="foliospc" name="foliospc" placeholder="Ej. 2020" value="<?php echo $folio_spc; ?>" maxlength="5"   >
					</div>

				</div>
				
				</div>

		

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
						<div class="form-row">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
								Guardar Fomope 
								</button>
						</div>
								<br>
								<br>
								<br>
							
								<!-- Modal -->
								<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel1">Editar Fomope</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        ¿Está seguro que quiere editar la información del FOMOPE?
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
								       	<button type="submit" class="btn btn-primary">Aceptar</button>
								       	
								      </div>
								    </div>
								  </div>
								</div>
							</div>
						</div>
					

				</div>
			</form>

			</form>
		</div>

	</body>
</html>