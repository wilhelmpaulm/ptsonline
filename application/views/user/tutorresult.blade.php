<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PTS Online {{Auth::user()->id_number}}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

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
                    <a class="brand" href="{{URL::to('user')}}">{{Auth::user()->id_number}}</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li><a href="{{URL::to('user/statistics')}}">Statistics</a></li>
                            <li><a href="{{URL::to('user/manage')}}">Manage</a></li>
                            <li><a href="{{URL::to('user/logout')}}">logout</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->

            <!-- Example row of columns -->
            <div class="row">
                <ul class="thumbnails">
                    @foreach($users as $user)
                    <li class="span3">
                        <a class="thumbnail" href='{{URL::to("tutors/".$user->id_number)}}' style="">
                            <?=
                            Laravel\HTML::image("img/profile/" . $user->picture, $user->id_number, array(
                                'style' => 'width:200px',
                                'class' => 'img-circle ',
                            ))
                            ?>
                        </a>
                        <h3>{{$user->last_name}}, {{$user->first_name}}</h3>
                    </li>
                    @endforeach
                </ul>

                <hr>
                <footer>
                                   <p>&copy; PTSOnline 2013</p>

                </footer>
            </div>



        </div>

        <!-- /container -->

        <!-- Le javascript
        ================================================== -->


        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}
    </body>
</html>