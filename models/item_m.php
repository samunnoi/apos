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
 
		
		
		public function pubAddItem($itemid,$barcode,$name,$detail)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('itemid'=>$itemid,'barcode'=>$barcode,'name'=>$name,'detail1'=>$detail);	
			$this->db->insert('item',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		
		public function pubAddPrice($itemid,$price,$discount,$percent)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('itemid'=>$itemid,'price'=>$price,'discount'=>$discount,'percent'=>$percent);	
			$this->db->insert('price',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		
		public function pubAddCatalog($itemid,$catalog,$master)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('itemid'=>$itemid,'catalog_name'=>$catalog,'master_catalog'=>$master);	
			$this->db->insert('catalog_item',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		public function pubSearchItemid($itemid)		// ฟังก์ชันค้นหาข้อมูล item
		{
			$cause = array('itemid'=>$itemid);	
			$query = $this->db->get_where('item',$cause);
			if($query -> num_rows() == 1){
				return $query -> row(); //return 0 คือไม่ซ้ำ n=ค่าซ้ำ
				}else{
				return 0;
				}
		}
	

		public function pubSearchItem($name)		// ฟังก์ชันค้นหาข้อมูล item
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('*');
			$this->db->from('item');
			$this->db->where('itemid',$name);
			$this->db->or_where('name',$name);
			$this->db->or_where('barcode',$name);
			$query = $this->db->get();		
			return $query->result();				
			
		}
		
		public function pubDelItem($delid)		// ฟังก์ชันค้นหาข้อมูล item
		{
			$cause = array('itemid'=>$delid);
			$this->db->delete('item',$cause);
			$this->db->delete('catalog_name',$cause);
			$this->db->delete('price',$cause);
			//$this->db->delete('count_name',$cause);
			return;
			
		}
	
	
		//public function _pubSearchItem($name)		// ฟังก์ชันค้นหาข้อมูล item
		//{
				
			//$search = $this->db->like('name',$name.'both')
			//		->get('item');						// ดึงข้อมูลจาก member แบบมีเงื่อนไข

			
			//return $search->result_array(); 					// return ค่าแบบเป็น array					
			
		
		//}
	}
