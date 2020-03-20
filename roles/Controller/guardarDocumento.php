<?php 

	$nombre = strtoupper($_POST['nombre'] );
	$elRfc =  strtoupper($_POST['rfcL_1']);
	$elApellido1 = strtoupper ($_POST['apellido1']);
	$elApellido2 = strtoupper ($_POST['apellido2']);
	$nombreArch = strtoupper($_POST['documentoSelct']);

	$dir_subida = './documentos/';

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

			    if($elRfc == $extractRfc AND $nombreArch == strtoupper($nameAdj)){
			      		unlink($dir_subida.$elRfc."_".strtoupper($nameAdj)."_".$elApellido1."_".$elApellido2."_".$nombre.".".$extencion);
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
			   	//echo "<script> alert('Se guardo archivo correctamente'); window.location.href = '../blancoLulu.php'</script>";
			} else{
			    //echo "<script> alert('Existe un error al guardar el archivo'); window.location.href = '../blancoLulu.php'</script>";
			}


 ?>