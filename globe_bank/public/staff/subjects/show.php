<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : '1';
	// $id = $_GET['id'] ?? '1';
	echo htmlspecialchars($id);
	
 ?>