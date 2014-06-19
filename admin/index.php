<?php
	
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	$title = "Mon espace d'administration";
	include_once('includes/header.php');
?>
	Mon administration	

	<h3><br>Bonjour <?php echo $_SESSION['user'];?></h3>
	<?php include_once('includes/footer.php');?>
		
