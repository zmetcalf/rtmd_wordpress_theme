///////////////////////////////
// Functions
///////////////////////////////
function isotopeAnimationEngine(){
	if(jQuery.browser.mozilla){
		return "jquery";
	}else{
		return "css";
	}
}

$(document).ready(function(){

	///////////////////////////////
	//Project thumbs
	///////////////////////////////

	$(".project.small a").hover(
		function() {
			$(this).find('img:last').stop().fadeTo("fast", .9);
			$(this).find('img:last').attr('title','');
		},
		function() {
			$(this).find('img:last').stop().fadeTo("fast", 1);
	});

	$(".project.small a").hover(
		function() {
			$(this).find('.title').stop().fadeTo("fast", 1);
		},
		function() {
			$(this).find('.title').stop().fadeTo("fast", 0);
	});

	$('.thumbs.masonry').isotope({
	  // options
	  itemSelector : '.project.small',
	  layoutMode : 'masonry',
      animationEngine: isotopeAnimationEngine()
	});

	$(".project.small").css("opacity", "1");

	$('#filterNav a').click(function(){
		var selector = $(this).attr('data-filter');
		$('#projects .thumbs').isotope({
			filter: selector,
			hiddenStyle : {
			    opacity: 0,
			    scale : 1
			}
		});

		if ( !$(this).hasClass('selected') ) {
			$(this).parents('#filterNav').find('.selected').removeClass('selected');
			$(this).addClass('selected');
		}

		return false;
	});

	///////////////////////////////
	//Lightbox
	///////////////////////////////

	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false,
		deeplinking: false
	});

	///////////////////////////////
	//Social Links
	///////////////////////////////

	$("#socialLinks a").hover(
		function() {
			$(this).stop().fadeTo("fast", 1);
		},
		function() {
			$(this).stop().fadeTo("fast", .5);
	});



});
