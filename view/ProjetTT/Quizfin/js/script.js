if(!tdMobile){
	//set up
	var direction = "X"; // X for vertical spinning, Y for horizontal spinning
	var tdSheetHeight = 80; // Height of sheets (measured in %)
	var tdSheetWidth = 80; // Width of sheets (measured in %)
	var tdSheetCorner = 10; // Corner's curves
	var tdSheetDist = 5; // Gap between sheets union (Measured in window's height
	var keyboardNav = true; //If set to TRUE, UP and DOWN arrows of the keyboard will switch between Sheets instead of scrolling the current page
	var rotDirection = -1;

	//menu
	var position = 1;

	$(".td-menu").delegate('div', 'click', function () {
		var nSheet = $(this).index()+1;
		if(nSheet !== position){
			Ps.destroy(container);
			$("#scrollbar-container").attr("id", "");
			if(nSheet > position){
				if((nSheet - position)<=(nSheets - nSheet + position)){
					rotationIndex = rotationIndex + (nSheet - position);
					position = nSheet;
				}else{
					rotationIndex = rotationIndex - (nSheets - nSheet + position);
					position = nSheet;
				}
			}else{
				if((position - nSheet)<=(nSheets - position + nSheet)){
					rotationIndex = rotationIndex + (nSheet - position);
					position = nSheet;
				}else{
					rotationIndex = rotationIndex + (nSheets - position + nSheet);
					position = nSheet;
				}
			}
					
			$(".td-menu-item.active").removeClass("active");
			$(".td-menu-item:nth-child("+nSheet+")").toggleClass("active");
			$(".td-sheet").removeClass("active");
			$(".td-sheets-container .td-sheet:nth-child("+nSheet+")").addClass("active");
			$(".td-sheets-container .td-sheet:nth-child("+nSheet+")").attr("id", "scrollbar-container");
			$(".td-sheets-container").removeClass (function (index, css) {
				return (css.match (/(^|\s)td-sheet-active-\S+/g) || []).join(' ');
			});
			$(".td-sheets-container").addClass("td-sheet-active-"+nSheet);
			$(".td-sheet.active").removeClass("active");
			$(".td-sheet:nth-child("+nSheet+")").addClass("active");
			$(".td-sheets-container .td-sheet:nth-child("+nSheet+")").addClass("active");
			for(i=0;i<nSheets;i++){
				$(".td-sheet:nth-child("+(i+1)+")").css("transform", "rotate"+direction+"("+(angle*(i-rotationIndex)*(rotDirection))+"deg)");
			}
			container = document.getElementById('scrollbar-container');
			Ps.initialize(container,{
				suppressScrollX: true
			});
			tdAnimateStart();
		}
	});

	// keyboard navigation
	$("body").keydown(function(e) {
	  if(e.keyCode == 38 || e.keyCode == 37 && keyboardNav) { // up
		if(position == 1){
			$(".td-menu-item:nth-child("+nSheets+")").click();
		}else{
			$(".td-menu-item:nth-child("+(position-1)+")").click();
		}
	  }else if(e.keyCode == 40 || e.keyCode == 39 && keyboardNav) { // down
		if(position == nSheets){
			$(".td-menu-item:nth-child(1)").click();
		}else{
			$(".td-menu-item:nth-child("+(position+1)+")").click();
		}
	  }
	});

	// starting
	var nSheets = $(".td-sheets-container .td-sheet").length;
	var angle = 360/nSheets;
	var rotationIndex = 0;

	var tdTanAngle = Math.abs(Math.tan(((((nSheets-2)*180)/nSheets)/2)*(Math.PI/180)));
	if(tdSheetHeight>100){
		tdSheetHeight = 100;
	}
	if(tdSheetWidth>100){
		tdSheetWidth = 100;
	}
	$('.td-sheet').css({
		'border-radius':tdSheetCorner,
		'top':((100-tdSheetHeight)/2)+'vh',
		'left':((100-tdSheetWidth)/2)+'vw',
		'height': tdSheetHeight+'vh',
		'width': tdSheetWidth+'vw'
	});

	if(nSheets !== 2){
		if(direction == "X"){
			$('.td-sheet').css('transform-origin','center center '+(-((tdSheetHeight/2)*tdTanAngle)-tdSheetDist)+'vh');
		}else{
			$('.td-sheet').css('transform-origin','center center '+(-((tdSheetWidth/2)*tdTanAngle)-tdSheetDist)+'vw');
		}
	}else{
		$('.td-sheet').css('transform-origin','center center '+(tdSheetDist+5)+'vh');
	}

	for(i=0;i<nSheets;i++){
		var sheetIcon = $(".td-sheet:nth-child("+(i+1)+") .td-sheet-icon").html();
		var sheetTitle = $(".td-sheet:nth-child("+(i+1)+") .td-sheet-title").html();
		var hasTitle = "";
		if(sheetIcon == undefined){
			sheetIcon = "";
		}
		if(sheetTitle == undefined){
			sheetTitle = "";
		}else{
			hasTitle = "td-tooltip";
			sheetTitle = "<div class='td-tooltiptext'>"+sheetTitle+"</div>";
		}
		$(".td-menu").append("<div class='td-menu-item "+hasTitle+"'>"+sheetIcon+sheetTitle+"</div>");
		$(".td-sheet:nth-child("+(i+1)+")").css("transform", "rotate"+direction+"("+(angle*i*(rotDirection))+"deg)");
	}

	// vertical center menu
	function centerMenu(){
		var tdMenuHeight = $(".td-menu").height();
		var tdMenuTop = (window.innerHeight/2)-(tdMenuHeight/2);
		$(".td-menu").css("top", tdMenuTop);
	}

	// preloading page
	$(window).bind("load", function() {
			centerMenu();
			tdStart();
			tdAnimateStart();
			$('.td-preloading').fadeOut("slow");
	});
}else{
	$(window).bind("load", function() {
		tdStart();
		tdAnimateStart();
		$('.td-preloading').fadeOut("slow");
	});	
}

