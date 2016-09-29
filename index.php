<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<?php
			include('navbar.html');
		?>
	</header>

	<video autoplay loop muted>
	    <source src="video/video.mp4" type='video/mp4'>
	    Video not supported.
	</video>
	

	<div class="accroche">
		<h1>Prenez le temps de vivre...<h1>
	</div>
	<div id="focus">
		<div class="tourisme show">
			<img class="focus_img" src="img/tourisme.jpg" alt="tourisme">
			<p>Tourisme</p>
		</div>
		<div class="travail show">
			<img class="focus_img" src="img/tourisme.jpg" alt="travail">
			<p>Travail</p>
		</div>
		<div class="ecologie show">
			<img class="focus_img" src="img/tourisme.jpg" alt="ecologie">
			<p>Ecologie</p>
		</div>
		<div class="accessibilite show">
			<img class="focus_img" src="img/tourisme.jpg" alt="tourisme">
			<p>Accessibilité</p>
		</div>
	</div>

	<footer></footer>


<!-- Initialisation jQuery -->
<script type="text/javascript" src="script/jquery-3.1.1.js"></script>
<script type="text/javascript" src="script/script.js"></script>
</body>
</html>