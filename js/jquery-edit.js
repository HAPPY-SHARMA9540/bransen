$(document).ready(function(){
			
	$(window).scroll(function(){

		if($(window).scrollTop() > 40)
		{
			$(".top_arrow").fadeIn();
			$(".fix_nav").css("position", "fixed");
			$(".s_icon p").css("color", "#000");
			$(".s_icon p .fa").css("color", "#000");
			$("#cssmenu>ul>li>a").css("color" , "#000");
			$(".fix_nav").css("top", 0);
			$(".fix_nav").css("z-index", "9999");
			$(".fix_nav").css("background-color", "#fff");
			$(".fix_nav").css("box-shadow", "rgb(0 0 0 / 8%) 0px 0.125rem 0.25rem");
			$("#logo").attr("src", "images/logo.png");
			$(".book_now a").css("border","1px solid #000");
			$(".book_now a").css("color","#000");
			$("#cssmenu>ul>li.active>a").css("color" ,"#00234a");
			$("#cssmenu>ul>li>a:hover").css("color","#00234a");
			$("#cssmenu>ul>li.has-sub>a:before").css("background","#000");
			$(".fix_nav").addClass("scrolled");
			$(".book_now a").addClass("scrolled-btn");
			
		}
		else
		{
			$(".top_arrow").fadeOut();
			$(".fix_nav").css("position", "absolute");
			$(".fix_nav").css("background-color", "transparent");
			$(".fix_nav").css("box-shadow", "none");
			$(".book_now a").css("border","1px solid #fff")
			$("#cssmenu>ul>li>a").css("color" , "#fff");
			$(".logo2 .fa").css("color", "#000");
			$(".s_icon p").css("color", "#fff");
			$(".s_icon p .fa").css("color", "#fff");
			$("#logo").attr("src", "images/logo2.png");
			$(".book_now a").css("color","#fff");
			$("#cssmenu>ul>li.active>a").css("color" ,"#fff");
			$("#cssmenu>ul>li>a:hover").css("color","#fff");
			$("#cssmenu>ul>li.has-sub>a:before").css("background","#fff");
			$(".fix_nav").removeClass("scrolled");
			$(".book_now a").removeClass("scrolled-btn");
	}
	});

	//////////////////////////////////////
	
	$(".top_arrow").click(function(){
		$("body,html").animate({
			"scrollTop":0
		});
	});

	
});
