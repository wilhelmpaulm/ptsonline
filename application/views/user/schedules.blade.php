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
                            @foreach($userschedules as $userschedule)
                            <tr>
                                <td>{{$userschedule->day}}</td>
                                <td>{{$userschedule->time}}</td>
                                <td><form action="{{URL::to_action('user@manage@schedule@delete')}}" method="POST">
                                        <input type="hidden" name="schedule_id" value="{{$userschedule->id}}" />
                                        <input type="submit" value="Delete"  class="btn btn-danger"/>
                                    </form></td>
                                <td><a class="btn" data-toggle="modal" href="#{{$userschedule->id}}">Edit</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div class=" span4">
                    <form class="form-horizontal" method="POST" action="{{URL::to_action('user/manage/schedule/new')}}">
                        <fieldset>
                            <legend>Add new schedule</legend>

                            <div class="control-group">
                                <label class="control-label" for="select01">Schedule</label>
                                <div class="controls">
                                    <select id="select01" name="schedule_id">
                                        @foreach($schedules as $schedule)
                                        <option value="{{$schedule->id}}">{{$schedule->day}} {{$schedule->time}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Add Schedule</button>

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
        @foreach($userschedules as $userschedule)
        <div class="modal hide fade" id="{{$userschedule->id}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>Edit Schedule</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('user/manage/schedule/edit')}}" method="POST">
                    <fieldset>
                        <legend>{{$userschedule->day}} {{$userschedule->time}}</legend>
                        <input type="hidden" name="id" value="{{$userschedule->id}}" />
                        
                        <div class="control-group">
                                <label class="control-label" for="select01">Schedule</label>
                                <div class="controls">
                                    <select id="select01" name="schedule_id">
                                        @foreach($schedules as $schedule)
                                            
                                            <option value="{{$schedule->id}}">{{$schedule->day}} {{$schedule->time}}</option>
                                        
                                        @endforeach
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