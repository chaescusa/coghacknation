<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cognizant Portal</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/logo/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
</head>

<body>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on info@cognizant.com</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <a href="{{ URL::to('register') }}"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="{{ URL::to('/') }}">
                                <img src="img/logo/logo_128.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="img/logo/logo_128.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="{{ URL::to('/') }}" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                </li>

                                <li>
                                    <a href="{{ URL::to('/') }}">Events</a>
                                </li>

                                <li>
                                    <a href="{{ URL::to('/') }}">Services</a>
                                </li>

                                <li>
                                    <a href="{{ URL::to('/') }}">Testimonials</a>
                                </li>
                                
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->


                                <ul class="dropdown-menu">
                                        <li><a href="contact.html">Contact option 1</a>
                                        </li>
                                        <li><a href="contact2.html">Contact option 2</a>
                                        </li>
                                        <li><a href="contact3.html">Contact option 3</a>
                                        </li>

                                    </ul>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

    {{ Form::open(array('url'=>'login')) }}

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Cognizant Portal</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input name="username" type="text" class="form-control" id="email_modal" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="{{ URL::to('register') }}"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        {{ Form::close() }}

        <!-- *** LOGIN MODAL END *** -->

        <br><br>

<div class="container">

	<div class="row">

		<div class="col-md-2">
			&nbsp;
		</div>

		<div class="col-md-8">

			@if($errors->has())

				<div class="alert alert-dismissable alert-danger">

					<span class="glyphicon glyphicon-exclamation-sign"></span> Oops! There's an error while we were creating your account.

					@foreach($errors->all() as $error)

						<li>{{ $error }}</li>

					@endforeach

				</div>

			@endif

			<div class="thumbnail">

				<div class="caption">

				Please fill up the needed information and click submit and await our email after verifying your information.

				<hr>

			<div class="row">

				{{ Form::open(array('url'=>'register','files'=>'true')) }}

		            <div class="col-md-12">
		                <big><b><i class="fa fa-user"></i>&nbsp;&nbsp;Personal Information</b></big>
		            </div>

		            <div class="col-md-12">
		                &nbsp;
		            </div>

		            <div class="col-md-4">
		        		{{ Form::label('Employee ID') }}
		        		<br>
		        		{{ Form::text('employee_id',null,array('class'=>'form-control','placeholder'=>'Employee ID')) }}
		        	</div>

		            <div class="col-md-12">
		                &nbsp;
		            </div>

		        	<div class="col-md-4">
		                
		        		{{ Form::label('Firstname') }}
		        		<br>
		        		{{ Form::text('firstname',null,array('class'=>'form-control','placeholder'=>'Firstname')) }}
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Middlename') }}
		        		<br>
		        		{{ Form::text('middlename',null,array('class'=>'form-control','placeholder'=>'Middlename')) }}
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Lastname') }}
		        		<br>
		        		{{ Form::text('lastname',null,array('class'=>'form-control','placeholder'=>'Lastname')) }}
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Home Number') }} <small><i>If Applicable</i></small>
		        		<br>
		        		{{ Form::text('home_contact',null,array('class'=>'form-control','placeholder'=>'Home Number')) }}
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Mobile Number') }}
		        		<br>
		        		{{ Form::text('mobile_contact',null,array('class'=>'form-control','placeholder'=>'Mobile Number')) }}
		        	</div>

		        	<div class="col-md-4">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-8">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Place of Birth') }}
		        		<br>
		        		{{ Form::text('birthplace',null,array('class'=>'form-control','placeholder'=>'Place of Birth')) }}
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Date of Birth') }}
		        		<br>
		        		<input type="date" name="birthdate" class="form-control">
		        	</div>

		        	<div class="col-md-4">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		{{ Form::label('Gender') }}
		        		<br>
		        		{{ Form::radio('gender','Male','checked') }} Male
		        		&nbsp;&nbsp;&nbsp;&nbsp;
		        		{{ Form::radio('gender','Female') }} Female
		        		&nbsp;&nbsp;&nbsp;&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-8">
		        		{{ Form::label('Current Home Address') }}
		        		<br>
		        		{{ Form::textarea('address',null,array('class'=>'form-control','placeholder'=>'Enter address here...','rows'=>6)) }}
		        	</div>

		        	<div class="col-md-4">
		        		&nbsp;
		        	</div>
		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		            <div class="col-md-4">
		        		{{ Form::label('Job Position') }}
		        		<br>
		        		{{ Form::text('position',null,array('class'=>'form-control','placeholder'=>'Job Position')) }}
		        	</div>

		        	<div class="col-md-8">
		                &nbsp;
		            </div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Eye Status') }}
		        		<br>
		        		{{ Form::select('eye_status',array(''=>'Select Eye Status','Normal'=>'Normal','Myopia'=>'Myopia','Farsightedness'=>'Farsightedness','Astigmatism'=>'Astigmatism'),null,array('class'=>'form-control')) }}
		        	</div>


		        	<div class="col-md-4">
		        		{{ Form::label('Hearing Status') }}
		        		<br>
		        		{{ Form::select('hearing_status',array(''=>'Select Hearing Status','Normal'=>'Normal','Deaf'=>'Deaf'),null,array('class'=>'form-control')) }}
		        	</div>

		        	<div class="col-md-4">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Body Type') }}
		        		<br>
		        		{{ Form::select('body_type',array(''=>'Select Body Type','Slim'=>'Slim','Medium'=>'Medium','Overweight'=>'Overweight','Obese'=>'Obese'),null,array('class'=>'form-control')) }}
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Blood Type') }}
		        		<br>
		        		{{ Form::select('blood_type',array(''=>'Select Blood Type','O'=>'O','A'=>'A','B'=>'B','AB'=>'AB'),null,array('class'=>'form-control')) }}
		        	</div>

		        	<div class="col-md-4">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Drinking') }}
		        		<br>
		        		{{ Form::select('drinking_status',array(''=>'Select Drinking Status','Yes'=>'Yes','No'=>'No','Occassionally'=>'Occassionally'),null,array('class'=>'form-control')) }}
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('How many bottles in 1 day?') }}
		        		<br>
		        		{{ Form::number('drinking_times',0,array('class'=>'form-control','placeholder'=>'0','min'=>'0')) }}
		        	</div>

		        	<div class="col-md-4">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Smoking') }}
		        		<br>
		        		{{ Form::select('smoking_status',array(''=>'Select Smoking Status','Yes'=>'Yes','No'=>'No','Occassionally'=>'Occassionally'),null,array('class'=>'form-control')) }}
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('How many sticks in 1 day?') }}
		        		<br>
		        		{{ Form::number('smoking_times',0,array('class'=>'form-control','placeholder'=>'0','min'=>'0')) }}
		        	</div>

		        	<div class="col-md-4">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Height (in ft. and in.)') }}
		        		<br>
		        		{{ Form::text('height',null,array('class'=>'form-control','placeholder'=>'0\'0"')) }}
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Weight (in kg.)') }}
		        		<br>
		        		{{ Form::text('weight',null,array('class'=>'form-control','placeholder'=>'0.00kg')) }}
		        	</div>

		        	<div class="col-md-4">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		<hr>
		        	</div>

		        	<div class="col-md-12">
		        		<big><b><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Account Information</b></big>
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('E-mail Address') }}
		        		<br>
		        		{{ Form::email('email',null,array('class'=>'form-control','placeholder'=>'Firstname')) }}
		        	</div>

		        	<div class="col-md-8">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Username') }}
		        		<br>
		        		{{ Form::text('username',null,array('class'=>'form-control','placeholder'=>'Username')) }}
		        	</div>

		        	<div class="col-md-8">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Password') }}
		        		<br>
		        		{{ Form::password('password',array('class'=>'form-control','placeholder'=>'Password')) }}
		        	</div>

		        	<div class="col-md-8">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-4">
		        		{{ Form::label('Confirm Password') }}
		        		<br>
		        		{{ Form::password('confirm_password',array('class'=>'form-control','placeholder'=>'Confirm Password')) }}
		        	</div>

		        	<div class="col-md-8">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		&nbsp;
		        	</div>

		        	<div class="col-md-12">
		        		{{ Form::submit('Sign Up',array('class'=>'form-control btn btn-default')) }}
		        	</div>

		        </div>

		        {{ Form::close() }}

		        <div class="col-md-2">
		        	&nbsp;
		        </div>

		        </div>

			</div>


			</div>

		</div>

	</div>

