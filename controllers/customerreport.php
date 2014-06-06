<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Customerreport extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model Customerreport	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Customerreport_m','customerreport');					
				$this->load->library(array( 'session', 'form_validation','table')); 
				$this->load->helper(array('url', 'html', 'form'));
				//	โหลดไลบารี PhpExcel
				$this->load->library('phpexcel');
			}
			
			
			public function index()
			{
				// ฟังก์ชันโหลด view
				$data1=$this->head();
				$this->load->view('head_v');
				$this->load->view('customerreporthead_v',$data1);
				$this->load->view('foot_v');
			
			}
			
			public function table()
			{
				// ฟังก์ชันนำข้อมูลลูกค้าไปแสดงเป็นตาราง
				$index=0;
				$post=$this->input->post();
				extract($post);
				// ดึงข้อมูลจากฟังก์ชัน Head
				$data1=$this->head();
				$search=$this->customerreport->pubCustomerReport($select);
					foreach($search as $row){
						$customer['cusid'][$index]=$row->cusid;
						$customer['name'][$index]=$row->name;
						$customer['suname'][$index]=$row->suname;
						$customer['tel1'][$index]=$row->tel1;
						$customer['address1'][$index]=$row->address1;
						$customer['province'][$index]=$row->province;
						$customer['post1'][$index]=$row->post;
						$customer['cutid'][$index]=$row->cutid;
						$customer['email'][$index]=$row->email;
						$index++;	
					}			
					$data['customer']=$customer;
					$data['rowtable']=$index;
					$data1['cutid_select']=$select;	
				$this->load->view('head_v');
				$this->load->view('customerreporthead_v',$data1);
				$this->load->view('customerreport_v',$data);
				$this->load->view('foot_v');
				
			
			
			}
			
			
			private function head()
			{
				// ฟังก์ชันดึงข้อมูลประเภทลูกค้า
				$index1=0;
				$rec=$this->customerreport->pubSerchCustomerType();
				foreach($rec as $row){
					$cutid1['cut_id1'][$index1]=$row->cutid;
					$index1++;	
				}			
				$data1['cut_id1']=$cutid1;
				$data1['rowtable']=$index1;
				return  $data1;
			}
			
			
			
			public function repcus() 
			{		
				// ฟังก์ชันการ export ข้อมูลลูกค้าเป็น excel
				$objPHPExcel = new PHPExcel();
				$index=0;
				$cutname=$this->uri->segment(3);
				$search=$this->customerreport->pubCustomerReport($cutname);
				foreach($search as $row){
					$customer['cusid'][$index]=$row->cusid;
					$customer['name'][$index]=$row->name;
					$customer['suname'][$index]=$row->suname;
					$customer['tel1'][$index]=$row->tel1;
					$customer['address1'][$index]=$row->address1;
					$customer['province'][$index]=$row->province;
					$customer['post1'][$index]=$row->post;
					$customer['cutid'][$index]=$row->cutid;
					$customer['email'][$index]=$row->email;
					$index++;	
				}
				$check="";  // เช็คค่าซ้ำของ catalog_name
				$i=0; 		// set ค่า index ของ PHPExcel
				$save="";	// ตัวแปรเช็คค่าซ้ำ เพื่อนำไปจัดจำนวน rows 
				$rows=6;	// กำหนดค่า rows เพื่อให้แสดงข้อมูลตามลำดับ
				$rowsdetail=7;	// กำหนดค่า rows detail เพื่อให้แสดงข้อมูลตามลำดับ
				for( $count=0; $count<$index; $count++ ){  
					if(strcmp($customer['cutid'][$count],$check)!=0){  
						// สร้าง worksheet แล้ว write ค่า ลงตาราง
						$objPHPExcel->createSheet();
						$objPHPExcel->setActiveSheetIndex($i);
						$objPHPExcel->getActiveSheet()->SetCellValue('B2',$customer['cutid'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('B3', 'CustomerID');
						$objPHPExcel->getActiveSheet()->SetCellValue('C3', 'Name');
						$objPHPExcel->getActiveSheet()->SetCellValue('D3', 'Surname');
						$objPHPExcel->getActiveSheet()->SetCellValue('E3', 'Telephone');
						$objPHPExcel->getActiveSheet()->SetCellValue('F3', 'E-mail');
						$objPHPExcel->getActiveSheet()->SetCellValue('B4', $customer['cusid'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('C4', $customer['name'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('D4', $customer['suname'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('E4', 'Tel-'.$customer['tel1'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('F4', $customer['email'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('B5', $customer['address1'][$count] . $customer['province'][$count] . $customer['post1'][$count]);
						$check=$customer['cutid'][$count];
						$objPHPExcel->getActiveSheet()->setTitle($customer['cutid'][$count]);
						$i++;
					}else{ 	
						// เซตค่า rows ที่จะพิมพ์ข้อมูล
						if(strcmp($customer['cutid'][$count],$save)==0){
							$rows=$rows+2;
							$rowsdetail=$rowsdetail+2;
						}else{
							$rows=6; 
							$rowsdetail=7;
						}
						$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rows, $customer['cusid'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rows, $customer['name'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rows, $customer['suname'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rows,'Tel-'.$customer['tel1'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rows, $customer['email'][$count]);
						$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowsdetail, $customer['address1'][$count] . $customer['province'][$count] . $customer['post1'][$count]);
						$save=$customer['cutid'][$count];
					}
				}
				// บันทึกไฟล์ Excel 2007
				$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
				$objWriter->save( 'customer.xls'); //ชื่อไฟล์ เมื่อมีการเรียกไฟล์นี้ทำงานก็จะทำการสร้าง ไฟล์ไว้ใน ตำแหน่งของที่กำหนดชื่อไฟล์
				echo  redirect(base_url()."customer.xls");
			}
			
			
			public function repcuspdf()
			{		
				// ฟังก์ชัน export ข้อมูลลูกค้าเป็น pdf
				require_once(APPPATH.'third_party/html2pdf/html2pdf.class.php');
				$index=0;
				$select=1;
				$search=$this->customerreport->pubCustomerReport($select);
				foreach($search as $row){
					$customer['cusid'][$index]=$row->cusid;
					$customer['name'][$index]=$row->name;
					$customer['suname'][$index]=$row->suname;
					$customer['tel1'][$index]=$row->tel1;
					$customer['address1'][$index]=$row->address1;
					$customer['province'][$index]=$row->province;
					$customer['post1'][$index]=$row->post;
					$customer['cutid'][$index]=$row->cutid;
					$customer['email'][$index]=$row->email;
					$index++;	
				}			
				$data['customer']=$customer;
				$data['rowtable']=$index;
				$this->load->view('customerpdf_v',$data);
			}
			
			
			
	}
		
		
	
	
	


