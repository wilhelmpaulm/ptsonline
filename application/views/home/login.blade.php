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
            body { padding-top: 60px; padding-bottom: 40px; background-image:url('http://localhost/PTS1/img/bg/escheresque.png')}
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
                            <li class="active"><a href="{{URL::to('login')}}">Login</a></li>
                            <li><a href="{{URL::to('signup')}}">Sign Up</a></li>
                            <li><a href="{{URL::to('tutors')}}">Tutors</a></li>
                            <li><a href="{{URL::to('events')}}">Events</a></li>
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            
             <div class="hero-unit text-center" style="background-color: lightslategray">
                        <hr>
                        <h1 class="text-center" style="color: white">{ Log In }</h1>
                        <hr>
                    <form class="form-horizontal" action="login" method="POST">
                        <fieldset style="color: white">
                                <label class="right lead" for="input01">Username</label>
                                    <input type="text" class="input-xlarge" id="input01" name="username" required="">
                                <label class="right lead" for="input02">Password</label>
                                    <input type="password" class="input-xlarge" id="input02" name="password" required="">
<br>
<br>
                                <button type="submit" class="btn btn-large">Beam up, Scotty!</button>
                        </fieldset>
                    </form>
		</div>

            <div class="row">
                <div class="span3">

                </div>
                
                <div class="span4">

                </div>
            </div>

           
        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}

    </body>
</html>