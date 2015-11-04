<?php
  require('layout/sidebar.php');
  ?>
  <?php
   if(@$_POST['submit'])
       {
          $email= $_POST['email'];
          $subject= $_POST['subject'];
          $enquiry = $_POST['enquiry'];
          $email=addslashes($email);
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
                    $query="insert into enquiries(email, subject, body, status) values('$email','$subject','$body','unread')";
                    if ($rs=mysql_query($query)) {
                        echo '<br><br><br><div class="success_message" ><span class="fa fa-success"</span>
                        Hi '.$email.' You have succesifully been signed up, please <a href="login.php">login</a>
                        </div>';
                                                  }
                    else{
                       echo "Could Not Perform the Query";
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
              <form action="" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Your email:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" name="enquiry" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" name="submit" class="pull-right btn btn-default">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
     </section>
      

      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/members_pagefooter.php')
?>
