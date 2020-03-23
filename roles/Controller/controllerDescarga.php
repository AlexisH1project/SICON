<?php

$nombreDeArchivoDescarga = $_POST['nombreDecarga'];

$nombreParaD = explode("_", $nombreDeArchivoDescarga);
echo $nombreDeArchivoDescarga;
//$nombreParaD[0].$nombreParaD[1]."
	header("Content-disposition: attachment; filename=".$nombreParaD[0]."_".$nombreParaD[1].".pdf");
	header("Content-type: application/pdf");
	readfile("./documentos/".$nombreDeArchivoDescarga); //C:/xampp/htdocs/adjuntoDocumentos
	
?>