<?php
  require('layout/sidebar.php')
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>System users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">users</li>
      </ol>
    </section>
     <!-- Main content --> 
    <!-- Main content --> 
      <?php
     @$db = mysql_pconnect("localhost", "root", "root");
          //checking connecting
        if (!$db)
              {
                  echo "Error: Could not connect to database, Please try again.";
              }            
              //selecting database to use among the databases in phpmyadmin
              $mysql = mysql_select_db("TUMENQUIRY-DB");
              if(!$mysql)
              {
                echo "Cannot select database.";
              }
     // set the query
        $result = mysql_query("SELECT * FROM members");
        ?>
        <div class="courses_outer">
             <div class="course_table">
                    <table id="example" class="table table-striped table-bordered display">
                        <thead class="table_header">
                          <tr>
                            <th>id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            while( $row = mysql_fetch_assoc( $result ) ){
                              echo
                              "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['username']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['password']}</td>
                              </tr>";
                            }
                          ?>
                        </tbody>
                    </table>
                 </div>
               <!-- /.content -->
        </div> 

      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/footer.php')
?>