<?php
class UsereventController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("usercarlendar_event_list.tpl"); 
	}
   
}