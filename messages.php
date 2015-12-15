<?php
  require('layout/sidebar.php');
  if(isset($_POST['submit']))
{
 // variables for input data
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $enquiry=$_POST['enquiry'];
    $monthh = strtotime('now');
    $mon = date('Y-m-d-l',$monthh);
 // variables for input data
 // sql query for inserting data into database
 $sql_query = "INSERT INTO enquiries(sender,phone,subject,body,date_send,status) VALUES('$email','$phone','$subject','$enquiry','$mon','unread')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
 <script type="text/javascript">
  alert('Enquiry placed successifully, it will be responded within 24hrs');
  window.location = "messages.php";
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Sent a message</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Enquiry</li>
      </ol>
    </section>
     <!-- Main content --> 
     <section class="quick-mail">
         <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>
               <h3 class="box-title">Quick Enquiry</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form  action="" method="POST" class="form-horizontal insert-course_inner">
                      <div class="form-group">
                        <label for="email" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <input type="text" class="form-control" name="email" placeholder="your email here" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <input type="text" class="form-control" name="phone" placeholder="phone number" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <input type="text" class="form-control" name="subject" placeholder="subject" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <textarea class="form-control" name="enquiry" placeholder="enquiry here.." required></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-11">
                          <button type="submit" name="submit" class="btn btn-danger">Submit Enquiry 
                          <i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                      </div>
          </div>
                </form>
            </div>
            
     </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/members_pagefooter.php')
?>
