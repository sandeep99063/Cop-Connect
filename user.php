<!DOCTYPE html>
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
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/RGraph.common.core.js" ></script>
    <script src="js/RGraph.common.effects.js" ></script>
    
    <script src="js/RGraph.bar.js" ></script>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <style>
  .das{
  margin-left:140px;
  }
  </style>
  <script>
 $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
 </script>
 
 <script type="text/javascript">
 
 function load (argument) {

    $.ajax({url: "https://api.mongolab.com/api/1/databases/accident_info/collections/user_info?f={%22_id%22:0,%22user_data%22:1,%22user_data.name%22:1,%22user_data.id%22:1,%22user_data.email%22:1,%22user_data.contact_no%22:1}&apiKey=fbLkdET5dnRx-7ZZzlcHkvAOnWFeXTuD", success: function(result){
      
        drawTable(result);
        
        
    }});
    // body...



function drawTable(data) {
    var j=0;
    for (var i = 0; i < data.length; i++) {
        drawRow(data[i]);
     

    }

}




function drawRow(rowData) {
    var row = $("<tr />")
    $("#tabi").append(row); 
    row.append($("<td>" + rowData.user_data[0].id + "</td>"));
    row.append($("<td>" + rowData.user_data[0].name + "</td>"));
    row.append($("<td>" + rowData.user_data[0].email + "</td>"));
    row.append($("<td>" + rowData.user_data[0].contact_no + "</td>"));
    row.append( $("<td>" +'<button type="button" class="btn btn-success " onclick=calling("'+rowData.user_data[0].id+'") data-toggle="modal" data-target="#">User Brief</button>'+ "</td>"));
      }
     


}

  function calling(val1)
{

window.open("http://code.theonecoders.in/profile.html?userID="+val1,'_blank');


}

</script>


    </head>
    <body class="skin-blue" onload="load()">
        <div class="se-pre-con"></div>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="dash.php" class="logo">
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
                            <p> Manish</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                     <li >
                            <a href="dash.php">
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
  
    	<div class="container ">
			<h1 align="center">Registered User Information</h1>
			<div class="component col-xs-12 col-md-8 das">
				
				<table id="tabi">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>More Info</th>
						</tr>
					</thead>
				
				</table>
			</div>
				
		</div><!-- /container -->


		 
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
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>

    </body>
</html>