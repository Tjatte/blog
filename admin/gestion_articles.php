<?php
require_once('includes/authenticated.php');
		include_once('includes/actions.php');
	$title = "Mon espace d'administration";
	include_once('includes/header.php');
	
	$query = mysql_query('SELECT id_article,title, date FROM articles');
	?>
	
<h4>Gestion des articles</h4>

<div class="actions">
	<a href="add_article.php">Ajouter un article</a>
	</div>
	
<table class="articles">
	<thead>
		<th style="widht: 30px;">ID</th>
		<th style="widht: 200px">Titre</th>
		<th style="widht: 800px">Date</th>
		<th style="widht: 1000px">Actions</th>
	</thead>
	<?php 
		while ($row = mysql_fetch_assoc($query)) {
			echo '
				<tr>
					<td>' . $row['id_article'] . '</td>
					<td>' . $row['title'] . '</td>
					<td>' . $row['date'] . '</td>
					<td></td>
				</tr>
			';
		}
		?>
</table>
	<?php include_once('includes/footer.php');?>