<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูล item 
		// 	เกี่ยวข้องกับ ตาราง item
		// 	เขียนวันที่ 21-05-14
	Class Item_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		
		
		public function pubAddItem($itemid,$barcode,$name,$detail)		// ฟังก์ชัน insert ข้อมูลสินค้า
		{
			$cause = array('itemid'=>$itemid,'barcode'=>$barcode,'name'=>$name,'detail1'=>$detail);	
			$this->db->insert('item',$cause);	// ดึงข้อมูลจาก item แบบมีเงื่อนไข
			return;						
		}
		
		public function pubAddPrice($itemid,$price,$discount,$percent)		// ฟังก์ชัน insert ราคาสินค้า
		{
			$cause = array('itemid'=>$itemid,'price'=>$price,'discount'=>$discount,'percent'=>$percent);	
			$this->db->insert('price',$cause);	
			return;						
		}
		
		public function pubAddCatalog($itemid,$catalog,$master)		// ฟังก์ชัน insert catalog
		{
			$cause = array('itemid'=>$itemid,'catalog_name'=>$catalog,'master_catalog'=>$master);	
			$this->db->insert('catalog_item',$cause);	
			return;						
		}
		
		public function pubSearchItemid($itemid)		// ฟังก์ชันค้นหาข้อมูล item id
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
		
		public function pubDelItem($delid)		// ฟังก์ชันลบข้อมูล item
		{
			$cause = array('itemid'=>$delid);
			$this->db->delete('item',$cause);
			$this->db->delete('catalog_item',$cause);
			$this->db->delete('price',$cause);
			return;	
		}
	
	
		public function pubSetItem($itemid,$olditemid,$barcode,$name,$detail)		// ฟังก์ชัน update ข้อมูลสินค้า
		{
			$cause = array('itemid'=>$itemid,'barcode'=>$barcode,'name'=>$name,'detail1'=>$detail);	
			$this->db->update('item',$cause,array('itemid'=>$olditemid));	
			return;						
		}
		
		public function pubSetPrice($itemid,$olditemid,$price,$discount,$percent)		// ฟังก์ชัน update ข้อมูลราคาสินค้า
		{
			$cause = array('itemid'=>$itemid,'price'=>$price,'discount'=>$discount,'percent'=>$percent);	
			$this->db->update('price',$cause,array('itemid'=>$olditemid));	
			return;						
		}
		public function pubSetCatalog($itemid,$olditemid,$catalog,$master)		// ฟังก์ชัน update ข้อมูลประเภทสินค้า
		{
			$cause = array('itemid'=>$itemid,'catalog_name'=>$catalog,'master_catalog'=>$master);	
			$this->db->update('catalog_item',$cause,array('itemid'=>$olditemid));	
			return;						
		}
		
		
		
		
	}
