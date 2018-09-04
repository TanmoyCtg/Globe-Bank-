<?php 
	function error_404(){
		header($_SERVER['SERVER_PROTOCOL'] ." 404 NOT FOUND");
		exit();
	}
	function error_500(){
		header($_SERVER['SERVER_PROTOCOL'] ." 500 NOT FOUND");
		exit();
	}	
	

	function redirect_to($location) {  
		header('Location: ' . $location);
		exit();
	}
	function u($string=""){return urlencode($string);}
	
	function raw_u ($string=""){ return rawurldecode($string); }
	
	function h($string="") { return htmlspecialchars($string); }

	function is_post_request(){ return $_SERVER["REQUEST_METHOD"] == 'POST'; }
	
	function is_get_request(){ return $_SERVER["REQUEST_METHOD"] == 'GET'; }
	
	function url_for($script_path){
		if ($script_path[0] != '/'){
			$script_path = "/" . $script_path;
		}
		return WWW_ROOT . $script_path;
	}

function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"errors\">";
    $output .= "Please fix the following errors:";
    $output .= "<ul>";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}

?>