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
                                                                                    <li><a href="{{URL::to('index')}}">Home</a></li>

                            <li><a href="{{URL::to('admin/users')}}">Users</a></li>
                            <li ><a href="{{URL::to('admin/degrees')}}">Degrees</a></li>
                            <li><a href="{{URL::to('admin/specializations')}}">Specializations</a></li>
                            <li class="active"><a href="{{URL::to('admin/schedules')}}">Schedule</a></li>
                            <li><a href="{{URL::to('admin/houses')}}">Houses</a></li>
                            <li><a href="{{URL::to('admin/badges')}}">Badges</a></li>
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
                <h1>Schedules Controller</h1>
            </div>
            <!-- Example row of columns -->
            <div class="row">

                <div class="span7" style="height: 360px;overflow-y: scroll">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Schedules</th>
                            </tr>
                            <tr>
                                <th>Day</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <td>{{$schedule->day}}</td>
                                <td>{{$schedule->time}}</td>
                                <td><form action="{{URL::to_action('admin@schedules@delete')}}" method="POST">
                                        <input type="hidden" name="id" value="{{$schedule->id}}" />
                                        <input type="submit" value="Delete"  class="btn btn-danger"/>
                                    </form></td>
                                <td><a class="btn" data-toggle="modal" href="#{{$schedule->id}}">Edit</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div class=" span4">
                    <form class="form-horizontal" method="POST" action="{{URL::to_action('admin@schedules@new')}}">
                        <fieldset>
                            <legend>Add new schedule</legend>

                            <div class="control-group">
                                <label class="control-label" for="select01">Day</label>
                                <div class="controls">
                                    <select id="select01" name="day">
                                        <option value="M">Monday</option>
                                        <option value="T">Tuesday</option>
                                        <option value="W">Wednesday</option>
                                        <option value="H">Thursday</option>
                                        <option value="F">Friday</option>
                                        <option value="S">Saturday</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="select01">Time</label>
                                <div class="controls">
                                    <select id="select01" name="time">
                                        <option >0800 - 0930</option>
                                        <option >0940 - 1110</option>
                                        <option >1120 - 1250</option>
                                        <option >1300 - 1430</option>
                                        <option >1440 - 1610</option>
                                        <option >1620 - 1750</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save changes</button>

                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; PTSOnline 2013</p>
            </footer>
        </div> <!-- /container -->

        <!--===========================================-->
        @foreach($schedules as $schedule)
        <div class="modal hide fade" id="{{$schedule->id}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>Edit Schedule</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('admin@schedules@edit')}}" method="POST">
                    <fieldset>
                        <legend>{{$schedule->day}} {{$schedule->time}}</legend>
                        <input type="hidden" name="id" value="{{$schedule->id}}" />
                        <div class="control-group">
                            <label class="control-label" for="select01">Day</label>
                            <div class="controls">
                                <select id="select01" name="day">
                                    <option value="M">Monday</option>
                                    <option value="T">Tuesday</option>
                                    <option value="W">Wednesday</option>
                                    <option value="H">Thursday</option>
                                    <option value="F">Friday</option>
                                    <option value="S">Saturday</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="select01">Time</label>
                            <div class="controls">
                                <select id="select01" name="time">
                                    <option >0800 - 0930</option>
                                    <option >0940 - 1110</option>
                                    <option >1120 - 1250</option>
                                    <option >1300 - 1430</option>
                                    <option >1440 - 1610</option>
                                    <option >1620 - 1750</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>

                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
            </div>
        </div>
        @endforeach

        <!--==================================================-->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->



        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}


    </body>
</html>