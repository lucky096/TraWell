<?php
	$u_name=$_GET["u_name"];
?>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
-->


 <!-- Custom CSS -->
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

</head>
<body>
  
<nav class="navbar navbar-default navbar-fixed-top">
   <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TRAWELL</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">NOTIFICATIONS <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Places">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">PRO_PIC</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $u_name;?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">SETTINGS</a></li>
            <li><a href="#">EDIT PROFILE</a></li>
            <li><a href="#">LOG OUT</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
         


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<div class="container-fluid">
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#plan.html">Plan A Trip</a>
                </li>
                <li>
                    <a href="#">Meet Your Solitary Friend</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       
                       
                        <br><br><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle</a>

                         <h1>Plan Your Trip !</h1>
                         <h3 align="center">Meet people travelling the same place as you are !!</h3>
                     <!--   <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true"> -->
  
  <div class="modal-body">
     <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Plan Your Trip</h1>
      </div> -->
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="post" action="searchmate.php">
          <div class="form-group">
              <input type="text" name="place" class="form-control input-lg" placeholder="Enter Place">
            </div>
             <div > <h4 align="center">You will be travelling ... </h4> </div>
            <div class="form-group">
               <div > From</div>
              <input type="date" name="d_from" class="form-control input-lg" placeholder="From Date Of Journey">
            </div>
            <div class="form-group">
               <div > To</div>
              <input type="date" name="d_to" class="form-control input-lg" placeholder="To Date Of Journey">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Search Your Mate">
			  <input type="hidden" value= <?php echo $u_name;?> name="u_name">
			</div></form>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
-->
</body>
</html>