<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PTS Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
                <link rel="shortcut icon" href="<?= URL::base().'/img/pts/favicon.ico'?>">

        <style>
            
            
        </style>
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
                            <li class="active"><a href="{{URL::to('contact')}}">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit" style="background-color: #72ADD4; color: white">
                <hr>
                <h1 class="text-center">{ Contact us! }</h1>
                <hr>
                <p class="text-center">If you have any suggestions, opinions or concerns or if you're interested to know more about 
                    the DLSU Peer Tutors Society or if you have suggestions,
                    recommendations or concerns feel free to contact us. </p>
            </div>
            <!-- Example row of columns -->
            <div class="row">
               
                <div class="span4">
                    <h2>Our Office</h2>
                    <p>Address</p>
                    <p class="lead">De La Salle University</p>
                    <p>E-mail:</p>
                    <p class="lead">dlsu.pts@gmail.com </p>
                  
                </div>
                <div class="span4">
                    <h2>Links</h2>
                    <p>Twitter:</p>
                    <p class="lead">@dlsu.pts</p>
                    <p>Facebook:</p>
                    <p class="lead">facebook/pts.dlsu</p>
                </div>
                <div class="span4" style="height:350px; overflow-y: scroll">
                    <table border="" class="table table-bordered table-condensed table-striped" >
                        <thead>
                            <tr>
                                <th>Our Officers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">President:<br><span class="lead">Justine Lopez</span></td>
                            </tr>
                            <tr>
                                <td class="">Executive Vice President:<br><span class="lead">Pauline Salgado</span></td>
                            </tr>
                            <tr>
                                <td class="">VP Externals:<br><span class="lead">Zem Talens</span></td>
                            </tr>
                            <tr>
                                <td class="">VP Internals:<br><span class="lead">Albert Dizon</span></td>
                            </tr>
                            <tr>
                                <td class="">VP Research and Technology:<br><span class="lead">Wilhelm Paul Martinez</span></td>
                            </tr>
                            <tr>
                                <td class="">VP Monitoring:<br><span class="lead">Solomon Chua</span></td>
                            </tr>
                            <tr>
                                <td class="">VP Publicity:<br><span class="lead">Genrev Dy</span></td>
                            </tr>
                            <tr>
                                <td class="">VP Special Projects:<br><span class="lead">Patrick Calulo</span></td>
                            </tr>
                            <tr>
                                <td class="">VP Communications:<br><span class="lead">Jangelo Kho</span></td>
                            </tr>
                            
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