<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Royal Real Investment')">
        <meta name="author" content="@yield('meta_author', 'greysoft')">
        @yield('meta')


        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="images/favicon.png">
		
		<!-- Vendor Bundle CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/vendor.bundle.css')}}" >
		<!-- Custom styles for this template -->
		<link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('front/assets/css/theme-cyan.css')}}" rel="stylesheet">
        
    </head>

    <body>

              
                @yield('content')
                @include('frontend.includes.footer')
           


       
       	<!-- Preloader !remove please if you do not want -->
		<!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
		<!-- Preloader End -->
		
		<!-- JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		
		<script src="{{('front/assets/js/jquery.bundle.js')}}"></script>
		<script src="{{('front/assets/js/script.js')}}"></script>
		<script>
		  (function(b,i,t,C,O,I,N) {
			window.addEventListener('load',function() {
			  if(b.getElementById(C))return;
			  I=b.createElement(i),N=b.getElementsByTagName(i)[0];
			  I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
			},false)
		  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
		</script>

        @include('includes.partials.ga')
    </body>
</html>
