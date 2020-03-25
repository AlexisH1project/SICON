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
		<link rel="stylesheet" href="css/estilossicon.css">

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
			<?php
				include "configuracion.php";
				$usuarioSeguir =  $_GET['usuario_rol'];
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

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark plantilla-input fixed-top">
		    <div class="container">
    		
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


		  <center>
		  	
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
								<label class="plantilla-label estilo-colorg" for="unexp_1">Unidad:</label>
								<input onkeypress="return pulsar(event)" type="text" class="form-control unexp border border-dark" id="unexp_1" name="unexp_1" placeholder="Ej. 111" value="<?php echo $ver[3] ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" required readonly>
							</div>
						</div>

						<div class="form-row">
							<div class="col">
						      <div class="md-form mt-0">
						       <label class="plantilla-label estilo-colorg" for="rfcL">RFC: </label>
						    	<input type="text" class="form-control unexp border border-dark" id="rfc" name="rfc" placeholder="Ingresa rfc" maxlength="13" value="<?php echo $ver[4] ?>"   readonly>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <label class="plantilla-label estilo-colorg" for="CURP">CURP: </label>
						   		 <input type="text" class="form-control unexp border border-dark" id="curp" name="curp" placeholder="Ingresa CURP" maxlength="18" value="<?php echo $ver[5] ?>" readonly>
						      </div>
						    </div>
						</div>
						<br>
				  		<div class="form-group col-md-12" >	
				  			<label class="plantilla-label estilo-colorg" for="nombreT">NOMBRE COMPLETO: </label>
						</div>

				  		<div class="form-row">

				  			<div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control unexp border border-dark" id="apellido1" name="apellido1" placeholder="Apellido Paterno" value="<?php echo $ver[6] ?>" maxlength="30"required readonly>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control unexp border border-dark" id="apellido2" name="apellido2" placeholder="Apellido Materno" value="<?php echo $ver[7] ?>" maxlength="30"required readonly>
						      </div>
						    </div>

						    <div class="col">
						      <div class="md-form mt-0">
						        <input type="text" class="form-control unexp border border-dark" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $ver[8] ?>" maxlength="40" required readonly>
						      </div>
						    </div>
						</div>
				</div>
				<div class="col-md-4 col-md-offset-4">

				  		<div class="form-group col-md-12" >
					  		<label class="plantilla-label estilo-colorg" for="fechaIngreso"> FECHA DE RECIBIDO: </label>
						    <input type="date" class="form-control unexp border border-dark" id="fechaIngreso" name="fechaIngreso" placeholder="Ingresa Fecha del ingreso" value="<?php echo $ver[9] ?>" required readonly>
						    
				  		</div>
				  	  <div class="form-row">
					<div class="form-group col-md-6">
							<div class="text-center">
								<label class="plantilla-label estilo-colorg" for="del">*Del:</label>
							</div>
							<input type="date" class="form-control unexp border border-dark " id="del" value="<?php echo $ver[24] ?>" name="del" placeholder="Del" required readonly>
							<small name= "alertVigencia" id= "alertVigencia" class="text-danger">
				        	</small> 
						</div>
						<div class="form-group col-md-6">
							<div class="text-center">
								<label class="plantilla-label estilo-colorg" for="al">al:</label>
							</div>
						<input  type="date" class="form-control unexp border border-dark" value="<?php echo $ver[25] ?>" id="al" name="al" placeholder="al" required readonly> <!--required-->
						</div>
					</div>

				  		<div class="form-group col-md-12" >	
					  		<label class="plantilla-label estilo-colorg" for="TipoEntregaArchivo">TIPO DE ENTREGA: </label>
						</div>

				  		<div class="form-group col-md-12" >
								<input  class="form-control unexp border border-dark" id="TipoEntregaArchivo" type="text" name="TipoEntregaArchivo" value="<?php echo $ver[11] ?>" required readonly >
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
							        	<input type="date" class="form-control unexp border border-dark" id="fechareci" name="fechareci" placeholder="Ingresa Fecha del ingreso" style="display: none;" value="<?php echo $ver[9] ?>" required readonly>
							         <textarea class="form-control border border-dark" id="obs" rows = "4" name="comentarioR" placeholder="Observación por rechazo" required><?php echo $ver[13] ?> </textarea>
							          <div class="form-row">
										<input type="text" class="form-control unexp border border-dark" id="noFomope" name="noFomope" value="<?php echo $noFomope?>" style="display:none">
										</div>
										<div class="form-row">
											<input type="text" class="form-control unexp border border-dark" id="id_rol" name="id_rol" value="<?php echo $id_rol?>" style="display:none">
										</div>
										<div class="form-row">
											<input type="text" class="form-control unexp border border-dark" id="usuario" name="usuario" value="<?php echo $usuario?>" style="display:none">
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

		  </center>
	 
				

					<script src="js/bootstrap.min.js"></script>
   	<script src="js/main.js"></script>
			
				</div>
		
	</body>

		
</html>

