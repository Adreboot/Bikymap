(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	
	fullHeight();

	$('#sidebarCollapse').on('click', function () {

		if($('#dropdown-iti-content').attr('class') == 'iti-content active'){
			$('#dropdown-iti-content').toggleClass('active');
		}

		$('#sidebar').toggleClass('active');

	});

	$('#dropdown-itineraire').on('click', function () {

		if($('#sidebar').attr('class') == 'active'){
			$('#sidebar').toggleClass('active');
		}

		$('#dropdown-iti-content').toggleClass('active');
		
	});

})(jQuery);

