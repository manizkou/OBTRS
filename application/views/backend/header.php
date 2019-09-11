<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OBTRS</title>

    <!-- Bootstrap Core CSS -->
     <link href="<?php echo base_url(); ?>assets/backend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap table css -->
     <link href="<?php echo base_url(); ?>assets/backend/bootstrap/css/bootstrap-table.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/backend/bootstrap/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/backend/bootstrap/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/backend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- for select -->
    <link href="<?php echo base_url(); ?>assets/backend/select/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/jquery-ui/jquery-ui.css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url(); ?>assets/backend/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>


</head>
<style type="text/css">
    .custom-nav{
        background-color: #558C89;
    }
    .navbar-color{
        background-color:  #558C89;

    }
    .navbar-color a{
        color: white;
  
        
    }
    nav > ul >li > a:hover{
        background-color: blue;
    }
    a.dropdown-toggle:hover{
        background-color: #74AFAD !important;
    }
    a.dropdown-toggle:focus{
        background-color: #74AFAD !important;
    }


</style>
<body style="background-color:#dde0dd;">

    <div id="wrapper"  >

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top custom-nav" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>backend/home" style="color:white">Online Bus Ticket Reservation</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white">
                        <i class="fa fa-user fa-fw"></i> Welcome <?php echo $this->session->userdata('username');?>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $this->session->userdata('username');?> Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>backend/adminlogin/admin_logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="down">
        <div class="navbar-color sidebar" role="navigation" >
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu" >
                   
                    <li>
                    <a href="#"><i class="fa fa-bus fa-fw"></i> Busses<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                         <li>
                                <a href="<?php echo base_url(); ?>backend/busmanage/viewbus">View Buses</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>backend/busmanage/addbus">Add Bus</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>backend/busmanage/bustype">Add Bus Type</a>
                            </li>
                        </ul>
                       
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-road fa-fw"></i>Routes<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                             <li>
                                 <a href="<?php echo base_url();?>backend/routemanage/viewroute">View Routes</a>
                             </li>
                             <li>
                                 <a href="<?php echo base_url();?>backend/routemanage/addroute">Add Routes</a>
                             </li>
                          </ul>
                    </li>

                     <li>
                        <a href="#"><i class="fa fa-clock-o fa-fw"></i>Schedule<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                             <li>
                                 <a href="<?php echo base_url();?>backend/schedule/viewschedule">Schedule Timetable</a>
                             </li>
                             <li>
                                 <a href="<?php echo base_url();?>backend/schedule">Add Schedule Date</a>
                             </li>
                          </ul>
                    </li>
                    <li>
                         <a href="<?php echo base_url();?>backend/booking_details"><i class="fa fa-ticket fa-fw"></i> Bookings Details</a>
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-hand-pointer-o fa-fw"></i>Sub-Route Details<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                             <li>
                                 <a href="<?php echo base_url();?>backend/boardingdetails/viewboarding">View Sub-Route</a>
                             </li>
                             <li>
                                 <a href="<?php echo base_url();?>backend/boardingdetails/addboard">Add Sub-Routes</a>
                             </li>
                          </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-tint fa-fw"></i>Pickup Point Details<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                             <li>
                                 <a href="<?php echo base_url();?>backend/pickup/viewpickup">View Pickup points</a>
                             </li>
                             <li>
                                 <a href="<?php echo base_url();?>backend/pickup/addpickup">Add Pickup points</a>
                             </li>
                          </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-tint fa-fw"></i>Dropping Point Details<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                             <li>
                                 <a href="<?php echo base_url();?>backend/droppingdetails/viewdropping">View Drop points</a>
                             </li>
                             <li>
                                 <a href="<?php echo base_url();?>backend/droppingdetails/adddrop">Add Drop points</a>
                             </li>
                          </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-trash fa-fw"></i>Cancelation<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                             <li>
                                 <a href="<?php echo base_url();?>backend/cancel">View All</a>
                             </li>
                             <li>
                                 <a href="addcancel.php">Add New</a>
                             </li>
                          </ul>
                    </li>
                     <li>
                        <a href="<?php echo base_url();?>backend/gallerymanage/gallery"><i class="fa fa-photo fa-fw"></i> Gallery</a>
                    </li>
                   
                    <li>
                        <a href="<?php echo base_url();?>backend/report"><i class="fa fa-edit fa-fw"></i> Reports</a>
                        
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>backend/seatlayout"><i class="fa fa-edit fa-fw"></i>Seat Layout</a>
                        
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>backend/rating"><i class="fa fa-star fa-fw"></i>Rating</a>
                        
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>backend/users/viewuser">View All Users</a>
                            </li>
                            <li>
                                <a href="addusers.php">Add Users</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i>Owner Signup<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>backend/owner_info/viewowner">View All Bus Owner</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>backend/owner_info/addowner">Owner SignUp</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url();?>backend/adminlogin/admin_logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
