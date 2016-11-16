BASE_URL = '/~ee11239/proto/';

$(document).ready(function() {
  initMessageClosers();
});

function initMessageClosers() {
  $('.close').click(function() {
    $(this).parent().fadeOut();
  });
}


function addFav()
{
	$.ajax({
	url: "/favorites/add",
	data: {"id": articleID},
	success: function(){
	   $('a#fav')
			 .addClass('active')
			 .attr('title','Remove from favorites')
			 .unbind('click')
			 .bind('click', removeFav)
	   ;
	}
	});
}
function removeFav()
{
		$.ajax({
	  url: "/favorites/remove",
	  data: {"id": articleID},
	  success: function(){
			$('a#fav')
				 .removeClass('active')
				 .attr('title','Add as favorite')
				 .unbind('click')
				 .bind('click', addFav)
			;
	  }
	});
}

$('a#fav').bind('click', addFav);