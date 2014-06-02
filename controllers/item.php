<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Item extends CI_Controller {

			function __construct()
			{
				parent::__construct();
				//	 โหลด model User	
				//	โหลดไลบารี session และ form_validation
				$this->load->model('Item_m','item');					
				$this->load->library(array( 'session', 'form_validation')); 
				$this->load->helper(array('url', 'html', 'form'));
			}
			
			
			public function index()
			{
			
				$this->load->view('head_v');
				$this->load->view('item_v');
				$this->load->view('foot_v');
			
			}
			public function additem()
			{
				// ฟังก์ชัน เพิ่มสินค้า
				if($post = $this->input->post()){ 	
					extract($post);
					$itemid=trim($itemid);
					$olditemid=trim($olditemid);
					$barcode=trim($barcode);
					$name=trim($name);
					$detail=trim($detail);
					$price=trim($price);
					$discount=trim($discount);
					$percent=trim($percent);
					$catalog=trim($catalog);
					echo $status;
					// เช็คสถานะว่าเป็น add หรือ update 
					if(strcmp($status,'add')==0){
						$error = $this->validateitem($itemid,$olditemid,$barcode,$name,$detail,$price,$discount,$percent,$catalog,$status);
						if ($error == 0){
							$this->item->pubAddItem($itemid,$barcode,$name,$detail);
							$this->item->pubAddPrice($itemid,$price,$discount,$percent);
							$this->item->pubAddCatalog($itemid,$catalog,$master);					
							$this->index();
						}
					}if(strcmp($status,'update')==0){
					
					//echo "----".$itemid;
					//echo "----".$olditemid;
						$error = $this->validateitem($itemid,$olditemid,$barcode,$name,$detail,$price,$discount,$percent,$catalog,$status);
						//foreach($error as $row){ echo $row;}
						
						if ($error == 0){
							
							$this->item->pubSetItem($itemid,$olditemid,$barcode,$name,$detail);
							$this->item->pubSetPrice($itemid,$olditemid,$price,$discount,$percent);
							$this->item->pubSetCatalog($itemid,$olditemid,$catalog,$master);					
							$this->index();
						}
					}
				}			

			}
			
			public function searchitem(){				
							
				if($post = $this->input->post()){
					extract($post);
				}else{
					$name=$this->uri->segment(3);	
				}
				// 	เรียกใช้ฟังก์ชันค้นหาสินค้า
				$rec = $this->item->pubSearchItem($name);
				if(count($rec)==1){
					foreach($rec as $row){
						$data["itemid"] = $row->itemid;
						$data["barcode"] = $row->barcode;
						$data["name"]= $row->name;
						$data["detail"]= $row->detail1;
						//$data["price"]= $row->price;
						//$data["discount"]= $row->discount;
						//$data["percent"]= $row->percent;	
					}			
				}
				if(count($rec)>1){
					$index=0;
					foreach($rec as $row){
						$searchtable['itemid'][$index]=$row->itemid;
						$searchtable['name'][$index]=$row->name;
						$index++;					
					}
					$data['searchtable']=$searchtable;
					$data['rowtable']=$index;
				} 
				if(count($rec) == 0){
				$data['itemerror']="Item Not Found";
				}	
				
				$this->load->view('head_v');
				$this->load->view('item_v',$data);
				$this->load->view('foot_v');
				
			}
				
				
			public function delitem()
				{			
					//	 ฟังก์ชันลบสินค้า
					$delid=$this->uri->segment(3);
					
					if($this->item->pubSearchItemid($delid)){ 				 
							
						
						$this->item->pubDelItem($delid);		
						$this->index();
					}			
			}
		
			private function validateitem($itemid,$olditemid,$barcode,$name,$detail,$price,$discount,$percent,$catalog,$status)
			{	
			
				// ฟังก์ชันตรวจสอบข้อผิดพลาดในการกรอก form
				$price=floatval($price);
				$discount=floatval($discount);
				$percent=floatval($percent);
				$erroract=0;
				if(strlen($itemid)>=15){ $erroract = 1;$error['itemid_error'] = "ItemID Length More";}
				if(strlen($itemid)==0){$erroract = 1;$error['itemid_notnull'] =  "ItemID Require";}
				if(strlen($barcode)>=20){$erroract = 1;$error['barcode_error'] =  "Barcode Length More";}
				if(strlen($barcode)==0){$erroract = 1;$error['barcode_notnull'] =  "Barcode Require";}
				if(strlen($name)>=50){$erroract = 1;$error['name_error'] =  "Name Length More";}
				if(strlen($name)==0){$erroract = 1;$error['name_notnull'] =  "Name Require";}
				if(strlen($detail)>=225){$erroract = 1;$error['detail_error'] = "Detail Length More";}
				if(strlen($detail)==0){$erroract = 1;$error['detail_notnull'] = "Detail Require";}
				if($price<0){$erroract = 1;$error['price_nav'] =   "Price Is Positive Only";}
				if(!is_float($price)){$erroract = 1;$error['price_notnum'] =   "Price Is Not Number";}
				if(strlen($price)==0){$erroract = 1;$error['price_notnull'] =   "Price Require";}
				if($discount<0){$erroract = 1;$error['discount_nav'] =  "Discount Is Positive Only";}
				if(!is_float($discount)){$erroract = 1;$error['discount_notnull'] =  "Discount Is Not Number";}
				if($percent<0){$erroract = 1;$error['percent_nav'] =  "Percent Is Positive Only";}
				if(!is_float($percent)){$erroract = 1;$error['percent_notnull'] =  "Percent Is Not Number";}
				if(strlen($catalog)>=30){$erroract = 1;$error['catalog_error'] =  "Catalog Length More";}
				if(strlen($catalog)==0){$erroract = 1;$error['catalog_notnull'] =  "Catalog Require";}
				if(strcmp($status,'add')==0){
					if($itemrec= $this->item->pubSearchItemid($itemid)){
						if($itemrec->itemid){$erroract = 1;$error['itemid_aready'] = "ItemID Aready";}
					}
				}if(strcmp($status,'update')==0){
					
						if(strcmp($olditemid,$itemid)!=0){
							if($itemrec= $this->item->pubSearchItemid($itemid)){
								if($itemrec->itemid){$erroract = 1;$error['itemid_aready'] = "ItemID Aready";}
							}	
						}
				
				}
				
				if($erroract==1){
				
					// เก็บตัวแปลเพื่อส่งไปแสดงผลยังหน้า view
					$error['act']=$erroract;
					$error['itemid'] = $itemid;
					$error['barcode'] = $barcode;
					$error['name'] = $name;
					$error['detail'] = $detail;
					$error['price'] = $price;
					$error['discount'] = $discount;
					$error['percent'] = $percent;
					$error['catalog'] = $catalog; 
					
					 				
					$this->load->view('head_v');
					$this->load->view('item_v',$error);
					$this->load->view('foot_v');
					return $error;
				}else{
					return 0;	
				}
			}
	}
		
		
	
	
	


