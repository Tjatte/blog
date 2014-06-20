
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
		while ($row = mysql_fetch_assoc($articles)) { ?>
				<tr>
					<td><?php echo $row['id_article']?></td>
					<td><?php echo $row['title']?></td>
					<td><?php echo $row['date']?></td>
					<td>
						<a href="edit_article.php?id_article=<?php echo $row['id_article'] ?>" >Modifier</a>
						<a href="gestion_articles.php?action=delete_article&id_article=<?php echo  $row['id_article'] ?>" >Supprimer</a>
					</td>
				</tr>
			<?php }
		?>
		
</table>