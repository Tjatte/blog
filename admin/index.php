<?php
	
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	$title = "Mon espace d'administration";
	include_once('includes/header.php');
?>
	<?-- Mon administration -->

	<p><br>Bonjour <?php echo $_SESSION['user']['username'];?></p>
	
	
	<?php include_once('includes/footer.php');?>
		
