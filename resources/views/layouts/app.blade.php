<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Omkar Kadam | Web Designer & Developer</title>

    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon" />
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <style>
    .navbar-brand{
    	color:white !important;
    }
    .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text{
    	color:white !important; 
    }
    .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    	background-color: rgb(157, 25, 25);
    }
    .navbar-default, .panel-heading{
    	border:none !important;
    }
    #app, html{
        background: linear-gradient(to right, rgb(35, 37, 38), rgb(65, 67, 69));
    }
    .panel-body{
        background: linear-gradient(to right, rgb(35, 37, 38), rgb(65, 67, 69));
        color:white;
    }
    .panel-default>.panel-heading{
    	background:linear-gradient(to right, rgb(157, 25, 25), rgb(72, 0, 72)) ;
    	color:white;
    }
    .panel{
	border:none;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style=" background:linear-gradient(to right, rgb(157, 25, 25), rgb(72, 0, 72)) ; ">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" >
                        Omkar Kadam
                    </a>
                    <a class="navbar-brand" >
                       
                    </a> 
                    <a class="navbar-brand" href="home" >
                        About
                    </a>
                    <a class="navbar-brand" href="/work" >
                        Work
                    </a>
                    <a class="navbar-brand" href="/contact">
                        Contact
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                                     
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest()) 
                            <li><a>Hello Guest</a></li> 
                        @else
                            <li class="dropdown"> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
