$(document).ready(function(){

	//scrollspy navigation
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		if(scroll > 150){
			$(".navigation").addClass("scrollspy-nav");
		}else{
			$(".navigation").removeClass("scrollspy-nav");
		}
	});



	//dropdown trigger

	$("nav.navigation ul li.dropdown-nav .dead-link").click(function(e){

		var ini = $(this).parents(".dropdown-nav");

		if(ini.hasClass("active")){
			$("nav.navigation ul li.dropdown-nav").removeClass("active");
			ini.removeClass("active");
		}else{
			$("nav.navigation ul li.dropdown-nav").removeClass("active");
			ini.addClass("active");
		}

		e.preventDefault();
	});

	// end of dropdown trigger



	// navigation on mobile trigger 

	$(".btn-navmobile").click(function(){

		//trigger navigation

		if($(this).parents(".navigation").hasClass("active")){
			$(this).parents(".navigation").removeClass("active");
		}else{
			$(this).parents(".navigation").addClass("active");
		}


		//trigger button mobile
		if($(this).hasClass("active")){
			$(this).removeClass("active");
		}else{
			$(this).addClass("active");
		}
	});

	// end of navigation on mobile trigger



	// new product hover event
	$(".new-product .row-content a").mouseenter(function(){
		$(this).addClass("active");
	});

	$(".new-product .row-content a").mouseleave(function(){
		$(this).removeClass("active");
	});
	// end of new product hover event

	// top item home hover event

	$("section.top-item.home .row-item a").mouseenter(function(){
		$(this).addClass("active");
	});

	$("section.top-item.home .row-item a").mouseleave(function(){
		$(this).removeClass("active");
	});

	// end of top item home hover
});