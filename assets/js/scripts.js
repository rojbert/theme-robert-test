(function($) {
    "use strict"; // Start of use strict

    // Offset for Main Navigation
    $('#main-nav').affix({
        offset: {
            top: 100
        }
    })
	
})(jQuery); // End of use strict

$(document).ready(function() {
    $(".imgLiquidFill").imgLiquid();
	
	$("#ls-header").lightSlider({
		loop:true,
		keyPress:true,
		item:1,
		slideMove:1,
		slideMargin:0,
		mode: 'fade',
		auto: true,
		speed: 2000,
		pause: 5000
	});

	
});

