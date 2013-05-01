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

                <div class="span7">
                    <table class="table table-bordered table-striped table-condensed" style="height: 300px; overflow-y: scroll">
                        <thead>
                            <tr>
                                <th>Tutorials</th>
                            </tr>
                            <tr>
                                <th>Tutor</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tutors as $tutor)
                            <tr>
                                <td>{{$tutor->last_name}}, {{$tutor->first_name}}</td>
                                <td>{{$tutor->description}}</td>
                                <td>{{$tutor->status}}</td>
                                @if($tutor->status != 'done' && $tutor->status != 'canceled')   
                                <td><form action="{{URL::to_action('user@manage@tutorial@status')}}" method="POST">
                                        <input type="hidden" name="id" value="{{$tutor->id}}" />
                                        <input type="hidden" name="status" value="canceled" />
                                        <input type="submit" value="Cancel"  class="btn btn-warning"/>
                                    </form></td>
                                     @endif 
                                <td><a class="btn  btn-info" data-toggle="modal" href="#{{$tutor->tutor_id}}">View Tutor</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="span5">

                    <form class="form-horizontal" action="{{URL::to_action('user@manage@tutorial@find')}}" method="POST">
                        <fieldset>
                            <legend>Tutor matcher</legend>


                            <div class="control-group">
                                <label class="control-label" for="select01">Select list</label>
                                <div class="controls">
                                    <select id="select01" name="id">
                                        @foreach($specializations as $specialization)
                                        <option value="{{$specialization->id}}">{{$specialization->code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="select02">Filter Schedule</label>
                                <div class="controls">
                                    <select id="select02" name="filter">
                                        <option value="yes">Yes! please!</option>
                                        <option value="no">I can adjust</option>
                                    </select>
                                <p class="help-block">If you select to filter the result, it would return</p>
                                <p class="help-block">the tutor with the same free time as you</p>
                                <p class="help-block">If there's no such tutor, it would return</p>
                                <p class="help-block">other's who are available</p>
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Find me my Yoda!</button>
                            </div>
                        </fieldset>
                    </form>



                </div>
            </div>


        <hr>
        <footer>
                           <p>&copy; PTSOnline 2013</p>

        </footer>

        </div>

        <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        @foreach($tutors as $tutor)
        <div class="modal hide fade" id="{{$tutor->tutor_id}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>{{$tutor->last_name}}, {{$tutor->first_name}}</h3>
            </div>
            <div class="modal-body text-center">
                <table border="" class="table table-striped table-condensed table-bordered">
                                   <p>{{HTML::image('img/profile/'.$tutor->picture,$tutor->picture,array('style' => 'width:150px', 'class' => 'img polaroid'))}}</p>

                    <tbody>
                        <tr>
                            <td>Degree</td>
                            <td>{{$tutor->degree}}</td>
                        </tr>
                        <tr>
                            <td>ID number</td>
                            <td>{{$tutor->id_number}}</td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td>{{$tutor->position}}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{$tutor->mobile}}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{{$tutor->id_number}}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
            </div>
        </div>
        @endforeach

        <!-- Placed at the end of the document so the pages load faster -->
        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}
    </body>
</html>