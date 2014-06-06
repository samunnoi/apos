<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, update ข้อมูล userid ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ user.php
		// 	เขียนวันที่ 30-05-14
	Class User_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
		public function pubSearchUser($id)		// ฟังก์ชันค้นหาข้อมูล User
		{
			// ค้นหาในกรณีที่ เจอเลย
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('userid',$id);
			$query = $this->db->get();		
			return $query->result();				
			
		}
		
		public function pubSetUser($userid,$name,$suname,$personal,$tel,$address1,$province,$post1,$email,$password)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('name'=>$name,'suname'=>$suname,'personal_num'=>$personal,'tel'=>$tel,'address1'=>$address1,'province'=>$province,'post'=>$post1,'email'=>$email,'password'=>$password);	
			$this->db->update('user',$cause,array('userid'=>$userid));	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			return;						
			
		
		}
		
		public function pubSelectEmail($email)		// select ข้อมูลจาก user
		{	
			// 	เงื่อนไขในการ select โดยกำหนดเป็นตัวแปล array
			$cause = array('email'=>$email);	
			$query = $this->db->get_where('user',$cause);	
			// return ค่าแบบ row 
			if($query -> num_rows() == 1){return $query->row();} // return ค่าแบบเป็น row	
			else{return false;}
		}

	}
