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
		
		$pager = $_POST["pager"];
		$pageSize = $_POST["pageSize"];
		
		if($pager == null){
			$pager = 1;
		}
		
		if($pageSize == null){
			$pageSize = 10;
		}
		
		$start = ($pager -1) * $pageSize;
		$counterSql = "select count(products.aw_product_id) as total from products products LEFT JOIN event_category event_category on products.category_id = event_category.category_id " ;
		$recordsSql =  "select DATE_FORMAT(products.specifications,\"%W\") as week, DATE_FORMAT(products.specifications,\"%b\") as month, DATE_FORMAT(products.specifications,\"%d\") as date ,DATE_FORMAT(products.specifications,\"%H:%i\") as time ,".
			"products.aw_product_id, products.product_name,event_category.category_name,".
			"products.aw_thumb_url,products.display_price,products.promotional_text,products.specifications,products.description from products products ".
			"LEFT JOIN  event_category event_category  on products.category_id = event_category.category_id ";
		
		$hasWhere = false;
		
		if($keyword != null && $keyword != ""){
			if(!$hasWhere){
				$counterSql = $counterSql." where products.product_name like '%$keyword%' ";
				$recordsSql = $recordsSql." where products.product_name like '%$keyword%' ";
				$hasWhere = true;
			}else{
				$counterSql = $counterSql." and products.product_name like '%$keyword%' ";
				$recordsSql = $recordsSql." and products.product_name like '%$keyword%' ";
			}
		}
		
		if($location != null && $location != ""){
			if(!$hasWhere){
				$counterSql = $counterSql." where products.promotional_text like '%$location%' ";
				$recordsSql = $recordsSql." where products.promotional_text like '%$location%' ";
				$hasWhere = true;
			}else{
				$counterSql = $counterSql." and products.promotional_text like '%$location%' ";
				$recordsSql = $recordsSql." and products.promotional_text like '%$location%' ";
			}
		}
		
		if($fromDate != null && $fromDate != ""){
				
		}
		
		if($toDate != null && $toDate != ""){
				
		}
		
		$recordsSql = $recordsSql." limit $start,$pageSize";
		
		$db = $this->getDB();
		
		$res = $db->get_results($counterSql);
		$records = $res;
		foreach ($res as $re){
			$records = $re->total;
			break;
		}
		
		$res = $db->get_results($recordsSql);
		
		$data = array();
		
		foreach ($res as $re){
			$data[] = array(
					"week"=>$re->week,
					"month"=>$re->month,
					"date"=>$re->date,
					"time"=>$re->time,
					"aw_product_id"=>$re->aw_product_id,
					"product_name"=>$re->product_name,
					"aw_thumb_url"=>$re->aw_thumb_url,
					"category_name"=>$re->category_name,
					"promotional_text"=>$re->promotional_text,
					"description"=>$re->description,
					"display_price"=>$re->display_price
					
			);
		}
		
		$totalPage = ceil($records/$pageSize);
		
		$result = array(
				"pager"=>$pager,
				"sql"=>$recordsSql,
				"totalPage"=>$totalPage,
				"counter"=>$records,
				"pageSize"=>$pageSize,
				"data"=>$data
		);
		echo json_encode($result);
	}
}