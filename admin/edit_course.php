<?php
include_once 'includes/dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM courses WHERE id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $name = $_POST['name'];
 $department= $_POST['department'];
 $category = $_POST['category'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE courses SET name='$name',department='$department',category='$category' WHERE id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='others.php';
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
 header("Location: others.php");
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
        <small>Insert courses</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">more courses</li>
      </ol>
    </section>
     <!-- Main content --> 
     <!-- /.tab-pane -->
     <div class="insert_course_outer">
          <div class="insert-course" id="settings">
                <form  action="" method="POST" class="form-horizontal insert-course_inner">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Course Name</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" value="<?php echo $fetched_row['name']; ?>" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Department</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="department"  value="<?php echo $fetched_row['department']; ?>"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Category</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="category" value="<?php echo $fetched_row['category']; ?>" required>
                        </div>
                      </div>
                      <div class="upcancel_buttons">
	                   
	                         <button type="submit" name="btn-update" class="btn btn-success btn-xs"> <div class="fa fa-edit"></div>UPDATE</button>
	                    
	                      
	                         <button type="submit" name="btn-cancel" class="btn btn-danger btn-xs"> <div class="fa fa-warning"></div> Cancel</button>
	                  </div>
                      </div>
                </form>
              </div>
          </div>
              <!-- /.tab-pane -->
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  require('layout/footer.php')
   ?>
