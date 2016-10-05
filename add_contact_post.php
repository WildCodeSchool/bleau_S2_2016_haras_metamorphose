<?php
//Pour récupérer ce qui est dans le formulaire, qui est identifié par ce qui est inclus dans les []
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$message = $_POST['message'];


	// extension PDO : objet qui contient plein de fonctions
	// objet : contient toutes les méthodes de l extension PDO
	$bdd = new PDO('mysql:host=localhost;dbname=haras_contact;charset=utf8', 'root', 'root');

	//Préparation de la requête. Permet d'injecter dans la variable des données ue l'on ne connait pas encore
	// -> : pour appeler une méthode à l intérieur de notre objet, ici prepare ou execute
	// contenu car on est dans la BDD. 
	$req = $bdd->prepare('INSERT INTO contact (nom, prenom, message) VALUE (?, ?, ?)'); 
	//Execution de la requête einnsérant un tableau
	$req->execute(array($nom,$prenom,$message)); 
?>

    <div id="r">Merci de nous avoir contacté</div>
    <a href="index.php"><button id="action">Retourner à la page d'accueil</button></a>