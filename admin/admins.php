<?php
include_once 'includes/dbconfig.php';

// delete condition
if(isset($_GET['id']))
{
 $sql_query="DELETE FROM admin WHERE id=".$_GET['id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<script type="text/javascript">
function edit_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_admin.php?edit_id='+id;
 }
}
function id(id)
{
 if(confirm('Sure to Delete this admin ?'))
 {
  window.location.href='admins.php?id='+id;
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
        <small>Registered administrators</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">admins</li>
      </ol>
    </section>
     <!-- Main content --> 
    <!-- Main content --> 
    <div class="all-users col-md-10">
      <?php
         // set the query
        $result = mysql_query("SELECT * FROM admin");
        ?>
        <div class="admins_outer">
             <div class="course_table">
                    <table id="example" class="table table-striped table-bordered display">
                        <thead class="table_header">
                          <tr>
                            <th>Username</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php
                              $sql_query="SELECT * FROM admin";
                              $result_set=mysql_query($sql_query);
                              while($row=mysql_fetch_row($result_set))
                             {
                                ?>
                             <tr>
                              <td><?php echo $row[1]; ?></td>
                              <td><?php echo $row[2]; ?></td>
                              <td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-success btn-xs"> <div class="fa fa-edit"></div> Edit</button></a></td>
                              <td align="center"><a href="javascript:id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-danger btn-xs"><div class="fa  fa-trash-o"></div> Remove</button></a></td>
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
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/footer.php')
?>
