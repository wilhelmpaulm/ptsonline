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
                            <li><a href="{{URL::to('admin/users')}}">Users</a></li>
                            <li  class="active"><a href="{{URL::to('admin/degrees')}}">Degrees</a></li>
                            <li><a href="{{URL::to('admin/specializations')}}">Specializations</a></li>
                            <li><a href="{{URL::to('admin/schedules')}}">Schedule</a></li>
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
                <h1>College Degrees</h1>
            </div>
            <!-- Example row of columns -->
            <div class="row">

                <div class="span7" style="height: 360px;overflow-y: scroll">
                    <table class="table table-bordered table-striped table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Degrees</th>
                            </tr>
                            <tr>
                                <th>code</th>
                                <th>title</th>
                                <th>description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($degrees as $degree)
                            <tr>
                                <td>{{$degree->code}}</td>
                                <td>{{$degree->title}}</td>
                                <td>{{$degree->description}}</td>
                                <td><form action="{{URL::to_action('admin@degrees@delete')}}" method="POST">
                                        <input type="hidden" name="id" value="{{$degree->id}}" />
                                        <input type="submit" value="Delete"  class="btn btn-danger"/>
                                    </form></td>
                                <td><a class="btn" data-toggle="modal" href="#{{$degree->id}}">Edit</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div class=" span4">
                    <form class="form-horizontal" method="POST" action="{{URl::to_action('admin@degrees@new')}}">
                        <fieldset>
                            <legend>Add new degree</legend>
                            <div class="control-group">
                                <label class="control-label" for="input01">Degree Code</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="input01" name="code">

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input01">Degree Name</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="input01" name="title">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="textarea">Description</label>
                                <div class="controls">
                                    <textarea class="input-xlarge" id="textarea" rows="3" name="description"></textarea>
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
                <p>&copy; PTSOnline 2012</p>
            </footer>
        </div> <!-- /container -->

        <!--===========================================-->

        @foreach($degrees as $degree)
        <div class="modal hide fade" id="{{$degree->id}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>Edit Position</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('admin@degrees@edit')}}" method="POST">
                    <fieldset>
                        <legend>{{$degree->title}}</legend>
                        <input type="hidden" name="id" value="{{$degree->id}}" />
                        <div class="control-group">
                            <label class="control-label" for="input01">Code</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="input01" name="code" value="{{$degree->code}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Title</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="input01" name="title" value="{{$degree->title}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textarea">Description</label>
                            <div class="controls">
                                <textarea class="input-xlarge" id="textarea" rows="3" name="description">{{$degree->description}}</textarea>
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