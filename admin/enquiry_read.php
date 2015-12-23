<?php
include_once 'includes/dbconfig.php';
if(isset($_GET['mark_id']))
{
 $sql_query="SELECT * FROM enquiries WHERE msg_id=".$_GET['mark_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $sender = $_POST['sender'];
 $phone= $_POST['phone'];
 $subject = $_POST['subject'];
 $body = $_POST['body'];
 $date_send = $_POST['date_send'];
 $status=$_POST['status'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE enquiries SET sender='$sender',phone='$phone',subject='$subject',body='$body',date_send='$date_send',status='$status' WHERE msg_id=".$_GET['mark_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='messages.php';
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
 header("Location: messages.php");
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
                           <input type="text" class="form-control" name="sender" placeholder="enquiry here.." value="<?php echo $fetched_row['sender']; ?>" required>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputName" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <input type="text" class="form-control" name="phone" placeholder="phone number" value="<?php echo $fetched_row['phone']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputName" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <input type="text" class="form-control" name="subject" placeholder="subject" value="<?php echo $fetched_row['subject']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <input type="text" class="form-control" name="body" placeholder="enquiry here.." value="<?php echo $fetched_row['body']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <input type="text" class="form-control" name="date_send" placeholder="Date of enquiry.." value="<?php echo $fetched_row['date_send']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-1 control-label"></label>

                        <div class="col-sm-11">
                          <input type="text" class="form-control" name="status" placeholder="Enquiry status." value="<?php echo $fetched_row['status']; ?>" required>
                        </div>
                      </div>
                      <div class="upcancel_buttons">
                     
                           <button type="submit" name="btn-update" class="btn btn-success btn-xs"> <div class="fa fa-edit"></div>UPDATE</button>
                      
                        
                           <button type="submit" name="btn-cancel" class="btn btn-danger btn-xs"> <div class="fa fa-warning"></div> Cancel</button>
                        </div>
                </form>
            </div>
            
     </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php
  require('layout/footer.php')
   ?>
