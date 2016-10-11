<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Contact</title>

		<link rel="stylesheet" type="text/css" href="style/style.css">

		<script
			src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
	</head>
<body id="template">
	<header id="_template_header">
		<?php 
			include('index_header.php'); 
		?>
	</header>

	<div class="container article">
		<div class="row">
			<h1 class="title">Nous contacter</h1>
		</div>
		<div class="row">
			<form method="POST" action="add_contact_post.php">
				<div class="form-group">
					<label for="nom">Nom</label>
					<input name="nom" type="varchar(150)" rows="1" required>
				</div>
				<br />
				<div class="form-group">
					<label for="prenom">Prénom</label>
					<input name="prenom" class="varchar(150)" rows="1" required=""></input>
				</div>
				<br />
				<div class="form-group">
					<label for="mail">Mail</label>
					<input name="mail" type="email" rows="1" required></input>
				</div>
				<br />
				<div class="form-group message">
					<label for"message">Message</label>
					<textarea name="message" class="text" rows="10" required></textarea>
				</div>
				<br />
				<button type="submit" class="btn btn-default">Nous contacter</button>
			</form>
		</div>
	</div>


	<!-- <?php // include('footer.php');?> -->