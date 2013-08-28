<?php

class EventController extends Controller{
 
	public function index(){
		$this->getSmarty();
		$this->smarty->assign ( 'web_root' , WEBSITE_URL);
		$this->smarty->display("admin/event/event.tpl");
	}
	public function queryCategory(){
	
		$result = array();
	
		$db = $this->getDB();
	
		$res = $db->get_results(" select category_id,category_name from event_category ");
	
		foreach ($res as $re){
			$result[] = array($re->category_id,$re->category_name);
		}
		echo json_encode($result);
	}
	
	public function queryEvent(){
	
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
	
		$config = array(
				"events.event_name"=>JQGridFilterUtil::$STRING,
				"event_category.category_id"=>JQGridFilterUtil::$STRING,
				"events.description"=>JQGridFilterUtil::$STRING
		);
	
		$where = JQGridFilterUtil::toSqlWhere($filtersStr,$config);
	
		$counterSql = "select count(events.event_id) as total  from   events  events LEFT JOIN event_category event_category on events.event_cid = event_category.category_id " ;
		$recordsSql = "select events.event_id , events.event_name,event_category.category_name ,events.description ".
			" from   events  events LEFT JOIN event_category event_category on events.event_cid = event_category.category_id ";
	
		if(!is_null($where) && $where != ""){
			$counterSql = $counterSql." where ".$where;
			$recordsSql = $recordsSql." where ".$where;
		}
	
		if($sidx != null && $sidx != "" && $sord != null && $sord != ""){
			$recordsSql = $recordsSql." order by $sidx $sord ";
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
					"id"=>$re->event_id,
					"cell"=>array(
							$re->event_id,$re->event_name,$re->category_name,$re->description,$re->event_id)
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

