<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูล user ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ welcomec
		// 	เขียนวันที่ 21-05-14
	Class Customer_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		
		
		public function pubAddCustomer($cusid,$name,$suname,$tel1,$address1,$province,$post1,$email)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('cusid'=>$cusid,'name'=>$name,'suname'=>$suname,'tel1'=>$tel1,'address1'=>$address1,'province'=>$province,'post'=>$post1,'email'=>$email);	
			$this->db->insert('customer',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		
		public function pubSearchCusID($cusid)		// ฟังก์ชันค้นหาข้อมูล item
		{
			$cause = array('cusid'=>$cusid);	
			$query = $this->db->get_where('customer',$cause);
			if($query -> num_rows() == 1){
				return 1;
				}else
				return 0;
				

        
		}
		
		
	}
