<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Welcome extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('User_m','user');					
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			private function validate($user,$pass)
			{
				//$this->form_validation->set_rules('user', 'Username', 'required|min_length[8]');
				if(strlen($user)>=15){return "User Length More";}
				if(strlen($pass)>=30){return "Password Length More";}
				return 0;
			
			}
			
			public function index()
			{
				$this->load->view('login_v');	
			
			}
	
			public function login(){  								
				//	 ฟังก์ชั่น login
				
				
				// 	เช็คค่าจากที่ส่งมาจาก input  				
				if($post = $this->input->post()){ 					 
					extract($post);	
					$user=trim($user);
					$pass=trim($pass);
					if(!$this->validate($user,$pass)){
						//	 เรียกใช้ฟังก์ชัน _pubSelectUser จาก model User โดยสร้างตัวแปร $userid ในการรับค่า
						$userid= $this->user->_pubSelectUser($user,$pass);	
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
				if(strlen($userid)>=15){return "User Length More";}
				if(strlen($userid)==0){return "User Require";}
				if(strlen($password)>=30){return "Password Length More";}
				if(strlen($password)==0){return "Password Require";}
				if(strlen($name)>=30){return "Name Length More";}
				if(strlen($name)==0){return "Name Require";}
				if(strlen($email)>=30){return "E-mail Length More";}
				if(strlen($email)==0){return "E-mail Require";}
				if($userid= $this->user->_pubSelectUser($userid,$password)){
					if($userid->userid){return "User Aready";}
				}
				if($email= $this->user->_pubSelectEmail($email)){
					if($email->email){return "E-mail Aready";}
				}
				return 0;	
			}
			public function regis()				
			{	
				$data['userid']='';
				$data['password']='';
				$data['name']='';
				$data['email']='';
				//	 ฟังก์ชัน register ทำการสมัครข้อมูลมูล userid
				if($post = $this->input->post()){ 				 
					extract($post);	
					$userid=trim($userid);
					$password=trim($password);
					$name=trim($name);
					$email=trim($email);
					$error = $this->validateregis($userid,$password,$name,$email);
					echo $error;
					$data['error']=$error;
					if (strlen($error) < 3){
					
						// 	เรียกใช้ฟังก์ชัน _pubaddUser จาก model User โดยสร้างตัวแปร $userid ในการรับค่า
						$this->user->_pubAddUser($userid,$password,$name,$email);	
						$this->load->view('login_v');
						return 0;
					}else
						{
						if(strcmp($error,"User Length More")&&strcmp($error,"User Aready")){ $data['userid'] = $userid;  }
						//if(strcmp($error,"User Aready")){ $data['userid'] = $userid; }
						if(strcmp($error,"Password Length More")){ $data['password'] = $password; }
						if(strcmp($error,"Name Length More")){ $data['name'] = $name; }
						if(strcmp($error,"E-mail Length More")&&strcmp($error,"E-mail Aready")){ $data['email'] = $email; ;}
						//if(strcmp($error,"E-mail Aready")){ $data['email'] = $email; }
					
						$this->load->view('login_v',$data);
						
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
		
		
	
	
	


