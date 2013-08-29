<?php
class RegisterController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("register.tpl"); 
	}
   public function handreg(){ 
		 $this->getSmarty(); 
		  $email = $_POST ["email"];
		 require_once SERVICE . DS . 'admin' . DS . 'UserService.class.php';
		 $userService = new UserService ( $this->getDB() );
		 $user = $userService->getEmailByName($email);
		 if(empty($user)){
		 	$this->smarty->assign("errortip",$this->userExsist());
		 	$this->smarty->display("register.tpl"); 
		 }
		  $user = array(
		  	    'user_name' => $_POST["user_name"],
				'passwd' => md5 ( $_POST["password"] ),
				'real_name' => $_POST["real_name"],
				'mobile' => $_POST["mobile"],
				'email' => $_POST["email"],
				'user_desc' => $_POST["user_desc"] 
		  );
		 
		 
		 
		 
 		 
	}
  public function userExsist(){
  	return "<div class='alert'>this user has all ready exsist!!!!</div>";
  }
}