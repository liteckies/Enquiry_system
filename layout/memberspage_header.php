<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8">
        <title>Course enquiry system</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link rel="shortcut icon" href="assets/img/eco/tumfavicon.png">
        
        <!-- Bootstrap 3.3.2 -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/js/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/awesome_fonts.css">
         <script type="text/javascript" src="assets/js/modernizr.custom.32033.js"></script>
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="body">
      <nav class="navbar navbar-fixed-top register_header"  role="navigation">
          <div class="container">
              <div class="row">
                  <div class="navbar navbar-brand small_logo_container span 4">
                     <a href="index.php"><img src="assets/img/eco/logotum.png" alt="" class="small_logo"></a>
                  </div>
                  <div class=" navbar-right navigation span 8">
                   <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="">
                            <span class="profile-ava">
                                <!--avatar goes here-->
                            </span>
                             <b id="welcome" class="welcome_option" >Welcome, <i><?php echo $login_session; ?></i></b>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                     <div class="login_success">
                
                     </div>
                 </div>
              </div>
          </div>
      </nav>
    