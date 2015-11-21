<?php
  require('layout/sidebar.php')
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <div class="admin-main">
          <div class="row">
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php
                        $link = mysql_connect("localhost", "root", "root");
                        mysql_select_db("TUMENQUIRY-DB", $link);

                        $result = mysql_query("SELECT * FROM courses", $link);
                        $num_rows = mysql_num_rows($result);

                        echo "$num_rows";?></h3>

                  <p>Available courses</p>
                </div>
                <div class="icon">
                  <i class="fa fa-graduation-cap"></i>
                </div>
                <a href="others.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
               <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3><?php
                        $link = mysql_connect("localhost", "root", "root");
                        mysql_select_db("TUMENQUIRY-DB", $link);

                        $result = mysql_query("SELECT * FROM members", $link);
                        $num_rows = mysql_num_rows($result);

                        echo "$num_rows";?></h3>

                    <p>Users Registered</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-users"></i>
                  </div>
                  <a href="users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3><?php
                        $link = mysql_connect("localhost", "root", "root");
                        mysql_select_db("TUMENQUIRY-DB", $link);

                        $result = mysql_query("SELECT * FROM enquiries", $link);
                        $num_rows = mysql_num_rows($result);

                        echo "$num_rows";?></h3>

                    <p>Enquiries</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-bell-o"></i>
                  </div>
                  <a href="messages.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
    </div>
     
  </div>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/footer.php')
?>
