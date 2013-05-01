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
                            <li><a href="{{URL::to('user/manage')}}">Manage</a></li>
                            <li ><a href="{{URL::to('user/logout')}}">logout</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit" style="color: white; background-color: #7aba7b">
                <h1 class="text-center">{ {{HTML::image('img/profile/'.Auth::user()->picture,"",array( "style" => "width:100px", "class" => "img-circle"))}}  {{Auth::user()->last_name}}, {{Auth::user()->first_name}} }</h1>
            </div>
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td>Last Name</td>
                                <td>{{Auth::user()->last_name}}</td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td>{{Auth::user()->first_name}}</td>
                            </tr>
                            <tr>
                                <td>ID Number</td>
                                <td>{{Auth::user()->id_number}}</td>
                            </tr>
                            <tr>
                                <td>Degree</td>
                                <td>{{Auth::user()->degree}}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="span4">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Specializations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userspecializations as $userspecialization)
                            <tr>
                                <td>{{$userspecialization->code}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="span4">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Schedule</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userschedules as $userschedule)
                            <tr>
                                <td>{{$userschedule->day}} {{$userschedule->time}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
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