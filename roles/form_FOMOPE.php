
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FOMOPE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href='jquery/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='jquery/jquery-ui.css' type='text/css' rel='stylesheet'>

		<script type="text/javascript" src="./include/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="./include/jquery.validate.js"></script>

		

		  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/funciones.js"></script>

		<script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	

	<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

		  <style>
		  .modal-header, h4, .close {
		    background-color: #5cb85c;
		    color:white !important;
		    text-align: center;
		    font-size: 30px;
		  }
		  .modal-footer {
		    background-color: #f9f9f9;
		  }
		  </style>

	<style type="text/css">
			
			p.one {
			  border-style: solid;
			  border-color: hsl(0, 100%, 50%); /* red */
			}

			p.two {
			  border-style: solid;
			  border-color: hsl(240, 100%, 50%); /* blue */
			}

			p.three {
			  border-style: solid;
			  border-color: hsl(0, 0%, 73%); /* grey */
			}
			
			.formulario_fomope{
				padding-left: 10%;
				padding-right: 10%;
			}
			.bord {
			  border-style: solid;
			  border-color: #ffffff; /* grey */
			}
			.bordv {
			  border-style: solid;
			  border-color: #f5f5f5; /* grey */
			}
			.bordg {
			  border-style: solid;
			  border-color: #6f7271; /* grey */
			}
			input{
				text-transform: uppercase;
			}

			.estilo-color{
				font-family: Monserrat, Medium;
				font-size: 15px;
				color:  #f0ce78 ;
				
			}
			.estilo-colorg{
				font-family: Monserrat, Medium;
				font-size: 12px;
				color:  #6f7271 ;
				font-weight: bold;
			}
			.estilo-colorrr{
				font-family: Monserrat, Medium;
				font-size: 25px;
				color:  #9f2241 ;
				font-weight: bold;
			}
			.estilo-colorr{
				color:  #f2ebd7 ;
				font-weight: bold;
			}
			.estilo-colorv{
				font-family: Monserrat, Medium;
				font-size: 12px;
				color:  #fffaed ;
				
			}
			.estilo-colorn{
				font-family: Monserrat, Medium;
				font-size: 22px;
				color:  #9f2241 ;
				font-weight: bold;
			}
			.estilo-colorb{
				color:  #ffffff ;
				font-weight: bold;
			}

			.plantilla-titulos{
				background-color: #A9D0F5;
				font-family: Monserrat, Medium;
				font-size: 25px;
				font-weight: bold;
				padding: 12px 12px 0px 12px;
			}

			.plantilla-subtitulos{
				font-family: Monserrat, Medium;
				font-size: 18px;
				font-weight: bold;
			}
			.plantilla-subtitulosp{
				font-family: Monserrat, Medium;
				font-size: 15px;
				font-weight: bold;
			}
			.plantilla-subtitulospr{
				font-family: Monserrat, Medium;
				font-size: 25px;
				font-weight: bold;
			}

			.plantilla-inputb{
				text-color: #ffffff;
				font-family: Monserrat, Medium;
				padding: 12px;
			}
			.plantilla-input{
				background-color: #9f2241;
				font-family: Monserrat, Medium;
				padding: 12px;
			}
			.plantilla-inputg{
				background-color: #6f7271;
				font-family: Monserrat, Medium;
				padding: 25px;
			}
			.plantilla-inputv{
				background-color: #fffaed;
				font-family: Monserrat, Medium;
				padding: 15px;
			}
			.plantilla-inputve{
				background-color: #f2ebd7;
				font-family: Monserrat, Medium;
				padding: 12px;
			}


		

		

		</style>

				
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
				$(document).on('keydown', '.cod4', function(){
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
										var cod2 = response[0]['cod4'];
										var nomb_mov = response[0]['nomb_mov'];
										document.getElementById('cod4_'+indice).value = cod2;
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

			$sql = "SELECT id_mov, cod_mov, tipo_mov, area_mov FROM ct_movimientosrh";
			$sql2 = "SELECT rfc, apellido_1,apellido_2, nombre, unidad, justificacionRechazo FROM fomope WHERE id_movimiento = '$noFomope'";
			if($result = mysqli_query($conexion,$sql2)){
				$row = mysqli_fetch_row($result);

			}

			$valor = "";
			$hoy = "select CURDATE()";
			$tiempo ="select curTime()";
			$diaActual = "";

			 if ($resultHoy = mysqli_query($conexion,$hoy) AND $resultTime = mysqli_query($conexion,$tiempo)) {
			 		$rowF = mysqli_fetch_row($resultHoy);  // cambiamos formato de hora 
			 		$fechaSistema = date("d-m-Y", strtotime($rowF[0])); //"05-04-2020";;
			 		$rowHora = mysqli_fetch_row($resultTime);

					$diaActual=date("w", strtotime($fechaSistema));
					
			 }

			 $sqlQna = "SELECT * FROM m1ct_fechasnomina WHERE estadoActual = 'abierta'";

			 if($resQna = mysqli_query($conexion,$sqlQna)){
			 	$rowQna = mysqli_fetch_row($resQna);
			 	//echo "OOOOOLLAA";
			 	$fehaI = date("d-m-Y", strtotime($rowQna[4])); 
			 	$fehaF = date("d-m-Y", strtotime($rowQna[5])); 

			 }else{
			 
			 	echo "error sql";
			 }

			 if( strtotime($fehaF) < strtotime($fechaSistema)){
			 		if($rowQna[0] != 24){
			 			$newQna = $rowQna[0] + 1;
			 		}else {
			 			$newQna = 1;
			 		}
			 		$sqlCerrar = "UPDATE m1ct_fechasnomina SET estadoActual = 'cerrada' WHERE id_qna = '$rowQna[0]'";
			 		$sqlAbrir = "UPDATE m1ct_fechasnomina SET estadoActual = 'abierta' WHERE id_qna = '$newQna'";
			 		
			 		if($resC = mysqli_query($conexion,$sqlCerrar) && $resA = mysqli_query($conexion, $sqlAbrir) ){

			 		}else{
			 			echo "error con la conexion a la BD";
			 		}

			 }else{

				 if($diaActual != 0 && $diaActual != 6 && (strtotime($fechaSistema) >=  strtotime($fehaI) &&  strtotime($fechaSistema) <=  strtotime($fehaF))){

				 		// echo $fehaF;
				 		// echo $fechaSistema . " ";
				 		// echo $diaActual . " ";
				 		//$qnaEnviar = $rowQna[0];
			 

		 ?>	

		 <br>
    	<br>
    	<br>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active bordv">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-outline-secondary">
	          <i class="fa fa-bars"></i>
	          <br>
	          <span class="sr-only">Menú</span>
	        </button>
        </div>
				<div class="p-4 ">

		  		<img class="img-responsive" src="img/ss1.png" height="50" width="190">
	        <ul class="list-unstyled components mb-5">
	        	<br>
	        	<li class="active estilo-color">
	            <a ><img src="./img/iclogin.png" alt="x" height="17" width="17"/> Kevin Solano</span></a>
	          </li>
	          <li class="active estilo-color">
	            <a href="#"><img src="./img/icbuzon.png" alt="x" height="17" width="20"/>      Bandeja</a>
	          </li>
	          <li class="active estilo-color">
	              <a href="#"><img src="./img/ic-consulta.png" alt="x" height="17" width="17"/> Consulta</a>
	          </li>
	          <li class="active estilo-color">
              <a href="#"><img src="./img/icreport.png" alt="x" height="17" width="17"/> Reporte</a>
	          </li>
	          </li>
	          <br><br><br>
			          <li class="active estilo-color">
		             		<H3> <FONT COLOR=#9f2241> <?php  echo $rowQna[1];?> </FONT> </H3>	
			          </li>

			            <li class="active estilo-color">
		             		<FONT SIZE=4 COLOR=9f2241> <I><?php  echo $rowQna[2];?></I> -- <I><?php  echo $rowQna[3];?></I>  </FONT>
			          </li>

	        </ul>

	       <!-- <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>-->

	        <!--<div class="footer">
	        	<p>Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p>
	        </div>-->

	      </div>
    	</nav>
    	<br>
    	<br>
    	<br>

    	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bordv plantilla-inputv fixed-top">
		    <center>
		    	<div class="container plantilla-inputv " align="center">
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		      	
		      		<div class="form-row " >
		      		 
		        <ul class="navbar-nav ml-auto">          
		       
		        	
		        	<h3  class="estilo-colorn">Sistema de Control de Registro de Formato de Movimiento de Personal
		          </h3>
		          <h3  class="estilo-colorv">............
		          </h3>
		        </ul>

		         <ul class="navbar-nav ml-auto">          
		      
		         <h5 class=" estilo-color">Departamento Dirección General de Recursos Humanos y Organización/Dirección integral de puestos y servicios personales</h5>
		        </ul>
		       
		     
		         
		      </div>
		      <br>
		     
		    </div> 
		</center>
		    <br>
		    <br>
		  </nav>

	
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">


		
		<div class="formulario_fomope">


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
									 <input type="text" class="form-control" id="qnaOption" name="qnaOption" value="<?php echo $newQna?>" readonly >
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
						
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Capturar Fomope </button>
								 

						</div>

						<div class="form-group col-md-6">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalRT" >Rechazo por validacion </button>


						</div>
					</div>
						



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
										<input type="submit" class="btn btn-primary" name="accionB"  value="Capturar">

								       	<!-- <button type="submit" class="btn btn-primary">Capturar</button> -->
								       	
								      </div>
								    </div>
								  </div>
								</div>
							</div>
						</div>
					

				</div>

							<div class="modal fade" id="exampleModalRT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Volante de rechazo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							         <textarea class="form-control border border-dark" id="obs" rows = "4" name="comentarioR" placeholder="Redactar el volante de rechazo" required></textarea>
							       
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">REGRESAR</button>
									<input type="submit" class="btn btn-primary" name="accionB"  value="descargar">
							      </div>
							      <div class="modal-footer">
									<input type="submit" class="btn btn-danger" name="accionB"  value="bandeja principal">
							      </div>
							    </div>
							  </div>
							</div>

				</div>

			</form>


		</div>

			

		</div>

	<?php
	 }else{	
	 	 $sqlQna = "SELECT * FROM m1ct_fechasnomina WHERE estadoActual = 'abierta'";

			 if($resQna = mysqli_query($conexion,$sqlQna)){
			 	$rowQna = mysqli_fetch_row($resQna);
			 	//echo "OOOOOLLAA";
			 	$fehaI = date("d-m-Y", strtotime($rowQna[4])); 
			 	$fehaF = date("d-m-Y", strtotime($rowQna[5])); 

			 }else{
			 
			 	echo "error sql";
			 }

			 			echo("
    	<nav class='navbar fixed-top navbar-expand-lg navbar-dark bordv plantilla-inputv fixed-top'>

			 		<div class='wrapper d-flex align-items-stretch'>
			<nav id='sidebar' class='active bordv'>
				<div class='custom-menu'>
					<button type='button' id='sidebarCollapse' class='btn btn-outline-secondary'>
				          <i class='fa fa-bars'></i>
				          <br>
				          <span class='sr-only'>Menú</span>
				        </button>
      			 </div>
				<div class='p-4'>

		  		<img class='img-responsive' src='img/ss1.png' height='50' width='190'>
	        <ul class='list-unstyled components mb-5'>
			        	<br>
			        <li class='active estilo-color'>
			            <a ><img src='./img/iclogin.png' alt='x' height='17' width='17'/> Kevin Solano</span></a>
			          </li>
			          <li class='active estilo-color'>
			            <a href='#'><img src='./img/icbuzon.png' alt='x' height='17' width='20'/> Bandeja</a>
			          </li>
			          <li class='active estilo-color'>
			              <a href='#'><img src='./img/ic-consulta.png' alt='x' height='17' width='17'/> Consulta</a>
			          </li>
			          <li class='active estilo-color'>
		              <a href='#'><img src='./img/icreport.png' alt='x' height='17' width='17'/> Reporte</a>
			          </li>
			        <br><br><br>
			        <center>
			          <li class='active estilo-color'>
		             		<H3> <FONT COLOR=#9f2241 class= 'estilo-colorn'> $rowQna[1] </FONT> </H3>	
			          </li>

			            <li class='active estilo-color'>
		             		<FONT SIZE=4 COLOR=9f2241 class= 'estilo-colorg'> <I> $rowQna[4]</I> -- <I>$rowQna[5] </I>  </FONT>
			          </li>
			          </center>

	        </ul>
	      </div>
    	</nav>

												<br>
												<br>
											<div class='col-sm-12'>
											<div class='plantilla-inputv text-dark ''>
											    <div class='card-body'><h2 align='center'>Por el momento no esta disponible la captura.</h2></div>
										</div>
										</div>");
				 }
			}

		?>
		<script src="js/bootstrap.min.js"></script>
   	<script src="js/main.js"></script>

		
		<br>
	</body>
</html>

