<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Welcome extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Login_m','login');					
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			private function validate($user,$pass)
			{	// ฟังก์ชันตรวจสอบความถูกต้องในการกรอก user,password
				if(strlen($user)>=15){return "User Length More";}
				if(strlen($pass)>=30){return "Password Length More";}
				return 0;
			}
			
			public function index()
			{
				$this->load->view('login_v');	
			}
	
			public function login()
			{  								
				//	 ฟังก์ชั่น login
				// 	เช็คค่าจากที่ส่งมาจาก input  				
				if($post = $this->input->post()){ 					 
					extract($post);	
					$user=trim($user);
					$pass=trim($pass);
					if(!$this->validate($user,$pass)){
						//	 เรียกใช้ฟังก์ชัน pubSelectUser จาก model User โดยสร้างตัวแปร $userid ในการรับค่า
						$userid= $this->login->pubSelectUser($user,$pass);	
						if($userid){																	
							$this->session->set_userdata('id',$userid->userid); 	
							// 	ใช้งาน load view				
							$this->load->view('head_v');
							$this->load->view('body_v');
							$this->load->view('foot_v');
						}else{
							echo "Login Fail";
							$this->load->view('login_v');
						}
					}
				}							
			}
			
			
			private function validateregis($userid,$password,$name,$email)
			{
				// ฟังก์ชันการตรวจสอบความถูกต้องของการกรอก form โดยจะแจ้ง error กลับไปยัง form
				$erroract=0;
				if(strlen($userid)>=15){ $erroract = 1;$error['userid_error'] = "User Length More";}
				if(strlen($userid)==0){$erroract = 1;$error['userid_notnull'] =  "User Require";}
				if(strlen($password)>=30){$erroract = 1;$error['password_error'] =  "Password Length More";}
				if(strlen($password)==0){$erroract = 1;$error['password_notnull'] =  "Password Require";}
				if(strlen($name)>=30){$erroract = 1;$error['name_error'] = "Name Length More";}
				if(strlen($name)==0){$erroract = 1;$error['name_notnull'] =   "Name Require";}
				if(strlen($email)>=30){$erroract = 1;$error['email_error'] =  "E-mail Length More";}
				if(strlen($email)==0){$erroract = 1;$error['email_notnull'] =  "E-mail Require";}
				if($userid= $this->login->pubSelectUser($userid,$password)){
					if($userid->userid){$erroract = 1;$error['userid_aready'] = "User Aready";}
				}
				if($userrec= $this->login->pubSelectEmail($email)){
					if($userrec->email){$erroract = 1;$error['email_aready'] = "E-mail Aready";}
				}
				if($erroract==1){
					$error['act']=$erroract;
					$error['userid'] = $userid;
					$error['password'] = $password;
					$error['name'] = $name;
					$error['email'] = $email;
					$this->load->view('login_v',$error);
					return $error;
				}else{
					return 0;	
				}
			}
			
			
			
			public function regis()				
			{	
				// ฟังก์ชันสมัครข้อมูลสมาชิก
				$data['userid']='';
				$data['password']='';
				$data['name']='';
				$data['email']='';
				if($post = $this->input->post()){ 				 
					extract($post);	
					$userid=trim($userid);
					$password=trim($password);
					$name=trim($name);
					$email=trim($email);
					$error = $this->validateregis($userid,$password,$name,$email);
					$data['error']=$error;
					if ($error == 0){
						// 	เรียกใช้ฟังก์ชัน pubaddUser จาก model User โดยสร้างตัวแปร $userid ในการรับค่า
						$this->login->pubAddUser($userid,$password,$name,$email);	
						$this->load->view('login_v');
						return 0;
					}
				}
				return 1;
			}
			
			public function logout()				
			{
				// ฟังก์ชันทำการ logout และล้าง session
				$this->session->sess_destroy();		
				redirect(base_url());
				return 0;
			}
			
			
		
		
	}
		
		
	
	
	


