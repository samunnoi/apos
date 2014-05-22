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
			
			
			public function index()
			{
				$this->load->view('login_v');	
			
			}
	
			public function login(){  								
				//	 ฟังก์ชั่น login
				// 	เช็คค่าจากที่ส่งมาจาก input  		
				if($post = $this->input->post()){ 					 
				extract($post);					
				//	 เรียกใช้ฟังก์ชัน _pubSelectUser จาก model User โดยสร้างตัวแปร $userid ในการรับค่า
				$userid= $this->user->_pubSelectUser($user,$pass);	
					if($userid){														
										
						$this->session->set_userdata('id',$userid->userid); 	
						
						// 	ใช้งาน load view				
						$this->load->view('head_v');
						$this->load->view('body_v');
						$this->load->view('foot_v');
					}else{echo "Login Fail";
						$this->load->view('login_v');
					}
				}
										
			}
			
			public function regis()				
			{	
				//	 ฟังก์ชัน register ทำการสมัครข้อมูลมูล userid
				if($post = $this->input->post()){ 				 
				extract($post);				
				// 	เรียกใช้ฟังก์ชัน _pubaddUser จาก model User โดยสร้างตัวแปร $userid ในการรับค่า
				$this->user->_pubAddUser($userid,$password,$name,$email);	
				redirect(base_url());
			}
			}
			
			public function logout()				
			{
				// ฟังก์ชันทำการ logout และล้าง session
				$this->session->sess_destroy();		
				redirect(base_url());
			}
		
		
	}
		
		
	
	
	


