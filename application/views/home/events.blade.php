<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PTS Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?= URL::base().'/img/pts/favicon.ico'?>">

        <!-- Le styles -->
        {{HTML::style('css/bootstrap.css') }}
        <style type="text/css">
            body { padding-top: 60px; padding-bottom: 40px; }
        </style>
        {{ HTML::style('css/bootstrap-responsive.css') }}

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->

    </head>
    <body>



        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="{{URL::to('index')}}">PTS Online</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li><a href="{{URL::to('about')}}">About</a></li>
                            <li><a href="{{URL::to('login')}}">Login</a></li>
                            <li><a href="{{URL::to('signup')}}">Sign Up</a></li>
                            <li><a href="{{URL::to('tutors')}}">Tutors</a></li>
                            <li class="active"><a href="{{URL::to('events')}}">Events</a></li>
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container" style="height: 350px">
            
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active" style="background-color: black">
                            {{HTML::image('img/events/01.jpg','', array('style' => 'height:500px;text-align: center; margin:auto;') )}}
                        </div>
                        <div class="item" style="background-color: black">
                            {{HTML::image('img/events/02.jpg','', array('style' => 'height:500px;text-align: center; margin:auto;') )}}
                        </div>
                        <div class="item " style="background-color: black">
                            {{HTML::image('img/events/03.jpg','', array('style' => 'height:500px;text-align: center; margin:auto;') )}}
                        </div>
                        <div class="item " style="background-color: black">
                            {{HTML::image('img/events/04.jpg','', array('style' => 'height:500px;text-align: center; margin:auto;') )}}
                        </div>
                        <div class="item " style="background-color: black">
                            {{HTML::image('img/events/05.jpg','', array('style' => 'height:500px;text-align: center; margin:auto;') )}}
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                </div>
           
        </div>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}

    </body>
</html>