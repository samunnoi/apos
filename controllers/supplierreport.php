<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Supplierreport extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Supplierreport_m','supplierreport');					
				$this->load->library(array( 'session', 'form_validation','table')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{
				$index=0;
				$search=$this->supplierreport->pubSupplierReport();
					foreach($search as $row){
						$supplier['supid'][$index]=$row->supid;
						$supplier['sup_name'][$index]=$row->sup_name;
						$supplier['tell'][$index]=$row->tell;
						$supplier['address1'][$index]=$row->address1;
						$supplier['sellman'][$index]=$row->sellman;
						$supplier['account_bank'][$index]=$row->account_bank;
					
			
						$index++;	
					}			
					$data['supplier']=$supplier;
					$data['rowtable']=$index;
					
				$this->load->view('head_v');
				$this->load->view('supplierreport_v',$data);
				$this->load->view('foot_v');
			
			}
			
			
			
			
	}
		
		
	
	
	


