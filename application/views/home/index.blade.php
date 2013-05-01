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
                            <li><a href="{{URL::to('events')}}">Events</a></li>
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>


        <div class="container" style="height: 350px">
            

                <div id="myCarousel" class="carousel slide" >
                    <!-- Carousel items -->
                    <div class="carousel-inner" >
                        <div class="active item" > 
                            {{HTML::image('img/pts/b1.jpg','', array('style' => 'text-align: center; margin:auto;') )}}
                            <div class="carousel-caption" style="text-align: center">
                                <h4>Welcome froshies!</h4>
                                <p>Peer Tutors Society is ready to help you in your programming subjects!</p>
                            </div>
                        </div>
                        <div class="item"> 
                            {{HTML::image('img/pts/b8.jpg','', array('style' => 'text-align: center; margin:auto;') )}}
                            <div class="carousel-caption" style="text-align: center">
                                <h4>ANIMO LASALLE</h4>
                                <p>
                                    Because we're from De La Salle University Manila! 
                                </p>
                            </div>
                        </div>
                        <div class="item"> 
                            {{HTML::image('img/pts/b4.jpg','', array('style' => 'text-align: center; margin:auto;') )}}
                            <div class="carousel-caption" style="text-align: center">
                                <h4>Ready, Set, Code!</h4>
                                <p >
                                    Sign up and get started on learning how to program!
                                </p>
                            </div>
                        </div>
                        <div class="item"> 
                            {{HTML::image('img/pts/b6.jpg','', array('style' => 'text-align: center; margin:auto;') )}}
                            <div class="carousel-caption" style="text-align: center">
                                <h4>Time to give back</h4>
                                <p >
                                    Why just be a tutee when you can also be a tutor!
                                </p>
                            </div>
                        </div>
                        <div class="item"> 
                            {{HTML::image('img/pts/b5.jpg','', array('style' => 'text-align: center; margin:auto;') )}}
                            <div class="carousel-caption" style="text-align: center">
                                <h4>Contact us!</h4>
                                <p >
                                    Curious about what we do or what we can do for you? Give us a call or a tweet! 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>


           
        </div>


        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}

    </body>
</html>