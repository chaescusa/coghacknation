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


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="img/logo/logo_original.png" width=100px></h4>
      </div>
      <div class="modal-body">
        <div class="row">

        {{ Form::open(array('url'=>'add-event','files'=>true)) }}

                <div class="col-md-12">
                    <big><b><span class="fa fa-qrcode"></span>&nbsp;&nbsp;Event</b></big>
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-6">
                {{ Form::label('Event Title') }}
                <br>
                {{ Form::text('title',null,array('class'=>'form-control','placeholder'=>'Event Name')) }}
                </div>


                <div class="col-md-6">
                    &nbsp;
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-6">
                {{ Form::label('Event Category') }}
                <br>
                <select name="category" class="form-control">
                  <option value="">Select Category</option>
                  <option value="Travel">Travel</option>
                  <option value="Sports">Sports</option>
                  <option value="Food">Food</option>
                  <option value="Technology">Technology</option>
                  <option value="Recreation">Recreation</option>
                </select>
                </div>


                <div class="col-md-6">
                    &nbsp;
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-12">
                {{ Form::label('Event Description') }}
                <br>
                {{ Form::textarea('description',null,array('class'=>'form-control','placeholder'=>'Enter description here...')) }}
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-6">
                {{ Form::label('Event Image Photo') }}
                <br>
                {{ Form::file('image') }}
                </div>

                <div class="col-md-6">
                    &nbsp;
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-6">
                    {{ Form::label('Maximum Number Allowed') }}
                <br>
                {{ Form::number('maxnum',null,array('class'=>'form-control','placeholder'=>'0')) }}
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>


              <div class="col-md-6">
                    
                {{ Form::label('Event Venue') }}
                <br>
                <select name="venue" class="form-control">
                <option value=''>Select Venue</option>
                @foreach($venues as $venue)
                <option value={{ $venue->id }}>{{ $venue->title }}</option>
                @endforeach
                </select>
              </div>

              <div class="col-md-6">
                {{ Form::label('Points Equivalent') }}
                <br>
                {{ Form::number('points',null,array('class'=>'form-control','placeholder'=>'0')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                    
                {{ Form::label('From Date') }}
                <br>
                <input name="from_date" type="date" class="form-control">
              </div>

              <div class="col-md-6">
                {{ Form::label('To Date') }}
                <br>
                <input name="to_date" type="date" class="form-control">
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Eye Health Status') }}
                <br />
                <select name="eye_status" class="form-control">
                  <option value="Normal">Normal</option>
                  <option value="Myopia">Myopia</option>
                  <option value="Farsightedness">Farsightedness</option>
                  <option value="Astigmatism">Astigmatism</option>
                </select>
              </div>

              <div class="col-md-6">
                {{ Form::label('Hearing Health Status') }}
                <br />
                <select name="hearing_status" class="form-control">
                  <option value="Normal">Normal</option>
                  <option value="Deaf">Deaf</option>
                </select>
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Drinking Status') }}
                <br />
                <select name="drinking_status" class="form-control">
                  <option value="Yes">Yes</option>
                  <option value="Occationally">Occationally</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="col-md-6">
                {{ Form::label('Bottle limit') }}
                <br />
                <input type="number" min=0 value=0 name="drinking_times" class="form-control">
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Smoking Status') }}
                <br />
                <select name="smoking_status" class="form-control">
                  <option value="Yes">Yes</option>
                  <option value="Occationally">Occationally</option>
                  <option value="No">No</option>
                </select>
              </div>

              <div class="col-md-6">
                {{ Form::label('Cigarette limit') }}
                <br />
                <input type="number" min=0 value=0 name="smoking_times" class="form-control">
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-6">
                {{ Form::label('Body type') }}
                <br />
                <select name="body_type" class="form-control">
                  <option value="Slim">Slim</option>
                  <option value="Medium">Medium</option>
                  <option value="Overweight">Overweight</option>
                  <option value="Obese">Obese</option>
                </select>
              </div>

              <div class="col-md-6">
                &nbsp;
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-12">
                {{ Form::submit('Add Event',array('class'=>'form-control btn btn-default')) }}
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
<!-- Modal -->

<!-- VIEW event -->
@foreach($events as $event)
<div class="modal fade" id="viewModal{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="img/logo/logo_original.png" width=100px></h4>
      </div>
      <div class="modal-body">
        <div class="row">

                <div class="col-md-12">
                    <big><b><span class="fa fa-qrcode"></span>&nbsp;&nbsp;View Event</b></big>
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-4">
                {{ Form::label('Event') }}
                <br>
                <img src="{{ $event->image }}" width=90%>
              </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

              <div class="col-md-4">
                    
                {{ Form::label('Event Title') }}
                <br>
                {{ $event->title }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Description') }}
                <br>
                {{ $event->description }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Status') }}
                <br>
                {{ $event->status }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-4">
                {{ Form::label('Maximum Number Allowed') }}
                <br>
                {{ $event->max }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Point Equivalent') }}
                <br>
                {{ $event->points }}
              </div>
              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-12">
                <a href="{{ URL::to('view-attendees/'.$event->id) }}" style="text-decoration:none;"> 
                {{ Form::button('View Attendees',array('class'=>'form-control btn btn-default')) }}
                </a>
              </div>

            </div>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- VIEW event -->

<!-- EDIT event -->
@foreach($events as $event)

{{ Form::open(array('url'=>'edit-event')) }}

{{ Form::hidden('id',$event->id) }}

<div class="modal fade" id="editModal{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><img src="img/logo/logo_original.png" width=100px></h4>
      </div>
      <div class="modal-body">
        <div class="row">

                <div class="col-md-12">
                    <big><b><span class="fa fa-qrcode"></span>&nbsp;&nbsp;Edit Event</b></big>
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <!-- <div class="col-md-4">
                {{ Form::label('Event') }}
                <br>
                {{ Form::text('event',$event->event_id,array('class'=>'form-control','placeholder'=>'Event ID')) }}
              </div> -->

                <div class="col-md-12">
                    &nbsp;
                </div>

              <div class="col-md-4">
                    
                {{ Form::label('Event Title') }}
                <br>
                {{ Form::text('title',$event->title,array('class'=>'form-control','placeholder'=>'Title')) }}
              </div>

              <div class="col-md-4">
                {{ Form::label('Event Description') }}
                <br>
                {{ Form::text('description',$event->description,array('class'=>'form-control','placeholder'=>'Description')) }}
              </div>

              <div class="col-md-4">
                &nbsp;
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-4">
                {{ Form::label('From Date') }}
                <br>
                {{ Form::text('from_date',$event->from_date,array('class'=>'form-control','placeholder'=>'From Date')) }}
              </div>

              <div class="col-md-4">
                {{ Form::label('To date') }} <small></small>
                <br>
                {{ Form::text('to_date',$event->to_date,array('class'=>'form-control','placeholder'=>'To Date')) }}
              </div>

              <div class="col-md-4">
                &nbsp;
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>

              <div class="col-md-4">
                {{ Form::label('Point Equivalent') }} <small></small>
                <br>
                {{ Form::text('points',$event->points,array('class'=>'form-control','placeholder'=>'Point Equivalent')) }}
              </div>

              <div class="col-md-12">
                &nbsp;
              </div>


              <div class="col-md-12">
                <!-- <a href="{{ URL::to('edit-user/'.$event->id) }}" style="text-decoration:none;">  -->
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
<!-- EDIT event -->

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

  <button class="btn btn-default" data-toggle="modal" data-target="#myModal">Add Event</button>

  <br><br>

	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
  <tr>
  <td><small><small>Event</small></small></td>
  <td><small><small>Title</small></small></td>
  <td><small><small>Category</small></small></td>
  <td><small><small>From - To</small></small></td>
  <td><small><small>Status</small></small></td>
  <td><small><small>Actions</small></small></td>
  </tr>
  </thead>

  <tbody>
  @foreach($events as $event)
  <tr>
  <td><small><small><img src="{{ $event->image }}" width=200px></small></small></td>
  <td><small><small>{{ $event->title }}</small></small></td>
  <td><small><small>{{ $event->category }}</small></small></td>
  <td><small><small>{{ $event->from_date }} - {{ $event->to_date }}</small></small></td>
  <td><small><small>{{ $event->status }}</small></small></td>
  <td>
    <a href="#" data-toggle="modal" data-target="#viewModal{{ $event->id }}" style="text-decoration:none;">
    <input type='button' class='btn btn-xs btn-default' value="View">
    </a>

    <a href="#" data-toggle="modal" data-target="#editModal{{ $event->id }}" style="text-decoration:none;">
    <input type='button' class='btn btn-xs btn-default' value="Edit">
    </a>

    <a href="{{ URL::to('delete-event/'.$event->id) }}" style="text-decoration:none;">
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