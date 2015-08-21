<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Ensue | Partners for life</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<script src="{{ asset("assets/scripts/vendor.js") }}" type="text/javascript"></script>
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor.css") }}" />
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
	<link rel="stylesheet" href="{{ asset("css/app.css") }}" />
	<link rel="shortcut icon" href="{{ asset("img/favicon.ico") }}" />


	<!--For jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>

	$(document).ready(function()
	 {

		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: 
			{
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: 
			{
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) 
				{
					return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
				}
			}
		});
	});


</script>
<!--jquery ends-->
	
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>

	@yield('scripts')
</body>
</html>