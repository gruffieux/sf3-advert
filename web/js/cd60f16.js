;$(document).ready(function(){var n=$('div#advert_edit_categories'),e=n.find(':input').length;$('#add_category').click(function(e){e.preventDefault();return!1});if(e==0){}
else{n.children('div').each(function(){t($(this))})};function a(n){var r=n.attr('data-prototype').replace(/__name__label__/g,'Catégorie n°'+(e+1)).replace(/__name__/g,e),a=$(r);t(a);n.append(a);e++};function t(e){var n=$('<a href="#" class="btn btn-danger">Supprimer</a>');e.append(n);n.click(function(n){e.remove();n.preventDefault();return!1})}});