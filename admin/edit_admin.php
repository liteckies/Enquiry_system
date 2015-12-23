<?php
include_once 'includes/dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM admin WHERE id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $username= $_POST['username'];
 $email= $_POST['email'];
  // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE admin SET username='$username',email='$email' WHERE id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Admin Data Updated Successfully');
  window.location.href='admins.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating Admin data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: admins.php");
}
?>
<?php
  require('layout/sidebar.php')
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Add new admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">admin</li>
      </ol>
    </section>
     <!-- Main content --> 
    <!-- Main content --> 
    <div class="new_admin col-md-10">
    <div class="insert_admin" id="settings">
                <form  action="" method="POST" class="form-horizontal insert-course_inner">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Username</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $fetched_row['username']; ?>" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required>
                        </div>
                      </div>
                      <div class="upcancel_buttons">
                         <button type="submit" name="btn-update" class="btn btn-success btn-xs"> <div class="fa fa-edit"></div>UPDATE</button>
                         <button type="submit" name="btn-cancel" class="btn btn-danger btn-xs"> <div class="fa fa-warning"></div> Cancel</button>
                    </div>
                </form>
              </div>
   </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  require('layout/footer.php')
   ?>
