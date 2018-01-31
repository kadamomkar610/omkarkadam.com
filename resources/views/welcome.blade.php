<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Omkar Kadam | Web Designer & Developer</title> 
        <meta name="description" content="Official website of Omkar Kadam. Omkar kadam is a computer science engineer works as Web Designer and Developer from Mumbai.">
        <meta name="author" content="Omkar kadam">

        <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/example.css') }}" rel="stylesheet">

        <meta name="theme-color" content="#222" />



        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;

                background: #222; // particle

                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            .top-left {
                position: absolute;
                left: 10px;
                font-weight: 500;
                top: 18px;
                color: #ffffffbb !important;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                color: #ffffffbb !important;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
                font-weight:500;
            }

/*            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }*/
            .guest{
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase; 
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .fb , .fb:active:hover { 
                background-color: #3b5998 !important; 
                border-color: #3b5998 !important;
                color:white;
                width: 146px !important; 
            } 
            .fb:hover, .google:hover, .linkedin:hover, .cust-btn:hover{
                font-weight: bold !important;
            }
            .google , .google:active:hover {
                background-color: #dd4b39 !important;
                border-color: #dd4b39 !important;
                color:white;
                width: 146px !important;
            } 
            .linkedin{
                background-color: #0e76a8; 
                border-color: #0e76a8;
                color:white;
                width: 146px !important;
            }
            .cust-btn , .cust-btn:active:hover {
                background-color: transparent !important; 
                color:black !important; 
            }
            .cust-guest{
                color: #ffffffbb !important;
                font-weight: 500;
                font-family: Raleway,sans-serif;
            }
            .cust-margin-buttom{
                margin-bottom: 5px !important;
            }
            .content:hover{
                background: #ffffffdd !important;
            }
            .img-circle:hover {
                transform: scale(1.5,1.5);
            }

            #warning-message { display: none; }
            #wrapper { display:block; }
            @media only screen and (max-width: 768px) {
              
                @media only screen and (orientation:portrait){ 
                    #warning-message { display:none; }
                }
                @media only screen and (orientation:landscape){
                    #wrapper { display:none; }
                    #warning-message { display:block; }
                }
            }
 
        </style>
        
        
        <!-- Google Analytics code starts-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109128830-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-109128830-1');
    </script>
    <!-- Google Analytics code ends-->
    
    
    </head>
    <body>

        <div id="canvas" style="position: absolute;"></div> <!-- particle -->

        <div class="flex-center position-ref full-height" style="z-index: -10; position: static;">
            <div class="top-left"> 
                <label class="checkbox-inline">
                    <input type="checkbox" class="form-check-input" id="hideLogin" onclick="hide_show_login()">Hide Login
                </label> 
            </div>   
            @if (Route::has('login')) 
                <div class="top-right links">
                    @if (Auth::check())
                        <a class="guest" href="{{ url('/home') }}" >Home</a>
                    @else
                        <div class="cust-guest" >Hello Guest, Please login to continue.</div > 
                    @endif
                </div>
            @endif

            
            <div class="content" id="warning-message" style="color:#ffffff "><p>View this site in portrait mode to login.</p></div>
            <div class="content" id="wrapper" style="background: #ffffffbb; padding: 15px; border-radius: 20px;z-index: 20;">
                <div>
                    <img src = "{{ asset('public/ok_image.jpg') }}" class = "img-circle" style="width: 200px">
                </div> 

                <div class="title m-b-md" style="margin-bottom: 0px;">
                    Omkar Kadam
                </div> 
                
                <div class="cust-guest" style="color: black !important;">
                <b>Web Designer and Developer</b>
                </div>
                <br/>

                <div class="links cust-margin-buttom"> 
                    <a href="http://omkarkadam.com/login/facebook" class="btn btn-primary fb">Facebook Login</a>   
                </div> 
                <div class="links cust-margin-buttom"> 
                    <a href="http://omkarkadam.com/login/google" class="btn btn-primary google">Google Login</a>  
                </div> 
                <div class="links cust-margin-buttom"> 
                    <a href="http://omkarkadam.com/login/linkedin" class="btn btn-primary linkedin">Linkedin Login</a>   
                </div>  
                <div class="links">
                    <a href="{{ url('/register') }}" class="btn btn-primary cust-btn">Register</a>
                    <a href="{{ url('/login') }}" class="btn btn-primary cust-btn">Login</a> 
                </div>
            </div>
        </div>

        <script src="{{ asset('public/js/sketch.js') }}"></script>
        <script type="text/javascript">

 document.getElementsByClassName("content")[1].style.display="none !important";

            function hide_show_login() {
                var cb_hide_login = document.getElementById('hideLogin');
                if (cb_hide_login.checked) { 
                    document.getElementById("wrapper").style.opacity="0";
                    document.getElementById("wrapper").style.zIndex="-10";
                } else { 
                    document.getElementById("wrapper").style.opacity="1";
                    document.getElementById("wrapper").style.zIndex="20";
                }
            }
            
        </script>
    </body>
</html>
