<?php
        include('session.php');
    ?>
     <?php
        require('layout/registration_header.php');
      ?>
      <div class="login_success">
	      <b id="welcome" class="welcome_option" >Welcome : <i><?php echo $login_session; ?></i></b>
	      <b id="logout" class="logout_option"><a href="logout.php">Log Out</a></b>
      </div>