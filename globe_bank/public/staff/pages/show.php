<?php require_once ('../../../private/initialize.php');?>
<?php $page_title = "Show Page"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id="content">
	<div id="main-menu">
		<h1>Pages</h1>
		
		<a href="index.php">Back to List</a><br>
		<?php 

		$id = $_GET['id'];
		echo "Page id: ";
		echo htmlspecialchars($id);
?>
	</div>
</div>



<?php include(SHARED_PATH . '/staff_footer.php'); ?>