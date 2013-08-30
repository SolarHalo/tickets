<?php
class ImgcarouselController extends Controller {
	public function index() {
		$this->getSmarty ();
		require_once SERVICE . DS . 'admin' . DS . 'ImgcarouserlService.class.php';
		if (! CommonBase::isPost ()) {
			$this->smarty->display ( "admin/users/img_carousel.tpl" );
			return;
		}
		// START 数据库查询及分页数据
		$imgService = new ImgcarouserlService ( $this->getDB () );
		$page_size = 2;
		$page_no = $page_no < 1 ? 1 : $page_no;
		$row_count = $imgService->countNum ();
		$total_page = $row_count / $page_size == 0 ? $row_count / $page_size : ceil ( $row_count / $page_size );
		$total_page = $total_page < 1 ? 1 : $total_page;
		$page_no = $page_no > ($total_page) ? ($total_page) : $page_no;
		$start = ($page_no - 1) * $page_size;
		
		$user_infos = $imgService->userPage ( $start, $page_size );
		$this->smarty->assign ( 'user_infos', $user_infos );
		$this->smarty->assign ( '_GET', $_POST );
		// $this->smarty->assign ( 'page_no', $page_no );
		// $this->smarty->assign ( 'page_html', $page_html );
		$this->smarty->display ( "admin/users/img_carousel.tpl" );
	}
	
