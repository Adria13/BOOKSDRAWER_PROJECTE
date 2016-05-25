$(document).ready(function(){

	var flag = false;

	$(".busc").click(function(){
		if (!flag) {
		$("#busquedas").css({"margin-top": "70px"});
		flag = true;
	} else{
		$("#busquedas").css({"margin-top": "-200px"});
		flag = false;
	};
	})

	$(".openForm").click(function(){
		$(this).children("ul").slideToggle();
	})
	$("ul").click(function(p){
		p.stopPropagation();
	})
});