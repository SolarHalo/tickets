<?php
class ImgcarouserlService{
	
	public  $dbutil;
    function __construct($dbutil){
	  	$this->dbutil =  $dbutil;
	} 
	 
/**
	 * 根据用户名获取用户信息
	 * Enter description here ...
	 * @param unknown_type $name
	 */
	function getAdminByName($name){
		return $this->dbutil->get_row("select * from img_carousel where title='".$name."'");
	}
	/**
	* 根据用户名获取用户信息
	* Enter description here ...
	* @param unknown_type $name
	*/
	function getAdminByID($id){
		return $this->dbutil->get_row("select * from img_carousel where id='".$id."'");
	}
 
	
	
	public function userPage($start , $page_size ){
		$limit ="";
		if($page_size){
			$limit =" limit $start,$page_size ";
		}
		$sql = "select * from img_carousel order by id $limit";
		return $this->dbutil->get_results($sql);
	
	 
	}
	public function countNum(){
		$sql = "select count(id) countnum from img_carousel";
    	$resutrnarry=	$this->dbutil->get_results($sql);
    	return $resutrnarry[0]->countnum;
	}
	
	public function addItem($data){
		print($data);
		return	$this->dbutil->insert("img_carousel", $data);
	}

	public function deleteItem($data){
		$sql = " delete from img_carousel where id= '$data'";
		return $this->dbutil->get_results($sql);
	}
	public function edit($data,$conditions){
		return $this->dbutil->update("img_carousel",$data,$conditions);
	}
	
	
	/**
	 * Enter description here ...
	 * @param unknown_type $name
	 */
	function valiteTitle($id,$title){
		return $this->dbutil->get_row("select * from img_carousel where id='".$id."' and title !='".$title."'");
	}
	
}