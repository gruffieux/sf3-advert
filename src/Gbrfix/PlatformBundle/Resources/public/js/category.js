$(document).ready(function() {
	// BUG: l'id n'est pas toujours le même si on est dans le formulaire d'ajout ou d'édition
	var $container = $('div#advert_edit_categories');
	var index = $container.find(':input').length;
	
	$('#add_category').click(function(e) {
		addCategory($container);
		e.preventDefault(); // Evite que le # apparaisse dans l'url
		return false;
	});
	
	// Ajout d'un premier bouton d'ajout ou des boutons de suppression si existe déjà
	/*if (index == 0) {
		addCategory($container);
	}
	else {
		$container.children('div').each(function() {
			addDeleteLink($(this));
		});
	}*/

	function addCategory($container) {
		alert("TODO: Ouvrir un popup vers le formulaire d'ajout de catégorie");
		/*var template = $container.attr('data-prototype')
			.replace(/__name__label__/g, 'Catégorie n°' + (index+1))
			.replace(/__name__/g, index);
			
		var $prototype = $(template);
		
		addDeleteLink($prototype);
		
		$container.append($prototype);
		
		index++;*/
	}
	
	function addDeleteLink($prototype) {
		var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');
		
		$prototype.append($deleteLink);
		
		$deleteLink.click(function(e) {
			$prototype.remove();
			
			e.preventDefault();
			return false;
		});
	}
});