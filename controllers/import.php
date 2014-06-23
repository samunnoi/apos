<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Import extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//		
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Item_m','item');					
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
				$this->load->library('phpexcel');
				$this->lang->load($this->session->userdata('language'));
				
			}
			public function index()
			{
				$this->load->view('head_v');
				$this->load->view('import_v');
				$this->load->view('foot_v');
			}
			
			public function importexcel()
			{	
				require_once(APPPATH.'libraries/PHPExcel/IOFactory.php');
				$inputFileName = "excel/item.xls";  
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
							
						}
					}
				}
				$index=0; // row number
				$old="-";
				$new="";
				foreach ($namedDataArray as $result) {
					
					$item['itemid'][$index]=  iconv("tis-620", "utf-8",$result["ItemID"]);
					$item['item'][$index]=iconv("utf-8", "utf-8",$result["Item"]);
					$item['barcode'][$index]=iconv("tis-620", "utf-8",$result["Barcode"]);
					$item['type'][$index]=iconv("utf-8", "utf-8",$result["Type"]);
					$item['detail'][$index]=iconv("utf-8", "utf-8",$result["Detail"]);
					$item['cash'][$index]=iconv("tis-620", "utf-8",$result["Cash"]);
					$item['vip1'][$index]=iconv("tis-620", "utf-8",$result["VIP1"]);
					$item['vip2'][$index]=iconv("tis-620", "utf-8",$result["VIP2"]);
					$item['vip3'][$index]=iconv("tis-620", "utf-8",$result["VIP3"]);
					$item['member'][$index]=iconv("tis-620", "utf-8",$result["Member"]);
					$errors=$this->validateitem($result["ItemID"],$result["Item"],$result["Barcode"],$result["Type"],$result["Detail"],$result["Cash"],$result["VIP1"],$result["VIP2"],$result["VIP3"],$result["Member"],$index);					
					// เช็ค primary ซ้ำใน excel
					if($result["ItemID"]){ 
						$new="-".$result["ItemID"]."-";
						$check=strpos($old,$new);
						if($check==false){
							$old=$old.$new;
						}else{
							$data['primary_already'][$index] =  "Primary is already";
						}
					}
					if($errors){
						$data['error'][$index][]=$errors;
					}				
					$index++;
				}				
				$data['item']=$item;
				$data['rowtable']=$index;// max rows in sheet
				$this->load->view('head_v');
				$this->load->view('import_v',$data);
				$this->load->view('foot_v');
				
				
			}
			
		private function validateitem($itemid,$item,$barcode,$type,$detail,$cash,$vip1,$vip2,$vip3,$member,$index)
			{	
				// ฟังก์ชันตรวจสอบข้อผิดพลาดในการกรอก form
				$erroract=0;
				if(strlen($itemid)>=15){ $erroract = 1;$error['itemid_error'] = "ItemID Length More";}
				if(strlen($itemid)==0){$erroract = 1;$error['itemid_notnull'] =  "ItemID Require";}
				if(strlen($item)>=50){$erroract = 1;$error['name_error']=  "Name Length More";}
				if(strlen($item)==0){$erroract = 1;$error['name_notnull'] =  "Name Require";}
				if(strlen($barcode)>=20){$erroract = 1;$error['barcode_error'] =  "Barcode Length More";}
				if(strlen($barcode)==0){$erroract = 1;$error['barcode_notnull'] =  "Barcode Require";}
				if(strlen($type)>=50){$erroract = 1;$error['type_error'] =  "Type Length More";}
				if(strlen($type)==0){$erroract = 1;$error['type_notnull'] =  "Type Require";}
				if(strlen($detail)>=225){$erroract = 1;$error['detail_error'] = "Detail Length More";}
				if(strlen($detail)==0){$erroract = 1;$error['detail_notnull'] = "Detail Require";}
				if($cash<0){$erroract = 1;$error['cash_nav']=   "Cash Is Positive Only";}
				if(!is_float($cash)){$erroract = 1;$error['cash_notnum'] =   "Cash Is Not Number";}				
				if($vip1<0){$erroract = 1;$error['vip1_nav'] =   "VIP1 Is Positive Only";}
				if(!is_float($vip1)&& $vip1!=""){$erroract = 1;$error['vip1_notnum'] =   "VIP1 Is Not Number";}				
				if($vip2<0){$erroract = 1;$error['vip2_nav'] =   "VIP2 Is Positive Only";}
				if(!is_float($vip2)&& $vip2!=""){$erroract = 1;$error['vip2_notnum'] =   "VIP2 Is Not Number";}				
				if($vip3<0){$erroract = 1;$error['vip3_nav'] =   "VIP3 Is Positive Only";}
				if(!is_float($vip3)&& $vip3!=""){$erroract = 1;$error['vip3_notnum'] =   "VIP3 Is Not Number";}		
				if($member<0){$erroract = 1;$error['member_nav'] =   "Member Is Positive Only";}
				if(!is_float($member)&& $member!=""){$erroract = 1;$error['member_notnum']=   "Member Is Not Number";}				
				if($itemrec= $this->item->pubSearchItemid($itemid)){
					if($itemrec->itemid){$erroract = 1;$error['itemid_aready']= "ItemID Aready";}	
				}				
				if($erroract==1){
					return $error;
				}
			}

		public function additem()
			{
				require_once(APPPATH.'libraries/PHPExcel/IOFactory.php');
				$inputFileName = "excel/item.xls";  
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}
				$discount=0;
				$percent=0;
				$image="";
				$master="";
				$index=0;
					foreach ($namedDataArray as $result) {
						$errors=$this->validateitem($result["ItemID"],$result["Item"],$result["Barcode"],$result["Type"],$result["Detail"],$result["Cash"],$result["VIP1"],$result["VIP2"],$result["VIP3"],$result["Member"],$index);
						if($errors){
							echo "error";
						}else{
							$this->item->pubAddItem(iconv("tis-620", "utf-8",$result["ItemID"]),iconv("tis-620", "utf-8",$result["Barcode"]),iconv("utf-8", "utf-8",$result["Item"]),iconv("utf-8", "utf-8",$result["Detail"]),$image);
							$this->item->pubAddPrice(iconv("tis-620", "utf-8",$result["ItemID"]),iconv("tis-620", "utf-8",$result["Cash"]),$discount,$percent);
							$this->item->pubAddCatalog(iconv("tis-620", "utf-8",$result["ItemID"]),iconv("utf-8", "utf-8",$result["Type"]),$master);
						}
					}
				
				$this->index();
			}
			
			
		public function upload()
			{
				$file = $_FILES['myfile']['name'];
				$typefile = $_FILES['myfile']['type'];	
				$sizefile = $_FILES['myfile']['size'];			
				$tempfile = $_FILES['myfile']['tmp_name'];
				$destination_path ='excel/';
					$msgsuccess = 0;			
					$target_path = $destination_path . $file;   
					if(@move_uploaded_file($tempfile, $target_path)) {
						$this->importexcel();
					}	
			}
		public function download()
		{

			$file_url = 'excel/template.xls';
			header('Content-Type: application/octet-stream');
			header("Content-Transfer-Encoding: Binary"); 
			header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
			readfile($file_url); 
		
		}
	}
		
		
	
	
	


