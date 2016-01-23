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
    <div class="all-users col-md-10">
      <?php
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
                              </tr>";
                            }
                          ?>
                        </tbody>
                    </table>
                 </div>
               <!-- /.content -->
        </div> 
   </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/footer.php')
?>
