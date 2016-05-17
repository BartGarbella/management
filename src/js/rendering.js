	$('.resource-item').click(function render() {
		// var file = $(this).attr('value');
		// var type = 'render';
		// load(type,file);
		// $('#content').html('');
		// $('#content').addClass('loader');
	});




	function load(type,payload) {
		var dataObject = {};
		dataObject[type] = payload;

		// $('.navbutton').parent().removeClass('active');
		// $(this).parent().addClass('active');

		$.ajax({
			type: "POST",
			data: dataObject,
			url: "./include/load.php",
			success: function(data) {
				result=data;
				$('#content').removeClass('loader');
				$('#content').delay(100).html(result);
			}
		}); 
	}