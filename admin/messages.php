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
                      <div class="course_table">
                      <table id="example" class="table table-striped table-bordered display">
                          <thead class="table_header">
                            <tr>
                              <th>Sender</th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th>Enquiry</th>
                              <th>Date Send</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              while( $row = mysql_fetch_assoc( $result ) ){
                                echo
                                "<tr>
                                  <td>{$row['sender']}</td>
                                  <td>{$row['phone']}</td>
                                  <td>{$row['subject']}</td>
                                  <td>{$row['body']}</td>
                                  <td>{$row['date_send']}</td>
                                </tr>";
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
                      <div class="course_table">
                      <table id="example" class="table table-striped table-bordered display">
                          <thead class="table_header">
                            <tr>
                              <th>Sender</th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th>Enquiry</th>
                              <th>Date Send</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              while( $row = mysql_fetch_assoc( $result ) ){
                                echo
                                "<tr>
                                  <td>{$row['sender']}</td>
                                  <td>{$row['phone']}</td>
                                  <td>{$row['subject']}</td>
                                  <td>{$row['body']}</td>
                                  <td>{$row['date_send']}</td>
                                </tr>";
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
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              while( $row = mysql_fetch_assoc( $result ) ){
                                echo
                                "<tr>
                                  <td>{$row['sender']}</td>
                                  <td>{$row['phone']}</td>
                                  <td>{$row['subject']}</td>
                                  <td>{$row['body']}</td>
                                  <td>{$row['date_send']}</td>
                                </tr>";
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
