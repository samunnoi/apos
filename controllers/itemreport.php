<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Itemreport extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model Itemreport	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Itemreport_m','itemreport');					
				$this->load->library(array( 'session', 'form_validation','table')); 
				$this->load->helper(array('url', 'html', 'form'));
				//	โหลดไลบารี PhpExcel
				$this->load->library('phpexcel');
			}
			
			
			public function index()
			{
				// ดึงข้อมูลประเภทสินค้า แหละโลหด view
				$data1=$this->head();
				$this->load->view('head_v');
				$this->load->view('itemreporthead_v',$data1);
				$this->load->view('foot_v');
			
			}
			
			public function table()
			{
				// ฟังก์ชันดึงข้อมูลสินค้ามาแสดงเป็นตาราง
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
			
			
			private function head()
			{
				// ดึงข้อมูลประเภทสินค้า
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
			{		
				// ฟังก์ชันการ export ข้อมูลสินค้าเป็น excel
				$objPHPExcel = new PHPExcel();
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
				/// บันทึกไฟล์ Excel 2007
				header('Content-Type: application/vnd.ms-excel');
				header('Content-Disposition: attachment;filename="01simple.xls"');
				header('Cache-Control: max-age=0');
				// If you're serving to IE 9, then the following may be needed
				header('Cache-Control: max-age=1');

				// If you're serving to IE over SSL, then the following may be needed
				header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
				header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
				header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
				header ('Pragma: public'); // HTTP/1.0

				$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
				$objWriter->save('php://output');

			}
			
			
			public function repitempdf()
			{
				// ฟังก์ชัน export ข้อมูลสินค้าเป็น pdf			
				require_once(APPPATH.'third_party/html2pdf/html2pdf.class.php');
				$index=0;
				$select=1;
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
				$this->load->view('pdf/item_v',$data);
			}
			
	}
		
		
	
	
	


