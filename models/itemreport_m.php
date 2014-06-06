<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูลประเภท item
		// 	เกี่ยวข้องกับ ตาราง item

	Class Itemreport_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		public function pubSerchCatalog()		// ฟังก์ชันค้นหาข้อมูลประเภท item
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('catalog_name');
			$this->db->from('Catalog_item');
			$this->db->distinct();
			$query = $this->db->get();		
			return $query->result();				
			
		}


		public function pubitemreport($select)		// ฟังก์ชันค้นหาข้อมูล item
		{
			$this->db->select('item.itemid,item.name,item.barcode,item.detail1,price.price,catalog_item.catalog_name');
			$this->db->from('item');
			$this->db->join('catalog_item','catalog_item.itemid=item.itemid');
			$this->db->join('price','price.itemid=item.itemid');
			if($select!=1){
			$this->db->where('catalog_name',$select);
			}
			$query = $this->db->get();		
			return $query->result();				
			
		}

	}
