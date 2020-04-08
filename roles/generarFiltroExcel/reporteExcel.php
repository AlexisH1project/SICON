
<?php

	//require 'Classes/PHPExcel.php';
    include "configuracion.php";
    require "conexion_excel.php";

	include 'Classes/PHPExcel/IOFactory.php';
/*
		$fileType = 'Excel5';
		$fileName = 'reporteAnalista.xls';

		// Read the file
		$objReader = PHPExcel_IOFactory::createReader($fileType);
		$objPHPExcel = $objReader->load($fileName);


	   $fila = 8;
	   $estiloTituloColumnas = array(
    	'font' => array(
			'name'  => 'Calibri',
			'size' =>8,
			'color' => array(
				'rgb' => '000000'
			)
    	),
    	'borders' => array(
			'allborders' => array(
				'style' => PHPExcel_Style_Border::BORDER_THIN
			)
    	),
    	'alignment' =>  array(
			'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    	)
	);
		$estiloInformacion = new PHPExcel_Style();

			$estiloInformacion->applyFromArray( array(
		    	'font' => array(
					'name'  => 'Calibri',
					'size' =>11,
					'color' => array(
						'rgb' => '000000'
					)
		    	),
		    	'fill' => array(
					'type'  => PHPExcel_Style_Fill::FILL_SOLID
				),
		    	'borders' => array(
					'allborders' => array(
						'style' => PHPExcel_Style_Border::BORDER_THIN
					)
		    	),
				'alignment' =>  array(
					'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
					'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
		    	)
			));*/

			$matrizImp = $_POST['matrizBuscada'];
            $nombreUser = $_POST['usuario_rol'];
			$tamanioMatriz =	count($matrizImp);
            echo $matrizImp[1][0];
                      /*  if($tamanioMatriz != 0){
	                            for($i=0; $i<= $tamanioMatriz; $i++){
	                                $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $matrizImp[0][1]); 
	                                $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $matrizImp[0][2]); 
	                                $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $matrizImp[0][3]); 
	                                $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $matrizImp[0][4]); 
	                                $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $matrizImp[0][2]); 
	                                $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $matrizImp[0][2]);
	                                $fila++;

	                            	}
	                                $fila--;
	                            	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A8:F".$fila);
									$objPHPExcel->getActiveSheet()->getStyle("A8:F".$fila)->applyFromArray($estiloTituloColumnas);
                            // Write the file
		                            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
		                            //$objWriter->save("fomopeDESCARGA.xlsx");


		                        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

		                        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		                        header('Content-Disposition: attachment;filename='."reporte.xlsx");
		                        header('Cache-Control: max-age=0');


		                        ob_end_clean();



		                        $writer->save('php://output');
			                

                        }else{
                            echo "<script> alert('No hay informacion de busqueda para generar reporte'); window.location.href = '../consultaEstado.php?usuario_rol=$nombreUser'</script>";

                        }*/
      
?>
