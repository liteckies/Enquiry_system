<?php
  require('layout/sidebar.php');
  ?>
  <?php
  if(@$_POST['submit'])
            {
          $email= $_POST['email'];
          $phone= $_POST['phone'];
          $subject= $_POST['subject'];
          $enquiry = $_POST['enquiry'];
          $email=addslashes($email);
          $phone=addslashes($phone);
          $subject=addslashes($subject);
          $enquiry= addslashes($enquiry);
          @$db = mysql_pconnect("localhost", "root", "root");
          //checking connecting
              if (!$db)
                      {
                        echo "Error: Could not connect to database, Please try again.";
                      }            
                        //selecting database to use among the databases in phpmyadmin
                    $mysql = mysql_select_db("TUMENQUIRY-DB");
                    if(!$mysql)
                      {
                        echo "Cannot select database.";
                      }
                        //quering the selected database
                     $rs=mysql_query("select * from enquiries where sender='$email'");
                          if (mysql_num_rows($rs)>0)
                              { 
                                  echo '<br><div class="warning_message"> <span class="fa fa-warning"</span> Error!  '.$email.' Already Exists, <a href="register.php"> Choose a different username.</a></div>';
                                  exit;
                              }
                              else{
                             $query="insert into enquiries(sender, phone, subject, body, status) values('$email','$phone','$subject','$enquiry','unread')";
                              $rs=mysql_query($query)or die("Could Not Perform the Query");
                                  echo '<br><br><br><div class="success_message" ><span class="fa fa-success"</span>
                                   Hi '.$email.' You have succesifully been signed up, please <a href="login.php">login</a>
                                  </div>';
                                }
                      }
  ?>
  
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
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
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
