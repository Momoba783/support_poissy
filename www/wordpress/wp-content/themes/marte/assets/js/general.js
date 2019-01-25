// JavaScript Document
jQuery(document).ready(function() {
	
	var marteViewPortWidth = '',
		marteViewPortHeight = '';

	function marteViewport(){

		marteViewPortWidth = jQuery(window).width(),
		marteViewPortHeight = jQuery(window).outerHeight(true);	
		
		if( marteViewPortWidth > 1200 ){
			
			jQuery('.main-navigation').removeAttr('style');
			
			var marteSiteHeaderHeight = jQuery('.site-header').outerHeight();
			var marteSiteHeaderWidth = jQuery('.site-header').width();
			var marteSiteHeaderPadding = ( marteSiteHeaderWidth * 2 )/100;
			var marteMenuHeight = jQuery('.menu-container').height();
			
			var marteMenuButtonsHeight = jQuery('.site-buttons').height();
			
			var marteMenuPadding = ( marteSiteHeaderHeight - ( (marteSiteHeaderPadding * 2) + marteMenuHeight ) )/2;
			var marteMenuButtonsPadding = ( marteSiteHeaderHeight - ( (marteSiteHeaderPadding * 2) + marteMenuButtonsHeight ) )/2;
		
			
			jQuery('.menu-container').css({'padding-top':marteMenuPadding});
			jQuery('.site-buttons').css({'padding-top':marteMenuButtonsPadding});
			
			
		}else{

			jQuery('.menu-container, .site-buttons, .header-container-overlay, .site-header').removeAttr('style');

		}	
	
	}

	jQuery(window).on("resize",function(){
		
		marteViewport();
		
	});
	
	marteViewport();


	jQuery('.site-branding .menu-button').on('click', function(){
				
		if( marteViewPortWidth > 1200 ){

		}else{
			jQuery('.main-navigation').slideToggle();
		}				
		
				
	});	

		
	
});		