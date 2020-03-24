<html>
	
	<head>
		<meta charset="utf-8">
		<title>SS-FOMOPE Iniciar Sesión</title>
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
				font-size: 35px;
				color:  #9f2241 ;
				font-weight: bold;
			}
			.estilo-colorr{
				color:  #f2ebd7 ;
				font-weight: bold;
			}
			.estilo-colorn{
				font-family: Monserrat, Medium;
				font-size: 20px;
				color:  #6f7271 ;
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
				background-color: #f2ebd7;
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
			

			$(document).ready(function(){
				$(document).on('keydown', '.unexp', function(){
					var id = this.id;
					var splitid = id.split('_');
					var indice = splitid[1];
					$('#'+id).autocomplete({
						source: function(request, response){
							$.ajax({
								url: "resultados_ur.php",
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
								url: 'resultados_ur.php',
								type: 'post',
								data: {
									buscarid:buscarid,request:2
								},
								dataType: 'json',
								success:function(response){
									var len = response.length;
									if(len > 0){
										var idx2 = response[0]['idx2'];
										var unexp = response[0]['unexp'];
										document.getElementById('unexp_'+indice).value = unexp;
									}
								}
							});
							return false;
						}
					});
				});
			});

			$(document).ready(function(){
				$(document).on('keydown', '.rfcL', function(){
					var id = this.id;
					var splitid = id.split('_');
					var indice = splitid[1];
					$('#'+id).autocomplete({
						source: function(request, response){
							$.ajax({
								url: "resultados_rfc.php",
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
							console.log(buscarid);
							//alert(buscarid);
							$.ajax({
								url: 'resultados_rfc.php',
								type: 'post',
								data: {
									buscarid:buscarid,request:2

								},
								success: function(data){
									console.log(data);
									var infEmpleado = eval(data);
									//document.getElementById("rfc").value = infEmpleado[1] ;
									document.getElementById("curp").value = infEmpleado[2] ;
									document.getElementById("apellido1").value = infEmpleado[3] ;
									document.getElementById("apellido2").value = infEmpleado[4] ;
									document.getElementById("nombre").value = infEmpleado[5] ;


								}
							});
							return false;
						}
					});
				});
			});

			function enviarDatos(){
				var formulario = document.captura1;
				formulario.action= './Controller/agregarNewRegistro.php';
				document.getElementById("botonAccion").value = "Aceptar";

				    var a = $("#unexp_1").val();
				    var b = $("#rfcL_1").val();
				    var c = $("#curp").val();
				    var d = $("#apellido1").val();
				    var e = $("#apellido2").val();
				    var f = $("#nombre").val();
				    var g = $("#fechaIngreso").val();
				    //var h = $("#TipoEntregaArchivo").val();
				    

				      if (a=="" || b=="" || c==""|| d==""|| e==""|| f==""|| g==""|| $('input:radio[name=TipoEntregaArchivo]:checked').val() =="Ninguno" ) {
				        alert("Falta completar campo");		
				        return false;
				      } else 
				      	formulario.submit();
			}	

			function eliminarRequier(){
					 $('#comentarioR').removeAttr("required");

			}

			function rechazarDoc(){
				var formulario = document.captura1;
				
				document.getElementById("botonAccion").value = "Rechazar";

				    var a = $("#unexp_1").val();
				    var b = $("#rfcL_1").val();
				    var c = $("#curp").val();
				    var d = $("#apellido1").val();
				    var e = $("#apellido2").val();
				    var f = $("#nombre").val();
				    var g = $("#fechaIngreso").val();
				    var h = $("#comentarioR").val();
				    $('#nameArchivo').removeAttr("required");

				    //var h = $("#TipoEntregaArchivo").val();
				    

				      if (a=="" || b=="" || c==""|| d==""|| e==""|| f==""|| g=="" || h=="") {
				      		formulario.action= './Controller/agregarNewRegistro.php';
					        alert("Falta completar campo");		
					        return false;
				      } else{
				      	formulario.submit();}
			}

			function listaDeDoc(text){
				document.getElementById("listaDoc").value = text;

			}


	
		</script>

		<script type="text/javascript">





			$(document).ready(function(){
				$(document).on('keydown', '.unexp', function(){
					var id = this.id;
					var splitid = id.split('_');
					var indice = splitid[1];
					$('#'+id).autocomplete({
						source: function(request, response){
							$.ajax({
								url: "resultados_ur.php",
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
								url: 'resultados_ur.php',
								type: 'post',
								data: {
									buscarid:buscarid,request:2
								},
								dataType: 'json',
								success:function(response){
									var len = response.length;
									if(len > 0){
										var idx2 = response[0]['idx2'];
										var unexp = response[0]['unexp'];
										document.getElementById('unexp_'+indice).value = unexp;
									}
								}
							});
							return false;
						}
					});
				});
			});

			$(document).ready(function(){
				$(document).on('keydown', '.rfcL', function(){
					var id = this.id;
					var splitid = id.split('_');
					var indice = splitid[1];
					$('#'+id).autocomplete({
						source: function(request, response){
							$.ajax({
								url: "resultados_rfc.php",
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
							console.log(buscarid);
							//alert(buscarid);
							$.ajax({
								url: 'resultados_rfc.php',
								type: 'post',
								data: {
									buscarid:buscarid,request:2

								},
								success: function(data){
									console.log(data);
									var infEmpleado = eval(data);
									//document.getElementById("rfc").value = infEmpleado[1] ;
									document.getElementById("curp").value = infEmpleado[2] ;
									document.getElementById("apellido1").value = infEmpleado[3] ;
									document.getElementById("apellido2").value = infEmpleado[4] ;
									document.getElementById("nombre").value = infEmpleado[5] ;


								}
							});
							return false;
						}
					});
				});
			});



/*		$(document).ready(function(){

			$("input[name=rfc]").change(function(){
				//alert($('input[name=rfc]').val());
				document.getElementById("nombre_php").value = $('input[name=rfc]').val();

			});
		});*/
		</script>
  </head>

  <body>
<br><br>

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

		  		<h1><a href="index.html" class="logo">SICON </a></h1>
	        <ul class="list-unstyled components mb-5">
	        	<li class="active estilo-color">
	            <a ><span class="estilo-color">Kevin Solano</span></a>
	          </li>
	          <li class="active estilo-color">
	            <a href="#"><img src="./img/buzon.png" alt="x" height="30" width="30"/>Bandeja</a>
	          </li>
	          <li class="active estilo-color">
	              <a href="#"><span class="fa fa-user mr-3"></span>Consulta</a>
	          </li>
	          <li class="active estilo-color">
              <a href="#"><span class="fa fa-briefcase mr-3"></span>Reporte</a>
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
    	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bordv plantilla-inputv fixed-top">
		    <div class="container plantilla-inputv ">
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto">          
		        
		         <h3 class="estilo-color">Sistema de Control de Registro de Formato de Movimiento de Personal</h3>
		       
		        </ul>
		      </div>
		    </div>
		  </nav>


		
		
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">




		<?php 
			include "Controller/configuracion.php";
			$usuarioSeguir =  $_GET['usuario_rol'];

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
			 	$fehaI = date("d-m-Y", strtotime($rowQna[2])); 
			 	$fehaF = date("d-m-Y", strtotime($rowQna[3])); 

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


				 if($diaActual != 0 && $diaActual != 6 && (  strtotime($fechaSistema) >=  strtotime($fehaI) &&  strtotime($fechaSistema) <=  strtotime($fehaF))){

				 		// echo $fehaF;
				 		// echo $fechaSistema . " ";
				 		// echo $diaActual . " ";
				 		//$qnaEnviar = $rowQna[0];

?>



				
		<center>
			<h3>Sistema de Control de Registro de Formato de Movimiento de Personal (SICON).</h3>
				<br>

				<h5> DEPARTAMENTO DE DICTAMINACIÓN SALARIAL Y CONTRATOS POR HONORARIOS - DDSCH</h5>

				<h5 class="estilo-colorv"> DEPARTAMENTO DE DICTAMINACIÓN SALARIAL Y CONTRATOS POR HONORARIOS - DDSCH</h5>

				<br>

			<div class="col-md-8 col-md-offset-8">
				<!-- <form name="captura2" action="./Controller/agregarNewRegistro.php" method="POST">  -->

				<form  enctype="multipart/form-data" id="formDatos" name="captura1" action="" method="POST"> 
				 		<div class="form-row">
							<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
							<input type="text" class="form-control" id="botonAccion" name="botonAccion" value="<?php if(isset($_POST["botonAccion"])){ echo $_POST["botonAccion"];} ?>" style="display:none">
							<input type="text" class="form-control" id="qnaActual" name="qnaActual" value="<?php  echo  $rowQna[0]?>" style="display:none">
						</div> 
						<div class="form-row">
							<div class="form-group col-md-12" >
								<label class="plantilla-label" for="unexp_1">Unidad:</label>
								<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="unexp_1" name="unexp_1" placeholder="Ej. 513" value="<?php if(isset($_POST["unexp_1"])){ echo $_POST["unexp_1"];} ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
						</div>

						<div class="form-row">
							<div class="col">
						      <div class="md-form mt-0">
						       <label class="plantilla-label" for="rfcL_1" >RFC: </label>
						    	<input type="text"  type="text" class="form-control rfcL border border-dark" id="rfcL_1" name="rfcL_1" placeholder="RFC" value="<?php if(isset($_POST["rfcL_1"])){ echo $_POST["rfcL_1"];} ?>"  onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingresa rfc" maxlength="13"  required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <label for="CURP">CURP: </label>
						   		 <input type="text" class="form-control border border-dark" id="curp" name="curp" placeholder="Ingresa CURP" value="<?php if(isset($_POST["curp"])){ echo $_POST["curp"];} ?>" maxlength="18"  required>
						      </div>
						    </div>
						</div>
						<br>
				  		<div class="form-group col-md-12" >	
				  			<label for="nombreT">NOMBRE COMPLETO: </label>
						</div>

				  		<div class="form-row">
				  			
						      <input type="text" style="display:none;" class="form-control border border-dark" id="listaDoc" name="listaDoc" placeholder="Apellido Paterno" value="<?php if(isset($_POST["listaDoc"])){ echo $_POST["listaDoc"];} ?>" >

				  			<div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="apellido1" name="apellido1" placeholder="Apellido Paterno" value="<?php if(isset($_POST["apellido1"])){ echo $_POST["apellido1"];} ?>" maxlength="30"required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="apellido2" name="apellido2" placeholder="Apellido Materno" value="<?php if(isset($_POST["apellido2"])){ echo $_POST["apellido2"];} ?>" maxlength="30"required>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control border border-dark" id="nombre" name="nombre" placeholder="Nombre" maxlength="40" value="<?php if(isset($_POST["nombre"])){ echo $_POST["nombre"].$valor;} ?>" required>
						      </div>
						    </div>
						</div>
				</div>
				<div class="col-md-4 col-md-offset-4">

				  		<div class="form-group col-md-8" >
					  		<label for="fechaIngreso"> FECHA DE RECIBIDO: </label>
						    <input type="date" class="form-control border border-dark" id="fechaIngreso" name="fechaIngreso" placeholder="Ingresa Fecha del ingreso" value="<?php if(isset($_POST["fechaIngreso"])){ echo $_POST["fechaIngreso"];} ?>" required>
						    
				  		</div>
				  	<div class="form-row">
					<div class="form-group col-md-6">
							<div class="text-center">
								<label class="plantilla-label" for="del2">*Del:</label>
							</div>
							<input type="date" class="form-control border border-dark" id="del2" name="del2" value="<?php if(isset($_POST["del2"])){ echo $_POST["del2"];} ?>" placeholder="Del" >
							<small name= "alertVigencia" id= "alertVigencia" class="text-danger">
				        	</small> 
						</div>
						<div class="form-group col-md-6">
							<div class="text-center">
								<label class="plantilla-label" for="al3">al:</label>
							</div>
						<input  type="date" class="form-control border border-dark" id="al3" name="al3" value="<?php if(isset($_POST["al3"])){ echo $_POST["al3"];} ?>" placeholder="al"> <!--required-->
						</div>
					</div>
				  		<div class="form-group col-md-12" >	
					  		<label for="TipoEntregaArchivo">TIPO DE ENTREGA: </label>
						</div>

				  		<div class="form-group col-md-12" >
				  			<input id="TipoEntregaArchivo" type="radio" name="TipoEntregaArchivo" value="Ninguno" style="display:none" checked >
							<label class="radio-inline"><input id="TipoEntregaArchivo" type="radio" name="TipoEntregaArchivo" value="Fisico" required>Fisico</label>
							<label class="radio-inline"><input id="TipoEntregaArchivo" type="radio" name="TipoEntregaArchivo" value="Digital" required >Digital</label>
							<label class="radio-inline"><input id="TipoEntregaArchivo" type="radio" name="TipoEntregaArchivo" value="Ambos" required >Ambos</label>
				  		</div> 
				</div>
				
				<div class="col-md-8 col-md-offset-8">
						 <div class="form-row">

						  	<div class="col">
						  		<div class="md-form md-0">
								    <!-- <label  class="plantilla-label" for="archivo_1">Adjuntar un archivos</label> -->
								    <!--  <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
								    <input type="file" id="nameArchivo" name="nameArchivo" required>
								   <!--  <p class="help-block">Ejemplo de texto de ayuda.</p> -->
								</div>
							</div>

						   <!-- <label  class="plantilla-label" for="arch">Nombre del archivo: </label> -->
						  	<div class="col">
						  		<div class="md-form md-0">
									<div class="box" >

												<select class="form-control border border-dark custom-select" name="documentoSelct">
													
													<?php
													if (!$conexion->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
													       die("Error cargando el conjunto de caracteres utf8");
													}

													$consulta = "SELECT * FROM m1ct_documentos";
													$resultado = mysqli_query($conexion , $consulta);
													$contador=0;

													while($listDoc = mysqli_fetch_assoc($resultado)){ $contador++;?>
													<option value="<?php echo $listDoc["nombre_documento"]; ?>"><?php echo $listDoc["nombre_documento"]; ?></option>
													<?php }?>          
													</select>
										</div>


						  		<!-- <div class="md-form md-0">
									<input type="text" class="form-control unexp border border-dark" id="archA" name="archA" placeholder="Ingresa el nombre del archivo" maxlength="35" required >
								</div> -->
							</div>
						</div>	
						<div class="col">
						  	<div class="md-form md-0">
								<input type="submit" name="guardarAdj" onclick="eliminarRequier()" class="btn btn-outline-info tamanio-button" value="Adjuntar"><br>
							</div>	
						</div>	
								<?php 
							if(isset($_POST['guardarAdj'])){
									$nombre = strtoupper($_POST['nombre'] );
									$elRfc =  strtoupper($_POST['rfcL_1']);
									$elApellido1 = strtoupper ($_POST['apellido1']);
									$elApellido2 = strtoupper ($_POST['apellido2']);
									$nombreArch = $_POST['documentoSelct'];
									$listaCompleta = $_POST['listaDoc'];

									$nombreCompletoArch = $nombreArch."_".$listaCompleta;



									$dir_subida = './Controller/documentos/';
											// Arreglo con todos los nombres de los archivos
											$files = array_diff(scandir($dir_subida), array('.', '..')); 
											
											foreach($files as $file){
											    // Divides en dos el nombre de tu archivo utilizando el . 
											    $data = explode("_",$file);
											    $data2 = explode(".",$file);
												$indice = count($data2);	

												$extencion = $data2[$indice-1];
											    // Nombre del archivo
											    $extractRfc = $data[0];
											    $nameAdj = $data[1];
											    // Extensión del archivo 

											    if($elRfc == $extractRfc AND $nombreArch == $nameAdj){
											      		unlink($dir_subida.$elRfc."_".$nameAdj."_".$elApellido1."_".$elApellido2."_".$nombre.".".$extencion);
											        	break;
											    }
											}

											$fichero_subido = $dir_subida . basename($_FILES['nameArchivo']['name']);
											$extencion2 = explode(".",$fichero_subido);
											$tamnio = count($extencion2);

											$extencion3 = $extencion2[$tamnio-1];

											if (move_uploaded_file($_FILES['nameArchivo']['tmp_name'], $fichero_subido)) {
												sleep(3);
												$concatenarNombreC = $dir_subida.strtoupper($elRfc."_".$nombreArch."_".$elApellido1."_".$elApellido2."_".$nombre."_.".$extencion3);
												rename ($fichero_subido,$concatenarNombreC);
												
													$arrayDoc = explode("_", $nombreCompletoArch);
												 	$tamanioList = count($arrayDoc);
												
												 
												echo "
													<script>
															listaDeDoc( '$nombreCompletoArch');
													</script >";
												echo '
													<br>	<br>		<br>
													<center>
													<div class="col-md-8 col-md-offset-8">
														<ul class="list-group">';
															for($i=0; $i<=$tamanioList-1; $i++){
																if($arrayDoc[$i] == ""){
																	
																}else{
																	echo "
																	<li class='list-group-item'>$arrayDoc[$i]</li>
																	";	
																}
															}
												echo '
														</ul>
													</div>	
													</center>

												';
																									   	
											} else{
											    echo "<script> alert('Existe un error al guardar el archivo'); ";
											}
							}
						?>	

					</div>	
								
				</div>	
				<br>

<br> <br> 
					
				  		<!-- <div class="form-group col-md-12">
								<div class="col text-center">
								  	<input type="submit" class="btn btn-primary" name="botonAccion" value="Agregar Informacion">
								</div>
						</div> -->
							<br>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											 Enviar
											</button>
							  			<br>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        ¿Estas seguro de enviar esta información?
											      </div>
									<center>
						      <div class="form-group col-md-8">
									<div class="box" >

										<label  class="plantilla-label" for="laQna">¿A quien será turnado?</label>
												 
												<select class="form-control border border-dark custom-select" name="usuar">
													
													<?php
													if (!$conexion->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
													       die("Error cargando el conjunto de caracteres utf8");
													}

													$consulta = "SELECT * FROM usuarios WHERE id_rol = 3 OR id_rol = 2";
													$resultado = mysqli_query($conexion , $consulta);
													$contador=0;

													while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
													<option value="<?php echo $misdatos["usuario"]; ?>"><?php echo $misdatos["nombrePersonal"]; ?></option>
													<?php }?>          
													</select>
										</div>
										 <br>  

								</div>
										</center>
											      <div class="modal-footer">

											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
							        				<input type="button" onclick="enviarDatos();" class="btn btn-primary" value="Aceptar" name="botonAccion">
											      </div>
											    </div>
											  </div>
											</div>


							<br>
						<div class="form-row">
							<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
						
					<div class="form-group col-md-6">

						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1" data-whatever="@getbootstrap">Rechazar</button>
					</div>
							<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Motivo de rechazo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							          <textarea class="form-control z-depth-1" id="comentarioR" name="comentarioR" rows="3" placeholder="Escribe el motivo del rechazo..." required ></textarea> 
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
							        <input type="submit" class="btn btn-primary" onclick="rechazarDoc();" value="Rechazar" name="botonAccion">
							      </div>
							    </div>
							  </div>
							</div>

			
				</div>
			</form>
<?php
	 }else{
			 			echo('
												<br>
												<br>
											<div class="col-sm-12 ">
											<div class="plantilla-inputv text-dark ">
											    <div class="card-body"><h2 align="center">Por el momento no esta disponible la captura.</h2></div>
										</div>
										</div>');
				 }
			}

		?>
	<script src="js/bootstrap.min.js"></script>
   	<script src="js/main.js"></script>

</body>
</html>

