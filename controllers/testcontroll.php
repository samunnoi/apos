<?php if( !defind('BASEPATH'))exit('No direct script access allowed');
	// หน้าจอ  มีหน้าที่
	// เกี่ยวข้องกับ ตาราง
	// เกี่ยวข้องกับ ไฟล์
	// เรียก Model ชื่อ
	// เรียก view ชื่อ
	//  เขียน    วันที่
	class temp  extends CI_Controller
	{
		private $pripriError_code; // error code สำหรับค่าผิดพลาด
		public function __contruction(){
			// load libriry for controller
			
			// load model
			$this->load->model('');
		}
		public function index(){
			// this at start
			
			$this->load->view('',$data);
		}
		private function priValidate($data){
			// ฟังก์ชั้นตรวจสอบความถูกต้องของข้อมูล ถ้ามีความผิดพลาดจะส่งตัวเลข พร้อมรายละเอียด
			// ตัวแปร  $data เป็นข้อมูลที่ ผู้ใช้งานส่งเข้ามา
			$priError_code = 0; // ผ่านการตรวจสอบ
			
			// check miss type value
			if(!is_int($data['']) return $priError_code = 'ประเภทข้อมูลต้อง จำนวนเต็ม';
			// check miss format
		
			// check min limit value
			if($data[''] <=)   return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
			
			return $priError_code;
		}
		public function pubInput(){
			// รับข้อมูลจากผู้ใช้งาน
			if(priValidate($data)) return $priError_code;
		}
		private function priTest(){
			// ตรวจสอบการทำงานฟังก์ชั้น
			$this-load->library('unit_test');
			// check limit value
			
			// check miss type value
			
			// check miss format
			
		
		}
		
	}



/?>