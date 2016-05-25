$document.ready(function(){

	var alto = $(window).height();
	ajustes();
	function ajustes(){
		$("#body").css({"margin-top": alto - 80 + "px"});
	}

});