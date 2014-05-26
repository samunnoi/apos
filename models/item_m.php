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
		
		public function _pubAddPrice($itemid,$price,$discount,$percent)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('itemid'=>$itemid,'price'=>$price,'discount'=>$discount,'percent'=>$percent);	
			$this->db->insert('price',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		
		public function _pubAddCatalog($itemid,$catalog,$master)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('itemid'=>$itemid,'catalog_name'=>$catalog,'master_catalog'=>$master);	
			$this->db->insert('catalog_item',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			
			
			return;						
			
		
		}
		public function _pubSearchItemid($itemid)		// ฟังก์ชันค้นหาข้อมูล item
		{
			$cause = array('itemid'=>$itemid);	
			$query = $this->db->get_where('item',$cause);
			if($query -> num_rows() == 1){return $query->row();}
        
		}
	

		public function _pubSearchItem($name)		// ฟังก์ชันค้นหาข้อมูล item
		{
			$this->db->select('*');
			$this->db->from('item');
			$this->db->like('name',$name,'both');
			$this->db->join('price', 'item.itemid = price.itemid' , 'left'); 
			$this->db->or_like('item.itemid',$name);
			$query = $this->db->get();
			return $query->result();
		
			//$this->db->like('name',$name,'both')->or_like('itemid',$name);
			//$data= $this->db->get('item');
			//return $data->result();
        
		}
		
		public function _pubDelItem($delid)		// ฟังก์ชันค้นหาข้อมูล item
		{
			$cause = array('itemid'=>$delid);
			$this->db->delete('item',$cause);
			
			return;
			
		}
	
	
		//public function _pubSearchItem($name)		// ฟังก์ชันค้นหาข้อมูล item
		//{
				
			//$search = $this->db->like('name',$name.'both')
			//		->get('item');						// ดึงข้อมูลจาก member แบบมีเงื่อนไข

			
			//return $search->result_array(); 					// return ค่าแบบเป็น array					
			
		
		//}
	}
