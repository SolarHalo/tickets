<?php
class CarlendarController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("usercarlendar.tpl"); 
	}
	
	public function getUserCalEvent($userid){
		/* require_once SERVICE . DS . 'CarlendarService.class.php';
		echo SERVICE . DS . 'CarlendarService.class.php';
		$service = new CarlendarService($dbutil);
		$year = date('Y');
		$month = date('m');
		$userevents = $service->getUserCalEvent($userid[0]);
		print_r($userevents);
		echo json_encode($userevents); */
		$year = date('Y');
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
			));
	}
}