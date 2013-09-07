<?php
class TicketController extends  Controller{
	public function index(){ 
		$fromDate = $_POST["fromDate"];
		$toDate = $_POST["toDate"];
		$keyword = $_POST["keyword"];
		$location = $_POST["location"];
		$this->getSmarty(); 
		
		if($keyword == null || $keyword == ""){
			$keyword = "Search by keyword" ;
		}
		if($location == null || $location == "" ){
			$location = "Search by location";
		}
		if($fromDate == null || $fromDate == ""){
			$fromDate = "Date From";
		}
		if($toDate == null || $toDate == "" ){
			$toDate = "SDate To";
		}
		
		$this->smarty->assign ( 'keyword', $keyword );
		$this->smarty->assign ( 'location', $location );
		$this->smarty->assign ( 'fromDate', $fromDate );
		$this->smarty->assign ( 'toDate', $toDate );
		
 		$this->smarty->display("search_product_list.tpl"); 
	}
	
	
	public function info($param){

		$id = $param[0];
		$this->getSmarty();
		
		$this->smarty->assign ( 'keyword', "Search by keyword" );
		$this->smarty->assign ( 'location', "Search by location" );
		$this->smarty->assign ( 'fromDate', "Date From" );
		$this->smarty->assign ( 'toDate', "SDate To" );
		
		$this->smarty->assign ( 'id', $id );
		$this->smarty->display("product_info.tpl");
	}
	
	public function queryById(){
		
		$id = $_POST["id"];
		$result = array();
		
		$sql = "select DATE_FORMAT(products.specifications,\"%W %d %b %Y %H:%i\") as time,products.aw_product_id, products.product_name,".
			"event_category.category_name,products.aw_thumb_url,products.aw_image_url,products.display_price,products.promotional_text,products.specifications,products.description ".
			"from products products LEFT JOIN  event_category event_category  on products.category_id = event_category.category_id where products.aw_product_id = '$id' ";
		
		$db = $this->getDB();
		$res = $db->get_results($sql);
		
		foreach ($res as $re){
			$result =  array(
					"time"=>$re->time,
					"aw_product_id"=>$re->aw_product_id,
					"category_name"=>$re->category_name,
					"promotional_text"=>$re->promotional_text,
					"aw_image_url"=>$re->aw_image_url,
					"product_name"=>$re->product_name
			);
			break;
		}
		
		echo json_encode($result);
	}
	
	public function search(){
		$fromDate = $_POST["fromDate"];
		$toDate = $_POST["toDate"];
		$keyword = $_POST["keyword"];
		$location = $_POST["location"];
		
		$pager = $_POST["pager"];
		$pageSize = $_POST["pageSize"];
		$cat = $_POST["cat"];
		if($cat == null){
			$cat = "";
		}
		
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
		$categorySql = "select event_category.category_id ,event_category.category_name ,products.total from event_category event_category LEFT JOIN ".
			"(select COUNT(category_id) as total,category_id from products " ;

		$hasWhere = false;
		
		if($keyword != null && $keyword != ""){
			if(!$hasWhere){
				$counterSql = $counterSql." where products.product_name like '%$keyword%' ";
				$recordsSql = $recordsSql." where products.product_name like '%$keyword%' ";
				$categorySql = $categorySql." where product_name like '%$keyword%' ";
				$hasWhere = true;
			}else{
				$counterSql = $counterSql." and products.product_name like '%$keyword%' ";
				$recordsSql = $recordsSql." and products.product_name like '%$keyword%' ";
				$categorySql = $categorySql." and product_name like '%$keyword%' ";
			}
		}
		
		if($cat != null && "" != $cat){
			if(!$hasWhere){
				$counterSql = $counterSql." where products.category_id = '$cat' ";
				$recordsSql = $recordsSql." where products.category_id = '$cat' ";
				//$categorySql = $categorySql." where category_id = '$cat' ";
				$hasWhere = true;
			}else{
				$counterSql = $counterSql." and products.category_id = '$cat' ";
				$recordsSql = $recordsSql." and products.category_id = '$cat' ";
				//$categorySql = $categorySql." and category_id = '$cat' ";
			}
		}
		
		if($location != null && $location != ""){
			if(!$hasWhere){
				$counterSql = $counterSql." where products.promotional_text like '%$location%' ";
				$recordsSql = $recordsSql." where products.promotional_text like '%$location%' ";
				$categorySql = $categorySql." where promotional_text like '%$location%' ";
				$hasWhere = true;
			}else{
				$counterSql = $counterSql." and products.promotional_text like '%$location%' ";
				$recordsSql = $recordsSql." and products.promotional_text like '%$location%' ";
				$categorySql = $categorySql." and promotional_text like '%$location%' ";
			}
		}
		
		if($fromDate != null && $fromDate != ""){
			if(!$hasWhere){
				$counterSql = $counterSql." where  products.specifications > str_to_date('$fromDate','%Y-%m-%d') ";
				$recordsSql = $recordsSql." where  products.specifications > str_to_date('$fromDate','%Y-%m-%d') ";
				$categorySql = $categorySql." where  specifications > str_to_date('$fromDate','%Y-%m-%d') ";
				$hasWhere = true;
			}else{
				$counterSql = $counterSql." and products.specifications > str_to_date('$fromDate','%Y-%m-%d') ";
				$recordsSql = $recordsSql." and products.specifications > str_to_date('$fromDate','%Y-%m-%d') ";
				$categorySql = $categorySql." and specifications > str_to_date('$fromDate','%Y-%m-%d') ";
			}
		}
		
		if($toDate != null && $toDate != ""){
			if(!$hasWhere){
				$counterSql = $counterSql." where products.specifications < str_to_date('$toDate 23:59:59','%Y-%m-%d %H:%i:%s') ";
				$recordsSql = $recordsSql." where products.specifications < str_to_date($toDate 23:59:59','%Y-%m-%d %H:%i:%s') ";
				$categorySql = $categorySql." where specifications < str_to_date($toDate 23:59:59','%Y-%m-%d %H:%i:%s') ";
				$hasWhere = true;
			}else{
				$counterSql = $counterSql." and products.specifications < str_to_date('$toDate 23:59:59','%Y-%m-%d %H:%i:%s') ";
				$recordsSql = $recordsSql." and products.specifications < str_to_date('$toDate 23:59:59','%Y-%m-%d %H:%i:%s') ";
				$categorySql = $categorySql." and specifications < str_to_date('$toDate 23:59:59','%Y-%m-%d %H:%i:%s') ";
			}
		}
		
		$recordsSql = $recordsSql." limit $start,$pageSize";
		$categorySql = $categorySql." GROUP BY category_id ) products on products.category_id = event_category.category_id ";
		
		$db = $this->getDB();
		
		$res = $db->get_results($counterSql);
		$records = $res;
		foreach ($res as $re){
			$records = $re->total;
			break;
		}
		
		$res = $db->get_results($categorySql);
		$cats =array();
		foreach ($res as $re){
			$num = $re->total;
			if($num == null){
				$num = 0;
			}
			$cats[] = array(
					"category_id"=>$re->category_id,
					"category_name"=>$re->category_name,
					"total"=>$num
			);
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
				"cat"=>$cat,
				"totalPage"=>$totalPage,
				"counter"=>$records,
				"pageSize"=>$pageSize,
				"sql"=>$recordsSql,
				"data"=>$data,
				"categories"=>$cats
		);
		echo json_encode($result);
	}
}