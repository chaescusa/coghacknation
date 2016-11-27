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
    <link rel="stylesheet" href="assets/css/data_tables.css">
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

<!-- VIEW USER -->
@foreach($users as $user)
<div class="modal fade" id="viewModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="img/logo/logo_original.png" width=100px></h4>
      </div>
      <div class="modal-body">
        <div class="row">

                <div class="col-md-12">
                    <big><b><i class="fa fa-user"></i>&nbsp;&nbsp;Personal Information</b></big>
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

              <div class="col-md-6">
                {{ Form::label('Eye Status') }}
                <br>
                {{ $user->eye_status }}
              </div>


              <div class="col-md-6">
                {{ Form::label('Hearing Status') }}
                <br>
                {{ $user->hearing_status }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Body Type') }}
                <br>
                {{ $user->body_type }}
              </div>

              <div class="col-md-6">
                {{ Form::label('Blood Type') }}
                <br>
                {{ $user->blood_type }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Drinking') }}
                <br>
                {{ $user->drinking_status }}
              </div>

              <div class="col-md-6">
                {{ Form::label('How many bottles in 1 day?') }}
                <br>
                {{ $user->drinking_times }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Smoking') }}
                <br>
                {{ $user->smoking_status }}
              </div>

              <div class="col-md-6">
                {{ Form::label('How many sticks in 1 day?') }}
                <br>
                {{ $user->smoking_times }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Height (in ft. and in.)') }}
                <br>
                {{ $user->height }}
              </div>

              <div class="col-md-6">
                {{ Form::label('Weight (in kg.)') }}
                <br>
                {{ $user->weight }}kg
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
</div>
@endforeach
<!-- VIEW USER -->

<!-- EDIT USER -->
@foreach($users as $user)

{{ Form::open(array('url'=>'edit-user')) }}

{{ Form::hidden('id',$user->id) }}

<div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="img/logo/logo_original.png" width=100px></h4>
      </div>
      <div class="modal-body">
        <div class="row">

                <div class="col-md-12">
                    <big><b><i class="fa fa-user"></i>&nbsp;&nbsp;Personal Information</b></big>
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-4">
                {{ Form::label('Employee ID') }}
                <br>
                {{ Form::text('employee_id',$user->employee_id,array('class'=>'form-control','placeholder'=>'Employee ID')) }}
              </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

              <div class="col-md-4">
                    
                {{ Form::label('Firstname') }}
                <br>
                {{ Form::text('firstname',$user->firstname,array('class'=>'form-control','placeholder'=>'Firstname')) }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Middlename') }}
                <br>
                {{ Form::text('middlename',$user->middlename,array('class'=>'form-control','placeholder'=>'Middlename')) }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Lastname') }}
                <br>
                {{ Form::text('lastname',$user->lastname,array('class'=>'form-control','placeholder'=>'Lastname')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-4">
                {{ Form::label('Home Number') }} <small><i>If Applicable</i></small>
                <br>
                {{ Form::text('home_contact',$user->home_contact,array('class'=>'form-control','placeholder'=>'Home Number')) }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Mobile Number') }}
                <br>
                {{ Form::text('mobile_contact',$user->mobile_contact,array('class'=>'form-control','placeholder'=>'Mobile Number')) }}
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
                {{ Form::text('birthplace',$user->birthplace,array('class'=>'form-control','placeholder'=>'Place of Birth')) }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Date of Birth') }}
                <br>
                <input type="date" name="birthdate" class="form-control" value="{{ $user->birthdate }}">
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
                {{ Form::textarea('address',$user->address,array('class'=>'form-control','placeholder'=>'Enter address here...','rows'=>6)) }}
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
                {{ Form::text('position',$user->position,array('class'=>'form-control','placeholder'=>'Job Position')) }}
              </div>

              <div class="col-md-8">
                    &nbsp;
                </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Eye Status') }}
                <br>
                {{ Form::select('eye_status',array(''=>'Select Eye Status','Normal'=>'Normal','Myopia'=>'Myopia','Farsightedness'=>'Farsightedness','Astigmatism'=>'Astigmatism'),$user->eye_status,array('class'=>'form-control')) }}
              </div>


              <div class="col-md-6">
                {{ Form::label('Hearing Status') }}
                <br>
                {{ Form::select('hearing_status',array(''=>'Select Hearing Status','Normal'=>'Normal','Deaf'=>'Deaf'),$user->hearing_status,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Body Type') }}
                <br>
                {{ Form::select('body_type',array(''=>'Select Body Type','Slim'=>'Slim','Medium'=>'Medium','Overweight'=>'Overweight','Obese'=>'Obese'),$user->body_type,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('Blood Type') }}
                <br>
                {{ Form::select('blood_type',array(''=>'Select Blood Type','O'=>'O','A'=>'A','B'=>'B','AB'=>'AB'),$user->body_type,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Drinking') }}
                <br>
                {{ Form::select('drinking_status',array(''=>'Select Drinking Status','Yes'=>'Yes','No'=>'No','Occassionally'=>'Occassionally'),$user->drinking_status,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('How many bottles in 1 day?') }}
                <br>
                {{ Form::number('drinking_times',$user->drinking_times,array('class'=>'form-control','placeholder'=>'0','min'=>'0')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Smoking') }}
                <br>
                {{ Form::select('smoking_status',array(''=>'Select Smoking Status','Yes'=>'Yes','No'=>'No','Occassionally'=>'Occassionally'),$user->email,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('How many sticks in 1 day?') }}
                <br>
                {{ Form::number('smoking_times',$user->smoking_times,array('class'=>'form-control','placeholder'=>'0','min'=>'0')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Height (in ft. and in.)') }}
                <br>
                {{ Form::text('height',$user->height,array('class'=>'form-control','placeholder'=>'0\'0"')) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('Weight (in kg.)') }}
                <br>
                {{ Form::text('weight',$user->weight,array('class'=>'form-control','placeholder'=>'0.00kg')) }}
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
                {{ Form::email('email',$user->email,array('class'=>'form-control','placeholder'=>'Firstname')) }}
              </div>

              <div class="col-md-8">
                &nbsp;
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-12">
                <!-- <a href="{{ URL::to('edit-user/'.$user->id) }}" style="text-decoration:none;">  -->
                {{ Form::submit('Submit',array('class'=>'form-control btn btn-default')) }}
                <!-- </a> -->
              </div>

            </div>

            </div>
      </div>
    </div>
  </div>
</div>

{{ Form::close() }}

@endforeach
<!-- EDIT USER -->

<!-- CREATE USER -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="img/logo/logo_original.png" width=100px></h4>
      </div>
      <div class="modal-body">
        <div class="row">

        {{ Form::open(array('url'=>'add-user','files'=>'true')) }}

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

              <div class="col-md-6">
                {{ Form::label('Eye Status') }}
                <br>
                {{ Form::select('eye_status',array(''=>'Select Eye Status','Normal'=>'Normal','Myopia'=>'Myopia','Farsightedness'=>'Farsightedness','Astigmatism'=>'Astigmatism'),null,array('class'=>'form-control')) }}
              </div>


              <div class="col-md-6">
                {{ Form::label('Hearing Status') }}
                <br>
                {{ Form::select('hearing_status',array(''=>'Select Hearing Status','Normal'=>'Normal','Deaf'=>'Deaf'),null,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Body Type') }}
                <br>
                {{ Form::select('body_type',array(''=>'Select Body Type','Slim'=>'Slim','Medium'=>'Medium','Overweight'=>'Overweight','Obese'=>'Obese'),null,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('Blood Type') }}
                <br>
                {{ Form::select('blood_type',array(''=>'Select Blood Type','O'=>'O','A'=>'A','B'=>'B','AB'=>'AB'),null,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Drinking') }}
                <br>
                {{ Form::select('drinking_status',array(''=>'Select Drinking Status','Yes'=>'Yes','No'=>'No','Occassionally'=>'Occassionally'),null,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('How many bottles in 1 day?') }}
                <br>
                {{ Form::number('drinking_times',0,array('class'=>'form-control','placeholder'=>'0','min'=>'0')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Smoking') }}
                <br>
                {{ Form::select('smoking_status',array(''=>'Select Smoking Status','Yes'=>'Yes','No'=>'No','Occassionally'=>'Occassionally'),null,array('class'=>'form-control')) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('How many sticks in 1 day?') }}
                <br>
                {{ Form::number('smoking_times',0,array('class'=>'form-control','placeholder'=>'0','min'=>'0')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Height (in ft. and in.)') }}
                <br>
                {{ Form::text('height',null,array('class'=>'form-control','placeholder'=>'0\'0"')) }}
              </div>

              <div class="col-md-6">
                {{ Form::label('Weight (in kg.)') }}
                <br>
                {{ Form::text('weight',null,array('class'=>'form-control','placeholder'=>'0.00kg')) }}
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
                {{ Form::submit('Submit',array('class'=>'form-control btn btn-default')) }}
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
<!-- CREATE USER -->

<div class="container">

  <br><br>

  @if($errors->has())

        <div class="alert alert-dismissable alert-danger">

          <span class="glyphicon glyphicon-exclamation-sign"></span> Oops! There's an error while we were creating your account.

          @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

          @endforeach

        </div>

    @endif

  <button class="btn btn-default" data-toggle="modal" data-target="#myModal">Add User</button>

  <br><br>

	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
  <tr>
  <td><small><small>Employee ID</small></small></td>
  <td><small><small>Fullname</small></small></td>
  <td><small><small>Position</small></small></td>
  <td><small><small>Salary</small></small></td>
  <td><small><small>Email</small></small></td>
  <td><small><small>Address</small></small></td>
  <td><small><small>Contact</small></small></td>
  <td><small><small>Role</small></small></td>
  <td><small><small>Gender</small></small></td>
  <td><small><small>Actions</small></small></td>
  </tr>
  </thead>

  <tbody>
  @foreach($users as $user)
  <tr>
  <td><small><small>{{ $user->employee_id }}</small></small></td>
  <td><small><small>{{ $user->lastname }}, {{ $user->firstname }} {{ $user->middlename }}</small></small></td>
  <td><small><small>{{ $user->position }}</small></small></td>
  <td><small><small>{{ $user->salary }}</small></small></td>
  <td><small><small>{{ $user->email }}</small></small></td>
  <td><small><small>{{ $user->address }}</small></small></td>
  <td><small><small>{{ $user->mobile_contact }} <br> {{ $user->home_contact }}</small></small></td>
  <td><small><small>{{ $user->role }}</small></small></td>
  <td><small><small>{{ $user->gender }}</small></small></td>
  <td>
    <a href="#" data-toggle="modal" data-target="#viewModal{{ $user->id }}" style="text-decoration:none;">
    <input type='button' class='btn btn-xs btn-default' value="View">
    </a>

    <a href="#" data-toggle="modal" data-target="#editModal{{ $user->id }}" style="text-decoration:none;">
    <input type='button' class='btn btn-xs btn-default' value="Edit">
    </a>

    <a href="{{ URL::to('delete-user/'.$user->id) }}" style="text-decoration:none;">
    <input type='button' class='btn btn-xs btn-danger' value="Delete">
    </a>

  </td>
  </tr>
  @endforeach
  </tbody>

  </table>

</div>

<br><br>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/data_tables.js"></script>
<script src="assets/js/data_query_tables.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>