$(document).ready(function(){

	//scrollspy navigation
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		if(scroll > 150){
			$(".navigation").addClass("active");
		}else{
			$(".navigation").removeClass("active");
		}
	});

	//dropdown trigger

	$("nav.navigation ul li.dropdown").click(function(e){
		if($(this).hasClass("active")){
			$("nav.navigation ul li.dropdown").removeClass("active");
			$(this).removeClass("active");
		}else{
			$("nav.navigation ul li.dropdown").removeClass("active");
			$(this).addClass("active");
		}

		e.preventDefault();
	});

	// end of dropdown trigger

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