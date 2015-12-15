<?php
  require('layout/sidebar.php');
  include_once 'includes/dbconfig.php';
   if(isset($_POST['submit']))
{
 // variables for input data
 $name = $_POST['name'];
 $department = $_POST['department'];
 $category = $_POST['category'];
 $description = $_POST['description'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO courses(name,department,category,description) VALUES('$name','$department','$category','$description')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
 <script type="text/javascript">
  alert('Course inserted successifully');
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
                          <input type="text" class="form-control" name="name" placeholder="Course name here" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Department</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="department" placeholder="Department" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Category</label>

                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="category" placeholder="Choose category" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Description</label>

                        <div class="col-sm-10">
                          <textarea class="form-control" name="description" placeholder="Course Description" required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="submit" class="btn btn-danger">Insert Course  <i class="fa fa-arrow-circle-right"></i></button>
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
