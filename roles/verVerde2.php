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
			$sql = "SELECT * FROM fomope WHERE id_movimiento = '$idMovSeg'";

			if($result = mysqli_query($conexion,$sql)){
				$ver = mysqli_fetch_row($result);
			}else{
					echo '<script type="text/javascript">alert("Error en la conexion");</script>';
					echo '<script type="text/javascript">alert("error '. mysqli_error($conexion).'");</script>';
								
			}
			//echo $idMovSeg;
		?>
	
		<center>
			<br>
						<h3>Sistema de Control de Registro de Formato de Movimiento de Personal (SICON).</h3>
				<br>
				<h5> DEPARTAMENTO DE DICTAMINACIÓN SALARIAL Y CONTRATOS POR HONORARIOS - DDSCH</h5>
			<br>

				<div class="col-md-8 col-md-offset-8">
					 <form name="captura1" action="./Controller/autorizarVerde2.php" method="POST"> 
				 		<div class="form-row">
							<input readonly type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
						<div class="form-row">
							<input readonly type="text" class="form-control" id="idFom" name="idFom" value="<?php echo $idMovSeg ?>" style="display:none">
						</div>
						<div class="form-row">
						    <div class="col">
						      <div class="form-group col-md-12">
					  			<label for="fAlaborar">FECHAS ENTREGA DE EXPEDIENTE A RELACIONES LABORALES: </label>
						        <input readonly type="date" class="form-control" id="fechaRLaborales" value="<?php echo $ver[39] ?>" name="fechaRLaborales">
						      </div>
						    </div>	
						    <div class="col">

							    <div class="form-group col-md-12" >
						  		 <label for="ofEntregaL">OFICIO ENTREGA EXPEDIENTE A RELACIONES LABORALES:</label> 
						  		
							    <input readonly type="text" class="form-control" id="ofEntregaRL" value="<?php echo $ver[40] ?>" name="ofEntregaRL" placeholder="OFICIO ENTREGA EXPEDIENTE RELACIONES LABORALES" maxlength="65">
							 </div>
				  			</div>		
						    
						</div>
						<br>
						

				  		  <div class="form-group col-md-4" >
						    <label for="ejemplo_archivo_1">Archivo adjunto: </label>
						    <input readonly type="text"class="form-control" value="<?php echo $ver[41] ?>" id="ejemplo_archivo_1" name="ejemplo_archivo_1">
						   <!--  <p class="help-block">Ejemplo de texto de ayuda.</p> -->
						  </div>
						<br>
						

						<div class="form-row">
						    <div class="col">
						      <div class="form-group col-md-12" >
						  		<label for="fechaUnidad">FECHA ENTREGA EXPEDIENTE UNIDAD: </label>
							    <input readonly type="date" class="form-control" value="<?php echo $ver[42] ?>" id="fechaEntregaUnidad" name="fechaEntregaUnidad" >
					  		</div>
						    </div>	
						    <div class="col">

							   <div class="form-group col-md-12" >
							  		 <label for="ofUnidad">OFICIO ENTREGA EXPEDIENTE UNIDAD: </label> 
								    <input readonly type="text" class="form-control" id="ofEntregaUnidad" value="<?php echo $ver[43] ?>" name="ofEntregaUnidad" placeholder="OFICIO ENTREGA EXPEDIENTE UNIDAD" maxlength="49">	
						  		</div>		

				  			</div>		
						    
						</div>

							<div class="form-group col-md-12" >
					  		<label for="oficio">OFICIO ENTREGA SEGUROS: </label>
						    <input type="text" class="form-control" id="ofEntrega" name="ofEntrega" value="<?php echo $ver[10] ?>" placeholder="Ingresa el oficio de entrega" maxlength="25"required>
				  		</div>

				

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											 Autorizar
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
											        ¿Estas seguro de autorizar esta información?
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
											       	<button type="submit" class="btn btn-primary">Aceptar</button>
											      </div>
											    </div>
											  </div>
											</div>

				  			<br>
						
							
						
					</form>  
					<form name="captura2" action="./Controller/rechazoVerde2.php" method="POST">
						<div class="form-row">
							<input readonly type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
						<div class="form-row">
							<input readonly type="text" class="form-control" id="idFom" name="idFom" value="<?php echo $idMovSeg ?>" style="display:none">
						</div>
						
						<p>Justificación o Motivos de Rechazo</p>
					
							<div class="form-group shadow-textarea">
							  <label for="exampleFormControlTextarea6">*Agregar la justificacion</label>
							  <textarea class="form-control z-depth-1" id="comentarioR" name="comentarioR" rows="3" placeholder="Escribe el motivo del rechazo..."><?php echo $ver[13] ?></textarea>
							</div>

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
											 Rechazar
											</button>
							  			<br>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        ¿Estas seguro de rechazar?
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
											       	<button type="submit" class="btn btn-primary">Aceptar</button>
											      </div>
											    </div>
											  </div>
											</div>


					</form>
				</div>
		
	</body>

		
</html>

