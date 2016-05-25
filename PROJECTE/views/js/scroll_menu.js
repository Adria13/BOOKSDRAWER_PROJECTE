$(document).ready(function(){


	$("#fondo").css({"height":$(window).height() + "px"});

	var flag = false;
	var scroll;


	var alto = $(window).height();
	ajustes();
	function ajustes(){
		$("section#body").css({"margin-top": alto - 80 + "px"});
		$("header").css({"margin-top": -alto + 80 + "px"});
		$("#fondo").css({"margin-top": -alto + 80 + "px"});
	}

	
	
	$(window).scroll(function(){
		scroll = $(window).scrollTop();
		if (scroll > 200){
			if(!flag){
			$("#logo").css({"margin-top":"-5px", "width": "50px", "height": "50px"});
			
			$("header").css({"background-color": "rgba(48,48,48,0.95)"});

			$("section#scroll").css({"display": "none"});
			$("section#cuadros").css({"margin-top": "250px"});
			
			}

			$("li").css({"box-shadow": "0 -3px rgba(60,175,149,.4) inset"});
			$("li").hover(function(){
				$(this).css({"box-shadow": "0 -70px rgba(60,175,149,.6) inset"});
			}, function(){
				$(this).css({"box-shadow": "0 -3px rgba(60,175,149,.6) inset"});
			});
			flag = true;
		} else{
			if(flag){
			$("#logo").css({"margin-top":"150px", "width": "300px", "height": "300px"});
			
			$("header").css({"background-color": "rgba(48,48,48,0.75)"});

			$("section#scroll").css({"display": "block"});
			$("section#cuadros").css({"margin-top": "200px"});

			$("li").css({"box-shadow": "0 -3px rgba(0,0,0,.4) inset"});
			$("li").hover(function(){
				$(this).css({"box-shadow": "0 -70px rgba(0,0,0,.6) inset"});
			}, function(){
				$(this).css({"box-shadow": "0 -3px rgba(0,0,0,.6) inset"});
			});
			flag = false;
			}
		}
	});

	$(document).scroll(function(){
		var bajar = $(this).scrollTop();
		var blur = bajar / 100;
		if (bajar < alto){
			$("#fondo").css({
				"webkit-filter": "blur(" + blur + "px)",
				"background-position": "center -" + blur * 10 + "px"
			});
		};
	});


	
});