<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PTS Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?= URL::base().'/img/pts/favicon.ico'?>">

        <!-- Le styles -->
        {{HTML::style('css/bootstrap.css') }}
        <style type="text/css">
            body { padding-top: 60px; padding-bottom: 40px; background-image:url('http://localhost/PTS1/img/bg/escheresque.png')}
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
                            <li class="active"><a href="{{URL::to('signup')}}">Sign Up</a></li>
                            <li><a href="{{URL::to('tutors')}}">Tutors</a></li>
                            <li><a href="{{URL::to('events')}}">Events</a></li>
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="span3">

                </div>
                <div class="span6" style="background-image:url('http://localhost/PTS1/img/bg/p4.png')">
                    <form class="form-horizontal " action="signup" method="POST" enctype="multipart/form-data" >
                        <fieldset >
                            <legend class="text-center">Sign Up</legend>
                            <div class="control-group">
                                <label class="control-label" for="input01">Last Name</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="input01" name="last_name" required="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input02">First Name</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="input02" name="first_name" required="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input03">ID Number</label>
                                <div class="controls">
                                    <input type="number" class="input-xlarge" id="input03" name="id_number" required="">
                                    <p class="help-block">This will be your username</p>

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input04">E-mail</label>
                                <div class="controls">
                                    <input type="email" class="input-xlarge" id="input04" name="email" required="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input05">Mobile</label>
                                <div class="controls">
                                    <input type="number" class="input-xlarge" id="input05" name="mobile" required="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input06">Short Description</label>
                                <div class="controls">
                                    <textarea name="bio" class="input-xlarge" row="4" required=""></textarea>
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
                            <div class="control-group">
                                <label class="control-label" for="select08">Tutor or Tutee?</label>
                                <div class="controls">
                                    <select name="position" >
                                        <option value="tutor">tutor</option>
                                        <option value="tutee">tutee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input09">Password</label>
                                <div class="controls">
                                    <input type="password" class="input-xlarge" id="input09" name="password" required="">
                                    <br>
                                    <input type="password" class="input-xlarge" id="inputp" name="pp" required="">
                                   
                                    
                                </div>
                            </div>
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
                                <button type="submit" class="btn btn-large btn-inverse ">Let me join the darkside!</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="span4">

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