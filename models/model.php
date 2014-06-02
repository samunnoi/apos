<?php if( !defind('BASEPATH'))exit('No direct script access allowed');

	class template  extends CI_Model
	{
		public function __contruction(){
			// load libriry for model or connection database			
			
		}
		public function pubInsertXX($data){
			// insert data into database
			return $error_code;
		}
		public function pubDeleteXX($data){
			// delete from XX table
			return $error_code;
		}
		public function pubUpdateXX($data){
			// update into  XX table
			return $error_code;
		}
		public function pubSelectXX($data){
			// select from XX table
			return $output;
		}
			
	}



/?>