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


	$('.resource-item').hover(function(){
		$(this).children('.nav-line').addClass('nav-line-extend');
	},function(){
		$(this).children('.nav-line').removeClass('nav-line-extend');
	})

	// $('.navbar-brand').click(function(){
	// 	$('.nav-custom').addClass('nav-custom-fadein');
	// })

	if ($('#username').focus()) {
		$(this).siblings('label').addClass('labelcolor');
		$(this).siblings('hr').addClass('login-line-extend');
	}



 $('#brand').click(function(){
 	$('#content').delay(100).toggleClass('col-md-10');

 })