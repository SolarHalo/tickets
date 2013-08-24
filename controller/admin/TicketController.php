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
		
		$data = array();
		for($index = 0 ;$index < 10;$index++){
			$data[] = array(
					"id"=>$index,
					"cell"=>array(
					$index,20-$index,30-$index,40-$index,30-$index,30-$index,30-$index,30-$index,30-$index,30-$index,30-$index,30-$index,30-$index,30-$index)
			);
		}
		
		$result = array(
				"rows"=>$data,
				"page"=>$page,
				"total"=>2,
				"records"=>100);
		
		echo json_encode($result);
	}
}