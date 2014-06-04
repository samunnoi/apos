<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Excel extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Itemreport_m','itemreport');
				$this->load->model('Customerreport_m','customerreport');	
				$this->load->model('Supplierreport_m','supplierreport');
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

							
							echo "<a href=\"".base_url()."item.xls\">DownloadFile</a><br>";
							echo "<a href=\"".site_url('item')."\">Back</a>";

			}
			
			public function repcus()
			{		$objPHPExcel = new PHPExcel();
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
							$objPHPExcel->getActiveSheet()->SetCellValue('E4', 'Tel'.$customer['tel1'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('F4', $customer['email'][$count]);
							$objPHPExcel->getActiveSheet()->SetCellValue('B5', $customer['address1'][$count] . $customer['province'][$count] . $customer['post1'][$count]);
							$check=$customer['cutid'][$count];
							$objPHPExcel->getActiveSheet()->setTitle($customer['cutid'][$count]);
							$i++;
						}else{ 
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
								$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rows, $customer['tel1'][$count]);
								$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rows, $customer['email'][$count]);
								$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowsdetail, $customer['address1'][$count] . $customer['province'][$count] . $customer['post1'][$count]);
								$save=$customer['cutid'][$count];
								
									
								
							
								
								
						}

					}
			
							// บันทึกไฟล์ Excel 2007
							$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
							$objWriter->save( 'customer.xls'); //ชื่อไฟล์ เมื่อมีการเรียกไฟล์นี้ทำงานก็จะทำการสร้าง ไฟล์ไว้ใน ตำแหน่งของที่กำหนดชื่อไฟล์

							
							echo "<a href=\"".base_url()."customer.xls\">DownloadFile</a><br>";
							echo "<a href=\"".site_url('customer')."\">Back</a>";

			}
			
			public function repsup()
			{		$objPHPExcel = new PHPExcel();
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
							$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
							$objWriter->save( 'supplier.xls'); //ชื่อไฟล์ เมื่อมีการเรียกไฟล์นี้ทำงานก็จะทำการสร้าง ไฟล์ไว้ใน ตำแหน่งของที่กำหนดชื่อไฟล์

							
							echo "<a href=\"".base_url()."supplier.xls\">DownloadFile</a><br>";
							echo "<a href=\"".site_url('supplier')."\">Back</a>";

			}
			
			
		
			
	}
		
		
	
	
	


