<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
         <link rel="shortcut icon" href="assets/img/eco/tumfavicon.png">
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>Ecourse | Admin</title>
        <!--  Bootstrap Style -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!--  Font-Awesome Style -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
         <link href="assets/css/opensans.css" rel="stylesheet" />
         <!--  Custom Style -->
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
            <div class="admin-login-logo">
                <img src="assets/img/eco/logotum.png">
            </div>
            <div class="box login">
                <form action="login.php" method="POST">
                    <fieldset class="boxBody">
                       <div class="form-group">
                            <label>Username</label>
                            <div class="input-group">
                               <input type="text" name="username" tabindex="1" placeholder="admin username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
                            <div class="input-group">
                               <input type="password" name="password" tabindex="2" required>
                            </div>
                        </div>
                    </fieldset>
                    <footer>
                        <label><input type="checkbox" tabindex="3">Keep me logged in</label>
                        <input type="submit" class="btnLogin" value="Login" tabindex="4">
                    </footer>
              </form>
         </div>
    </body>
    </body>
</html>
