<?php
include_once 'includes/dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM courses_info WHERE course_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $name = $_POST['name'];
 $duration = $_POST['duration'];
 $qualification= $_POST['qualification'];
  $fees= $_POST['fees'];
 // variables for input data
 // sql query for update data into database
 $sql_query = "UPDATE courses_info SET course_name='$name',duration='$duration',qualifications='$qualification', fees='$fees' WHERE course_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Qualification Updated Successfully');
  window.location.href='qualifications.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: qualifications.php");
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
                          <input type="text" class="form-control" name="name" placeholder="course name" value="<?php echo $fetched_row['course_name']; ?>" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Duration</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="duration" placeholder="duration" value="<?php echo $fetched_row['duration']; ?>"  required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Qualification</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="qualification" placeholder="course qualifications" value="<?php echo $fetched_row['qualifications']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Fees</label>

                        <div class="col-sm-10"> 
                          <input type="text" class="form-control" name="fees" placeholder="course fees" value="<?php echo $fetched_row['fees']; ?>" required>
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
