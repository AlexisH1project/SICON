
<html>
	<head>
		<!-- ola kevss -->
		<meta charset="utf-8">
		<title>FOMOPE Autorizar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo_form.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<link href='css/jquery-ui.min.css' type='text/css' rel='stylesheet'>
		<link href='css/jquery-ui.css' type='text/css' rel='stylesheet'>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<script src="js/funciones.js"></script>
		<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js" type="text/javascript"></script>
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
			.btnBut {
				border-radius:10px;
				outline:none;
    			background-color: transparent !important;

			}

	

		</style>

	</head>
	<body>
		<?php 
			$usuarioSeguir = $_GET['usuario_rol'];
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
		            <a class="nav-link" href='../LoginMenu/vista/cerrarsesion.php'>CERRAR SESIÓN</a>
		          </li>
		        </ul>


		      </div>
		    </div>
		  </nav>


		<img class="img-responsive" src="img/img-salud.jpg" height="150" width="400">
		
		<center>			
						<h3 class="estilo-color plantilla-subtitulospr">Sistema de Control de Registro de Formato de Movimiento de Personal (SICON).</h3>
				<br>
				<h5  class=" plantilla-subtitulop" > DEPARTAMENTO DE DICTAMINACIÓN SALARIAL Y CONTRATOS POR HONORARIOS - DDSCH</h5>

				<form method="post" action=""> 
				<div class="rounded border border-dark plantilla-inputv text-center">

				  			<label  class="plantilla-label" for="nombreT">NOMBRE COMPLETO: </label>
					<div class="form-row">
					
				  			

						   <div class="form-group col-md-4">
						        <input type="text" class="form-control unexp border border-dark" id="apellido1" name="apellido1" placeholder="Apellido Paterno" maxlength="30" required>
						      </div>
						

						
						     <div class="form-group col-md-4">
						        <input type="text" class="form-control unexp border border-dark" id="apellido2" name="apellido2" placeholder="Apellido Materno" maxlength="30" required>
						      </div>

						     <div class="form-group col-md-4">
						        <input type="text" class="form-control unexp border border-dark" id="nombre" name="nombre" placeholder="Nombre" maxlength="40" value="" required >
						      </div>
						
			
				<div class="col-sm-12">
					<div class="form-row">

					<div class="form-group col-md-12">
						<div class="col text-center">
							<input type="submit" name="buscar" class="btn btn btn-danger tamanio-button plantilla-input text-white bord" value="Buscar"><br>

							<!-- <button type="submit" name="buscar" class="btn btn-outline-info tamanio-button">Buscar</button> -->
						</div>
					</div>

					</div>
				</div>
			</form>

		</div>
	
	</div>

		<br>
		<br>

		<table class="table table-hover table-white">
						<thead>
						    <tr>
							<!-- <td>Observacion</td>
							<td>ID Fomope</td> -->
						      <th scope="titulo">Nombre</th>
						      <th scope="titulo">Archivo</th>
						      
						   </tr>
					 	 </thead>

					<?php 
						$banderHay = 0;
						if(isset($_POST['buscar'])){// $_SERVER['REQUEST_METHOD'] == 'POST' if(){
							$elNombre = strtoupper($_POST['nombre']);
							$elApellido1 = strtoupper($_POST['apellido1']);
							$elApellido2 = strtoupper($_POST['apellido2']);
							//echo $elApellido1 . $elApellido2 .  $elNombre;

								$dir_subida = './documentos/';

								// Arreglo con todos los nombres de los archivos
								$files = array_diff(scandir($dir_subida), array('.', '..')); 
								
								foreach($files as $file){
								    // Divides en dos el nombre de tu archivo utilizando el . 
								    $data = explode("_",$file);
								    $data2 = explode("_.",$file);
									$indice = count($data2);	

									$extencion = $data2[$indice-1];
								    // Nombre del archivo
								    $extractRfc = $data[0];
								    $nameAdj = $data[1];
								    $banderHay = 1;
								    //echo $data[4];
								    // Extensión del archivo 

								    if(($data[2] == $elApellido1) AND ($data[3] == $elApellido2) AND ($data[4] == $elNombre)){
								      		$nombreCompleto = $elApellido1." ".$elApellido2." ".$elNombre;
								    		$banderHay ++;
								      		

						?>        	
						<tr>
													<td><?php echo $nombreCompleto  ?></td>
													<td><?php echo $nameAdj ?></td>
													<td>
													<form method="post" action="../model/controllerDescarga.php">
														<input type="text" name="nombreDecarga" value="<?php echo $file ?>" style="display:none" >
														<input type="submit" name="Descargar" value="Descargar"  class="btn btn-info">
														<!-- <button type="button" class="btn btn-info" id="" >Descargar</button>  -->
													</form>
													</td>
						</tr>
												
							<?php

									    }
									}

									if($banderHay == 1){
											
											echo('
												<br>
												<br>
												<div class="col-sm-12 ">
												<div class="p-3 mb-5 bg-warning text-dark ">
												    <div class="card-body"><h2 align="center">No existe resultados de la busqueda, vuelve intentar.</h2></div>
											</div>
											</div>');
									}
								}
							?>

		</table>

					
				

			
			
			  
	</center>
	</body>

</html>

