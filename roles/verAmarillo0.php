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
			  border-color: #9f2241; /* grey */
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
				font-size: 25px;
				color:  #9f2241 ;
				font-weight: bold;
			}
			.estilo-colorr{
				color:  #f2ebd7 ;
				font-weight: bold;
			}
			.estilo-colorn{
				color:  #000000 ;
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
				font-size: 22px;
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
				padding: 12px;
			}

			.plantilla-label{
				font-weight: bold;
				border-color: hsl(0, 100%, 50%); /* red */
				font-family: Monserrat, Medium;
				font-size: 18px;
			}

			.plantilla-lugnac{
				background-color: #A9D0F5;
				font-family: Monserrat, Medium;
				font-size: 21px;
				font-weight: bold;
				padding: 12px 12px 2px 12px;
			}

			.plantilla-depend{
				background-color: #A9D0F5;
				font-family: Monserrat, Medium;
				font-size: 22px;
				font-weight: bold;
				padding: 12px 12px 8px 12px;
			}

			.plantilla-inputdepend{
				background-color: #CEE3F6;
				font-family: Monserrat, Medium;
				padding: 36px 12px 36px 12px;
			}

			.tamanio-button{
				font-weight: bold;
				font-size: 25px;
			}
			.tamanio-button2{
				font-weight: bold;
				font-size: 13px;
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
			<?php
				include "configuracion.php";
				$usuarioSeguir =  $_GET['usuario_rol'];
			?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark plantilla-input fixed-top">
		    <div class="container">
    		<form action="Lulu.php">
    			<input type="text" name="usuario_rol" value="<?php echo "$usuarioSeguir" ?>" style="display: none;">
   		 		<button type="submit" class="btnBut"><img src="./img/buzon.png" alt="x" height="30" width="30"/></button>
    		</form>
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto">          
		         <li class="nav-item dropdown">
		            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		              Acciones
		            </a>
		            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
		              <a class="dropdown-item" href="./FiltroDescargar.php?usuario_rol=<?php echo $usuarioSeguir ?>">Descarga de documentos</a>
		              <a class="dropdown-item" href="./generarReporte.php?usuario_rol=<?php echo $usuarioSeguir ?>">Generar reportes</a>
		            </div>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href='LoginMenu/vista/cerrarsesion.php'>CERRAR SESIÓN</a>
		          </li>
		        </ul>


		      </div>
		    </div>
		  </nav>



		<img class="img-responsive" src="img/img-salud.jpg" height="150" width="400">
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
						    	<input type="text" class="form-control" id="rfc" name="rfc" placeholder="Ingresa rfc" maxlength="13" value="<?php echo $ver[4] ?>"   readonly>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <label for="CURP">CURP: </label>
						   		 <input type="text" class="form-control" id="curp" name="curp" placeholder="Ingresa CURP" maxlength="18" value="<?php echo $ver[5] ?>" readonly>
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
					  		<label for="fechaIngreso"> FECHA DE RECIBIDO: </label>
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
							        	<input type="date" class="form-control" id="fechareci" name="fechareci" placeholder="Ingresa Fecha del ingreso" style="display: none;" value="<?php echo $ver[9] ?>" required readonly>
							         <textarea class="form-control border border-dark" id="obs" rows = "4" name="comentarioR" placeholder="Observación por rechazo" required><?php echo $ver[13] ?> </textarea>
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
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">REGRESAR</button>
							        <input type="submit" name="tipButton" class="btn btn-primary" value="aceptar">
							      </div>
							      <div class="modal-footer">
							        
							        <input type="submit" name="tipButton" class="btn btn-danger" value="bandeja de entrada">
							      </div>
							    </div>
							  </div>
							</div>

					</form>
				</div>
		
	</body>

		
</html>

