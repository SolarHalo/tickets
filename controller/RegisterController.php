<?php
class RegisterController extends  Controller{
	public function index(){ 
		 $this->getSmarty(); 
 		 $this->smarty->display("register.tpl"); 
	}
   public function handreg(){ 
		 $this->getSmarty(); 
		
		 $email = $_POST ["email"];
		 if(empty($email)){
		 		$this->smarty->assign("errortip",$this->userExsist('you must write register form!!!!'));
		 		
		     	$this->smarty->display("register.tpl"); 
		 }
		 require_once SERVICE . DS . 'admin' . DS . 'UsersService.class.php';
		 $userService = new UsersService( $this->getDB());
		
		 $user = $userService->getEmailByName($email);
		  
		 if(!empty($user)){
		 	 
		 	$this->smarty->assign("errortip",$this->userExsist('this user has all ready exsist!!!!'));
		 	$this->smarty->display("register.tpl"); 
		 	return ;
		 }
		 
		  $user = array(
		        'userid' => md5(uniqid()), 
		  	    'username' => $_POST["username"],
				'password' => md5($_POST["password"] ),
				'firstname' => $_POST["lastname"],
				'lastname' => $_POST["lastname"],
				'email' => $_POST["email"],
				'birthdate' =>date("Y-m-d H:i:s",mktime(0,0,0,$_POST["month"],$_POST["day"],$_POST["year"])) 
		  );
		  $userService->addUser($user);
		    
		    $this->smarty->assign("errortip",$this->userExsist(' register success!!!!'));
		 	$this->smarty->display("register.tpl"); 
		 
		 
 		 
	}
  public function userExsist($msg){
  	return "<div class='alert'>$msg</div>";
  }
}