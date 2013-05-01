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
                            <li class="active"><a href="{{URL::to('tutors')}}">Tutors</a></li>
                            <li><a href="{{URL::to('events')}}">Events</a></li>
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            @foreach($users as $user)
            <div class="hero-unit" style="color: white; background-color: #46a546">
                <hr>
                <h1 class="text-center">{ {{HTML::image('img/profile/'.$user->picture,"",array( "style" => "width:100px", "class" => "img-circle"))}}  {{$user->last_name}}, {{$user->first_name}} }</h1>
                <hr>
            </div>
            @endforeach
            <div class="row">
                <div class="span4" style="height: 360px">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Profile</th>
                            </tr>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>

                            <tr>
                                <td>ID number</td>
                                <td>{{$user->id_number}}</td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Mobile number</td>
                                <td>{{$user->mobile}}</td>
                            </tr>
                            <tr>
                                <td>Degree</td>
                                <td>{{$user->degree}}</td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>{{$user->position}}</td>
                            </tr>
                            <tr>
                                <td>Date Joined</td>
                                <td>{{$user->created_at}}</td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>


                </div>

                <div class="span4">
                    <table border="" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Statistics</th>
                            </tr>


                        </thead>
                        <tbody>
                            <tr>
                                <td>Number of badges</td>
                                <td>{{$badges->count()}}</td>
                            </tr>
                            <tr>
                                <td>Badge Score</td>
                                <td>{{$badges->sum('points')}}</td>
                            </tr>
                            <tr>
                                <td>Successful Tutorials</td>
                                <td>{{$tutorials->where('status','=','done')->count()}}</td>
                            </tr>
                            <tr>
                                <td>Canceled Tutorials</td>
                                <td>{{$tutorials->where('status','=','canceled')->count()}}</td>
                            </tr>
                            <tr>
                                <td>On Going Tutorials</td>
                                <td>{{$tutorials->where('status','=','on going')->count()}}</td>
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
                <div class="span12">
                   @if(!Auth::guest())
                    @foreach($users as $user)
                     @if(Auth::user()->id != $user->id && Auth::user()->position == 'tutee')    
                    <td><a class="btn btn-block btn-large btn-info" data-toggle="modal" href="#{{$user->id}}">I want this tutor!</a></td>
                      @endif  
                    @endforeach
                    @endif
                </div>

            </div>

            <hr>

            <footer>
                <p>&copy; PTSOnline 2013</p>

            </footer>
        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        @foreach($users as $user)
        <div class="modal hide fade" id="{{$user->id}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>{{$user->last_name}}, {{$user->first_name}}</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('user@manage@tutorial@new')}}" method="post">
                    <fieldset>
                        <legend>Ask the Tutor out!</legend>
                        <div class="control-group">
			<label class="control-label" for="textarea">Description</label>
			<div class="controls">
                            <textarea class="input-xlarge" id="textarea" rows="5" name="description"></textarea>
                            <p class="help-block">This is really important! Tell the tutor how you feel urhm ehem I mean why you need help, on what subject and those details.</p>
                            <p class="help-block">Although tutors are made of unicorns, rainbows and laser beams they might decline tutorial requests when they think you don't really need help</p>
			</div>
		</div>
                        <input type="hidden" name="tutor_id" value="{{$user->id}}" />

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success btn-large btn-block">Let's go out!</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">

                <a href="#" data-dismiss="modal" class="btn" style="float: right">Close</a>
            </div>
        </div>
        @endforeach
        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}

    </body>
</html>