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
                <div class="span2">
                    <form action="{{URL::to_action('user@manage@tutorial@accepting')}}" method="POST" style="">
                        <?php
                        if (Auth::user()->accepting)
                            echo "<input type='submit' value='Accepting tutees!'  class='btn btn-success btn-block btn-large' style='width:175px;height:175px'/>";
                        else
                            echo "<input type='submit' value='I need rest!' class='btn btn-danger btn-block btn-large' style='width:175px;height:175px'/>";
                        ?></form>
                </div>
                <div class="span10">
                    <table class="table table-bordered table-striped table-hover table-condensed" style="height: 300px; overflow-y: scroll">
                        <thead>
                            <tr>
                                <th >Tutorials</th>
                            </tr>
                            <tr>
                                <th>Tutee</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tutees as $tutee)
                            <tr>
                                <td>{{$tutee->last_name}}, {{$tutee->first_name}}</td>
                                <td>{{$tutee->description}}</td>
                                <td>{{$tutee->status}}</td>

                                
                                @if($tutee->status != 'done' &&$tutee->status != 'canceled')   
                                <td><form action="{{URL::to_action('user@manage@tutorial@status')}}" method="POST">
                                        <input type="hidden" name="id" value="{{$tutee->id}}" />
                                        <input type="hidden" name="status" value="canceled" />
                                        <input type="submit" value="Cancel"  class="btn btn-warning"/>
                                    </form></td>
                                     @endif 
                                @if($tutee->status == 'on going' )
                                <td><form action="{{URL::to_action('user@manage@tutorial@status')}}" method="POST">
                                        <input type="hidden" name="id" value="{{$tutee->id}}" />
                                        <input type="hidden" name="status" value="done" />
                                        <input type="submit" value="Finished"  class="btn btn-danger"/>
                                    </form></td>
                                
                                @elseif($tutee->status == 'pending')   
                                <td><form action="{{URL::to_action('user@manage@tutorial@status')}}" method="POST">
                                        <input type="hidden" name="id" value="{{$tutee->id}}" />
                                        <input type="hidden" name="status" value="on going" />
                                        <input type="submit" value="Start"  class="btn btn-success"/>
                                    </form></td> 
                                    
                                @endif   
                                <td><a class="btn  btn-info" data-toggle="modal" href="#{{$tutee->tutee_id}}">View Tutee</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="span4">

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
        @foreach($tutees as $tutee)
        <div class="modal hide fade" id="{{$tutee->tutee_id}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>{{$tutee->last_name}}, {{$tutee->first_name}}</h3>
            </div>
            <div class="modal-body text-center">
                <table border="" class="table table-striped table-condensed table-bordered">
                                   <p>{{HTML::image('img/profile/'.$tutee->picture,$tutee->picture,array('style' => 'width:150px', 'class' => 'img polaroid'))}}</p>

                    <tbody>
                        <tr>
                            <td>Degree</td>
                            <td>{{$tutee->degree}}</td>
                        </tr>
                        <tr>
                            <td>ID number</td>
                            <td>{{$tutee->id_number}}</td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td>{{$tutee->position}}</td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>{{$tutee->mobile}}</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>{{$tutee->id_number}}</td>
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