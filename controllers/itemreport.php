<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Itemreport extends CI_Controller {

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
				$data1=$this->head();
				$this->load->view('head_v');
				$this->load->view('itemreporthead_v',$data1);
				$this->load->view('foot_v');
			
			}
			
			public function table()
			{
				$index=0;
				$post=$this->input->post();
				extract($post);
				$data1=$this->head();
				$search=$this->itemreport->pubitemreport($select);
					foreach($search as $row){
						$catalog['itemid'][$index]=$row->itemid;
						$catalog['name'][$index]=$row->name;
						$catalog['barcode'][$index]=$row->barcode;
						$catalog['detail'][$index]=$row->detail1;
						$catalog['price'][$index]=$row->price;
						$catalog['catalog_name'][$index]=$row->catalog_name;
			
						$index++;	
					}			
					$data['catalog_name']=$catalog;
					$data['rowtable']=$index;
					$data1['catalog_select']=$select;	
				$this->load->view('head_v');
				$this->load->view('itemreporthead_v',$data1);
				$this->load->view('itemreport_v',$data);
				$this->load->view('foot_v');
				
			
			
			}
			
			private function head(){
			
					$index1=0;
					$rec=$this->itemreport->pubSerchCatalog();
					foreach($rec as $row){
						$catalog1['catalog_name1'][$index1]=$row->catalog_name;
						$index1++;	
					}			
					$data1['catalog_name1']=$catalog1;
					$data1['rowtable']=$index1;
			
			return  $data1;
			}
			
			public function repitem()
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
							// เซตค่า rows ที่จะพิมพ์ข้อมูล
							if(strcmp($catalog['catalog_name'][$count],$save)==0){
								$rows=$rows+2;
								$rowsdetail=$rowsdetail+2;
								
							}else{
							
								$rows=6; 
								$rowsdetail=7;
								
							}

							$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rows, $catalog['itemid'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rows, $catalog['name'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rows, $catalog['barcode'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rows, $catalog['price'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rows, $catalog['price'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rows, $catalog['price'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowsdetail, $catalog['detail'][$count]);
							$save=$catalog['catalog_name'][$count];
		
						}

					}
						// บันทึกไฟล์ Excel 2007
						$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
						$objWriter->save( 'item.xls'); //ชื่อไฟล์ เมื่อมีการเรียกไฟล์นี้ทำงานก็จะทำการสร้าง ไฟล์ไว้ใน ตำแหน่งของที่กำหนดชื่อไฟล์
						echo  redirect(base_url()."item.xls");

			}
			
	}
		
		
	
	
	


