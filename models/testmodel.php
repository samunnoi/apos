<?php if( !defind('BASEPATH'))exit('No direct script access allowed');

	class template  extends CI_Model
	{	// เกี่ยวข้องกับ ตาราง
		// เกี่ยวข้องกับ ไฟล์
		//  เขียน    วันที่
		private $priTable = "xx"; // จัดเก็บ ชื่อตาราง ที่ใช้ใน โมเดล
		public function __contruct(){
			// load libriry for model or connection database			
			parent::__contruct();
		}
		public function pubInsertXX($data){
			// ฟังก์ชั่น เพิ่มข้อมูลที่ลุะ 1 recode
			// $data เป็นตัวแปรอะเรย์ ซึ่งจัดเก็บข้อมูล โดยใช้ ชื่อฟิลด์เป็นดัชนี
			// insert data into database
			$sql = "INSERT INTO".$priTable.$" VALUES(?,?);";
			if($this->db-query($sql,$data)){
				return $error_code = 0;
				}else{
				return $error_code = "ข้อผิดพลาด ไม่สามารถเพิ่มได้.";
				}
		}
		public function pubDeleteXX($data){
			// ฟังก์ชั่น ลบข้อมูล
			// $data เป็นตัวแปรอะเรย์ ซึ่งจัดเก็บข้อมูล โดยใช้ ชื่อฟิลด์เป็นดัชนี
			// delete from 
			$sql = "DELETE FROM".$priTable.$" WHERE KEY = ?";
			if($this->db-query($sql,$data)){
				return $error_code = 0;
				}else{
				return $error_code = "ข้อผิดพลาด ไม่สามารถลบได้.";
				}
				
		}
		public function pubUpdateXX($key,$data){
			// ฟังก์ชั่น แก้ไขข้อมูลที่ลุะ 
			// $key เป็นเงื่อนไขในการแก้ไข
			// $data เป็นตัวแปรอะเรย์ ซึ่งจัดเก็บข้อมูล โดยใช้ ชื่อฟิลด์เป็นดัชนี
			// update into  
			$sql = "UPDATE ".$priTable.$"SET col = ?  WHERE KEY = ".$key;
			if($this->db->query($sql,$data)){
				return $error_code = 0;
				}else{
				return $error_code = "ข้อผิดพลาด ไม่สามารถแก้ไขได้.";
				}
		}
		public function pubSelectXX($key){
			// ฟังก์ชั่น ดึงมูลจากตาราง ตามเงื่อนไข
			// $data เป็นตัวแปรอะเรย์ ซึ่งจัดเก็บข้อมูล โดยใช้ ชื่อฟิลด์เป็นดัชนี
			// select from 
			$sql  = " SELECT ";
			$sql &= 		"";
			$sql &= "FROM ";
			$sql &= "WHERE ?";
			if($query = $this->db->duery($sql,$key){
				return $query;
				}else{
				return $error_code = "ข้อผิดพลาด ไม่สามารถดึงข้อมูลได้ ";
				}
		}
			
	}



/?>