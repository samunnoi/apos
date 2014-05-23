<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูล user ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ welcomec
		// 	เขียนวันที่ 21-05-14
	Class Item_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		
		
		public function _pubAddItem($itemid,$barcode,$name,$detail)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('itemid'=>$itemid,'barcode'=>$barcode,'name'=>$name,'detail1'=>$detail);	
			$this->db->insert('item',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		
		public function _pubAddPrice($itemid,$price)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('itemid'=>$itemid,'price'=>$price);	
			$this->db->insert('price',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		
	

		public function _pubSearchItem($name)		// ฟังก์ชันค้นหาข้อมูล item
    {
        $this->db->like('name',$name);
        $data= $this->db->get('item');
		return $data->result();
        
    }
	
		//public function _pubSearchItem($name)		// ฟังก์ชันค้นหาข้อมูล item
		//{
				
			//$search = $this->db->like('name',$name.'both')
			//		->get('item');						// ดึงข้อมูลจาก member แบบมีเงื่อนไข

			
			//return $search->result_array(); 					// return ค่าแบบเป็น array					
			
		
		//}
	}
