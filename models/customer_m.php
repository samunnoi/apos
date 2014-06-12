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
 
		
		
		public function pubAddCustomer($cusid,$name,$suname,$tel1,$address1,$province,$post1,$cutid,$email)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('cusid'=>$cusid,'name'=>$name,'suname'=>$suname,'tel1'=>$tel1,'address1'=>$address1,'province'=>$province,'post'=>$post1,'cutid'=>$cutid,'email'=>$email);	
			$this->db->insert('customer',$cause);	// ดึงข้อมูลจาก customer แบบมีเงื่อนไข
			return;						
		}
		
		public function pubSearchCusID($cusid)		// ฟังก์ชันค้นหาข้อมูล customer
		{
			$cause = array('cusid'=>$cusid);	
			$query = $this->db->get_where('customer',$cause);
			if($query -> num_rows() == 1){
				return 1;
				}else
				return 0;
		}
		
		public function pubSearchCustomer($name)		// ฟังก์ชันค้นหาข้อมูล customer
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('*');
			$this->db->from('customer');
			$this->db->where('cusid',$name);
			$this->db->or_where('name',$name);
			$this->db->or_where('suname',$name);
			$query = $this->db->get();		
			return $query->result();					
		}
		
		public function pubDelCustomer($delid)		// ฟังก์ชันค้นหาข้อมูล customer
		{
			$cause = array('cusid'=>$delid);
			$this->db->delete('customer',$cause);
			return;
			
		}
		
		public function pubSetCustomer($cusid,$oldcusid,$name,$suname,$tel1,$address1,$province,$post1,$cutid,$email)		// ฟังก์ชัน update ข้อมูลลูกค้า
		{
			$cause = array('cusid'=>$cusid,'name'=>$name,'suname'=>$suname,'tel1'=>$tel1,'address1'=>$address1,'province'=>$province,'post'=>$post1,'cutid'=>$cutid,'email'=>$email);	
			$this->db->update('customer',$cause,array('cusid'=>$oldcusid));	
			return;						
		}
		
		public function pubCheckId($cusid)		// ฟังก์ชันค้นหาข้อมูล customerID
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('cusid');
			$this->db->from('customer');
			$this->db->where('cusid',$cusid);
			$query = $this->db->get();		
			return $query->result();

				
		}
		
		public function pubSearchType($addtype)		// ฟังก์ชันค้นหาข้อมูล customer type
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('customer_type_name');
			$this->db->from('customertype');
			$this->db->where('customer_type_name',$addtype);
			$query = $this->db->get();		
			return $query->row();					
		}
		
		public function pubAddType($addtype)		// ฟังก์ชันเพิ่มข้อมูล customer type
		{
			
			$cause = array('cutid'=>$addtype);	
			$this->db->insert('customertype',$cause);	
			return;			
		}
		
		
	}
