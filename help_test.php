<?php
 // ��ҷ����� unit test ��ҷ���ҡ���ҨѴ��
 // Mysql database
 class checkVarianble {
	private $priError_code = 0; // ��˹�ҷ��Ѵ�纤�Ҥ����Դ��Ҵ �¤�� = 0 (	����դ����Դ��Ҵ)  n = ��Ҥ����Դ��Ҵ
	// TINYINY �Ѵ�� 1 亵�
	 $intTinyint_min = -129; 	// -128 
	 $intTinyint_max = 128; 	// 127
	 $intTinyint_umin = -1; 	// 0
	 $intTinyint_umax = 256 	// 255
	 
	 //  SMALLINT �Ѵ�� 2 亵�
	 $intSmallint_min = -32769; // -32768
	 $intSmallint_max = 32768; 	// 32767
	 $intSmallint_umin = -1;	//0		
	 $intSmallint_umax = 65536;	//65535
	 
	 // MEDIUMINT �Ѵ�� 3 亵�
	 $intMediumint_min = -8388609; 	//-8388608
	 $intMediumint_max = 8388608;	// 8388607
	 $intMediumint_umin = -1; 		// 0
	 $intMediumint_umax = 1677216;	// 167721//6
	 
	 // INT �Ѵ�� 4 亵�
	 $intInt_min = -2147483649; 	// -2147483648
	 $intInt_max = 2147483648;		// 2147483647
	 $intInt_umin = -1;				// 0
	 $intInt_umax = 42949667296;	//429967295

	 // BIGINT �Ѵ�� 8 亵�
	 $intBigint_min = -9223372036854775809	// -9223372036854775808
	 $intBigint_max = 92233720368554775808	// 92233720368554775807
	 $inyBigint_umin = -1;					// 0
	 $intBigint_umax = 92233372036855477580 //922333720368554775807
	
	public function pubCheck_Tinyint($input_var,$sign = 1){
		// function ���Ǩ�ͺ ����� ����� Tiny integer
		// sign ����ú觺͡����繨ӹǹ UNSIGNED = 0 SIGNED =1
		// input_var ����÷���ͧ��õ�Ǩ�ͺ
		// return ��� 0 = �١��ͧ  , ���� ��ͤ����Դ��Ҵ
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = '�����������ŵ�ͧ �ӹǹ�����Ҵ����ҡ';	
		// check min limit value
		if($input_var <= $intTiny_min && $sign = 1) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		if($input_var <= $intTiny_umin && $sign = 0) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		// check max limit value
		if($input_var >= $intTiny_max && $sign = 1) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		if($input_var >= $intTiny_umax && $sign = 0) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		return $priError_code = 0;
		}
	
	public function pubCheck_Smallint($input_var,$sign = 1){
		// function ���Ǩ�ͺ ����� ����� Small integer
		// sign ����ú觺͡����繨ӹǹ UNSIGNED = 0 SIGNED =1
		// input_var ����÷���ͧ��õ�Ǩ�ͺ
		// return ��� 0 = �١��ͧ  , ���� ��ͤ����Դ��Ҵ
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = '�����������ŵ�ͧ �ӹǹ�����Ҵ���';	
		// check min limit value
		if($input_var <= $intSmall_min && $sign = 1) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		if($input_var <= $intSmall_umin && $sign = 0) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		// check max limit value
		if($input_var >= $intSmall_max && $sign = 1) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		if($input_var >= $intSmall_umax && $sign = 0) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		return $priError_code = 0;
		}
	public function pubCheck_Mediumint($input_var ,$sign = 1){
		// function ���Ǩ�ͺ ����� ����� Medium integer
		// sign ����ú觺͡����繨ӹǹ UNSIGNED = 0 SIGNED =1
		// input_var ����÷���ͧ��õ�Ǩ�ͺ
		// return ��� 0 = �١��ͧ  , ���� ��ͤ����Դ��Ҵ
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = '�����������ŵ�ͧ �ӹǹ�����Ҵ��ҧ ';	
		// check min limit value
		if($input_var <= $intMedium_min && $sign = 1) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		if($input_var <= $intMedium_umin && $sign = 0) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		// check max limit value
		if($input_var >= $intMedium_max && $sign = 1) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		if($input_var >= $intMedium_umax && $sign = 0) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		return $priError_code = 0;
		}		
	public function pubCheck_Int($input_var ,$sign = 1){
		// function ���Ǩ�ͺ ����� ����� integer
		// sign ����ú觺͡����繨ӹǹ UNSIGNED = 0 SIGNED =1
		// input_var ����÷���ͧ��õ�Ǩ�ͺ
		// return ��� 0 = �١��ͧ  , ���� ��ͤ����Դ��Ҵ
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = '�����������ŵ�ͧ �ӹǹ��� ';	
		// check min limit value
		if($input_var <= $intInt_min && $sign = 1) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		if($input_var <= $intInt_umin && $sign = 0) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		// check max limit value
		if($input_var >= $intInt_max && $sign = 1) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		if($input_var >= $intInt_umax && $sign = 0) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		return $priError_code = 0;
		}
	public function pubCheck_Bigint($input_var,$sign = 1){
		// function ���Ǩ�ͺ ����� ����� Big integer
		// sign ����ú觺͡����繨ӹǹ UNSIGNED = 0 SIGNED =1
		// input_var ����÷���ͧ��õ�Ǩ�ͺ
		// return ��� 0 = �١��ͧ  , ���� ��ͤ����Դ��Ҵ
		
		// check miss type value
		if(!is_int($input_var) return $priError_code = '�����������ŵ�ͧ �ӹǹ���';	
		// check min limit value
		if($input_var <= $intBig_min && $sign = 1) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		if($input_var <= $intBig_umin && $sign = 0) return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
		// check max limit value
		if($input_var >= $intBig_max && $sign = 1) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		if($input_var >= $intBig_umax && $sign = 0) return $priError_code = '��ҷ���͹�ҡ���Ҥ�ҷ��Ѵ����';
		return $priError_code = 0;
		}
		
	public function pubCheck_Float( $input_var, $sign = 1){
		// function ���Ǩ�ͺ ����� ����� Float
		// sign ����ú觺͡����繨ӹǹ UNSIGNED = 0 SIGNED =1
		// input_var ����÷���ͧ��õ�Ǩ�ͺ
		// return ��� 0 = �١��ͧ  , ���� ��ͤ����Դ��Ҵ
		
		// check miss type value
		if(!is_float($input_var) return $priError_code = '�����������ŵ�ͧ �ӹǹ�ȹ���';
		return $priError_code = 0;			
	}
	
	}
	 
 }
/?>