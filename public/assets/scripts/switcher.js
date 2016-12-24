/*-----------------------------------------------------------------------------------
/* Movement of Search Icon
-----------------------------------------------------------------------------------*/

jQuery(document).ready(function($) {
	
		$("#style-switcher a").click(function(e){
			e.preventDefault();
			var div = $("#style-switcher");
			if (div.css("left") === "-280px") {
				$("#style-switcher").animate({
					left: "0px"
				}); 
			} else {
				$("#style-switcher").animate({
					left: "-280px"
				});
			}
		});

	});