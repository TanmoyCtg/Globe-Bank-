<?php 
	function error_404(){
		header($_SERVER['SERVER_PROTOCOL'] ." 404 NOT FOUND");
		exit();
	}
	function error_500(){
		header($_SERVER['SERVER_PROTOCOL'] ." 500 NOT FOUND");
		exit();
	}	
	function u($string=""){return urlencode($string);}
	function raw_u ($string=""){ return rawurldecode($string);}
	
	function url_for($script_path){
		if ($script_path[0] != '/'){
			$script_path = "/" . $script_path;
		}
		return WWW_ROOT . $script_path;
	}
	function is_post_request(){
		return $_SERVER["REQUEST_METHOD"] == 'POST';
	}
	function is_get_request(){
		return $_SERVER["REQUEST_METHOD"] == 'GET';
	}
?>