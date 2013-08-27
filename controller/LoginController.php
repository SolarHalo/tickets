<?php
class LoginController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("login.tpl"); 
	}
   
}