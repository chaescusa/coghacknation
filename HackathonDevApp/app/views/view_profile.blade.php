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
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="../css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="../css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="../img/logo/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.theme.css" rel="stylesheet">
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
<!--                             <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div> -->

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span></a>
                                <a href="{{ URL::to('logout') }}"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Log Out</span></a>
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

                            <a class="navbar-brand home" href="{{ URL::to('dashboard') }}">
                                <img src="../img/logo/logo_128.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="../img/logo/logo_128.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
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
                            
                                <li>
                                      <a href="{{ URL::to('my-events') }}"><i class="fa fa-qrcode"></i>&nbsp;&nbsp;My Events</a>
                                  </li>

                                @if(Auth::user()->role=='Admin')
                                  <li>
                                      <a href="{{ URL::to('manage-users') }}"><i class="fa fa-users"></i>&nbsp;&nbsp;Manage Users</a>
                                  </li>

                                  <li>
                                      <a href="{{ URL::to('manage-events') }}"><i class="fa fa-qrcode"></i>&nbsp;&nbsp;Manage Events</a>
                                  </li>

                                  <li>
                                      <a href="{{ URL::to('manage-venues') }}"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Manage Venues</a>
                                  </li>

                                  <li>
                                      <a href="{{ URL::to('manage-interests') }}"><i class="fa fa-star"></i>&nbsp;&nbsp;Manage Interests</a>
                                  </li>
                                @endif
                                
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

<div class="container">

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

      <div class="row">

                <div class="col-md-12">
                    <big><b><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Personal Information</b></big>
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-4">
                {{ Form::label('Employee ID') }}
                <br>
                {{ $user->employee_id }}
              </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

              <div class="col-md-4">
                    
                {{ Form::label('Firstname') }}
                <br>
                {{ $user->firstname }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Middlename') }}
                <br>
                {{ $user->middlename }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Lastname') }}
                <br>
                {{ $user->lastname }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-4">
                {{ Form::label('Home Number') }} <small><i>If Applicable</i></small>
                <br>
                {{ $user->home_contact }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Mobile Number') }}
                <br>
                {{ $user->mobile_contact }}
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
                {{ $user->birthplace }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Date of Birth') }}
                <br>
                {{ $user->birthdate }}
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
                {{ $user->gender }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-8">
                {{ Form::label('Current Home Address') }}
                <br>
                {{ $user->address }}
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
                {{ $user->position }}
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
                {{ $user->eye_status }}
              </div>


              <div class="col-md-4">
                {{ Form::label('Hearing Status') }}
                <br>
                {{ $user->hearing_status }}
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
                {{ $user->body_type }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Blood Type') }}
                <br>
                {{ $user->blood_type }}
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
                {{ $user->drinking_status }}
              </div>

              <div class="col-md-4">
                {{ Form::label('How many bottles in 1 day?') }}
                <br>
                {{ $user->drinking_times }}
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
                {{ $user->smoking_status }}
              </div>

              <div class="col-md-4">
                {{ Form::label('How many sticks in 1 day?') }}
                <br>
                {{ $user->smoking_times }}
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
                {{ $user->height }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Weight (in kg.)') }}
                <br>
                {{ $user->weight }}kg
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
                {{ $user->email }}
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
                {{ $user->username }}
              </div>

              <div class="col-md-8">
                &nbsp;
              </div>

            </div>
        </div>

    </div>

</div>

<br><br>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/data_tables.js"></script>
<script src="../assets/js/data_query_tables.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>