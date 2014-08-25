<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rick Bennett | Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{ HTML::style('assets/css/main.css') }}
</head>
<body>
	
	@if(Session::has('global'))
	<div class="global-alert">
		{{ Session::get('global')}}	
	</div>
	@endif

	@include('home.header')
	
	@include('home.about')
	
	@include('home.showcase')
	
	@include('home.contact')

	@include('home.footer')

	{{ HTML::script('http://code.jquery.com/jquery-2.1.1.min.js')}}
	{{ HTML::script('assets/js/functions.js') }}
</body>
</html>
