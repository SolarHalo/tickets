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
// 		echo $entry.'---type:'.$type.'--userid:'.$userid.',entrytime:'.$entry->entryfrom.',entryto:'.$entry[entryto].',--------entrytitle:'.$entry["entrytitle"].'-----------,emailreminder:'.$entry->emailreminder;
		if($type==1){
			//自定义事件
 			echo $service->saveCustomEvent($entry, $userid);
		}else{
			$service->saveuserentrys($productid, $userid);
		}
// 		echo 'success';
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
		
		
		  /* $year = date('Y');
		$month = date('m');
	echo json_encode(array(
	
		array(
			'id' => 111,
			'title' => "Event1",
			'start' => "$year-$month-10",
			'url' => "http://yahoo.com/"
		),
		
		array(
			'id' => 222,
			'title' => "Event2",
			'start' => "$year-$month-20",
			'end' => "$year-$month-22",
			'url' => "http://yahoo.com/"
		),
		array(
			'title'=>"All Day Event",
			'start'=>"$year-$month-1"
	    ),
		array(
			'title'=>"Long Event",
			'start'=>"$year-$month-2",
			'end'=>"$year-$month-5"
		),
		array(
			'id'=>999,
			'title'=>"Repeating Event",
			'start'=>"$year-$month-3",
			'allDay'=>false
		),
		array(
			'title'=>"click for google",
			'start'=>"$year-$month-23",
			'end'=>"year-$month-25",
			'url'=>"http://google.com/"			
	    )
			));   */
		
		
	}
	
}