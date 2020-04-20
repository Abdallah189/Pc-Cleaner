var tdMobile = false;
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('<link rel="stylesheet" type="text/css" href="css/responsive-style.css" >').appendTo("head");
	tdMobile = true;
}