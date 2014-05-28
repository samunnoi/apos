<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Supplier extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//		
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Supplier_m','supplier');					
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{
			
				$this->load->view('head_v');
				$this->load->view('supplier_v');
				$this->load->view('foot_v');
				
			
			}
			
			public function addsupplier()
			{
				//	function เพิ่ม สินค้า
				if($post = $this->input->post()){ 	
					extract($post);
					// ตัดช่องว่างหน้าหลัง string
					$supid=trim($supid);
					$supname=trim($supname);
					$tell=trim($tell);
					$address1=trim($address1);
					$sellman=trim($sellman);
					$account=trim($account);
				
				
					// เรียกใช้งาน function validate เพื่อตรวจสอบ string
					$error = $this->validatesupplier($supid,$supname,$tell,$address1,$sellman,$account);
					//echo "xxx".count($error)."xxx";
					//foreach($error as $row){echo $row."**";}	
					//$data['error']=$error;
					if (is_int($error)){
						
						$this->supplier->pubAddSupplier($supid,$supname,$tell,$address1,$sellman,$account);		
						$this->index();
					}
				}			

			}
			
			
			
			private function validatesupplier($supid,$supname,$tell,$address1,$sellman,$account)
			{	
				// ฟังก์ชันการตรวจสอบความถูกต้องของการกรอก form โดยจะแจ้ง error กลับไปยัง form
				//$price=floatval($price);
				//$discount=floatval($discount);
				//$percent=floatval($percent);
				$erroract=0;
				if(strlen($supid)>=15){ $erroract = 1;$error['cusid_error'] = "Customer ID Length More";}
				if(strlen($supid)==0){$erroract = 1;$error['cusid_notnull'] =  "Customer ID Require";}
				if(strlen($supname)>=50){$erroract = 1;$error['name_error'] =  "Name Length More";}
				if(strlen($supname)==0){$erroract = 1;$error['name_notnull'] =  "Name Require";}
				if(strlen($tell)>=15){$erroract = 1;$error['tel1_error'] = "Telephone Length More";}
				if(strlen($tell)==0){$erroract = 1;$error['tel1_notnull'] = "Telephone Require";}
				if(strlen($address1)>=50){ $erroract = 1;$error['address1_error'] = "Address Length More";}
				if(strlen($address1)==0){$erroract = 1;$error['address1_notnull'] =  "Address Require";}
				if(strlen($sellman)>=80){ $erroract = 1;$error['province_error'] = "Sellman Name Length More";}
				if(strlen($sellman)==0){$erroract = 1;$error['province_notnull'] =  "Sellman Name Require";}
				if(strlen($account)>=20){ $erroract = 1;$error['post1_error'] = "Bank Accout Length More";}
				if(strlen($account)==0){$erroract = 1;$error['post1_notnull'] =  "Bank Accout Require";}
				
				$suprec= $this->supplier->pubSearchSupid($supid);
				if($suprec==1){ 
					//echo "cccccc"."cccccc";
					//if($cusrec->cusid){
					$erroract = 1;
					$error['supid_aready'] = "Supplier ID Aready";
					//}
				}
				//echo "_______".count($error)."________";
				//echo "+++++".gettype($itemid)."++++++";
				if($erroract==1){
					$error['act']=$erroract;
					$error['supid'] = $supid;
					$error['supname'] = $supname;
					$error['tell'] = $tell;
					$error['address1'] = $address1;
					$error['sellman'] = $sellman;
					$error['account'] = $account;
					
					//foreach($error as $row){echo $row."**";}				 				
					$this->load->view('head_v');
					$this->load->view('supplier_v',$error);
					$this->load->view('foot_v');
					return $error;
				}else{
					
					return 0;	
				}
			}
			
			
			
			
			
			
	}
		
		
	
	
	

