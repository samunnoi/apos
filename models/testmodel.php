<?php if( !defind('BASEPATH'))exit('No direct script access allowed');

	class template  extends CI_Model
	{	// ����Ǣ�ͧ�Ѻ ���ҧ
		// ����Ǣ�ͧ�Ѻ ���
		//  ��¹    �ѹ���
		private $priTable = "xx"; // �Ѵ�� ���͵��ҧ ������ ����
		public function __contruct(){
			// load libriry for model or connection database			
			parent::__contruct();
		}
		public function pubInsertXX($data){
			// �ѧ���� ���������ŷ����� 1 recode
			// $data �繵���������� ��觨Ѵ�红����� ���� ���Ϳ�Ŵ��繴Ѫ��
			// insert data into database
			$sql = "INSERT INTO".$priTable.$" VALUES(?,?);";
			if($this->db-query($sql,$data)){
				return $error_code = 0;
				}else{
				return $error_code = "��ͼԴ��Ҵ �������ö������.";
				}
		}
		public function pubDeleteXX($data){
			// �ѧ���� ź������
			// $data �繵���������� ��觨Ѵ�红����� ���� ���Ϳ�Ŵ��繴Ѫ��
			// delete from 
			$sql = "DELETE FROM".$priTable.$" WHERE KEY = ?";
			if($this->db-query($sql,$data)){
				return $error_code = 0;
				}else{
				return $error_code = "��ͼԴ��Ҵ �������öź��.";
				}
				
		}
		public function pubUpdateXX($key,$data){
			// �ѧ���� ��䢢����ŷ����� 
			// $key �����͹�㹡�����
			// $data �繵���������� ��觨Ѵ�红����� ���� ���Ϳ�Ŵ��繴Ѫ��
			// update into  
			$sql = "UPDATE ".$priTable.$"SET col = ?  WHERE KEY = ".$key;
			if($this->db->query($sql,$data)){
				return $error_code = 0;
				}else{
				return $error_code = "��ͼԴ��Ҵ �������ö�����.";
				}
		}
		public function pubSelectXX($key){
			// �ѧ���� �֧��Ũҡ���ҧ ������͹�
			// $data �繵���������� ��觨Ѵ�红����� ���� ���Ϳ�Ŵ��繴Ѫ��
			// select from 
			$sql  = " SELECT ";
			$sql &= 		"";
			$sql &= "FROM ";
			$sql &= "WHERE ?";
			if($query = $this->db->duery($sql,$key){
				return $query;
				}else{
				return $error_code = "��ͼԴ��Ҵ �������ö�֧�������� ";
				}
		}
			
	}



/?>