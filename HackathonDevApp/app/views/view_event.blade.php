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
                                    <a href="{{ URL::to('dashboard') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                                </li>

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

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <div id="content">
            <div class="container">
                <div class="row">
                    <!-- *** LEFT COLUMN ***
             _________________________________________________________ -->

                    <div class="col-md-9" id="blog-listing-big">

                        <section class="post">
                            <h2><a href="{{ URL::to('view-event/'.$event->id) }}">{{ $event->title }}</a></h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="author-category">By <a href="#">John Snow</a> in <a href="{{ URL::to('view-event/'.$event->id) }}">Webdesign</a>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="date-comments">
                                        <a href="#"><i class="fa fa-calendar-o"></i> {{ $event->from_date }} to {{ $event->to_date }}</a>
                                        <a href="#"><i class="fa fa-users"></i> 0 Attendees</a>
                                    </p>
                                </div>
                            </div>
                            <div class="image">
                                <a href="{{ URL::to('view-event/'.$event->id) }}">
                                    <img src="../{{ $event->image }}" class="img-responsive" alt="Example blog post alt">
                                </a>
                            </div>
                            <p class="intro">{{ $event->description }}</p>

                            {{ Form::open(array('url'=>'register-attendee')) }}

                            {{ Form::hidden('id',$event->id) }}

                            <p class="read-more">
                            
                            {{ Form::submit('Volunteer Event',array('class'=>'btn btn-primary')) }}
                            </p>

                            {{ Form::close() }}

                        </section>

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
             _________________________________________________________ -->

                    <div class="col-md-3">

                        <!-- *** MENUS AND WIDGETS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Text widget</h3>
                            </div>

                            <div class="panel-body text-widget">
                                <p>Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage mr be. Hold do at tore in park feet near my case.
                                </p>

                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Search</h3>
                            </div>

                            <div class="panel-body">
                                <form role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">

            <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="blog.html">Webdesign</a>
                                    </li>
                                    <li class="active"><a href="blog.html">Tutorials</a>
                                    </li>
                                    <li><a href="blog.html">Print</a>
                                    </li>
                                    <li><a href="blog.html">Our tips</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tags</h3>
                            </div>

                            <div class="panel-body">
                                <ul class="tag-cloud">
                                    <li><a href="#"><i class="fa fa-tags"></i> html5</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> css3</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> jquery</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> ajax</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> php</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> responsive</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> visio</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> bootstrap</a> 
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- *** MENUS AND FILTERS END *** -->

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->



</body>

</html>