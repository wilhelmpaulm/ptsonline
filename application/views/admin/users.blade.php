<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PTS Online - Admin</title>
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
                    <a class="brand" href="{{URL::to('admin')}}">Admin</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="{{URL::to('admin/users')}}">Users</a></li>
                            <li ><a href="{{URL::to('admin/degrees')}}">Degrees</a></li>
                            <li><a href="{{URL::to('admin/specializations')}}">Specializations</a></li>
                            <li><a href="{{URL::to('admin/schedules')}}">Schedule</a></li>
                            <li><a href="{{URL::to('admin/houses')}}">Houses</a></li>
                            <li ><a href="{{URL::to('admin/badges')}}">Badges</a></li>
                            <li><a href="{{URL::to('admin/milestones')}}">Milestones</a></li>
                            <li><a href="{{URL::to('admin/positions')}}">Positions</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Current Users</h1>
            </div>
            <!-- Example row of columns -->
            <div class="row">

                <div class="span6" style="height: 360px;overflow-y: scroll">
                    <table class="table table-bordered table-striped table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Tutors</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tutors as $tutor)
                            <tr>
                                <td>{{$tutor->last_name}}, {{$tutor->first_name}}</td>
                                <td>{{$tutor->degree}}</td>
                                <td><a class="btn btn-info" data-toggle="modal" href="#{{$tutor->id_number}}">View</a></td>
                                <td><a class="btn btn-inverse" data-toggle="modal" href="#badge{{$tutor->id_number}}">Reward</a></td>
                                <td><a class="btn btn-success" data-toggle="modal" href="#promote{{$tutor->id_number}}">Promote</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="span6" style="height: 360px;overflow-y: scroll">
                    <table class="table table-bordered table-striped table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Tutees</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tutees as $tutee)
                            <tr>
                                <td>{{$tutee->last_name}}, {{$tutee->first_name}}</td>
                                <td>{{$tutee->degree}}</td>
                                <td><a class="btn btn-info" data-toggle="modal" href="#{{$tutee->id_number}}">View</a></td>
                                <td><a class="btn btn-inverse" data-toggle="modal" href="#badge{{$tutee->id_number}}">Reward</a></td>
                                <td><a class="btn btn-success" data-toggle="modal" href="#promote{{$tutee->id_number}}">Promote</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="span6" style="height: 360px;overflow-y: scroll">
                    <table class="table table-bordered table-striped table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Officers</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($officers as $officer)
                            <tr>
                                <td>{{$officer->last_name}}, {{$officer->first_name}}</td>
                                <td>{{$officer->position}}</td>
                                <td><a class="btn btn-info" data-toggle="modal" href="#{{$officer->id_number}}">View</a></td>
                                <td><a class="btn btn-inverse" data-toggle="modal" href="#badge{{$officer->id_number}}">Reward</a></td>
                                <td><a class="btn btn-success" data-toggle="modal" href="#promote{{$officer->id_number}}">Add Badge</a></td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; Company 2012</p>
            </footer>
        </div> <!-- /container -->

        <!--===========================================-->


        <!--==================================================-->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        @foreach($users as $user)
        <div class="modal hide fade" id="{{$user->id_number}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>{{$user->last_name}}, {{$user->first_name}}</h3>
            </div>
            <div class="modal-body" style="text-align: center">
                <p>{{HTML::image('img/profile/'.$user->picture,$user->picture,array('style' => 'width:150px', 'class' => 'img polaroid'))}}</p>
                <table border="" class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td>ID Number</td>
                            <td>{{$user->id_number}}</td>
                        </tr>
                        <tr>
                            <td>Degree</td>
                            <td>{{$user->degree}}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{$user->mobile}}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td>Bio</td>
                            <td>{{$user->bio}}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <form action="{{URL::to_action('admin@users@delete')}}" method="POST">
                    <input type="hidden" name="id" value="{{$user->id}}" />
                    <input type="submit" value="Delete" class="btn btn-danger" style="float: left;margin-top: 18px"/>
                </form>
                <a href="#" data-dismiss="modal" class="btn" style="float: right">Close</a>
            </div>
        </div>
        @endforeach
        @foreach($users as $user)
        <div class="modal hide fade" id="badge{{$user->id_number}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>{{$user->last_name}}, {{$user->first_name}}</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('admin@users@badge')}}" method="post">
                    <fieldset>
                        <legend>Add Badge</legend>
                        <div class="control-group">
                            <label class="control-label" for="select01">Badges</label>
                            <div class="controls">
                                <select id="select01" name="badge_id">
                                    @foreach($badges as $badge)
                                    <option value="{{$badge->id}}">{{$badge->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{$user->id}}" />

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success btn-large">OH YEAH!</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">

                <a href="#" data-dismiss="modal" class="btn" style="float: right">Close</a>
            </div>
        </div>
        @endforeach
        @foreach($users as $user)
        <div class="modal hide fade" id="promote{{$user->id_number}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>{{$user->last_name}}, {{$user->first_name}}</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('admin@users@position')}}" method="post">
                    <fieldset>
                        <legend>Add Badge</legend>
                        <div class="control-group">
                            <label class="control-label" for="select01">Badges</label>
                            <div class="controls">
                                <select id="select01" name="position">
                                    @foreach($positions as $position)
                                    <option value="{{$position->title}}">{{$position->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{$user->id}}" />

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success btn-large">OH YEAH!</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">

                <a href="#" data-dismiss="modal" class="btn" style="float: right">Close</a>
            </div>
        </div>
        @endforeach


        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}


    </body>
</html>