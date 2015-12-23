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
                              <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-success btn-xs">More info  <div class="fa fa-angle-double-right "></div></button></a></td>
                             </tr>
                             <?php
                                  }
                                ?>
                        </tbody>
                    </table>
                 </div>
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