	public function add() {
		$this->getSmarty ();
		require_once SERVICE . DS . 'admin' . DS . 'ImgcarouserlService.class.php';
		if (! CommonBase::isPost ()) {
			$this->smarty->display ( "admin/users/img_carousel.tpl" );
			return;
		}
		
		$imgService = new ImgcarouserlService ( $this->getDB () );
		
		global $uploadfile;
		global $file_name;
		
		global $returnValue;
		if ($_FILES ['file'] ['name'] != '') {
			if ($_FILES ['file'] ['error'] > 0) {
				switch ($_FILES ['file'] ['error']) {
					case 1 :
						$returnValue = "文件大小超过了PHP.ini中的文件限制！";
						break;
					case 2 :
						$returnValue = "文件大小超过了浏览器限制！";
						break;
					case 3 :
						$returnValue = "文件部分被上传！";
						break;
					case 4 :
						$returnValue = "没有找到要上传的文件！";
						break;
					case 5 :
						$returnValue = "服务器临时文件夹丢失，请重新上传！";
						break;
					case 6 :
						$returnValue = "文件写入到临时文件夹出错！";
						break;
				}
			} else {
				if ($_FILES ['file'] ['type'] == 'image/jpeg' or $_FILES ['file'] ['type'] == 'image/pjpeg' or $_FILES ['file'] ['type'] == 'image/gif' && $_FILES ['file'] ['size'] < 20480) {
					
					$title = $_POST ["title"];
					
					$value = $imgService->getAdminByName ( $title );
					if ($value) {
						$returnValue = "存在相同title的记录，请修改title！";
					
					} else {
						
						$dirroot = "uploads/arousel/";
						$filename = explode ( ".", $_FILES ['file'] ['name'] );
						
						$filename [0] = strtotime ( date ( 'Y-m-d' ) ) . "-" . rand (); // 设置随机数长度
						
						$file_name = implode ( ".", $filename );
						// // $name1=$name.".Mcncc";
						$uploadfile = $dirroot . $file_name;
						
						move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $uploadfile );
						
						$desc = $_POST ["desc"];
						$input_data = array (
								'id' => md5 ( uniqid () ),
								'title' => $_POST ["title"],
								'url' => $uploadfile,
								'imgname' => $file_name,
								'showindex' => $_POST ["showindex"],
								'updatetime' => date ( 'Y-m-d H:i:s' ),
								'desc' => $_POST ["desc"] 
						);
						$id = $imgService->addItem ( $input_data );
						
						$returnValue = "添加成功 ";
					}
				} else {
					$returnValue = " 请上传小于2MB的jpeg或Gif类型的附件); ";
				}
			}
		} else {
			$returnValue = " 请上传文件！ ";
		}
		echo "<script>window.parent.CallbackFunction('$returnValue');</script>";
		// $alert_html =
		// HtmlWrap::alert("error",ErrorMessage::USER_OR_PWD_WRONG);
		// $this->smarty->assign("osadmin_action_alert",$alert_html);
		// $this->smarty->display ( "admin/users/img_carousel.tpl" );
	}
	
	public function editData() {
		$this->getSmarty ();
		require_once SERVICE . DS . 'admin' . DS . 'ImgcarouserlService.class.php';
		if (! CommonBase::isPost ()) {
			$this->smarty->display ( "admin/users/img_carousel.tpl" );
			return;
		}
		
		$imgService = new ImgcarouserlService ( $this->getDB () );
		
		global $uploadfile;
		global $file_name;
		
		global $returnValue;
		if ($_FILES ['file'] ['name'] != '') {
			if ($_FILES ['file'] ['error'] > 0) {
				switch ($_FILES ['file'] ['error']) {
					case 1 :
						$returnValue = "文件大小超过了PHP.ini中的文件限制！";
						break;
					case 2 :
						$returnValue = "文件大小超过了浏览器限制！";
						break;
					case 3 :
						$returnValue = "文件部分被上传！";
						break;
					case 4 :
						$returnValue = "没有找到要上传的文件！";
						break;
					case 5 :
						$returnValue = "服务器临时文件夹丢失，请重新上传！";
						break;
					case 6 :
						$returnValue = "文件写入到临时文件夹出错！";
						break;
				}
			} else {
				if ($_FILES ['file'] ['type'] == 'image/jpeg' or $_FILES ['file'] ['type'] == 'image/pjpeg' or $_FILES ['file'] ['type'] == 'image/gif' && $_FILES ['file'] ['size'] < 20480) {
					
					$title = $_POST ["title"];
					$id = $_POST ["id"];
					$value = $imgService->valiteTitle($id, $title);
					if ($value) {
						$returnValue = "存在相同title的记录，请修改title！";
					
					} else {
						
						print($value->url);
						unlink($value->url);
						$dirroot = "uploads/arousel/";
						$filename = explode ( ".", $_FILES ['file'] ['name'] );
						
						$filename [0] = strtotime ( date ( 'Y-m-d' ) ) . "-" . rand (); // 设置随机数长度
						
						$file_name = implode ( ".", $filename );
						// // $name1=$name.".Mcncc";
						$uploadfile = $dirroot . $file_name;
						
						move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $uploadfile );
						
						$desc = $_POST ["desc"];
						$input_data = array (
								'title' => $_POST ["title"],
								'url' => $uploadfile,
								'imgname' => $file_name,
								'showindex' => $_POST ["showindex"],
								'updatetime' => date ( 'Y-m-d H:i:s' ),
								'desc' => $_POST ["desc"] 
						);
						
						$input_condition = array (
								'id' => $_POST ["id"]
						);
						$id = $imgService->edit($input_data, $input_condition);
						
						$returnValue = "修改成功 ";
					}
				} else {
					$returnValue = " 请上传小于2MB的jpeg或Gif类型的附件); ";
				}
			}
		} else {
			$returnValue = " 请上传文件！ ";
		}
		echo "<script>window.parent.CallbackFunction('$returnValue');</script>";
	}
	
	public function delete() {
		$this->getSmarty ();
		require_once SERVICE . DS . 'admin' . DS . 'ImgcarouserlService.class.php';
		$imgService = new ImgcarouserlService ( $this->getDB () );
		$id = $_POST ['id'];
		$user_id = $imgService->deleteItem ( $id );
		echo 1;
	}
	
	function test($username, $password) {
		echo 'this is a test function ,username:' . $username . ',password:' . $password;
	}
	
	function getpage() {
		$this->getSmarty ();
		require_once SERVICE . DS . 'admin' . DS . 'ImgcarouserlService.class.php';
		// START 数据库查询及分页数据
		$imgService = new ImgcarouserlService ( $this->getDB () );
		
		$page = isset ( $_POST ['page'] ) ? intval ( $_POST ['page'] ) : 1;
		$rows = isset ( $_POST ['rows'] ) ? intval ( $_POST ['rows'] ) : 10;
		$offset = ($page - 1) * $rows;
		$result = array ();
		$row_count = $imgService->countNum ();
		$result ["total"] = $row_count;
		$user_infos = $imgService->userPage ( $offset, $rows );
		$items = array ();
		// while($row = $user_infos->fetch_assoc()){
		// print ($row);
		// array_push($items, $row);
		// }
		$result ["rows"] = $user_infos;
		echo json_encode ( $result );
		// $this->smarty->display("admin/user_list.tpl");
	}

}