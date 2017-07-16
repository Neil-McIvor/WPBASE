
jQuery(document).ready(function( $ ) {
	
	 //console.log($);
	$(document).foundation();


  $('#background-image-slider').slick({
    //setting-name: setting-value
	  slidesToShow: 1,
	  infinite: true,
	  autoplay: true,
	  autoplaySpeed: 9000,
	  arrows: false,
	  dots: false,
      fade: true,
	  speed: 1250,
  });



// RESPONSIVE NAV
//Get Values
	var primaryNavWidth = $("#primary-menu").width();
	console.log("Primary Menu Width = " + primaryNavWidth);
	
	var primaryNavItemWidth = $("#primary-menu ul li").innerWidth();
	console.log("Primary Menu Item = " + primaryNavItemWidth);
	
	var primaryNavChildren = ($("#primary-menu ul").children().length);
	console.log("Primary Menu Children = " + primaryNavChildren);

//Calculate
	 var navWidth = primaryNavWidth;
	 var itemWidth = primaryNavItemWidth;
	 var navChildren = primaryNavChildren;
	 
	 var actualWidth = (navChildren * itemWidth);
	 console.log( "Nav actual width = " + actualWidth); 
	 
	if(actualWidth < navWidth) {
		//do something
		console.log("it has room");		
	}
	else {
		console.log("its too wide");
		$( "#primary-menu" ).addClass( "mobile-nav" );
	}
	
//Modify	
	var tooWide = $( "#primary-menu" ).hasClass( "mobile-nav" );

	if( tooWide ) {
	    //do something
		$( "#primary-menu" ).css('display' , 'none');
		$( "#toggle-mobile-menu" ).css('display' , 'block');
	}
	else {
	    //otherwise do this
		$( "#primary-menu" ).removeClass( "mobile-nav" );
		$( "#primary-menu" ).css('display' , 'block');
		$( "#toggle-mobile-menu" ).css('display' , 'none');
	}
	
	$( "#toggle-mobile-menu" ).click(function() {
	  $( "#mobile-menu" ).toggle( "slow", function() {
	  });
	});
	
var windowWidth = $(window).width();
console.log("Window width = " + windowWidth);

jQuery(window).on('resize', function(){

// RESPONSIVE NAV
 var windowWidth = $(window).width();
 console.log("Window width = " + windowWidth);
 
 if (windowWidth <= 1024 ){
	 console.log("Window width is less than 1024px");
		$( "#primary-menu" ).css('display' , 'none');
		$( "#toggle-mobile-menu" ).css('display' , 'block'); 
 }
 else {
	 console.log("Window width is greater than 1024px");
		$( "#primary-menu" ).css('display' , 'block');
		$( "#toggle-mobile-menu" ).css('display' , 'none');	 
 }
	
}); 



});

jQuery(window).on('resize', function(){

	console.log("Document Changed");   

}); 
