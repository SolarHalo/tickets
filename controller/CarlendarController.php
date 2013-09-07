<?php
class CarlendarController extends  Controller{
	public function index(){ 
		$user->id = 1;
		$user->username = 'dhy';
		//临时session
		$_SESSION['user'] = $user;
		 $this->getSmarty(); 
 		 $this->smarty->display("usercarlendar.tpl"); 
	}
	
	/**
	 * 新增日历事件
	 * @param unknown $params
	 */
	public function addEvent(){
		require_once SERVICE . DS . 'CarlendarService.class.php';
		$service = new CarlendarService($this->getDB ());
		
		$type = $_POST['type'];
		$entry = $_POST['entry'];
		$productid = $_POST['productid'];
		$userid = $_SESSION['user']->id;
		$entry = json_decode(json_encode($entry));
		if($type==1){
			//自定义事件
 			echo $service->saveCustomEvent($entry, $userid);
		}else{
			echo $service->saveuserentrys($productid, $userid);
		}
	}
	
	/**
	 * 显示事件到日历
	 */
	public function getUserCalEvent(){
		if(empty($_SESSION['user'])){
			return;
		}
		 $userid = $_SESSION['user']->id; 
		
		require_once SERVICE . DS . 'CarlendarService.class.php';
		$service = new CarlendarService($this->getDB ());
		$userevents = $service->getUserCalEvent($userid);
		echo json_encode($userevents);    
		
	}
	
	/**
	 * 根据日历事件id删除事件，并删除中间表
	 */
	public function deleteEventById(){
		require_once SERVICE . DS . 'CarlendarService.class.php';
		$service = new CarlendarService($this->getDB ());
		
		$type = $_POST['type'];
		$entryid = $_POST['entryid'];
		$productid = $_POST['productid'];
		$userid = $_SESSION['user']->id;
		
		if($type==1){
			//删除自定义事件
			$service->deleteCustomEventById($entryid, $userid);
		}else{
			$service->deleteUserEntry($productid, $userid);
		}
		echo "success";
		
	}
	
	/**
	 * 更新自定义事件
	 * @param unknown $entry
	 */
	public function updateCustomEventById($entry){
		require_once SERVICE . DS . 'CarlendarService.class.php';
		$service = new CarlendarService($this->getDB ());
		
		$entry = $_POST['entry'];
		$entry = json_decode(json_encode($entry));
		
		$service->updateCustomEventById($entry);
	}
	
}