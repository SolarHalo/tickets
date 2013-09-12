<?php
class AboutController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("about.tpl"); 
	}
   
}