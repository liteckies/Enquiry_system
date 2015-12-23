<?php
include_once 'includes/dbconfig.php';

// delete condition
if(isset($_GET['msg_id']))
{
 $sql_query="DELETE FROM enquiries WHERE msg_id=".$_GET['msg_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function mark_id(id)
{
 if(confirm('Sure to mark enquiry as read?'))
 {
  window.location.href='enquiry_read.php?mark_id='+id;
 }
}
function msg_id(id)
{
 if(confirm('Sure to Delete this enquiry?'))
 {
  window.location.href='messages.php?msg_id='+id;
 }
}
</script>
<?php
  require('layout/sidebar.php')
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>view and respond to messages</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Messages</li>
      </ol>
    </section>
     <!-- Main content --> 
      <!-- /.col -->
        <div class="col-md-11 message-container">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#Unread" data-toggle="tab">Unread</a></li>
                <li><a href="#read" data-toggle="tab">read</a></li>
                <li><a href="#all" data-toggle="tab">All</a></li>
              </ul>
              <div class="tab-content">

                  <div class="active tab-pane" id="Unread">
                    <!-- Post -->
                     <?php
                     // set the query
                        $result = mysql_query("SELECT * FROM enquiries");
                      ?>
                      <div class="messages_table">
                      <table id="example" class="table table-striped table-bordered display">
                          <thead class="table_header">
                            <tr>
                              <th>Sender</th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th>Enquiry</th>
                              <th>Date Send</th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php
                              $sql_query="SELECT * FROM enquiries";
                              $result_set=mysql_query($sql_query);
                              while($row=mysql_fetch_row($result_set))
                             {
                                ?>
                             <tr>
                              <td><?php echo $row[1]; ?></td>
                              <td><?php echo $row[2]; ?></td>
                              <td><?php echo $row[3]; ?></td>
                              <td><?php echo $row[4]; ?></td>
                              <td><?php echo $row[5]; ?></td>
                                <td align="center"><a href="compose.php"><button type="button" class="btn btn-block btn-success btn-xs"> <div class="fa fa-mail-reply"></div> reply</button></a></td>
                                <td align="center"><a href="javascript:mark_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-success btn-xs"> <div class="fa fa-folder-open"></div> Mark as read</button></a></td>
                             
                             </tr>
                             <?php
                                  }
                                ?>
                          </tbody>
                      </table>
                  </div>
                    <!-- /.post -->
                  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="read">

                    <div class="active tab-pane" id="Unread">
                    <!-- Post -->
                     <?php
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
                     // set the query
                        $result = mysql_query("SELECT * FROM enquiries");
                      ?>
                      <div class="messages_table">
                      <table id="example" class="table table-striped table-bordered display">
                          <thead class="table_header">
                            <tr>
                              <th>Sender</th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th>Enquiry</th>
                              <th>Date Send</th
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              $sql_query="SELECT * FROM enquiries";
                              $result_set=mysql_query($sql_query);
                              while($row=mysql_fetch_row($result_set))
                             {
                                ?>
                             <tr>
                              <td><?php echo $row[1]; ?></td>
                              <td><?php echo $row[2]; ?></td>
                              <td><?php echo $row[3]; ?></td>
                              <td><?php echo $row[4]; ?></td>
                              <td><?php echo $row[5]; ?></td>
                               <td align="center"><a href="compose.php"><button type="button" class="btn btn-block btn-success btn-xs"> <div class="fa fa-mail-reply"></div> reply</button></a></td>
                              <td align="center"><a href="javascript:msg_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-warning btn-xs"><div class="fa  fa-warning"></div> Delete</button></a></td>
                             </tr>
                             <?php
                                  }
                                ?>
                          </tbody>
                      </table>
                  </div>
                    <!-- /.post -->
                  </div>
                  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="all">
                    <?php
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
                     // set the query
                        $result = mysql_query("SELECT * FROM enquiries");
                      ?>
                      <div class="course_table">
                      <table id="example" class="table table-striped table-bordered display">
                          <thead class="table_header">
                            <tr>
                              <th>Sender</th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th>Enquiry</th>
                              <th>Date Send</th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php
                              $sql_query="SELECT * FROM enquiries";
                              $result_set=mysql_query($sql_query);
                              while($row=mysql_fetch_row($result_set))
                             {
                                ?>
                             <tr>
                              <td><?php echo $row[1]; ?></td>
                              <td><?php echo $row[2]; ?></td>
                              <td><?php echo $row[3]; ?></td>
                              <td><?php echo $row[4]; ?></td>
                              <td><?php echo $row[5]; ?></td>
                               <td align="center"><a href="compose.php"><button type="button" class="btn btn-block btn-success btn-xs"> <div class="fa fa-mail-reply"></div> reply</button></a></td>
                              <td align="center"><a href="javascript:msg_id('<?php echo $row[0]; ?>')"><button type="button" class="btn btn-block btn-warning btn-xs"><div class="fa  fa-warning"></div> Delete</button></a></td>
                             </tr>
                             <?php
                                  }
                                ?>
                          </tbody>
                      </table>
                  </div>
                  </div>
                  <!-- /.tab-pane -->
               </div>
               <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
      <!-- /.col --> 
     <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
  require('layout/footer.php')
?>
