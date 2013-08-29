<?php

	class CarlendarService{
		public  $dbutil;
		
		public function __construct($dbutil){
			$this->dbutil =  $dbutil;
		}
		
		public function getUserCalEvent($userid){
			$sql = "select ue.entryid id,ue.userentryid userid,entrytitle title,entryfrom start,entryto end from userentrys ue,entry e where ue.userentryid='$userid' and ue.entryid=e.entryid"; 
			return $this->dbutil->get_results($sql);
		}
	}

?>