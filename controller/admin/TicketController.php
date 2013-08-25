<?php


class TicketController extends Controller{

	public function index(){
		$this->getSmarty();
		$this->smarty->assign ( 'web_root' , WEBSITE_URL);
		$this->smarty->display("admin/ticket.tpl");
	}
	
	public function getDict(){
// 		$key = $_POST["key"];
		
// 		if($key == null ){
// 			$key = $_GET["key"];
// 		}
		
		
// 		if($key == "forSale"){
			$result = array();
			$result[] = array(
				'id'=>0,
				'value'=>'未售'
			);
			$result[] = array(
					'id'=>1,
					'value'=>'在售'
			);
			echo json_encode($result);
// 		}
	}
	
	public function queryTicket(){
		
		require_once PROJECT.DS.'framework'.DS."util".DS.'JQGridFilterUtil.php';
		
		//页码
		$page = $_POST["page"];
		if($page == null ){
			$page = $_GET["page"];
		}
		
		//每页显示记录数
		$rows = $_POST["rows"];
		if($rows == null ){
			$rows = $_GET["rows"];
		}
		
		$start = ($page-1)*$rows ;
		$end = $page*$rows;
		
		
		//排序索引id
		$sidx = $_POST["sidx"];
		if($sidx == null ){
			$sidx = $_GET["sidx"];
		}
		
		//排序顺序
		$sord = $_POST["sord"];
		if($sord == null ){
			$sord = $_GET["sord"];
		}
		
		$filtersStr = $_POST["filters"];
		if($filtersStr == null){
			$filtersStr = $_GET["filters"];
		}
		
		$where = JQGridFilterUtil::toSqlWhere($filtersStr);
		
		$counterSql = "select count(aw_product_id) as total from products " ;
		$recordsSql = "select aw_product_id, product_name,product_type,aw_thumb_url,display_price,promotional_text,specifications from products ";
		
		if(!is_null($where)){
			$counterSql = $counterSql." where ".$where;
			$recordsSql = $recordsSql." where ".$where;
		}
		
		$recordsSql = $recordsSql." limit $start ,$end" ; 
		
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
					"id"=>$re->aw_product_id,
					"cell"=>array(
					$re->aw_product_id,$re->product_name,$re->product_type,$re->aw_thumb_url,$re->display_price,$re->promotional_text,$re->specifications)
			);
		}
		
		$totalPage = ceil($records/$rows);
		
		$result = array(
				"rows"=>$data,
				"page"=>$page,
				"total"=>$totalPage,
				"records"=>$records);
		
		echo json_encode($result);
	}
}