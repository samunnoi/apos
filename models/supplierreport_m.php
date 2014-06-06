<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูล user ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ welcomec
		// 	เขียนวันที่ 21-05-14
	Class Supplierreport_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		

		public function pubSupplierReport()		// ฟังก์ชันค้นหาข้อมูล supplier
		{
			$this->db->select('supid,sup_name,tell,address1,sellman,account_bank');
			$this->db->from('supplier');
			$this->db->order_by('supid','DESC');
			$query = $this->db->get();		
			return $query->result();				
			
		}
		
	
		
		
		
		
	}
