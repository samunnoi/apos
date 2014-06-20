<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Customer extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	โหลด model Customer_m	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Customer_m','customer');
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
				$this->lang->load($this->session->userdata('language'));
			}
			
			public function index()
			{	
				
				$data= $this->searchtype();
				// ฟังก์ชัน index ทำการโหลด view
				$this->load->view('head_v');
				$this->load->view('customer_v',$data);
				$this->load->view('foot_v');
				
			}
			public function searchtype()
			{
				$index=0;
				$searchtype=1;	
				$rec = $this->customer->pubSearchType($searchtype);
				foreach($rec as $row){
					$type['type'][$index]=$row->cutid;
					$index++;	
				}
				$data['type']=$type;
				$data['rowtable1']=$index;	
				return $data;
			}
			
			
			public function addcustomer()
			{
				//	function เพิ่มข้อมูลลูกค้า
				if($post = $this->input->post()){ 	
					extract($post);
					// ตัดช่องว่างหน้าหลัง string
					$cusid=trim($cusid);
					$oldcusid=trim($oldcusid);
					$name=trim($name);
					$suname=trim($suname);
					$tel1=trim($tel1);
					$address1=trim($address1);
					$province=trim($province);
					$post1=trim($post1);
					$email=trim($email);
					$typedetail1=trim($typedetail1);
					$typedetail2=trim($typedetail2);
					if(isset($cutid)){
						$this->customer->pubSetType($cutid,$typedetail1,$typedetail2);
					}
					if($addtype){
						$type = $this->customer->pubSearchType($addtype);
						foreach($type as $row){
							$custype=$row->cutid;
						}
						if(isset($custype)==$addtype){
							$cutid=$addtype;
							$this->customer->pubSetType($addtype,$typedetail1,$typedetail2);
						}else{
							$cutid=$addtype;
							$this->customer->pubAddType($addtype,$typedetail1,$typedetail2);
						}
					
					}
					$cutid=trim($cutid);
					if(strcmp($status,'add')==0){
						// เรียกใช้งาน function validate เพื่อตรวจสอบ string
						$error = $this->validatecustomer($cusid,$oldcusid,$name,$suname,$tel1,$address1,$province,$post1,$cutid,$email,$status);
						// เช็คว่าค่า error ใช่ตัวเลขเปล่า
						if (is_int($error)){
							$this->customer->pubAddCustomer($cusid,$name,$suname,$tel1,$address1,$province,$post1,$cutid,$email);		
							$this->index();
						}
					}if(strcmp($status,'update')==0){
						// เรียกใช้งาน function validate เพื่อตรวจสอบ string
						$error = $this->validatecustomer($cusid,$oldcusid,$name,$suname,$tel1,$address1,$province,$post1,$cutid,$email,$status);
						// เช็คว่าค่า error ใช่ตัวเลขเปล่า
						if (is_int($error)){
							$this->customer->pubSetCustomer($cusid,$oldcusid,$name,$suname,$tel1,$address1,$province,$post1,$cutid,$email);		
							$this->index();
						}
					}
				}			
			}
			
			private function validatecustomer($cusid,$oldcusid,$name,$suname,$tel1,$address1,$province,$post1,$cutid,$email,$status)
			{	
				// ฟังก์ชันการตรวจสอบความถูกต้องของการกรอก form โดยจะแจ้ง error กลับไปยัง form
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
				if(strlen($cutid)>=10){ $erroract = 1;$error['cutid_error'] = "Customer Type Length More";}
				if(strlen($cutid)==0){$erroract = 1;$error['cutid_notnull'] =  "Customer Type Require";}
				if(strlen($email)>=30){ $erroract = 1;$error['email_error'] = "E-mail Length More";}
				if(strlen($email)==0){$erroract = 1;$error['email_notnull'] =  "E-mail Require";}
				if(strcmp($status,'add')==0){
					$cusrec= $this->customer->pubSearchCusid($cusid);
					if($cusrec==1){ 
						$erroract = 1;
						$error['cusid_aready'] = "Customer ID Aready";	
					}
				}if(strcmp($status,'update')==0){
					if(strcmp($oldcusid,$cusid)!=0){
						$cusrec= $this->customer->pubSearchCusid($cusid);
						if($cusrec==1){ 
							$erroract = 1;
							$error['cusid_aready'] = "Customer ID Aready";	
						}
					}
				
				}
				if($erroract==1){
					foreach($error as $row){ // เอาไว้เช็ค Error
						echo $row;
					}
					$error['act']=$erroract;
					$error['cusid'] = $oldcusid;
					$error['name'] = $name;
					$error['suname'] = $suname;
					$error['tel1'] = $tel1;
					$error['address1'] = $address1;
					$error['province'] = $province;
					$error['post1'] = $post1;
					$error['cutid'] = $cutid;
					$error['email'] = $email;
					$this->load->view('head_v');
					$this->load->view('customer_v',$error);
					$this->load->view('foot_v');
					return $error;
				}else{
					return 0;	
				}
			}
			
			
			public function searchcustomer()
			{				
				// ฟังก์ชันค้นหาข้อมูลลูกค้า			
				if($post = $this->input->post()){
					extract($post);
				}else{
					$name=$this->uri->segment(3);	
				}
				$rec = $this->customer->pubSearchCustomer($name);
				// หากมีลูกค้า 1 คน
				if(count($rec)==1){
					$index=0;
					foreach($rec as $row){
						//$data["cusid"] = $row->cusid;
						//$data["name"] = $row->name;
						//$data["suname"]= $row->suname;
						//$data["tel1"]= $row->tel1;
						//$data["address1"]= $row->address1;
						//$data["province"]= $row->province;
						//$data["post1"]= $row->post;	
						//$data["cutid"]= $row->cutid;	
						//$data["email"]= $row->email;
						$searchtable['cusid'][$index]=$row->cusid;
						$searchtable['name'][$index]=$row->name;
						$searchtable['suname'][$index]=$row->suname;
						$searchtable['tel1'][$index]= $row->tel1;
						$searchtable['address1'][$index]= $row->address1;
						$searchtable['province'][$index]= $row->province;
						$searchtable['post1'][$index]= $row->post;
						$searchtable['cutid'][$index]= $row->cutid;
						$searchtable['email'][$index]= $row->email;
						$index++;	
					}
					$data= $this->searchtype();
					$data['searchtable']=$searchtable;
					$data['rowtable']=$index;
					
						
				}
				// หากมีลูกค้ามากกว่า 1 คน
				if(count($rec)>1){
					$index=0;
					foreach($rec as $row){
						$searchtable['cusid'][$index]=$row->cusid;
						$searchtable['name'][$index]=$row->name;
						$searchtable['suname'][$index]=$row->suname;
						$index++;					
					}
					$data['searchtable']=$searchtable;
					$data['rowtable']=$index;
				} 
				if(count($rec) == 0){
					$data['cuserror']="Customer Not Found";
				}
				$this->load->view('head_v');
				$this->load->view('customer_v',$data);
				$this->load->view('foot_v');
				
			}
			
			
			public function delcustomer()
			{			
				//	 ฟังก์ชัน ลบข้อมูลลูกค้า
				$delid=$this->uri->segment(3);
				if(isset($delid)){ 				 
					$this->customer->pubDelCustomer($delid);		
					$this->index();
				}			
			}
			
			public function validatecusid()
			{		
				// เช็คค่าซ้ำจากฐานข้อมูลโดยใช้ ajax + json
				//$_POST['scusid']
				$check = $this->customer->pubCheckId($_POST['scusid']); 
				echo json_encode($check);
			}
			
			public function detailjquery()
			{		
				// เช็คค่าซ้ำจากฐานข้อมูลโดยใช้ ajax + json
				//$_POST['scusid']
				$detail = $this->customer->pubSearchType($_POST['scutid']); 
				echo json_encode($detail);
			}
			
	}
		
		
	
	
	


