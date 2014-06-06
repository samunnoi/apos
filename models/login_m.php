<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูล user ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ welcomec
		// 	เขียนวันที่ 21-05-14
	Class Login_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		public function pubSelectUser($user,$pass)		// select ข้อมูลจาก user
		{	
			// 	เงื่อนไขในการ select โดยกำหนดเป็นตัวแปล array
			$cause = array('userid'=>$user,'password'=>$pass);	
			$query = $this->db->get_where('user',$cause);	
			// return ค่าแบบ row 
			if($query -> num_rows() == 1){return $query->row();} // return ค่าแบบเป็น row	
			else{return false;}
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
		
		public function pubAddUser($userid,$password,$name,$email)		// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
		{
			$cause = array('userid'=>$userid,'password'=>$password,'name'=>$name,'email'=>$email);	
			$this->db->insert('user',$cause);	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
			return;						
			
		}
	}
