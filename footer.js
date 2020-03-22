(function($) {

	$(document).ready(function() {

		$('#no-location').click();
		$('h3.event-form-where').hide();
		$('div.event-form-where').hide();
		$('#mapa_iframe')
		.click(function(){
			$(this).find('iframe').toggleClass('clicked')
		})
		.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')
		});
		$('#mapa_iframe iframe')
			.click(function(){
				$(this).toggleClass('clicked')
			})
	});

})( jQuery );
