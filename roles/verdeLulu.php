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

 
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/funciones.js"></script>
		<script src="jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.min.js" type="text/javascript"></script>
		<script src="jquery/jquery-ui.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	

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

	</head>
	<body>
		<?php 
			include "Controller/configuracion.php";
			$usuarioSeguir =  $_GET['usuario_rol'];
			$idMovSeg = $_GET['id_mov'];
			//echo $idMovSeg;
		?>
		<center>
			<br>
					<h3>Sistema de Control de Registro de Formato de Movimiento de Personal (SICON).</h3>
				<br>
				<h5> DEPARTAMENTO DE DICTAMINACIÓN SALARIAL Y CONTRATOS POR HONORARIOS - DDSCH</h5>
			<br>

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
						        <input type="date" class="form-control" id="fechaRLaborales" name="fechaRLaborales">
						      </div>
						    </div>	
						    <div class="col">

							    <div class="form-group col-md-12" >
						  		 <label for="ofEntregaL">OFICIO ENTREGA EXPEDIENTE A RELACIONES LABORALES:</label> 
						  		
							    <input type="text" class="form-control" id="ofEntregaRL" name="ofEntregaRL" placeholder="OFICIO ENTREGA EXPEDIENTE RELACIONES LABORALES" maxlength="65">
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
							    <input type="date" class="form-control" id="fechaEntregaUnidad" name="fechaEntregaUnidad" >
					  		</div>
						    </div>	
						    <div class="col">

							   <div class="form-group col-md-12" >
							  		 <label for="ofUnidad">OFICIO ENTREGA EXPEDIENTE UNIDAD: </label> 
								    <input type="text" class="form-control" id="ofEntregaUnidad" name="ofEntregaUnidad" placeholder="OFICIO ENTREGA EXPEDIENTE UNIDAD" maxlength="49">	
						  		</div>		

				  			</div>		
						    
						</div>

						
				  		<div class="form-group col-md-12" >
					  		<label for="oficio">OFICIO ENTREGA SEGUROS: </label>
						    <input type="text" class="form-control" id="ofEntrega" name="ofEntrega" placeholder="Ingresa el oficio de entrega" maxlength="25"required>
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

				</div>
		
	</body>

		
</html>

