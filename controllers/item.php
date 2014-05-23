<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Item extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Item_m','item');					
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{
				$data["itemid"] = "";
				$data["barcode"] = "";
				$data["name"]= "";
				$data["detail"]= "";
				$data["price"]= "";
				$data["type"] ="";
				$this->load->view('head_v');
				$this->load->view('item_v',$data);
				$this->load->view('foot_v');
			
			}
			public function additem()
			{
			
				
				//	 ฟังก์ชัน register ทำการสมัครข้อมูลมูล userid
				if($post = $this->input->post()){ 				 
					extract($post);			
					// 	เรียกใช้ฟังก์ชัน _pubaddUser จาก model User โดยสร้างตัวแปร $userid ในการรับค่า
					$this->item->_pubAddItem($itemid,$barcode,$name,$detail);
					$this->item->_pubAddPrice($itemid,$price);					
								//$this->load->view('head_v');
								//$this->load->view('item_v',data);
								//$this->load->view('foot_v');
					$this->index();
				}			
			
			}
			
			public function searchitem()
			{
		
				
				//	 ฟังก์ชัน register ทำการสมัครข้อมูลมูล userid
				if($post = $this->input->post()){ 				 
				extract($post);		
				// 	เรียกใช้ฟังก์ชัน _pubaddUser จาก model User โดยสร้างตัวแปร $userid ในการรับค่า
				$rec = $this->item->_pubSearchItem($name);
				
				foreach($rec as $row){
					$data["itemid"] = $row->itemid;
					$data["barcode"] = $row->barcode;
					$data["name"]= $row->name;
					$data["detail"]= $row->detail1;
					
					//echo $data["barcode"];
				}
				
				$this->load->view('head_v');
				$this->load->view('item_v',$data);
				$this->load->view('foot_v');
				}			
			
			}
	
			
		
		
	}
		
		
	
	
	


