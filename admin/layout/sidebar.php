<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ecourse | admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="assets/img/eco/tumfavicon.png">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bootstrap/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/green.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>dmin</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin </b>Ecourse</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="messages-menu">
              <a href="messages.php" class="enquiries">
                  <i class="fa fa-envelope-o" title="messages to read"></i>
                  <span class="label label-success">
                      <?php
                          $link = mysql_connect("localhost", "root", "root");
                          mysql_select_db("TUMENQUIRY-DB", $link);
                          $result = mysql_query("SELECT * FROM enquiries", $link);
                          $num_rows = mysql_num_rows($result);
                          echo "$num_rows";
                       ?>
                   </span>
               </a>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
             <a href="users.php" class="enquiries">
                  <i class="fa fa-users" title="messages to read"></i>
                  <span class="label label-warning">
                      <?php
                          $link = mysql_connect("localhost", "root", "root");
                          mysql_select_db("TUMENQUIRY-DB", $link);
                          $result = mysql_query("SELECT * FROM members", $link);
                          $num_rows = mysql_num_rows($result);
                          echo "$num_rows";
                       ?>
                   </span>
               </a>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
             <a href="users.php" class="enquiries">
                  <i class="fa fa-" title="messages to read"></i>
                  <span class="label label-danger">
                      <?php
                          $link = mysql_connect("localhost", "root", "root");
                          mysql_select_db("TUMENQUIRY-DB", $link);
                          $result = mysql_query("SELECT * FROM members", $link);
                          $num_rows = mysql_num_rows($result);
                          echo "$num_rows";
                       ?>
                   </span>
               </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"> <i class="fa fa-user"></i> Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat"><i class="fa fa-fw fa-power-off"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=" col-md-2 main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Welcome, admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="members_page.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li>
          <a href="myaccount.php">
            <i class="fa fa-user"></i> <span>My Account</span>
          </a>
        </li>
        <li>
          <a href="users.php">
            <i class="fa fa-users"></i> <span>users</span>
          </a>
        </li>
         <li>
          <a href="noticeboard.php">
            <i class="fa fa-bars"></i> <span>Notice Board</span>
          </a>
        </li>
        <li>
          <a href="news.php">
            <i class="fa fa-newspaper-o"></i> <span>News</span>
          </a>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-cogs"></i>
            <span>Engineering Courses</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="certificate.php"><i class="fa fa-circle-o"></i>Certificate</a></li>
            <li><a href="diploma.php"><i class="fa fa-circle-o"></i>Diploma</a></li>
            <li><a href="degree.php"><i class="fa fa-circle-o"></i> Degree</a></li>
            <li><a href="others.php"><i class="fa fa-circle-o"></i> Others</a></li>
            <li><a href="addcourse.php"><i class="fa fa-circle-o"></i>Add course</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="messages.php">
            <i class="fa fa-envelope-o"></i>
            <span>Enquiries</span>
          </a>
        </li>
      </section>
    <!-- /.sidebar -->
  </aside>
  