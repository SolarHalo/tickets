<?php
class CarlendarController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("usercarlendar.tpl"); 
	}
}