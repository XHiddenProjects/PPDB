<?php
class PPDBLogic extends PPDB{
public static function isNumber($int){
		if(gettype($int) === "double" || gettype($int) === "integer"){
			return true;
		}else{
			return false;
		}
	}
	public static function isString($str){
		if(gettype($str) === "string"){
			return true;
		}else{
			return false;
		}
	}
	public static function isBoolean($bool){
		if(gettype($bool) === "boolean"){
			return true;
		}else{
			return false;
		}
	}
	public static function isArray($arr){
		if(gettype($arr) === "array"){
			return true;
		}else{
			return false;
		}
	}
}

?>