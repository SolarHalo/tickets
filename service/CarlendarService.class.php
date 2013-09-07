<?php

	class CarlendarService{
		public  $dbutil;
		
		public function __construct($dbutil){
			$this->dbutil =  $dbutil;
		}
		
		public function getUserCalEvent($userid){
			$sql = "select e.entryid id,entrytitle title,entryfrom start,entryto end,entrynote,entrylocation,emailreminder,entryimg from userentrys ue,entry e where ue.userentryid='$userid' and ue.entryid=e.entryid and e.entryfrom is not null";
			$results = $this->dbutil->get_results($sql);
			return $results;
		}
		
		/**
		 * 新增票务事件到关系表
		 * @param unknown $productid
		 * @param unknown $userid
		 */
		public function saveuserentrys($productid,$userid){
			
			$sql = "insert into userentrys(userentryid,productid,entrytype) values($userid,'$productid','2')";
			return $this->dbutil->query($sql);  
		}
		
		/**
		 * 新增用户自定义事件，并新增关系
		 * @param unknown $entry
		 * @param unknown $userid
		 */
		public function saveCustomEvent($entry,$userid){
			//新增用户自定义事件
			$sql = "insert into entry(entrytitle,entrynote,emailreminder,entrylocation,entryfrom,entryto) values('$entry->entrytitle','$entry->entrynote','$entry->emailreminder','$entry->entrylocation',";
			if(empty($entry->entryfrom)){
				$sql.="null,";
			}else{
				$sql.="DATE_FORMAT('$entry->entryfrom','%Y-%m-%d'),";
			}
			if(empty($entry->entryto)){
				$sql.="null)";
			}else{
				$sql.="DATE_FORMAT('$entry->entryto','%Y-%m-%d'))";
			}
			
			$this->dbutil->query($sql); 
			
			//将用户自定义事件新增到关系表userentrys
			$entryid = $this->dbutil->getInsertId();
			$sql = "insert into userentrys(userentryid,entryid,entrytype) values($userid,'$entryid','1')";
			$this->dbutil->query($sql);
			return $entryid;

		}
		
		/**
		 * 删除自定义事件，并级联删除中间表
		 * @param unknown $entryid
		 * @param unknown $userid
		 */
		public function deleteCustomEventById($entryid,$userid){
			$sql = "delete from entry where entryid=$entryid";
			$this->dbutil->query($sql);
			
			$sqlrs = "delete from userentrys where userid='$userid' and entryid='$entryid'";
			$this->dbutil->query($sqlrs);
			
		}
		
		/**
		 * 删除票务关系表
		 * @param unknown $productid
		 * @param unknown $userid
		 */
		public function deleteUserEntry($productid,$userid){
			$sql = "delete from userentrys where userid='$userid' and productid='$productid'";
			$this->dbutil->query($sql);
		}
		
		/**
		 * 更新自定义事件
		 * @param unknown $entry
		 */
		public function updateCustomEventById($entry){
			$entryid = $entry->entryid;
			$sql = "update entry set entrytitle='$entry->entrytitle',entrynote='$entry->entrynote',emailreminder='$entry->emailreminder',entrylocation='$entry->entrylocation',";
			if(empty($entry->entryfrom)){
				$sql.="entryfrom = null,";
			}else{
				$sql.="entryfrom=DATE_FORMAT('$entry->entryfrom','%Y-%m-%d'),";
			}
			if(empty($entry->entryto)){
				$sql.="entryto=null";
			}else{
				$sql.="entryto = DATE_FORMAT('$entry->entryto','%Y-%m-%d')";
			}
			$sql.=" where entryid='$entryid'";
				
			$this->dbutil->query($sql);
			
		}
	}

?>