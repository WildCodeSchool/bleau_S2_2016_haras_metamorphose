<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>

		<?php
		$browser = get_browser(null, true);
		if($browser['majorver']!=0 && $browser['majorver']< 46)
			echo '<link rel="stylesheet" type="text/css" href="style/style_mobile_and_old_version.css">';
		else
			echo '<link rel="stylesheet" type="text/css" href="style/style.css">';
		?>

		<script
			src="https://code.jquery.com/jquery-3.1.1.min.js"
			integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			crossorigin="anonymous"></script>
	</head>
	<body id="_index">
	<div id="index_wrapper">
		<video id="index_video" autoplay loop muted>
			<source src="video/video.mp4" type='video/mp4'>
		</video>

		<?php include "index_header.php";?>

		<div id="index_corps">
			<aside id="index_social">
				<img class="icone-social" src="img/facebook.svg" alt="facebook">
				<img class="icone-social" src="img/twitter.svg" alt="twitter">
				<img class="icone-social" src="img/instagram.svg" alt="instagram">
				<img class="icone-social" src="img/pinterest.svg" alt="pinterest">
			</aside>
			<div id="index_contenu">
				<div id="index_accroche">
					<h1>Prenez le temps de vivre...<h1>
				</div>
				<div id="index_focus">
					<div class="tourisme index_rubrique">
						<img class="index_rubrique_img" src="img/logo.png" alt="tourisme">
						<p>Tourisme</p>
					</div>
					<div class="travail index_rubrique">
						<img class="index_rubrique_img" src="img/logo.png" alt="travail">
						<p>Travail</p>
					</div>
					<div class="ecologie index_rubrique">
						<img class="index_rubrique_img" src="img/logo.png" alt="ecologie">
						<p>Ecologie</p>
					</div>
					<div class="accessibilite index_rubrique">
						<img class="index_rubrique_img" src="img/logo.png" alt="tourisme">
						<p>Accessibilité</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "index_footer.php";?>

	<script src="scripts/script.js"></script>

	</body>
</html>