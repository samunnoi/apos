<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูล user ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ welcomec
		// 	เขียนวันที่ 21-05-14
	Class Supplier_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		
		
		public function pubAddSupplier($supid,$supname,$tell,$address1,$sellman,$account)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('supid'=>$supid,'sup_name'=>$supname,'tell'=>$tell,'address1'=>$address1,'sellman'=>$sellman,'account_bank'=>$account);	
			$this->db->insert('supplier',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		
		public function pubSearchSupID($supid)		// ฟังก์ชันค้นหาข้อมูล item
		{
			$cause = array('supid'=>$supid);	
			$query = $this->db->get_where('supplier',$cause);
			if($query -> num_rows() == 1){
				return 1;
				}else
				return 0;
				

        
		}
		
		
	}
