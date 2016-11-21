$(document).ready(function() {
	$('html').addClass('jQuery-fonctionne');
	///////////////////////////////////////////////////////
	////////// Ajout des médias dans les sliders //////////
	///////////////////////////////////////////////////////

	// On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
	var $container = $('div#article_medias');

	// On ajoute un lien pour ajouter une nouvelle catégorie
	var $addLink = $('<a href="#" id="add_media" class="btn btn-default">Add a new media</a>');
	$container.append($addLink);

	// On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
	$addLink.click(function(e) {
		addMedia($container);
		e.preventDefault(); // évite qu'un # apparaisse dans l'URL
	});

	// On définit un compteur pour nommer de manière unique les champs qu'on va ajouter dynamiquement
	var index = $container.find(':input').length;

	// On ajoute un premier champ automatiquement s'il n'en existe pas déjà un.
	if (index == 0) {
		addMedia($container);
	}
	// La fonction qui ajoute un formulaire Media
	function addMedia($container) {
		// Dans le contenu de l'attribut « data-prototype », on remplace :
		// - les textes "__name__label__" qu'il contient par le label du champ
		// - les textes "__name__" qu'il contient par le numéro du champ
		var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Media').replace(/__name__/g, index));

		// On ajoute au prototype un lien pour pouvoir supprimer la catégorie
		addDeleteLink($prototype);

		// On ajoute le prototype modifié à la fin de la balise <div>
		$container.append($prototype);

		// Enfin, on incrémente le compteur pour que le prochain ajout sa fesse avec un autre numéro
		++index;
	}

	// La fonction qui ajoute un lien de suppression d'une catégorie
	function addDeleteLink($prototype) {
		// Création du lien
		$deleteLink = $('<a href="#" class="btn btn-danger">Delete Media</a>');

		// Ajout du lien
		$prototype.append($deleteLink);

		// Ajout du listener sur le clic du lien
		$deleteLink.click(function(e) {
			$prototype.remove();
			e.preventDefault(); // évite qu'un # apparaisse dans l'URL
		});
	}
});