<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		// 	มีหน้าที่ select, insert ข้อมูล user ของ customer
		// 	เกี่ยวข้องกับ ตาราง user
		// 	เกี่ยวข้องกับ ไฟล์ welcomec
		// 	เขียนวันที่ 21-05-14
	Class User_m extends CI_Model
	{
		function __construct()
			{
				parent::__construct();
			
			}
 
		public function _pubSelectUser($user,$pass){	
			// select ข้อมูลจาก user
			// $user จัดเก็บผู้ใช้งาน
			// $pass จัดเก็บรหัสผ่าน
			// 	เงื่อนไขในการ select โดยกำหนดเป็นตัวแปล array
			
			$cause = array('userid'=>$user,'password'=>$pass);	
			$query = $this->db->get_where('user',$cause);	
			
			// return ค่าแบบ row 
			if($query -> num_rows() == 1){
				return $query->row();
				}else{
				return false;
				}
		}
		
		public function _pubAddUser($userid,$password,$name,$email){
			// ฟังก์ชัน insert ข้อมูลลงฐานข้อมูล
			$cause = array('userid'=>$userid,'password'=>$password,'name'=>$name,'email'=>$email);	
			if(!$this->db->insert('user',$cause)){	// ดึงข้อมูลจาก member แบบมีเงื่อนไข
				return 0;
				}else{
				return "can not insert data";
				}
		
		}
	}