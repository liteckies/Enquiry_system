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
        <div class="col-md-9 message-container">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Read</a></li>
                <li><a href="#timeline" data-toggle="tab">Unread</a></li>
                <li><a href="#settings" data-toggle="tab">All</a></li>
              </ul>
              <div class="tab-content">

                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                     <h5>read messages goes here</h5>
                    <!-- /.post -->
                  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                     <h5>Unread messages goes here</h5>
                  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                     <h5>All messages goes here</h5>
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
