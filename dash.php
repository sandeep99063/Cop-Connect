<!DOCTYPE html>
<!-- AIzaSyDOvTlviHYtInfYXVjrQjmDIWgaw48PcsU -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>KPolice | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <script>
 $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
 </script>
<!-- Start  -->
<script>
 function load (argument) {

    $.ajax({url: "https://api.mongolab.com/api/1/databases/accident_info/collections/case_info?&c=true&apiKey=fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD", success: function(crashed){
  
      $(".crash").html(crashed);
        
        
    }});
  $.ajax({url: "https://api.mongolab.com/api/1/databases/accident_info/collections/news_feed?c=true&apiKey=fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD", success: function(res){
  
      $(".ne").html(res);
        
        
    }});
   
     $.ajax({url: "https://api.mongolab.com/api/1/databases/accident_info/collections/case_info?&q={%22case_data.progress_scale%22:%221%22}&c=true&apiKey=fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD", success: function(newreq){
    
      $(".new").html(newreq);
        
        
    }});
     $.ajax({url: "https://api.mongolab.com/api/1/databases/accident_info/collections/user_info?&c=true&apiKey=fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD", success: function(newuser){
    
      $(".userba").html(newuser);
        
        
    }});
    
    }
    </script>
<!-- Stop  -->

<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDOvTlviHYtInfYXVjrQjmDIWgaw48PcsU"></script>


<script>
function initialize() {
  var pyrmont = new google.maps.LatLng(12.9432896,77.528862);

  var map = new google.maps.Map(document.getElementById('worldMap'), {
    center: pyrmont,
    zoom: 13,
    scrollwheel: true
  });

  // Specify location, radius and place types for your Places API search.
  var request = {
    location: pyrmont,
    radius: '8000',
    types: ['police']
  };

  // Create the PlaceService and send the request.
  // Handle the callback with an anonymous function.
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, function(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        var place = results[i];
        // If the request succeeds, draw the place location on
        // the map as a marker, and register an event to handle a
        // click on the marker.
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });
      }
    }
  });
}

// Run the initialize function when the window has finished loading.
google.maps.event.addDomListener(window, 'load', initialize);
</script>
    </head>
    <body class="skin-blue" onload="load()">
        <div class="se-pre-con"></div>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="home.html" class="logo">
                <img src="img/logo1.jpg" class="img-circle" alt="User Image" width="35" height="35"/>
                Karnataka Police
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                       
                                        
                        
                        
      <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Manish Gautam <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/mani.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Manish Gautam
                                        <small>Member since Nov. 2015</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                               
                                <!-- Menu Footer-->
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/mani.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Manish</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="home.html">
                                <i class="fa fa-home"></i> <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="solve.html">
                                <i class="fa fa-check-square-o"></i> <span>Solved Case</span> 
                            </a>
                        </li>
                       <li>
                            <a href="request.html">
                                <i class="fa fa-plus-square-o"></i> <span>New Request</span>
                            </a>
                        </li>
                        <li>
                            <a href="on.html">
                                <i class="fa fa-exchange"></i> <span>Ongoing Case/Request</span>
                            </a>
                        </li>
                        <li>
                            <a href="anl.html">
                                <i class="fa fa-qrcode fa-lg"></i> <span>Analysis</span>
                            </a>
                        </li>
                          <li>
                            <a href="social.html">
                                <i class="fa fa-envelope "></i> <span>Social</span>
                            </a>
                        </li>
                         <li>
                            <a href="station.html">
                                <i class="fa fa-building-o"></i> <span>Police Station</span>
                            </a>
                        </li>
                        <li>
                            <a href="user.php">
                                <i class="fa fa-user"></i> <span>Registered User</span>
                            </a>
                        </li>
                        
                      
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3 class="new">
                                       
                                    </h3>
                                    <p>
                                        New Requests
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-mail"></i>
                                </div>
                                <a href="request.html" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 class="ne">
                                        
                                    </h3>
                                    <p>
                                        Newsfeed
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="social.html" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 class="userba">
                                        
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-contact"></i>
                                </div>
                                <a href="user.php" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3 class="crash">
                                      
                                    </h3>
                                    <p>
                                        Crashed Vehicle
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-model-s"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                    <section class="col-lg-12 connectedSortable">
                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                  
                                    <i class="fa fa-map-marker"></i>
                                    <h3 class="box-title">
                                        Karnataka Map
                                    </h3>
                                </div>
                                <div class="box-body no-padding">
                                    <div id="worldMap" style="height: 400px;"></div>
                                    
                               </div>
                        </section>
                    <!-- /.row -->

                </section>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>      
           <script src="js/modernizr.js" type="text/javascript"></script>
            <script src="js/jq.js" type="text/javascript"></script>  

    </body>
</html>