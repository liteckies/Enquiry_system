<?php
  require('layout/sidebar.php')
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Other courses</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">others</li>
      </ol>
    </section>
     <!-- Main content --> 
     <div class="all-courses">
          <?php
         // set the query
            $result = mysql_query("SELECT * FROM courses");
            ?>
            <div class="courses_outer">
                 <div class="course_table">
                        <table id="example" class="table table-striped table-bordered display">
                            <thead class="table_header">
                              <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Category</th>
                                <th>Description </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                while( $row = mysql_fetch_assoc( $result ) ){
                                  echo
                                  "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['department']}</td>
                                    <td>{$row['category']}</td>
                                    <td>{$row['description']}</td>
                                  </tr>";
                                }
                              ?>
                            </tbody>
                        </table>
                     </div>
                   <!-- /.content -->
            </div>
       </div>
   </div>
  <!-- /.content-wrapper -->
  <!-- /.content -->
  </div>
  <script>
  $(function () {
    $('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/footer.php')
?>
