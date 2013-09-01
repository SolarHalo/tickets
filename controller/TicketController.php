<?php
class TicketController extends  Controller{
	public function index(){ 
		$fromDate = $_POST["fromDate"];
		$toDate = $_POST["toDate"];
		$keyword = $_POST["keyword"];
		$location = $_POST["location"];
		$this->getSmarty(); 
		
		$this->smarty->assign ( 'keyword', $keyword );
		$this->smarty->assign ( 'location', $location );
		$this->smarty->assign ( 'fromDate', $fromDate );
		$this->smarty->assign ( 'toDate', $toDate );
		
 		$this->smarty->display("search_product_list.tpl"); 
	}
	
	public function search(){
		$fromDate = $_POST["fromDate"];
		$toDate = $_POST["toDate"];
		$keyword = $_POST["keyword"];
		$location = $_POST["location"];
		
		$recordsSql =  "select products.aw_product_id, products.product_name,event_category.category_name,".
			"products.aw_thumb_url,products.display_price,products.promotional_text,products.specifications from products products ".
			"LEFT JOIN  event_category event_category  on products.category_id = event_category.category_id ";
		
		$hasWhere = false;
		
		if($keyword != null && $keyword != ""){
			if(!$hasWhere){
				$recordsSql = $recordsSql." where products.product_name like '%$keyword%' ";
				$hasWhere = true;
			}else{
				$recordsSql = $recordsSql." and products.product_name like '%$keyword%' ";
			}
		}
		
		if($location != null && $location != ""){
			if(!$hasWhere){
				$recordsSql = $recordsSql." where products.promotional_text like '%$location%' ";
				$hasWhere = true;
			}else{
				$recordsSql = $recordsSql." and products.promotional_text like '%$location%' ";
			}
		}
		
		if($fromDate != null && $fromDate != ""){
				
		}
		
		if($toDate != null && $toDate != ""){
				
		}
		
		$db = $this->getDB();
		
		$res = $db->get_results($recordsSql);
		
		$result = array();
		
		foreach ($res as $re){
			$result[] = array(
					"aw_product_id"=>$re->aw_product_id,
					"product_name"=>$re->product_name,
					"category_name"=>$re->category_name,
					"promotional_text"=>$re->promotional_text,
					"display_price"=>$re->display_price
					
			);
		}
		
		echo json_encode($result);
	}
}