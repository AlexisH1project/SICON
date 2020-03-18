<?php 

		include "configuracion.php";
		require "conexion_excel.php";

		include 'Classes/PHPExcel/IOFactory.php';

		$fileType = 'Excel5';
		$fileName = 'reporteAnalista.xls';

		// Read the file
		$objReader = PHPExcel_IOFactory::createReader($fileType);
		$objPHPExcel = $objReader->load($fileName);

		//header ('Content-type: text/html; charset=utf-8');
		$usuarioSegimiento = $_POST['usuario'];
		$id_Fom = $_POST['noFomope'];
		$rol =  $_POST['id_rol'];
		$elComentarioR =  $_POST['comentarioR'];

		$sqlVte = "SELECT ";

		$objPHPExcel->getActiveSheet()->setCellValue('G7'.$fila, $rows['unidad']); 
        $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['apellido_1']); 
        $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['apellido_2']); 
        $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['nombre']); 
        $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['analistaCap']); 
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['fechaIngreso']);

	// Write the file
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
	        //$objWriter->save("fomopeDESCARGA.xlsx");


	    $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

	    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	    header('Content-Disposition: attachment;filename='."volanteRechazo".$row[].".xlsx");
	    header('Cache-Control: max-age=0');


	    ob_end_clean();



	    $writer->save('php://output');
 ?>