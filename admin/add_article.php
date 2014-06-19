<?php

$title ="Ajouter un article";

require_once('includes/authenticated.php');
include_once ('includes/actions.php');
include_once('includes/header.php');
?>

<h2>Ajouter un article</h2>

<form  class="add-article" action="add_article.php" method="post">
	<input type="hidden" name="action" value="add_article"/>
	<fieldset class="fields">
		<div class="row">
			<label for='title'>Title</label>
			<input type='text' name="title" value="<?php
				if (isset($_POST['title'])){
					echo $_POST['title'];
				}
			?>"/>
			
			<?php  
				if (isset($messages) && isset($messages['title'])) {
					echo '<div class="error">' . $messages['title'] . '</div>';
				}
			?>
		</div>
		
		<div class="row">
		<label for='text'>Text</label>
		<textarea name="text"><?php
				if (isset($_POST['text'])){
					echo $_POST['text']; 
				}
			?></textarea>
			
			<?php  
				if (isset($messages) && isset($messages['text'])) {
					echo '<div class="error">' . $messages['text'] . '</div>';
				}
			?>
		</div>	
		
	</fieldset>
	
	<fieldset class="actions">
		<button buton="submit">Enregistrer</button>
	</fieldset>
</form>

<?php include_once('includes/footer.php'); ?>