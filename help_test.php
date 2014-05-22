<?php
 // ค่าที่ใช้ใน unit test ค่าที่มากกว่าจัดเก็บ
 // Mysql database
 class checkVarianble {
	private $priError_code = 0; // มีหน้าที่จัดเก็บค่าความผิดพลาด โดยค่า = 0 (	ไม่มีความผิดพลาด)  n = ค่าความผิดพลาด
	// TINYINY จัดเก็บ 1 ไบต์
	 $intTinyint_min = -129; 	// -128 
	 $intTinyint_max = 128; 	// 127
	 $intTinyint_umin = -1; 	// 0
	 $intTinyint_umax = 256 	// 255
	 
	 //  SMALLINT จัดเก็บ 2 ไบต์
	 $intSmallint_min = -32769; // -32768
	 $intSmallint_max = 32768; 	// 32767
	 $intSmallint_umin = -1;	//0		
	 $intSmallint_umax = 65536;	//65535
	 
	 // MEDIUMINT จัดเก็บ 3 ไบต์
	 $intMediumint_min = -8388609; 	//-8388608
	 $intMediumint_max = 8388608;	// 8388607
	 $intMediumint_umin = -1; 		// 0
	 $intMediumint_umax = 1677216;	// 167721//6
	 
	 // INT จัดเก็บ 4 ไบต์
	 $intInt_min = -2147483649; 	// -2147483648
	 $intInt_max = 2147483648;		// 2147483647
	 $intInt_umin = -1;				// 0
	 $intInt_umax = 42949667296;	//429967295

	 // BIGINT จัดเก็บ 8 ไบต์
	 $intBigint_min = -9223372036854775809	// -9223372036854775808
	 $intBigint_max = 92233720368554775808	// 92233720368554775807
	 $inyBigint_umin = -1;					// 0
	 $intBigint_umax = 92233372036855477580 //922333720368554775807
	
	public function pubCheck_Tinyint($input_var,$sign = 1){
		// function ใช้ตรวจสอบ ตัวแปร ที่เป็น Tiny integer
		// sign ตัวแปรบ่งบอกว่าเป็นจำนวน UNSIGNED = 0 SIGNED =1
		// input_var ตัวแปรที่ต้องการตรวจสอบ
		// return ถ้า 0 = ถูกต้อง  , หรือ ข้อความผิดพลาด
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = 'ประเภทข้อมูลต้อง จำนวนเต็มขนาดเล็กมาก';	
		// check min limit value
		if($input_var <= $intTiny_min && $sign = 1) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		if($input_var <= $intTiny_umin && $sign = 0) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		// check max limit value
		if($input_var >= $intTiny_max && $sign = 1) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		if($input_var >= $intTiny_umax && $sign = 0) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		return $priError_code = 0;
		}
	
	public function pubCheck_Smallint($input_var,$sign = 1){
		// function ใช้ตรวจสอบ ตัวแปร ที่เป็น Small integer
		// sign ตัวแปรบ่งบอกว่าเป็นจำนวน UNSIGNED = 0 SIGNED =1
		// input_var ตัวแปรที่ต้องการตรวจสอบ
		// return ถ้า 0 = ถูกต้อง  , หรือ ข้อความผิดพลาด
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = 'ประเภทข้อมูลต้อง จำนวนเต็มขนาดเล็ก';	
		// check min limit value
		if($input_var <= $intSmall_min && $sign = 1) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		if($input_var <= $intSmall_umin && $sign = 0) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		// check max limit value
		if($input_var >= $intSmall_max && $sign = 1) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		if($input_var >= $intSmall_umax && $sign = 0) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		return $priError_code = 0;
		}
	public function pubCheck_Mediumint($input_var ,$sign = 1){
		// function ใช้ตรวจสอบ ตัวแปร ที่เป็น Medium integer
		// sign ตัวแปรบ่งบอกว่าเป็นจำนวน UNSIGNED = 0 SIGNED =1
		// input_var ตัวแปรที่ต้องการตรวจสอบ
		// return ถ้า 0 = ถูกต้อง  , หรือ ข้อความผิดพลาด
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = 'ประเภทข้อมูลต้อง จำนวนเต็มขนาดกลาง ';	
		// check min limit value
		if($input_var <= $intMedium_min && $sign = 1) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		if($input_var <= $intMedium_umin && $sign = 0) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		// check max limit value
		if($input_var >= $intMedium_max && $sign = 1) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		if($input_var >= $intMedium_umax && $sign = 0) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		return $priError_code = 0;
		}		
	public function pubCheck_Int($input_var ,$sign = 1){
		// function ใช้ตรวจสอบ ตัวแปร ที่เป็น integer
		// sign ตัวแปรบ่งบอกว่าเป็นจำนวน UNSIGNED = 0 SIGNED =1
		// input_var ตัวแปรที่ต้องการตรวจสอบ
		// return ถ้า 0 = ถูกต้อง  , หรือ ข้อความผิดพลาด
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = 'ประเภทข้อมูลต้อง จำนวนเต็ม ';	
		// check min limit value
		if($input_var <= $intInt_min && $sign = 1) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		if($input_var <= $intInt_umin && $sign = 0) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		// check max limit value
		if($input_var >= $intInt_max && $sign = 1) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		if($input_var >= $intInt_umax && $sign = 0) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		return $priError_code = 0;
		}
	public function pubCheck_Bigint($input_var,$sign = 1){
		// function ใช้ตรวจสอบ ตัวแปร ที่เป็น Big integer
		// sign ตัวแปรบ่งบอกว่าเป็นจำนวน UNSIGNED = 0 SIGNED =1
		// input_var ตัวแปรที่ต้องการตรวจสอบ
		// return ถ้า 0 = ถูกต้อง  , หรือ ข้อความผิดพลาด
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = 'ประเภทข้อมูลต้อง จำนวนเต็ม';	
		// check min limit value
		if($input_var <= $intBig_min && $sign = 1) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		if($input_var <= $intBig_umin && $sign = 0) return $priError_code = 'ค่าที่ป้อนน้อยกว่าค่าที่จัดเก็บได้';
		// check max limit value
		if($input_var >= $intBig_max && $sign = 1) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		if($input_var >= $intBig_umax && $sign = 0) return $priError_code = 'ค่าที่ป้อนมากกว่าค่าที่จัดเก็บได้';
		return $priError_code = 0;
		}
		
	public function pubCheck_Float( $input_var, $sign = 1){
		// function ใช้ตรวจสอบ ตัวแปร ที่เป็น Float
		// sign ตัวแปรบ่งบอกว่าเป็นจำนวน UNSIGNED = 0 SIGNED =1
		// input_var ตัวแปรที่ต้องการตรวจสอบ
		// return ถ้า 0 = ถูกต้อง  , หรือ ข้อความผิดพลาด
		
		// check miss type value
		if(!is_float($input_var) return $priError_code = 'ประเภทข้อมูลต้อง จำนวนทศนิยม';
		return $priError_code = 0;			
	}
	
	}
	 
 }
/?>