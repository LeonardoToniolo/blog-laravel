<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}" type="text/css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        @yield('content')

    	<!-- Back to top -->
    	<div id="back-to-top"></div>
    	<!-- /Back to top -->

    	<!-- Preloader -->
    	<div id="preloader">
    		<div class="preloader">
    			<span></span>
    			<span></span>
    			<span></span>
    			<span></span>
    		</div>
    	</div>
    	<!-- /Preloader -->

    	<!-- jQuery Plugins -->
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

    </body>

</html>
