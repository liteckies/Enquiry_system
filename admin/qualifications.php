<?php
include_once 'includes/dbconfig.php';

// delete condition
if(isset($_GET['id']))
{
 $sql_query="DELETE FROM courses_info WHERE course_id=".$_GET['id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<script type="text/javascript">
function edit_id(id)
{
 if(confirm('Sure to edit this qualification?'))
 {
  window.location.href='edit_qualification.php?edit_id='+id;
 }
}
function id(id)
{
 if(confirm('Sure to Delete this qualification?'))
 {
  window.location.href='qualifications.php?id='+id;
 }
}
</script>
<?php
  require('layout/sidebar.php')
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Course Qualifications</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">qualifications</li>
      </ol>
    </section>
     <!-- Main content --> 
     <div class="all-courses">
            <div class="courses_outer">
                 <div class="course_table">
                        <table id="example" class="table table-striped table-bordered display">
                            <thead class="table_header">
                              <tr>
                                <th>Course Name</th>
                                <th>Duration</th>
                                <th>Qualifications</th>
                                <th>Fees</th>
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
                              <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-success btn-xs"> <div class="fa fa-edit"></div> Edit</button></a></td>
                              <td align="center"><a href="javascript:id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-danger btn-xs"><div class="fa  fa-warning"></div> Delete</button></a></td>
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
