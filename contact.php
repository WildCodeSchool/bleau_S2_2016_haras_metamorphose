<?php 

	include('index_header.php'); 

?>

<div class="container">
	<div class="row">
		<h1 class="title">Contact</h1>
	</div>
<!-- 	<div class="row">
<! 		<?php

			$bdd // = new PDO('mysql:host=localhost;dbname=haras_contact;charset=utf8', 'root', 'root');
			// $result = $bdd->query('SELECT * FROM contact ORDER BY id DESC');
			
			// while($donnee = $result->fetch()){
			// 	echo '<div class=\"contact\'><p>' . $donnee['nom'] . '</p><p>' . $donnee['prenom'] .'</p><p>' . $donnee['message'] . '</p>';

				//Permet de libérer la mémoire en mettant fin à la requête
			// 	$result->closeCursor(); 
			//}
		?> -->
	</div>
	<div class="container">
		<div class="row">
			<h1 class="title">Nous contacter</h1>
		</div>
		<div class="row">
			<form method="POST" action="add_contact_post.php">
				<div class="form-group">
					<label>Nom</label>
					<input name="nom" type="varchar(150)" rows="1">
				</div>
				<div class="form-group">
					<label>Prénom</label>
					<input name="prenom" class="varchar(150)" rows="1"></input>
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea name="message" class="text" rows="10"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Nous contacter</button>
			</form>
		</div>
	</div>

<!-- <?php // include('footer.php');?> -->