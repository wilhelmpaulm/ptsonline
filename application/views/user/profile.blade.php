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
                <div class="span4" style="height: 360px">
                    <table class="table table-bordered table-condensed table-striped ">
                        <thead>
                            <tr>
                                <th>Profile Picture</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td class="" style="">{{HTML::image('img/profile/'.Auth::user()->picture, Auth::user()->picture, array('style' => 'width:250px; margin-left:40px', 'class' => 'img-polaroid '))}}</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <div class="span4" style="height: 360px">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Current Profile</th>
                            </tr>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Last name:</td>
                                <td>{{Auth::user()->last_name}}</td>
                            </tr>
                            <tr>
                                <td>First name:</td>
                                <td>{{Auth::user()->first_name}}</td>
                            </tr>
                            <tr>
                                <td>ID number</td>
                                <td>{{Auth::user()->id_number}}</td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>{{Auth::user()->email}}</td>
                            </tr>
                            <tr>
                                <td>Mobile number</td>
                                <td>{{Auth::user()->mobile}}</td>
                            </tr>
                            <tr>
                                <td>Degree</td>
                                <td>{{Auth::user()->degree}}</td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>{{Auth::user()->position}}</td>
                            </tr>
                            <tr>
                                <td>Date Joined</td>
                                <td>{{Auth::user()->created_at}}</td>
                            </tr>
                            <tr>
                                <td>Last Update</td>
                                <td>{{Auth::user()->updated_at}}</td>
                            </tr>
                        </tbody>
                    </table>


                </div>

                <div class=" span4">
                    <h3>Manage Profile</h3>
                    <hr>
                    <a class="btn btn-block btn-danger btn-large" data-toggle="modal" href="#{{Auth::user()->id}}">Something is not right!</a>
                    <hr>
                    <a class="btn btn-block btn-info btn-large " data-toggle="modal" href="#picture">That picture of me is terrible!</a>
                    <hr>
                    <a class="btn btn-block btn-inverse btn-large " data-toggle="modal" href="#password">I need a new password!</a>
                </div>

            </div>


            <hr>

            <footer>
                               <p>&copy; PTSOnline 2013</p>

            </footer>
        </div> <!-- /container -->

        <!--===========================================-->
        <div class="modal hide fade" id="{{Auth::user()->id}}">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>Edit Schedule</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('user@manage@profile@edit')}}" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Sign Up</legend>
                        <div class="control-group">
                            <label class="control-label" for="input01">Last Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="input01" name="last_name" required="" value="{{Auth::user()->last_name}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input02">First Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="input02" name="first_name" required="" value="{{Auth::user()->first_name}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input03">ID Number</label>
                            <div class="controls">
                                <input type="number" class="input-xlarge" id="input03" name="id_number" required="" value="{{Auth::user()->id_number}}">
                                <p class="help-block">This will be your username</p>

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input04">E-mail</label>
                            <div class="controls">
                                <input type="email" class="input-xlarge" id="input04" name="email" required="" value="{{Auth::user()->email}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input05">Mobile</label>
                            <div class="controls">
                                <input type="number" class="input-xlarge" id="input05" name="mobile" required="" value="{{Auth::user()->mobile}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input06">Short Description</label>
                            <div class="controls">
                                <textarea name="bio" class="input-xlarge" row="4" required="">{{Auth::user()->bio}}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="select07">Degree</label>
                            <div class="controls">
                                <select name="degree" >
                                    @foreach($degrees as $degree)
                                    <option value="{{$degree->code}}">{{$degree->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-inverse btn-large">I am satisfied servant!</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
            </div>
        </div>
        
        <div class="modal hide fade" id="picture">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>{{Auth::user()->id_number}}</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('user@manage@profile@picture')}}" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Change Profile Picture</legend>
                            
                        <div class="control-group">
                                <label class="control-label" for="fileInput">Upload picture</label>
                                <div class="controls">
                                    <input class="input-file" id="fileInput" type="file" name="picture">
                                    <p class="help-block">Rename your picture to your id number</p>
                                    <p class="help-block">Dimensions allowed is only 300 x 300 px</p>
                                    <p class="help-block">File size allowed is 500KB</p>
                                </div>
                            </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-inverse btn-large">I look good in that one!</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
            </div>
        </div>
        <div class="modal hide fade" id="password">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">&times;</a>
                <h3>{{Auth::user()->id_number}}</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="{{URL::to_action('user@manage@profile@password')}}" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Change Password</legend>
                            
                        <div class="control-group">
                                <label class="control-label" for="input09">Password</label>
                                <div class="controls">
                                    <input type="password" class="input-xlarge" id="input09" name="password" required="">
                                </div>
                            </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-inverse btn-large">Even Batman can't decode that!</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
            </div>
        </div>

        <!--==================================================-->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->



        {{ HTML::script('js/jquery-2.0.0.js')}}
        {{ HTML::script('js/bootstrap.js')}}


    </body>
</html>