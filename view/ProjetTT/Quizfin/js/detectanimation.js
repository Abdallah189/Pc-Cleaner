// Extend jQuery.fn with our new method
jQuery.extend( jQuery.fn, {
    // Name of our method & one argument (the parent selector)
    within: function( pSelector ) {
        // Returns a subset of items using jQuery.filter
        return this.filter(function(){
            // Return truthy/falsey based on presence in parent
            return $(this).closest( pSelector ).length;
        });
    }
});
function tdAnimate(tdThis, tdAnimateInstant){
	if(tdAnimateInstant === undefined){
		tdAnimateInstant = false;
	}
	if(!tdMobile){
		tdAnimateInstant = true;
	}
		setTimeout(function(){
			if($(tdThis).visible(tdAnimateInstant)){
					var tdAnim = $(tdThis).attr("data-animation");
					var tdAnimDelay = parseInt($(tdThis).attr("data-animation-delay"));
					if(!$.isNumeric(tdAnimDelay) || tdAnimDelay < 0){
						tdAnimDelay = 0;
					}
					var tdAnimElem = $(tdThis);
					setTimeout(function(){
						tdAnimElem.css("opacity","1");
						tdAnimElem.addClass(tdAnim+" animated");
						tdAnimElem.removeAttr("data-animation");
					},tdAnimDelay);
			};
		},500);
};

function tdAnimateStart(){
	$(document).ready(function(){
		$("[data-animation]").css("opacity","0");
		$(".active [data-animation]").each(function(){
			tdAnimate(this,$(this).attr('data-animation-instant'));
		});
		if(!tdMobile){
			$(".active").scroll(function(){
				$(".active [data-animation]").each(function(){
					tdAnimate(this,$(this).attr('data-animation-instant'));
				});
			});
		}else{
			$('.td-sheets-container').scroll(function(){
				$(".active [data-animation]").each(function(){
					tdAnimate(this);
				});
			});
		}
	});
};