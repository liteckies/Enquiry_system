<?php
  require('layout/sidebar.php');
  include_once 'includes/dbconfig.php';
   if(isset($_POST['submit']))
{
 // variables for input data
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password= $_POST['password'];
 // variables for input data
 // sql query for inserting data into database
 $sql_query = "INSERT INTO admin(username,email,password) VALUES('$username','$email','$password')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
 <script type="text/javascript">
  alert('Admin inserted successifully');
 window.location.href='admins.php'; 
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
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
                          <input type="text" class="form-control" name="username" placeholder="username" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password" placeholder="********" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-danger">Insert Admin  <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
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
