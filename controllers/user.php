<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//		
				//	โหลดไลบารี session และ form_validation
				//$this->load->model('Item_m','item');					
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{
			
				$this->load->view('head_v');
				$this->load->view('user_v');
				$this->load->view('foot_v');
				
			
			}
			
	}
		
		
	
	
	


