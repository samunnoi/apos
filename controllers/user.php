<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//		
				//	โหลดไลบารี session และ form_validation
				$this->load->model('User_m','user');					
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{	
				// ฟังก์ชันโหลดข้อมูบ user มาแสดงบน view
				$userid=$this->session->userdata('id');
				$rec=$this->user->pubSearchUser($userid);
				foreach($rec as $row){
					$data["userid"] = $row->userid;
					$data["name"] = $row->name;
					$data["suname"] = $row->suname;
					$data["personal"] = $row->personal_num;
					$data["tel"] = $row->tel;
					$data["address1"] = $row->address1;
					$data["province"] = $row->province;
					$data["post1"] = $row->post;
					$data["email"]= $row->email;
					$data["password"]= $row->password;
					}	
				$this->session->set_userdata('name',$data["name"]);
				$this->session->set_userdata('email',$data["email"]); 		
				$this->load->view('head_v');
				$this->load->view('user_v',$data);
				$this->load->view('foot_v');
			}
			
			public function setuser()
			{	
				// ฟังก์ชันอัพเดตข้อมูล user
				if($post = $this->input->post()){ 	
					extract($post);
					$userid=trim($userid);
					$name=trim($name);
					$suname=trim($suname);
					$personal=trim($personal);
					$tel=trim($tel);
					$address1=trim($address1);
					$province=trim($province);
					$post1=trim($post1);
					$email=trim($email);
					$password=trim($password);
					$error=$this->validateuser($userid,$name,$suname,$personal,$tel,$address1,$province,$post1,$email,$password);
					if (is_int($error)){
						$this->user->pubSetUser($userid,$name,$suname,$personal,$tel,$address1,$province,$post1,$email,$password);		
						$this->index();
					}
				}
				return 1;
			}
			
			
			private function validateuser($userid,$name,$suname,$personal,$tel,$address1,$province,$post1,$email,$password)
			{	
				// ฟังก์ชันการตรวจสอบความถูกต้องของการกรอก form โดยจะแจ้ง error กลับไปยัง form
				$erroract=0;
				if(strlen($name)>=30){$erroract = 1;$error['name_error'] =  "Name Length More";}
				if(strlen($name)==0){$erroract = 1;$error['name_notnull'] =  "Name Require";}
				if(strlen($suname)>=50){$erroract = 1;$error['suname_error'] =  "Surname Length More";}
				if(strlen($suname)==0){$erroract = 1;$error['suname_notnull'] =  "Surname Require";}
				if(strlen($personal)>=15){$erroract = 1;$error['personal_error'] =  "Personal ID Length More";}
				if(strlen($personal)==0){$erroract = 1;$error['personal_notnull'] =  "Personal ID Require";}
				if(strlen($tel)>=15){$erroract = 1;$error['tel_error'] = "Telephone Length More";}
				if(strlen($tel)==0){$erroract = 1;$error['tel_notnull'] = "Telephone Require";}
				if(strlen($address1)>=50){ $erroract = 1;$error['address1_error'] = "Address Length More";}
				if(strlen($address1)==0){$erroract = 1;$error['address1_notnull'] =  "Address Require";}
				if(strlen($province)>=30){ $erroract = 1;$error['province_error'] = "Province Length More";}
				if(strlen($province)==0){$erroract = 1;$error['province_notnull'] =  "Province Require";}
				if(strlen($post1)>=10){ $erroract = 1;$error['post1_error'] = "PostID Length More";}
				if(strlen($post1)==0){$erroract = 1;$error['post1_notnull'] =  "PostID Require";}
				if(strlen($email)>=30){ $erroract = 1;$error['email_error'] = "E-mail Length More";}
				if(strlen($email)==0){$erroract = 1;$error['email_notnull'] =  "E-mail Require";}
				if(strlen($password)>=30){ $erroract = 1;$error['password_error'] = "Password Length More";}
				if(strlen($password)==0){$erroract = 1;$error['password_notnull'] =  "Password Require";}
				$stremail = strcmp($this->session->userdata('email'),$email);
				if($stremail!=0){
					if($userrec= $this->user->pubSelectEmail($email)){
						if($userrec->email){$erroract = 1;$error['email_aready'] = "E-mail Aready";}
					}
				}
				if($erroract==1){
					$error['act']=$erroract;
					$error['userid'] = $userid;
					$error['name'] = $name;
					$error['suname'] = $suname;
					$error['personal'] = $personal;
					$error['tel'] = $tel;
					$error['address1'] = $address1;
					$error['province'] = $province;
					$error['post1'] = $post1;
					$error['email'] = $email;
					$error['password'] = $password;			 				
					$this->load->view('head_v');
					$this->load->view('user_v',$error);
					$this->load->view('foot_v');
					return $error;
				}else{
					return 0;	
				}
			}
			
	}
		
		
	
	
	


