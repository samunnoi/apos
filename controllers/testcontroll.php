<?php if( !defind('BASEPATH'))exit('No direct script access allowed');
	// ˹�Ҩ�  ��˹�ҷ��
	// ����Ǣ�ͧ�Ѻ ���ҧ
	// ����Ǣ�ͧ�Ѻ ���
	// ���¡ Model ����
	// ���¡ view ����
	//  ��¹    �ѹ���
	class temp  extends CI_Controller
	{
		private $pripriError_code; // error code ����Ѻ��ҼԴ��Ҵ
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
			// �ѧ���鹵�Ǩ�ͺ�����١��ͧ�ͧ������ ����դ����Դ��Ҵ���觵���Ţ �������������´
			// �����  $data �繢����ŷ�� �����ҹ�������
			$priError_code = 0; // ��ҹ��õ�Ǩ�ͺ
			
			// check miss type value
			if(!is_int($data['']) return $priError_code = '�����������ŵ�ͧ �ӹǹ���';
			// check miss format
		
			// check min limit value
			if($data[''] <=)   return $priError_code = '��ҷ���͹���¡��Ҥ�ҷ��Ѵ����';
			
			return $priError_code;
		}
		public function pubInput(){
			// �Ѻ�����Ũҡ�����ҹ
			if(priValidate($data)) return $priError_code;
		}
		private function priTest(){
			// ��Ǩ�ͺ��÷ӧҹ�ѧ����
			$this-load->library('unit_test');
			// check limit value
			
			// check miss type value
			
			// check miss format
			
		
		}
		
	}



/?>