//changetext
$(document).ready(function(){
	$("[data-tdchangetext] span").css({
		'display': 'none'
	});
	$("[data-tdchangetext]").each(function(){
		tdChangeText(this, $(this).attr("data-tdchangetext"));
	});
});
function tdChangeText(tdCTParent, tdCTTime){
	var tdCTCount = 0;
	var tdCTMax = $(tdCTParent).children().length;
	tdCTTime = parseFloat(tdCTTime);
	if(!$.isNumeric(tdCTTime) || tdCTTime < 0){
		tdCTTime = 2;
	}
	$(tdCTParent).children("span:nth-child(1)").fadeIn("slow");
	tdCTCount = 2;
	setInterval(function(){
		switch(tdCTCount){
			case 1:
				$(tdCTParent).children("span:nth-child(3)").fadeOut("slow",
					function(){
						$(tdCTParent).children("span:nth-child(1)").fadeIn("slow");
						tdCTCount++;
					}
				);
				break;
			case tdCTMax:
				$(tdCTParent).children("span:nth-child("+(tdCTCount-1)+")").fadeOut("slow",
					function(){
						$(tdCTParent).children("span:nth-child("+tdCTCount+")").fadeIn("slow");
						tdCTCount = 1;
					}
				);
				break;
			default:
				$(tdCTParent).children("span:nth-child("+(tdCTCount-1)+")").fadeOut("slow",
					function(){
						$(tdCTParent).children("span:nth-child("+tdCTCount+")").fadeIn("slow");
						tdCTCount++;
					}
				);
		}
	},(tdCTTime*1000));
}

function tdStart(){
	if(!tdMobile){
		$(".td-sheet:nth-child(1)").addClass("active");
		$(".td-menu-item:nth-child(1)").addClass("active");
		$(".td-sheets-container").addClass("td-sheet-active-1");
		$(".td-sheets-container").removeClass("td-hide");
	}else{
		$(".td-sheet").addClass("active");
		$(".td-sheets-container").removeClass("td-hide");
	}
}

var container = document.getElementById('scrollbar-container');
Ps.initialize(container,{
	suppressScrollX: true
});

function tdPrevPage(){
	if(position == 1){
		$(".td-menu-item:nth-child("+nSheets+")").click();
	}else{
		$(".td-menu-item:nth-child("+(position-1)+")").click();
	}
}
function tdNextPage(){
	if(position == nSheets){
		$(".td-menu-item:nth-child(1)").click();
	}else{
		$(".td-menu-item:nth-child("+(position+1)+")").click();
	}
}