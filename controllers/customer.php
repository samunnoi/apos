<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Customer extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//		
				//	โหลดไลบารี session และ form_validation
				
				$this->load->model('Customer_m','customer');
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{
			
				$this->load->view('head_v');
				$this->load->view('customer_v');
				$this->load->view('foot_v');
				
			
			}
			
			public function addcustomer()
			{
				//	function เพิ่ม สินค้า
				if($post = $this->input->post()){ 	
					extract($post);
					// ตัดช่องว่างหน้าหลัง string
					$cusid=trim($cusid);
					$name=trim($name);
					$suname=trim($suname);
					$tel1=trim($tel1);
					$address1=trim($address1);
					$province=trim($province);
					$post1=trim($post1);
					$email=trim($email);
				
					// เรียกใช้งาน function validate เพื่อตรวจสอบ string
					$error = $this->validatecustomer($cusid,$name,$suname,$tel1,$address1,$province,$post1,$email);
					//echo "xxx".count($error)."xxx";
					//foreach($error as $row){echo $row."**";}	
					//$data['error']=$error;
					if (is_int($error)){
						
						$this->customer->pubAddCustomer($cusid,$name,$suname,$tel1,$address1,$province,$post1,$email);		
						$this->index();
					}
				}			

			}
			
			private function validatecustomer($cusid,$name,$suname,$tel1,$address1,$province,$post1,$email)
			{	
				// ฟังก์ชันการตรวจสอบความถูกต้องของการกรอก form โดยจะแจ้ง error กลับไปยัง form
				//$price=floatval($price);
				//$discount=floatval($discount);
				//$percent=floatval($percent);
				$erroract=0;
				if(strlen($cusid)>=15){ $erroract = 1;$error['cusid_error'] = "Customer ID Length More";}
				if(strlen($cusid)==0){$erroract = 1;$error['cusid_notnull'] =  "Customer ID Require";}
				if(strlen($name)>=30){$erroract = 1;$error['name_error'] =  "Name Length More";}
				if(strlen($name)==0){$erroract = 1;$error['name_notnull'] =  "Name Require";}
				if(strlen($suname)>=30){$erroract = 1;$error['suname_error'] =  "Surname Length More";}
				if(strlen($suname)==0){$erroract = 1;$error['suname_notnull'] =  "Surname Require";}
				if(strlen($tel1)>=15){$erroract = 1;$error['tel1_error'] = "Telephone Length More";}
				if(strlen($tel1)==0){$erroract = 1;$error['tel1_notnull'] = "Telephone Require";}
				if(strlen($address1)>=50){ $erroract = 1;$error['address1_error'] = "Address Length More";}
				if(strlen($address1)==0){$erroract = 1;$error['address1_notnull'] =  "Address Require";}
				if(strlen($province)>=30){ $erroract = 1;$error['province_error'] = "Province Length More";}
				if(strlen($province)==0){$erroract = 1;$error['province_notnull'] =  "Province Require";}
				if(strlen($post1)>=10){ $erroract = 1;$error['post1_error'] = "PostID Length More";}
				if(strlen($post1)==0){$erroract = 1;$error['post1_notnull'] =  "PostID Require";}
				if(strlen($email)>=30){ $erroract = 1;$error['email_error'] = "E-mail Length More";}
				if(strlen($email)==0){$erroract = 1;$error['email_notnull'] =  "E-mail Require";}
				$cusrec= $this->customer->pubSearchCusid($cusid);
				if($cusrec==1){ 
					//echo "cccccc"."cccccc";
					//if($cusrec->cusid){
					$erroract = 1;
					$error['cusid_aready'] = "Customer ID Aready";
					//}
				}
				//echo "_______".count($error)."________";
				//echo "+++++".gettype($itemid)."++++++";
				if($erroract==1){
					$error['act']=$erroract;
					$error['cusid'] = $cusid;
					$error['name'] = $name;
					$error['suname'] = $suname;
					$error['tel1'] = $tel1;
					$error['address1'] = $address1;
					$error['province'] = $province;
					$error['post1'] = $post1;
					$error['email'] = $email;
					
					//foreach($error as $row){echo $row."**";}				 				
					$this->load->view('head_v');
					$this->load->view('customer_v',$error);
					$this->load->view('foot_v');
					return $error;
				}else{
					
					return 0;	
				}
			}
			
	}
		
		
	
	
	


