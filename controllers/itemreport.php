<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Itemreport extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Itemreport_m','itemreport');					
				$this->load->library(array( 'session', 'form_validation','table')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{
				$data1=$this->head();
				$this->load->view('head_v');
				$this->load->view('itemreporthead_v',$data1);
				$this->load->view('foot_v');
			
			}
			
			public function table()
			{
				$index=0;
				$post=$this->input->post();
				extract($post);
				$data1=$this->head();
				$search=$this->itemreport->pubitemreport($select);
					foreach($search as $row){
						$catalog['itemid'][$index]=$row->itemid;
						$catalog['name'][$index]=$row->name;
						$catalog['barcode'][$index]=$row->barcode;
						$catalog['detail'][$index]=$row->detail1;
						$catalog['price'][$index]=$row->price;
						$catalog['catalog_name'][$index]=$row->catalog_name;
			
						$index++;	
					}			
					$data['catalog_name']=$catalog;
					$data['rowtable']=$index;
					$data1['catalog_select']=$select;	
				$this->load->view('head_v');
				$this->load->view('itemreporthead_v',$data1);
				$this->load->view('itemreport_v',$data);
				$this->load->view('foot_v');
				
			
			
			}
			
			private function head(){
			
					$index1=0;
					$rec=$this->itemreport->pubSerchCatalog();
					foreach($rec as $row){
						$catalog1['catalog_name1'][$index1]=$row->catalog_name;
						$index1++;	
					}			
					$data1['catalog_name1']=$catalog1;
					$data1['rowtable']=$index1;
			
			return  $data1;
			}
	}
		
		
	
	
	


