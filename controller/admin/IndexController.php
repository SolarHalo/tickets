<?php
class IndexController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
		 $_SESSION["aaa"] = "good";
 		 $this->smarty->display("admin/index.tpl"); 
	}
}