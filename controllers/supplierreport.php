<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Supplierreport extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Supplierreport_m','supplierreport');					
				$this->load->library(array( 'session', 'form_validation','table')); 
				$this->load->helper(array('url', 'html', 'form'));
				$this->load->library('phpexcel');
			
			}
			
			
			public function index()
			{	
				// ฟังก์ชัน index จะทำการดึงข้อมูล supplier มา report เป็นตาราง
				$index=0;
				$search=$this->supplierreport->pubSupplierReport();
					foreach($search as $row){
						$supplier['supid'][$index]=$row->supid;
						$supplier['sup_name'][$index]=$row->sup_name;
						$supplier['tell'][$index]=$row->tell;
						$supplier['address1'][$index]=$row->address1;
						$supplier['sellman'][$index]=$row->sellman;
						$supplier['account_bank'][$index]=$row->account_bank;
						$index++;	
					}			
				$data['supplier']=$supplier;
				$data['rowtable']=$index;	
				$this->load->view('head_v');
				$this->load->view('supplierreport_v',$data);
				$this->load->view('foot_v');
			}
			
			
			public function repsup()
			{		
				// ฟังก์ชันการ export ข้อมูลผู้ส่งสินค้าเป็น excel
				$objPHPExcel = new PHPExcel();
				$index=0;
				$search=$this->supplierreport->pubSupplierReport();
				foreach($search as $row){
					$supplier['supid'][$index]=$row->supid;
					$supplier['sup_name'][$index]=$row->sup_name;
					$supplier['tell'][$index]=$row->tell;
					$supplier['address1'][$index]=$row->address1;
					$supplier['sellman'][$index]=$row->sellman;
					$supplier['account_bank'][$index]=$row->account_bank;
					$index++;	
				}
				$i=0; 		// set ค่า index ของ PHPExcel
				$save="";	// ตัวแปรเช็คค่าซ้ำ เพื่อนำไปจัดจำนวน rows 
				$rows=4;	// กำหนดค่า rows เพื่อให้แสดงข้อมูลตามลำดับ
				$rowsdetail=5;	// กำหนดค่า rows detail เพื่อให้แสดงข้อมูลตามลำดับ	
				$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->SetCellValue('B3', 'SupplierID');
				$objPHPExcel->getActiveSheet()->SetCellValue('C3', 'Name');
				$objPHPExcel->getActiveSheet()->SetCellValue('D3', 'Telephone');
				$objPHPExcel->getActiveSheet()->SetCellValue('E3', 'Sellman');
				$objPHPExcel->getActiveSheet()->SetCellValue('F3', 'Bank Account');
				for( $count=0; $count<$index; $count++ ){  
					// สร้าง worksheet แล้ว write ค่า ลงตาราง
					$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rows, $supplier['supid'][$count]);
					$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rows, $supplier['sup_name'][$count]);
					$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rows,'Tel-'. $supplier['tell'][$count]);
					$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rows, $supplier['sellman'][$count]);
					$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rows,'Acc '. $supplier['account_bank'][$count]);
					$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowsdetail, $supplier['address1'][$count]);
					$i++;
					$rows=$rows+2;
					$rowsdetail=$rowsdetail+2;
				}
				$objPHPExcel->getActiveSheet()->setTitle('Supplier Report');
				// บันทึกไฟล์ Excel 2007
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
			
			
			public function reppdf()
			{		
				// ฟังก์ชัน export ข้อมูลลูกค้าเป็น pdf
				require_once(APPPATH.'third_party/html2pdf/html2pdf.class.php');
				$index=0;
				$search=$this->supplierreport->pubSupplierReport();
					foreach($search as $row){
						$supplier['supid'][$index]=$row->supid;
						$supplier['sup_name'][$index]=$row->sup_name;
						$supplier['tell'][$index]=$row->tell;
						$supplier['address1'][$index]=$row->address1;
						$supplier['sellman'][$index]=$row->sellman;
						$supplier['account_bank'][$index]=$row->account_bank;
						$index++;	
					}			
				$data['supplier']=$supplier;
				$data['rowtable']=$index;
				$this->load->view('pdf/supplier_v',$data);

			}
			
			
			
	}
		
		
	
	
	


