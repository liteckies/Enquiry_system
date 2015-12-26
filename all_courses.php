<?php
  include('layout/sidebar.php')
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Add extra course</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">all courses</li>
      </ol>
    </section>
     <!-- Main content --> 
        <div class="courses_outer">
             <div class="course_table">
                    <table id="example" class="table table-striped table-bordered display">
                        <thead class="table_header">
                          <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Category</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              $sql_query="SELECT * FROM courses";
                              $result_set=mysql_query($sql_query);
                              while($row=mysql_fetch_row($result_set))
                             {
                                ?>
                             <tr>
                              <td><?php echo $row[1]; ?></td>
                              <td><?php echo $row[2]; ?></td>
                              <td><?php echo $row[3]; ?></td>
                            </tr>
                             <?php
                                  }
                                ?>
                        </tbody>
                    </table>
                 </div>
                 <td> <button class="btn btn-block btn-warning btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">More info about Courses <div class="fa fa-angle-double-right "></div> </button>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                      <div class="courses_out">
                                          <div class="courseinfo_table">
                                              <table id="example" class="table table-striped table-hover display">
                                                  <thead class="table_header">
                                                    <tr>
                                                      <th>Course Name</th>
                                                      <th>Duration</th>
                                                      <th>Qualifications</th>
                                                      <th>Fees (Ksh) </th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php
                                                        $sql_query="SELECT * FROM courses_info";
                                                        $result_set=mysql_query($sql_query);
                                                        while($row=mysql_fetch_row($result_set))
                                                       {
                                                          ?>
                                                       <tr>
                                                        <td><?php echo $row[1]; ?></td>
                                                        <td><?php echo $row[2]; ?></td>
                                                        <td><?php echo $row[3]; ?></td>
                                                        <td><?php echo $row[4]; ?></td>
                                                      </tr>
                                                       <?php
                                                            }
                                                          ?>
                                                  </tbody>
                                                 
                                              </table>
                                         </div>
                                     </div>
                                </div>
                                  </div>
                      </div>
                              </td>
               <!-- /.content -->
        </div>
   </div>
   <script>
  $(function () {
    $('#example').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/members_pagefooter.php')
?>
