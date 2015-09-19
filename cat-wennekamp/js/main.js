$(function(){

	console.log('hello!');

	// assign .current_page_item to 'blog' nav item on single.php

	if ( $('body').hasClass('single') ) {
		$('.page-item-406').addClass('current_page_item')
	}

	// blog filter

	$('.filter_button').on('click', function(){
		if ( !$(this).attr('id') ) {

			var dataTarget = $(this).attr('data-target'),
				activeButton = $('.filter_button.active')

			$('.post_thumbnail').each(function(){
				if ( $(this).hasClass(dataTarget) ) {
					$(this).show()
				} else {
					$(this).hide()
				}
			})

			activeButton.removeClass('active')

			$(this).addClass('active')

		} else {
			$('.filter_button.active').removeClass('active')
			$('.post_thumbnail').show()
		}
	})

	// mobile nav 

	$('#nav_trigger').on('click', function(){
		$('#nav').toggle()
	})

})