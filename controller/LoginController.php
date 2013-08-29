<?php
class LoginController extends  Controller{
	public function index(){ 
		$smaryt = $this->getSmarty(); 
		 $this->smarty->display("login.tpl"); 
	}
   
}