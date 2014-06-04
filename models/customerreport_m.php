<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูล user ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ welcomec
		// 	เขียนวันที่ 21-05-14
	Class Customerreport_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		public function pubSerchCustomerType()		// ฟังก์ชันค้นหาข้อมูล item
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('cutid');
			$this->db->from('customer');
			$this->db->distinct();
			$query = $this->db->get();		
			return $query->result();				
			
		}


		public function pubCustomerReport($select)		// ฟังก์ชันค้นหาข้อมูล item
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('cusid,name,suname,tel1,address1,province,post,cutid,email');
			$this->db->from('customer');
			if($select!=1){
			$this->db->where('cutid',$select);
			}
			$this->db->order_by('cutid','DESC');
			$query = $this->db->get();		
			return $query->result();				
			
		}
		
	
		
		
		
		
	}
