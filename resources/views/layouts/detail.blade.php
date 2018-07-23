<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$post->title}}" />
    <meta property="og:description" content="{{$post->short_description}}" />
    <meta property="og:image" content="{{URL::to('/')}}/storage/cover_images/original/{{$post->cover_img}}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 

    <!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" />
		
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    @include('inc.header')
       <div class="container">
           @include('inc.messages')
           @yield('content')
       </div>
    @include('inc.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.0&appId=1933483690282855&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
