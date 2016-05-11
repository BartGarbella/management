	$('input').on('focus',function(){
		$(this).siblings('label').addClass('labelcolor');
		$(this).siblings('hr').addClass('login-line-extend');
	})
	$('input').on('focusout',function(){
		$(this).siblings('label').removeClass('labelcolor');
		$(this).siblings('hr').removeClass('login-line-extend');
	})	

	$('input').keypress(function(){
		$('.loginfailed').animate({
			height: 0,
			opacity: 0

		});
	})

	$('.nav-custom').hover(function(){
		$(this).addClass('nav-custom-fadein');
	},function(){
		$(this).removeClass('nav-custom-fadein');
	})