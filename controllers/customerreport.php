<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Customerreport extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Customerreport_m','customerreport');					
				$this->load->library(array( 'session', 'form_validation','table')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{
				$data1=$this->head();
				$this->load->view('head_v');
				$this->load->view('customerreporthead_v',$data1);
				$this->load->view('foot_v');
			
			}
			
			public function table()
			{
				$index=0;
				$post=$this->input->post();
				extract($post);
				$data1=$this->head();
				$search=$this->customerreport->pubCustomerReport($select);
					foreach($search as $row){
						$customer['cusid'][$index]=$row->cusid;
						$customer['name'][$index]=$row->name;
						$customer['suname'][$index]=$row->suname;
						$customer['tel1'][$index]=$row->tel1;
						$customer['address1'][$index]=$row->address1;
						$customer['province'][$index]=$row->province;
						$customer['post1'][$index]=$row->post;
						$customer['cutid'][$index]=$row->cutid;
						$customer['email'][$index]=$row->email;
						
			
						$index++;	
					}			
					$data['customer']=$customer;
					$data['rowtable']=$index;
					$data1['cutid_select']=$select;	
				$this->load->view('head_v');
				$this->load->view('customerreporthead_v',$data1);
				$this->load->view('customerreport_v',$data);
				$this->load->view('foot_v');
				
			
			
			}
			
			private function head(){
			
					$index1=0;
					$rec=$this->customerreport->pubSerchCustomerType();
					foreach($rec as $row){
						$cutid1['cut_id1'][$index1]=$row->cutid;
						$index1++;	
					}			
					$data1['cut_id1']=$cutid1;
					$data1['rowtable']=$index1;
			
			return  $data1;
			}
			public function excel(){
			
					$file="demo.xls";
					header("Content-type: application/vnd.ms-excel");
					header("Content-Disposition: attachment; filename=$file");
					echo $test; 
			
			
			}
	}
		
		
	
	
	


