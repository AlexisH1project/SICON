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

		  .box{
			   position:absolute;
			   margin: 0 auto;
			   left: 0;
			   right: 0;
			   width:200px;
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
				<h3>Sistema de Control de Registro de Formato de Movimiento de Personal (SICON).</h3>
				<br>
				<h5> DEPARTAMENTO DE DICTAMINACIÓN SALARIAL Y CONTRATOS POR HONORARIOS - DDSCH</h5>
			<br>

				<div class="col-md-8 col-md-offset-8">
					 <form name="captura1" action="./Controller/autorizarAmarillo0.php" method="POST"> 
				 		<div class="form-row">
							<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="idFom" name="idFom" value="<?php echo $idMovSeg ?>" style="display:none">
						</div>
						
						<div class="form-row">
							<div class="form-group col-md-12" >
								<label class="plantilla-label" for="unexp_1">Unidad:</label>
								<input onkeypress="return pulsar(event)" type="text" class="form-control unexp" id="unexp_1" name="unexp_1" placeholder="Ej. 111" value="<?php echo $ver[3] ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" required readonly>
							</div>
						</div>

						<div class="form-row">
							<div class="col">
						      <div class="md-form mt-0">
						       <label for="rfcL">RFC: </label>
						    	<input type="text" class="form-control" id="rfc" name="rfc" placeholder="Ingresa rfc" maxlength="13" value="<?php echo $ver[4] ?>"  required readonly pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$">
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <label for="CURP">CURP: </label>
						   		 <input type="text" class="form-control" id="curp" name="curp" placeholder="Ingresa CURP" maxlength="18" value="<?php echo $ver[5] ?>" required readonly pattern="^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$">
						      </div>
						    </div>
						</div>
						<br>
				  		<div class="form-group col-md-12" >	
				  			<label for="nombreT">NOMBRE COMPLETO: </label>
						</div>

				  		<div class="form-row">

				  			<div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Apellido Paterno" value="<?php echo $ver[6] ?>" maxlength="30"required readonly>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Apellido Materno" value="<?php echo $ver[7] ?>" maxlength="30"required readonly>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $ver[8] ?>" maxlength="40" required readonly>
						      </div>
						    </div>
						</div>
				</div>
				<div class="col-md-4 col-md-offset-4">

				  		<div class="form-group col-md-12" >
					  		<label for="fechaIngreso"> FECHA DE INGRESO: </label>
						    <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="Ingresa Fecha del ingreso" value="<?php echo $ver[9] ?>" required readonly>
						    
				  		</div>
				  	  <div class="form-row">
					<div class="form-group col-md-6">
							<div class="text-center">
								<label class="plantilla-label" for="del">*Del:</label>
							</div>
							<input type="date" class="form-control " id="del" value="<?php echo $ver[24] ?>" name="del" placeholder="Del" required readonly>
							<small name= "alertVigencia" id= "alertVigencia" class="text-danger">
				        	</small> 
						</div>
						<div class="form-group col-md-6">
							<div class="text-center">
								<label class="plantilla-label" for="al">al:</label>
							</div>
						<input  type="date" class="form-control " value="<?php echo $ver[25] ?>" id="al" name="al" placeholder="al" required readonly> <!--required-->
						</div>
					</div>

				  		<div class="form-group col-md-12" >	
					  		<label for="TipoEntregaArchivo">TIPO DE ENTREGA: </label>
						</div>

				  		<div class="form-group col-md-12" >
								<input  class="form-control" id="TipoEntregaArchivo" type="text" name="TipoEntregaArchivo" value="<?php echo $ver[11] ?>" required readonly >
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
									<center>
														      <div class="form-row">
									<div class="box" >

										<label  class="plantilla-label" for="laQna">¿A quien será turnado?</label>
												 
												<select class="form-control unexp border border-dark custom-select" name="usuar">
													
													<?php
													if (!$conexion->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
													       die("Error cargando el conjunto de caracteres utf8");
													}

													$consulta = "SELECT * FROM usuarios WHERE id_rol = 3 OR id_rol = 2";
													$resultado = mysqli_query($conexion , $consulta);
													$contador=0;

													while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
													<option  value="<?php echo $misdatos["usuario"]; ?>"><?php echo $misdatos["nombrePersonal"]; ?></option>
													<?php }?>          
													</select>
										</div>
							     					       <br>     <br>     <br>   <br>  

										</div>
										</center>
											      <div class="modal-footer">

											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
											       	<button type="submit" class="btn btn-primary">Aceptar</button>
											      </div>
											    </div>
											  </div>
											</div>

				  			<br>
						
					</form>  
					<form name="captura2" action="./Controller/rechazoAmarillo0.php" method="POST">
						<div class="form-row">
							<input type="text" class="form-control" id="userName" name="userName" value="<?php echo $usuarioSeguir ?>" style="display:none">
						</div>
						<div class="form-row">
							<input type="text" class="form-control" id="idFom" name="idFom" value="<?php echo $idMovSeg ?>" style="display:none">
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
							        <form>
							         <textarea class="form-control border border-dark" id="obs" rows = "4" name="comentarioR" placeholder="Observación por rechazo"><?php echo $ver[13] ?></textarea>
							          <div class="form-row">
										<input type="text" class="form-control" id="noFomope" name="noFomope" value="<?php echo $noFomope?>" style="display:none">
										</div>
										<div class="form-row">
											<input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $id_rol?>" style="display:none">
										</div>
										<div class="form-row">
											<input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario?>" style="display:none">
										</div>
							        </form>
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

