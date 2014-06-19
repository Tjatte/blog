<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8"/>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="style.css"/>
	<meta name="description" content="Ceci est l'espace Administration de mon blog" />	
		
	</head>
	
	<body>
	
		<header>
		
			<h1>Administration de mon blog</h1>
	
	<nav>
		<ul>
				<?php if (isset($_SESSION) && isset($_SESSION['user'])) { ?>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="gestion_articles.php">Gestion des articles</a></li>
				<li><a href="#">Choix de menu3</a></li>
				<li><a href="#">Choix de menu4</a></li>
				<li class="deconnection"><a href="?action=deconnexion">Déconnexion</a></li>
				
				<?php } ?>
		</ul>
		
		<!--fâr att provocera att nav blir bredare-->
		<div style="clear: both;"</div>
	</nav>
		</header>
		
		
		
	