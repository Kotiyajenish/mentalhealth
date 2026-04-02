jQuery(document).ready(function ($) {

	$('.faq-question').click(function () {

		var parent = $(this).parent();
		var icon = $(this).find('span');

		// Close all
		$('.faq-item').not(parent).removeClass('active')
			.find('span').text('+');

		// Toggle current
		if (parent.hasClass('active')) {
			parent.removeClass('active');
			icon.text('+');
		} else {
			parent.addClass('active');
			icon.text('-');
		}

	});

});