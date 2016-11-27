<html>
<head>
<title>Cognizant
</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/data_tables.css">
<link rel="shortcut icon" href="assets/img/Company/logo.png">
<style>
nav.navbar-findcond { background: #fff; border-color: #ccc; box-shadow: 0 0 2px 0 #ccc; }
nav.navbar-findcond a { color: #231f20; }
nav.navbar-findcond ul.navbar-nav a { color: #231f20; border-style: solid; border-width: 0 0 2px 0; border-color: #fff; }
nav.navbar-findcond ul.navbar-nav a:hover,
nav.navbar-findcond ul.navbar-nav a:visited,
nav.navbar-findcond ul.navbar-nav a:focus,
nav.navbar-findcond ul.navbar-nav a:active { background: #fff; }
nav.navbar-findcond ul.navbar-nav a:hover { border-color: #231f20; }
nav.navbar-findcond li.divider { background: #ccc; }
nav.navbar-findcond button.navbar-toggle { background: #231f20; border-radius: 2px; }
nav.navbar-findcond button.navbar-toggle:hover { background: #999; }
nav.navbar-findcond button.navbar-toggle > span.icon-bar { background: #fff; }
nav.navbar-findcond ul.dropdown-menu { border: 0; background: #fff; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
nav.navbar-findcond ul.dropdown-menu > li > a { color: #444; }
nav.navbar-findcond ul.dropdown-menu > li > a:hover { background: #231f20; color: #fff; }
nav.navbar-findcond span.badge { background: #231f20; font-weight: normal; font-size: 11px; margin: 0 4px; }
nav.navbar-findcond span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }
</style>
<body>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cognizant</h4>
      </div>
      <div class="modal-body">
        <div class="row">

        {{ Form::open(array('url'=>'add-event-point')) }}

                <div class="col-md-12">
                    <big><b><span class="glyphicon glyphicon-qrcode"></span>&nbsp;&nbsp;Event Point Equivalent</b></big>
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-6">
                <select name="event_id" class="form-control">
                <option value=''>Select Event</option>
                @foreach($events as $event)
                <option value={{ $event->id }}>{{ $event->title }}</option>
                @endforeach
                </select>
                </div>


                <div class="col-md-6">
                    &nbsp;
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>

                <div class="col-md-12">
                {{ Form::label('Points Equivalent') }}
                <br>
                {{ Form::number('points_equiv',null,array('class'=>'form-control','placeholder'=>'0')) }}
                </div>

                <div class="col-md-12">
                    &nbsp;
                </div>


              <div class="col-md-12">
                {{ Form::submit('Add Event Point Equivalent',array('class'=>'form-control btn btn-default')) }}
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

<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">Cogni<b>zant</b></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ URL::to('manage-users') }}"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Manage Users</a></li>
            	<li><a href="{{ URL::to('manage-events') }}"><span class="glyphicon glyphicon-qrcode"></span>&nbsp;&nbsp;&nbsp;Manage Events</a></li>
              <li><a href="{{ URL::to('manage-venues') }}"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;&nbsp;Manage Venues</a></li>

              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;{{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <span class="caret"></span></a>
              <ul class="dropdown-menu">

                <li><a href="{{ URL::to('view-profile/'.Auth::user()->id) }}">View Profile</a></li>
                <li><a href="{{ URL::to('edit-profile/'.Auth::user()->id) }}">Edit Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ URL::to('logout') }}">Log Out</a></li>
              </ul>

            </li>

            </ul>
        </div>
    </div>
</nav>

<br><br><br><br>

<div class="container">

  @if($errors->has())

        <div class="alert alert-dismissable alert-danger">

          <span class="glyphicon glyphicon-exclamation-sign"></span> Oops! There's an error while we were creating your account.

          @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

          @endforeach

        </div>

    @endif

  <button class="btn btn-default" data-toggle="modal" data-target="#myModal">Add Event Point Equivalent</button>

  <br><br>

	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
  <tr>
  <td><small><small>Title</small></small></td>
  <td><small><small>Address</small></small></td>
  <td><small><small>Actions</small></small></td>
  </tr>
  </thead>

  <tbody>
  @foreach($events as $event)
  <tr>
  <td><small><small>{{ $event->title }}</small></small></td>
  <td><small><small>{{ $event->title }}</small></small></td>
  <td>
    <a href="{{ URL::to('view-venue/'.$event->id) }}" style="text-decoration:none;">
    <input type='button' class='btn btn-xs btn-default' value="View">
    </a>

    <a href="{{ URL::to('edit-venue/'.$event->id) }}" style="text-decoration:none;">
    <input type='button' class='btn btn-xs btn-default' value="Edit">
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