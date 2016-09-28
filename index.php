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
	<div id="index_wrapper">
		<video id="index_video" autoplay loop muted>
		    <source src="video/video.mp4" type='video/mp4'>
		    Video not supported.
		</video>
		
		<div id="menu">
			<img id="logo" src="img/logo.png" alt="logo">
		</div>
		<div id="index_corps">
			<aside id="index_social">
				<p><img class="icone-social" src="img/facebook.svg" alt="facebook"><p>
				<p><img class="icone-social" src="img/twitter.svg" alt="twitter"><p>
				<p><img class="icone-social" src="img/instagram.svg" alt="instagram"><p>
				<p><img class="icone-social" src="img/pinterest.svg" alt="pinterest"><p>
			</aside>
			<div id="index_contenu">
				<div id="index_accroche">
					<h1>Prenez le temps de vivre...<h1>
				</div>
				<div id="index_focus">
					<div class="tourisme index_show">
						<img class="focus_img" src="img/tourisme.jpg" alt="tourisme">
						<p>Tourisme</p>
					</div>
					<div class="travail index_show">
						<img class="focus_img" src="img/tourisme.jpg" alt="travail">
						<p>Travail</p>
					</div>
					<div class="ecologie index_show">
						<img class="focus_img" src="img/tourisme.jpg" alt="ecologie">
						<p>Ecologie</p>
					</div>
					<div class="accessibilite index_show">
						<img class="focus_img" src="img/tourisme.jpg" alt="tourisme">
						<p>Accessibilité</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer></footer>

	<script src="script.js"></script>

</body>
</html>