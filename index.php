<!DOCTYPE html>
<html lang = "fr">
	<head><!--Les métadoonnées-->
		<meta charset="utf-8">
	    <title>Gabriel NOIRET</title>

	   	<link rel="stylesheet" type="text/css" href="style.css"><!-- Page CSS (style) -->
	   	<!-- <link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.min.css"> -->
	   	<meta name="viewport" content="width=device-width" />
	  	<meta name="description" content="Mom CV WEB Géomaticien Cartographe Gabriel NOIRET">
	  	<meta name="keywords" content="Géomaticien ENSG  - Géomètre">
	  	<meta name="author" content="Gabriel NOIRET"><!-- Auteur du site -->
	  	<link rel="shortcut icon" type="image/x-icon" href="Images/mini_Logo.png" /><!-- Image onglet -->
	  	<link rel="apple-touch-icon-precomposed" href="Images/mini_Logo.png" />
	  	<link rel="apple-touch-icon" href="Images/mini_Logo.png" />
	  	<link rel="apple-touch-icon" sizes="72x72" href="Images/mini_Logo.png" />
	</head>
	<body> <!--Corp de la page-->
		<div id= "menu_bas">
			<?php include 'includes/nav.php'; ?>	
		</div>

		<div id = "menu" >
			<header><?php include 'includes/header.php'; ?></header>
			<nav id="test"><?php include 'includes/nav.php'; ?></nav>
			<footer><?php include 'includes/footer.php'; ?></footer>
		</div>
		
		<div id= "page">
			<section id="Lien_1"><?php include 'includes/Lien_1.php'; ?></section>

			<section id="tp_webmap"><?php include 'includes/tp_webmap.php'; ?></section>

			<section id="Formations"><?php include 'includes/Formations.php'; ?></section>

			<section id="Diplomes"><?php include 'includes/Diplomes.php'; ?></section>

			<section id="Compétences"><?php include 'includes/Competences.php'; ?></section>

			<section id="Expériences"><?php include 'includes/Experiences.php'; ?></section>

			<section id="Autres"><?php include 'includes/Autres.php'; ?></section>
		</div>
	</body>
</html>