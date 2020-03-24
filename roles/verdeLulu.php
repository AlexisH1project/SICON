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
				font-size: 20px;
				color:  #9f2241 ;
				
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
				font-size: 10px;
				color:  #e8d39e ;
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
			.plantilla-label{
				font-weight: bold;
				border-color: hsl(0, 100%, 50%); /* red */
				font-family: Monserrat, Medium;
				font-size: 18px;
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

	</head>
	<body>
		<?php 
			include "Controller/configuracion.php";
			$usuarioSeguir =  $_GET['usuario_rol'];
			$idMovSeg = $_GET['id_mov'];
			//echo $idMovSeg;
		?>
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

		  		<img class="img-responsive" src="img/img-salud.jpg" height="80" width="213">
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
	          <li class="active estilo-color">
             
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
		        
		         <h3 class="estilo-color">Sistema de Control de Registro de Formato de Movimiento de Personal
		          </h3>
		        </ul>
		        <ul class="navbar-nav ml-auto">          
		        
		       <h5 class="estilo-colorv"> Dirección General de Recursos Humanos y Organización/Dirección integral de puestos y servicios personales</h5>
		        </ul>
		      </div>
		    </div>
		  </nav>



		
		
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

				<div class="col-md-8 col-md-offset-8">
					 <form name="captura1" enctype="multipart/form-data" action="./Controller/guardarVerde.php" method="POST"> 
				 		<div class="form-row">
							<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="idFom" name="idFom" value="<?php echo $idMovSeg ?>" style="display:none">
						</div>

						
							<div class="form-row">
						    <div class="col">
						      <div class="form-group col-md-12">
					  			<label for="fAlaborar">FECHAS ENTREGA DE EXPEDIENTE A RELACIONES LABORALES: </label>
						        <input type="date" class="form-control bordg" id="fechaRLaborales" name="fechaRLaborales">
						      </div>
						    </div>	
						    <div class="col">

							    <div class="form-group col-md-12" >
						  		 <label for="ofEntregaL">OFICIO ENTREGA EXPEDIENTE A RELACIONES LABORALES:</label> 
						  		
							    <input type="text" class="form-control bordg" id="ofEntregaRL" name="ofEntregaRL" placeholder="OFICIO ENTREGA EXPEDIENTE RELACIONES LABORALES" maxlength="65">
							 </div>
				  			</div>		
						    
						</div>
						<br>
						

				  		  <div class="form-group">
						    <label for="archivo_1">Adjuntar un archivo (.zip)</label>
						    <!--  <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
						    <input type="file" name="nameArchivo" required>
						   <!--  <p class="help-block">Ejemplo de texto de ayuda.</p> -->
						  </div>
						<br>
						

						<div class="form-row">
						    <div class="col">
						      <div class="form-group col-md-12" >
						  		<label for="fechaUnidad">FECHA ENTREGA EXPEDIENTE UNIDAD: </label>
							    <input type="date" class="form-control bordg" id="fechaEntregaUnidad" name="fechaEntregaUnidad" >
					  		</div>
						    </div>	
						    <div class="col">

							   <div class="form-group col-md-12" >
							  		 <label  for="ofUnidad">OFICIO ENTREGA EXPEDIENTE UNIDAD: </label> 
								    <input type="text" class="form-control bordg" id="ofEntregaUnidad" name="ofEntregaUnidad" placeholder="OFICIO ENTREGA EXPEDIENTE UNIDAD" maxlength="49">	
						  		</div>		

				  			</div>		
						    
						</div>

						
				  		<div class="form-group col-md-12" >
					  		<label for="oficio">OFICIO ENTREGA SEGUROS: </label>
						    <input type="text" class="form-control bordg" id="ofEntrega" name="ofEntrega" placeholder="Ingresa el oficio de entrega" maxlength="25"required>
				  		</div>

				  		<!-- <div class="form-group col-md-12">
								<div class="col text-center">
								  	<button type="submit" class="btn btn-primary">Agregar Informacion</button>
								</div>
						</div> -->
						<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								  Agregar Informacion
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Corroborar Informacion</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        ¿Estas seguro que la infirmacion a actualizar es la correcta?
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
								       	<input type="submit" class="btn btn-primary" name="acept" value="Aceptar">
								      </div>
								    </div>
								  </div>
								</div>

					</form>  

					<script src="js/bootstrap.min.js"></script>
   	<script src="js/main.js"></script>

				</div>
		
	</body>

		
</html>

