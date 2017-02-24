(function($){

// Vid hover på meny //

 	// $("#menu-nav-bar > li:nth-last-child(2)").hover(function(){
 	// 	$(".sub-menu").slideToggle();
 	// 	//$(this).children(".sub-menu").slideToggle();
 	// });

 	$("#menu-nav-bar > li:first-of-type").hover(function(){
 		$(".sub-menu").slideToggle(200);
 	});


//------------------------------------------------------------------------------------//
//      Vid klick på meny-ikonen i header 	//
//-----------------------------------------------------------------------------------//

	$(".menu-icon").click(function(){

	// 	// Visa Responsiva menyn

		$(".responsive-menu").slideToggle("slow");

	// 	// Toggla meny- och stäng-ikonen

		$(this).children().toggleClass("fa-bars fa-times");

	//  Lägg till en fade sektion och Stäng när menyikonen trycks in.

		$("#fade").slideToggle("slow");
	
	});

	// Stäng fade, dölja menyn och byta ikonen.

	$("#fade").click(function(){
		$("#fade").slideUp("slow");
		$(".responsive-menu").slideUp("slow");
		$(".menu-icon").children().toggleClass("fa-bars fa-times");
	});



//---------------------------------------------------------------------//
//	Vid klick på Sök ikonen 	//
//--------------------------------------------------------------------//

 // Visa sökform

	$(".fa-search").click(function(){

		$("#search-fade").slideToggle("slow");
		$("#modal").slideToggle("slow");
		$("#modal button").show();
	});

// Gömma sök form

	$("#modal button").click(function(){

		$("#search-fade").slideToggle("slow");
		$("#modal").slideToggle("slow");
		$("this").hide();
	});



//---------------------------------------------------------------------//
//	Vid klick på top-button         //
//-------------------------------------------------------------------//
	
	
	var scrollButton = function() {
	var _scroll = $(window).scrollTop();

		if ( _scroll > 270) {
				$('.top-button').show();
			} 
			else {
				$('.top-button').hide();
			}
		}
	
		scrollButton();
		$(window).scroll(scrollButton);

	$(".top-button").click(function() {
		$("html, body").animate({
			scrollTop: 0
		}, 1200);
	});


//----------------------------------------------//
//	Slideshow 	     //
//---------------------------------------------//


	var format = $('#owl').data('format');
	//console.log ( typeof(format) );
	var item;

	if ( format == true ) {
		item = false;
	}
	else {
		item = true;
	}

	$('#owl').owlCarousel({	
		singleItem: item,	
	});


	$('.slideshow').each(function(){

		var autoplay = $(this).data('autoplay');
		var interval = $(this).data('interval');
		var a;

		console.log(autoplay);

		if ( autoplay == 1 && interval > 0 ) {
			a = interval;
		}
		else {
			a = false;
		}

		$(this).owlCarousel({
			singleItem: true,
			autoPlay: a,
			slideSpeed: 300,
			paginationSpeed: 400,
			navigation : true, // Show next and prev buttons
		});
	
	});



//----------------------------------------//
//	Gallery	//
//--------------------------------------//

	// Förstora en bild, lägg till en fade, en modal och en knapp

	$(".photo").click(function(){
		var src = $(this).data("url");

		$("#gallery-modal img").attr("src", src);
		$("#gallery-fade").slideToggle();
		$("#gallery-modal").slideToggle();
		$("#gallery-modal img").show();
		$("#modal button").show();
	});

	//  stänga bilden, fade, modal & knappen

	$("#gallery-fade").click(function(){

		$(this).slideToggle();
		$("#gallery-modal").slideToggle();
		$("#gallery-modal img").slideToggle();
	});

	$("#gallery-modal").click(function(){

		$(this).slideToggle();
		$("#gallery-fade").slideToggle();
		$("#gallery-modal img").slideToggle();
	});




//-------------------------------------------------------//
//		Extras		//
//-----------------------------------------------------//

	// 404.php image transition & Columns sektion images
	
	$(".img-zoom").hover(function(){
		$(this).addClass('transition');

	}, function(){
		$(this).removeClass('transition')
	});
	

})(jQuery);





