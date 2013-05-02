<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PTS Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?= URL::base() . '/img/pts/favicon.ico' ?>">

        <!-- Le styles -->
        {{HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-responsive.css') }}
        <style type="text/css">
            body { padding-top: 60px; padding-bottom: 40px; background-image:url('http://localhost/PTS1/img/bg/escheresque.png')}
        </style>


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->

    </head>
    <body>



        <div class="navbar navbar-fixed-top ">
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
                            <li class="active"><a href="{{URL::to('tutors')}}">Tutors</a></li>
                            <li><a href="{{URL::to('events')}}">Events</a></li>
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="hero-unit" style="background-color: #dd514c; color: white">
                <hr>
                <h1 class="text-center">{ Our Tutors }</h1>
                <hr>
                <p class="text-center">" Here are some of our active and devoted tutors! "</p>
            </div>
            <div class="row">
                        @foreach($users as $user)
                        <div class="span3" style="height: 400px">
                            <ul class="thumbnails text-center" >
                        <li>
                            <a class="thumbnail" href="tutors/{{$user->id_number}}" style="height: 250px; width: 280px; background-image:url('http://localhost/PTS1/img/bg/p4.png')">
                                <?=
                                Laravel\HTML::image("img/profile/" . $user->picture, $user->id_number, array(
                                    'style' => 'width:200px; height:200px',
                                    'class' => 'img-circle ',
                                ))
                                ?>
                            </a>
                            <h3>{{$user->last_name}}, {{$user->first_name}}</h3>
                        </li>
                    </ul>
                </div>
                        @endforeach
            </div>
            <hr>

            <footer>
                <p>&copy; PTSOnline 2013</p>

            </footer>
        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}

    </body>
</html>