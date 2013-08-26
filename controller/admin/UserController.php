<?php
class UserController  extends  Controller{
	public function index(){ 
		$this->getSmarty(); 
		require_once SERVICE.DS.'admin'.DS.'UserService.class.php';
		//START 数据库查询及分页数据
		$userService = new UserService($this->getDB());
		$page_size = 2;
		$page_no=$page_no<1?1:$page_no;
		$row_count = $userService->countNum(); 
 	    $total_page =$row_count/$page_size==0 ?$row_count/$page_size:ceil($row_count/$page_size);
	    $total_page=$total_page<1?1:$total_page;
	    $page_no=$page_no>($total_page)?($total_page):$page_no;
	    $start = ($page_no - 1) * $page_size;
	    
	      $user_infos = $userService->userPage( $start , $page_size );
         $this->smarty->assign ( 'user_infos', $user_infos );
		$this->smarty->assign ( '_GET', $_GET );
//		$this->smarty->assign ( 'page_no', $page_no );
//		$this->smarty->assign ( 'page_html', $page_html );
		$this->smarty->assign ( 'oadmin_action_confirm' , "");
		$this->smarty->display("admin/user_list.tpl"); 
	}
	
	
	public function add(){
		$this->getSmarty(); 
		require_once SERVICE.DS.'admin'.DS.'UserService.class.php';
		$user_name = $real_name = $mobile = $password  = $email = $user_desc = $user_group = '';
 
		$userService = new UserService($this->getDB());
		$user_name = $_POST["user_name"];
       	$exist =  $userService->getAdminByName($user_name);
       	if($exist){
       		echo -1;
       		return;
       	}
       	
       	$input_data = array ('user_name' =>$_POST["user_name"], 'passwd' => md5($_POST["passwd"]), 'real_name' => $_POST["real_name"], 'mobile' => $_POST["mobile"] , 'email' =>  $_POST["email"], 'user_desc' => $_POST["user_desc"] );
       	$user_id = $userService->addAdUser($input_data);
       	echo $user_id;
  
	}
	
	public function editData(){
		$this->getSmarty();
		require_once SERVICE.DS.'admin'.DS.'UserService.class.php';
	
		$userService = new UserService($this->getDB());
	 
		$input_data = array ('user_name' =>$_POST["user_name"], 'passwd' => md5($_POST["passwd"]), 'real_name' => $_POST["real_name"], 'mobile' => $_POST["mobile"] , 'email' =>  $_POST["email"], 'user_desc' => $_POST["user_desc"] );
		$input_condition = array ('id' =>$_POST["id"] );
		
		$user_id = $userService->edit($input_data,$input_condition);
		echo $user_id;
	
	}
	
	public function delete(){
		$this->getSmarty(); 
		require_once SERVICE.DS.'admin'.DS.'UserService.class.php';
		$userService = new UserService($this->getDB());
		$id = $_POST['id'];
		$user_id = $userService->deleteUser($id);
		echo 1;
	}
	
	function test($username,$password){
		echo 'this is a test function ,username:'.$username.',password:'.$password;
	}
	
	
	function getpage(){
		$this->getSmarty();
		require_once SERVICE.DS.'admin'.DS.'UserService.class.php';
		//START 数据库查询及分页数据
		$userService = new UserService($this->getDB());
		
		$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
		$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
		$offset = ($page-1)*$rows;
		$result = array();
		$row_count = $userService->countNum();
		$result["total"] = $row_count;
		$user_infos = $userService->userPage( $offset , $rows );
		$items = array();
// 		while($row = $user_infos->fetch_assoc()){
// 			print ($row);
// 			array_push($items, $row);
// 		}
		$result["rows"] = $user_infos;
		echo json_encode($result);
		//$this->smarty->display("admin/user_list.tpl");
	}
}