<?php
class RegisterController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("register.tpl"); 
	}
   
}