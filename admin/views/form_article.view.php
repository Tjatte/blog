<form class="form-article" action="" method="post">
	<input type="hidden" name="action" value="form_article"/>
	<fieldset class="fields">
		<div class="row">
			<label for='title'>Title</label>
			<input type='text' name="title" value="<?php echo $articleTitle;
			?>"/>
			
			<?php  
				if (isset($messages) && isset($messages['title'])) {
					echo '<div class="error">' . $messages['title'] . '</div>';
				}
			?>
		</div>
		
		<div class="row">
		<label for='text'>Text</label>
		<textarea name="text"><?php echo $articleText;?></textarea>
			
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