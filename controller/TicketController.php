<?php
class TicketController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("search_product_list.tpl"); 
	}
}