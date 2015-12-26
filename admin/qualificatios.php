<?php
  require('layout/sidebar.php');
  include_once 'includes/dbconfig.php';
   if(isset($_POST['submit']))
{
 // variables for input data
 $name = $_POST['name'];
 $duration = $_POST['duration'];
 $qualification= $_POST['qualification'];
  $fees= $_POST['fees'];
 // variables for input data
 // sql query for inserting data into database
 $sql_query = "INSERT INTO courses_info(course_name,duration,qualifications,fees) VALUES('$name','$duration','$qualification','$fees')";
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
        <small>Qualifications</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Qualifications</li>
      </ol>
    </section>
     <!-- Main content --> 
    <!-- Main content --> 
    <div class="new_admin col-md-10">
    <div class="insert_admin" id="settings">
                <form  action="" method="POST" class="form-horizontal insert-course_inner">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Course Name</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" placeholder="course name" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Duration</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="duration" placeholder="duration" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Qualification</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="qualification" placeholder="course qualifications" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Fees</label>

                        <div class="col-sm-10"> 
                          <input type="password" class="form-control" name="fees" placeholder="course fees" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-danger">Insert Qualification  <i class="fa fa-arrow-circle-right"></i></button>
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
