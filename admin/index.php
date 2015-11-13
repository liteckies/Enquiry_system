<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Login</title>
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <link href="assets/css/opensans.css" rel="stylesheet" />
     <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background:url(assets/img/eco/head2.jpg) no-repeat center center fixed;
		-webkit-background-size: cover !important;
		-moz-background-size: cover !important;
		-o-background-size: cover !important;
        ">
    <div id="pre-div">
        <div id="loader"></div>
    </div>
    <!--/. PRELOADER END -->
    
    <!--./ NAV BAR END -->
    <div id="home" >
        <div class="overlay">
            <div class="container">
				<div class="span12">
                    <div class="col-lg-6 col-md-">
                        <div class="div-trans text-center">
						
                            <h3> Admin Login</h3>
							
                           <form action="login.php" class="form-signin" method="post" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" name="username" id="username" placeholder="Username" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-md" name="password" id="password" placeholder="Password" required>
                                </div>
								<br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" id="login" name="login">Login <i class="fa fa-arrow-circle-right"></i></button>
				                </div>
                            </form>
                      </div>
                 </div>
			  </div>
		 </div>
	 </div>
</div>
   
    <!--./ FOOTER SECTION END -->
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
     <!--  WOW Script -->
    
    <!--  Scrolling Script -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  PrettyPhoto Script -->
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
