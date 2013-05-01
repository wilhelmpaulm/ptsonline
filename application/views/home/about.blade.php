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
                            <li class="active"><a href="{{URL::to('about')}}">About</a></li>
                            <li><a href="{{URL::to('login')}}">Login</a></li>
                            <li><a href="{{URL::to('signup')}}">Sign Up</a></li>
                            <li><a href="{{URL::to('tutors')}}">Tutors</a></li>
                            <li><a href="{{URL::to('events')}}">Events</a></li>
                            <li><a href="{{URL::to('contact')}}">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

	<div class="container">
		<!-- Main hero unit for a primary marketing message or call to action -->
                <div class="hero-unit" style="background-color: #7aba7b">
                        <hr>
                        <h1 class="text-center" style="color: white">{ Peer Tutors Society }</h1>
                        <hr>
                        <h4 class="lead text-center">Our goal, under the Office of the CCS Vice Dean, is to train and deploy a dedicated group of CCS students to conduct one-on-one tutoring or group tutoring sessions for students especially for programming subjects. Through the help of voluntary students, we strive to make the College of Computer Studies a place where students to develop a deeper appreciation and commitment in their chosen field.</h4>
		</div>

		
		<!-- Example row of columns -->
		<div class="row">
			<div class="span4">
                            <h2 class="text-center">Vision</h2>
                                <hr>
                                
                                <p class="lead text-info">
                                    A society of servant-leaders brought together by the goal of a united and unified College of Computer Studies focused on and geared towards supporting the CCS students in developing a deeper appreciation towards computer science.
                                </p>

                        </div>
			<div class="span4">
                            <h2 class="text-center">Mission</h2>
                                <hr>
                                <p class="lead text-success">
                                    To provide voluntary and compassionate service to fellow CCS students.
To bridge the gaps between the faculty, the student organizations, and the students from all the computer science batches.
To assist the CCS freshmen students in their academic needs and trials and develop their inclination towards their chosen field.

                                </p>

                        </div>
			
			<div class="span4">
                            <h2 class="text-center">Be part of our team!</h2>
                                <hr>
                                <p class="lead text-warning">
                                    Need help in programming? Our tutors are ready to help you may it be in C, C++, C#, Java, Ruby, Python, Javascript and HTML5! or maybe you wanna help out as well? Then Join now! 
                                </p>
                                <br>
				<p><a class="btn btn-info btn-large btn-block" href="{{URL::to('signup')}}">I wanna code like a ninja too!</a></p>
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