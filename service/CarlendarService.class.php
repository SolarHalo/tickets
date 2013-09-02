<?php

	class CarlendarService{
		public  $dbutil;
		
		public function __construct($dbutil){
			$this->dbutil =  $dbutil;
		}
		
		public function getUserCalEvent($userid){
			$sql = "select ue.entryid id,entrytitle title,entryfrom start,entryto end from userentrys ue,entry e where ue.userentryid='$userid' and ue.entryid=e.entryid and e.entryfrom is not null";
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
// 				$entryfrom = date('Y-m-d H:i:s',strtotime($entry->entryfrom));
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
			return $this->dbutil->query($sql);

		}
		
	}

?>