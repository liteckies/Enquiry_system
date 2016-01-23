<?php
  require('layout/sidebar.php');
  include_once 'includes/dbconfig.php';
   if(isset($_POST['submit']))
{
 // variables for input data
 $recipient = $_POST['recipient'];
 $subject = $_POST['subject'];
 $reply = $_POST['reply'];
 $monthh = strtotime('now');
 $mon = date('Y-m-d-l',$monthh);
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO reply(recipient,subject,reply,date_send) VALUES('$recipient','$subject','$reply','$mon')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
 <script type="text/javascript">
  alert('Enquiry replied successifully');
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('reply could not be send, try again later');
  </script>
  <?php
 }
 // sql query execution function
}
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mailbox
        <small>
        <?php
            $result = mysql_query("SELECT * FROM enquiries", $db);
            $num_rows = mysql_num_rows($result);
            echo "$num_rows";
            ?> new enquiries.
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="messages.php" class="btn btn-primary btn-block margin-bottom">Back to Enquiries list</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="messages.php"><i class="fa fa-inbox"></i> Inbox
                     <span class="label label-primary pull-right">
                        <?php
                          $result = mysql_query("SELECT * FROM enquiries", $db);
                          $num_rows = mysql_num_rows($result);
                          echo "$num_rows";
                         ?>
                      </span>
                    </a>
                 </li>
                  <li><a href="#"><i class="fa fa-envelope-o "></i> Sent text message</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <div class="box-title pull-left muted">Compose New Message</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <form action="" method="POST" >
                        <div class="form-group">
                          <input type="email" name="recipient" class="form-control" placeholder="To:" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="subject" class="form-control" placeholder="Subject:" required>
                        </div>
                        <div class="form-group">
                              <textarea id="compose-textarea" name="reply" class="form-control" style="height: 200px" required  >

                              </textarea>
                        </div>
                        <div class="box-footer">
                        <div class="pull-right">
                          <button type="submit" name="submit" class="btn btn-primary"> Send <i class="fa fa-send-o"></i></button>
                        </div>
                        <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                      </div>
                  </form>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/footer.php')
?>