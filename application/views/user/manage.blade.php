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
                                                        <li><a href="{{URL::to('index')}}">Home</a></li>

                            <li><a href="{{URL::to('user/statistics')}}">Statistics</a></li>
                            <li class="active"><a href="{{URL::to('user/manage')}}">Manage</a></li>
                            <li><a href="{{URL::to('user/logout')}}">logout</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit" style="color: white; background-color: #c43c35">
                <h1 class="text-center">{ Control Room }</h1>
            </div>
                <div class="row text-center">
                    <div class="span3"><a href="{{URL::to('user/manage/schedule')}}"><button class="btn btn-success" style="width: 150px;height: 150px"><span class="lead">Schedule</span></button></a></div>
                    <div class="span3"><a href="{{URL::to('user/manage/specializations')}}"><button class="btn btn-warning" style="width: 150px;height: 150px"><span class="lead">Specialization</span></button></a></div>
                    <div class="span3"><a href="{{URL::to('user/manage/tutorial')}}"><button class="btn btn-inverse" style="width: 150px;height: 150px"><span class="lead">Tutorial</span></button></a></div>
                    <div class="span3"><a href="{{URL::to('user/manage/profile')}}"><button class="btn btn-danger" style="width: 150px;height: 150px"><span class="lead">Profile</span></button></a></div>
                </div>
             <hr>
            <footer>
                              <p>&copy; PTSOnline 2013</p>

            </footer>
        </div>
            <!-- Example row of columns -->
            <div class="row">
                
            </div>

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}
    </body>
</html>