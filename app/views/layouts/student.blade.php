<!DOCTYPE html>
<html lang="en">
<head>
	@yield('html_header')

	<!-- standard icon  -->
	<link rel="shortcut icon" href="/icons/favicon.ico">
	<!-- icon for retina ipad -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/icons/apple-touch-icon-144-precomposed.png">
	<!-- icon for retina -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/icons/apple-touch-icon-114-precomposed.png">
	<!-- icon for ipad -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/icons/apple-touch-icon-72-precomposed.png">
	<!-- icon for iphone, ipod touch, android -->
	<link rel="apple-touch-icon-precomposed" href="/icons/apple-touch-icon-57-precomposed.png">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/datepicker.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">
     

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::to('/h')}}"><img src="/images/logo.png" alt="iRun4Life" class="logo" /></a>
        </div>
       
      <div id="navbar" class="navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
          {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                          {{--<li><a href="#">Action</a></li>--}}
                          {{--<li><a href="#">Another action</a></li>--}}
                          {{--<li><a href="#">Something else here</a></li>--}}
                          {{--<li class="divider"></li>--}}
                          {{--<li class="dropdown-header">Nav header</li>--}}
                          {{--<li><a href="#">Separated link</a></li>--}}
                          {{--<li><a href="#">One more separated link</a></li>--}}
                        {{--</ul>--}}
                      {{--</li>--}}
            <li><a href="{{URL::to('/h')}}">Log Out</a></li>
            {{--<li><a href="#about">About</a></li>--}}
            {{--<li><a href="#contact">Contact</a></li>--}}
            {{--<li class="dropdown">--}}
              {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>--}}
              {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="#">Action</a></li>--}}
                {{--<li><a href="#">Another action</a></li>--}}
                {{--<li><a href="#">Something else here</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li class="dropdown-header">Nav header</li>--}}
                {{--<li><a href="#">Separated link</a></li>--}}
                {{--<li><a href="#">One more separated link</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
          </ul>
        </div>   <!--/.nav-collapse -->
      </div>
    </nav>
        @include('flash::message')
		@yield('content')


<div class="footer">
      <div class="container">
        <p class="text-muted">&copy; 2014, iRun4Life.  </p>
      </div>
   </div>

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/irun.js"></script>
    <script>$('#flash-overlay-modal').modal();</script>


    @yield('scripts')
</body>
</html>