</div>

<footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p>Cognizant combines a passion for client satisfaction, technology innovation, deep industry and business process expertise, and a global, collaborative workforce that embodies the future of work.</p>

                    <hr>

                    <h4>Join our monthly newsletter</h4>

                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control">

                            <span class="input-group-btn">

                        <button class="btn btn-default" type="button"><i class="fa fa-send"></i></button>

                    </span>

                        </div>
                        <!-- /input-group -->
                    </form>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Blog</h4>

                    <div class="blog-entries">
                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Blog post name</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">
                            <div class="image same-height-always">
                                <a href="#">
                                    <img class="img-responsive" src="img/detailsquare.jpg" alt="">
                                </a>
                            </div>
                            <div class="name same-height-always">
                                <h5><a href="#">Very very long blog post name</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                    <p><strong>Universal Ltd.</strong>
                        Science Hub Tower 4 No. 110 Campus Ave. Fort Bonifacio
                        <br>
                        <strong>Taguig, Philippines</strong>
                    </p>

                    <a href="contact.html" class="btn btn-small btn-template-main">Go to contact page</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4>Photostream</h4>

                    <div class="photostream">
                        <div>
                            <a href="#">
                                <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare3.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare2.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <img src="img/detailsquare.jpg" class="img-responsive" alt="#">
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2016 Cognizant</p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1509144656056648";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>