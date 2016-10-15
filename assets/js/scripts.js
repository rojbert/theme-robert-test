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
});