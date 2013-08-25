<?php

class JQGridFilterUtil {

	static function toSqlWhere ($filtersStr){
		if($filtersStr == null || "" == $filtersStr){
			return null;
		}
		
		$filters = json_decode($filtersStr);
		
		if($filters == null){
			return null;
		}else{
			$groupOp = $filters->groupOp;
			$rules = $filters->rules;
			if($rules == null){
				return null;
			}
			
			$where = "";
			if( count($rules) >= 1){
				$rule = $rules[0];
				$exp = JQGridFilterUtil::getExp($rule->field,$rule->op,$rule->data);
				if($exp != null){
					$where = $exp;
				}
			}

			for ($index = 1; $index < count($rules); $index++){
					
				$rule = $rules[$index];
				$exp = JQGridFilterUtil::getExp($rule->field,$rule->op,$rule->data);
				if($exp != null){
					$where = $where." $groupOp ".$exp;
				}
			}
			
			return $where;
		}
	}
	
	static function getExp($field,$op,$val){
		if($op == "cn"){
			return "$field like '%$val%'";
		}else if("eq" == $op){
			return "$field = '%$val%'";
		}else if("ne" == $op){
			return "$field != '%$val%'";
		}else{
			return null;
		}
	}
}
