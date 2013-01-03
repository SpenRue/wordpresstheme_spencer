// Execute jQuery functions only *after* jQuery JS has loaded
$(function() {
	$('#main').hover(function() {
		$(this).addClass('highlight');
	}, function() {
		$(this).removeClass('highlight');
	});

});

$(document).keyup(function(e){
	switch(e.which) {
	case 39: // Right Arrow
		window.location = 'http://www.google.com';
		break;
	}
});