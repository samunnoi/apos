<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Excel extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Itemreport_m','itemreport');				
				$this->load->library(array( 'session', 'form_validation','table')); 
				$this->load->helper(array('url', 'html', 'form'));
				$this->load->library('phpexcel');
			}
			public function index()
			{		
			
			}
			
			public function rep()
			{		$objPHPExcel = new PHPExcel();
					$index=0;
					$catalogname=$this->uri->segment(3);
					$search=$this->itemreport->pubitemreport($catalogname);
					foreach($search as $row){
					$catalog['itemid'][$index]=$row->itemid;
						$catalog['name'][$index]=$row->name;
						$catalog['barcode'][$index]=$row->barcode;
						$catalog['detail'][$index]=$row->detail1;
						$catalog['price'][$index]=$row->price;
						$catalog['catalog_name'][$index]=$row->catalog_name;
			
						$index++;	
					}
					
					$check="";  // เช็คค่าซ้ำของ catalog_name
					$i=0; 		// set ค่า index ของ PHPExcel
					$save="";	// ตัวแปรเช็คค่าซ้ำ เพื่อนำไปจัดจำนวน rows 
					$rows=6;	// กำหนดค่า rows เพื่อให้แสดงข้อมูลตามลำดับ
					$rowsdetail=7;	// กำหนดค่า rows detail เพื่อให้แสดงข้อมูลตามลำดับ
					for( $count=0; $count<$index; $count++ ){  
						if(strcmp($catalog['catalog_name'][$count],$check)!=0){  
							
							
							// สร้าง worksheet แล้ว write ค่า ลงตาราง
							$objPHPExcel->createSheet();
							$objPHPExcel->setActiveSheetIndex($i);
							$objPHPExcel->getActiveSheet()->SetCellValue('B2',$catalog['catalog_name'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('B3', 'ItemID');
							$objPHPExcel->getActiveSheet()->SetCellValue('C3', 'Item Name');
							$objPHPExcel->getActiveSheet()->SetCellValue('D3', 'Barcode');
							$objPHPExcel->getActiveSheet()->SetCellValue('E3', 'Cash');
							$objPHPExcel->getActiveSheet()->SetCellValue('F3', 'Merber');
							$objPHPExcel->getActiveSheet()->SetCellValue('G3', 'Vip');
							$objPHPExcel->getActiveSheet()->SetCellValue('B4', $catalog['itemid'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('C4', $catalog['name'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('D4', $catalog['barcode'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('E4', $catalog['price'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('F4', $catalog['price'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('G4', $catalog['price'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('B5', $catalog['detail'][$count]);
							$check=$catalog['catalog_name'][$count];
							$objPHPExcel->getActiveSheet()->setTitle($catalog['catalog_name'][$count]);
							$i++;
						}else{ 
	
								$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rows, $catalog['itemid'][$count]);
								$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rows, $catalog['name'][$count]);
								$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rows, $catalog['barcode'][$count]);
								$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rows, $catalog['price'][$count]);
								$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rows, $catalog['price'][$count]);
								$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rows, $catalog['price'][$count]);
								$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowsdetail, $catalog['detail'][$count]);
								$save=$catalog['detail'][$count];
								
								if(strcmp($catalog['detail'][$count],$save)!=0){
									$rows=$rows+2;
									$rowsdetail=$rowsdetail+2;
								}else{
									$rows=6; 
									$rowsdetail=7;
								}	
						}

					}
			
							// บันทึกไฟล์ Excel 2007
							$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
							$objWriter->save( 'item.xls'); //ชื่อไฟล์ เมื่อมีการเรียกไฟล์นี้ทำงานก็จะทำการสร้าง ไฟล์ไว้ใน ตำแหน่งของที่กำหนดชื่อไฟล์

							
							echo "<a href=\"".base_url()."item.xls\">DownloadFile</a><br>";
							echo "<a href=\"".site_url('item')."\">Back</a>";

			}
			
			
			
		
			
	}
		
		
	
	
	


