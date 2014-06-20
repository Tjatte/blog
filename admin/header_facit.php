<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8"/>
		<title><?php echo $title; ?></title>
		<link type="text/css" href="style.css" media="screen" rel="stylesheet" />


<meta name="description" content="Ceci est l'espace Administration de mon blog" />
</head>




	
	//<header>
		<h1>
			Administration de mon blog
		</h1>
		<nav>
			<ul>
				<?php if (isset($_SESSION) && isset($_SESSION['user'])) { ?>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="gestion_articles.php">Gestion des articles</a></li>
				<li><a href="?action=deconnexion">Déconnexion</a></li>
				<?php } ?>
			</ul>
		</nav>
	</header>//