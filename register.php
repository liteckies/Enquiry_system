<?php
     require('layout/registration_header.php');
      include_once 'includes/dbconfig.php';
     ?>
     <?php
     if(@$_POST['submit'])
            {
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $passwordConfirm=$_POST['password_again'];
          $username=addslashes($username);
          $email =addslashes($email);
          $password= addslashes($password);
          if($_POST['password'] != $_POST['passwordConfirm']){
              $error = 'Passwords do not match.';
               }
                        //quering the selected database
                     $rs=mysql_query("select * from members where username='$username'");
                          if (mysql_num_rows($rs)>0)
                              { 
                                  echo '<br><div class="warning_message"> <span class="fa fa-warning"</span> Error!  '.$username.' Already Exists, <a href="register.php"> Choose a different username.</a></div>';
                                  exit;
                              }
                              else{
                              $query="insert into members(username, email, password) values('$username','$email','$password')";
                              $rs=mysql_query($query)or die("Could Not Perform the Query");
                                  echo '<br><br><br><div class="success_message" ><span class="fa fa-success"</span>
                                   Hi '.$username.' You have succesifully been signed up, please <a href="login.php">login</a>
                                  </div>';
                                }
                      }
           ?>
        <div class="wrapper">
           <section id="signup">
              <div class="container">
                  <div class="section-heading scrollpoint sp-effect3">
                      <h1>Sign up here</h1>
                      <div class="divider"></div>
                      <p>Its absolutely free.</p>
                  </div>
                  <div class="row">
                      <div class="user_register scrollpoint">
                          <form action="" method="POST" data-validate="parsley">
                            <div class="form-group">
                                  <label>Username</label>
                                  <div class="input-group">
                                       <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                      <input type="text" name="username" placeholder="Your name here" class="form-control" data-required="true" data-trigger="change" />
                                  </div>
                            </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <div class="input-group">
                                       <span class="input-group-addon"><span class="fa fa-envelope-o"></span></span>
                                      <input type="text" name="email" placeholder="valid email here" class="form-control" data-type="email" data-required="true" data-trigger="change"/>
                                  </div>
                            </div>
                              <div class="form-group">
                                  <label>Password</label>
                                  <div class="input-group">
                                       <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                      <input type="password" name="password" placeholder="******" class="form-control" data-required="true" data-trigger="change"/>
                                  </div>
                            </div>
                               <div class="form-group">
                                  <label>Confirm Password</label>
                                  <div class="input-group">
                                       <span class="input-group-addon"><span class="fa fa-eye"></span></span>
                                      <input type="password" name="password_again" placeholder="******"  class="form-control" data-required="true" data-trigger="change"/>
                                      <span><?php echo $error; ?></span>
                                  </div>
                            </div>
                              <div class="action_btn">
                                <div class="col-xs-6 col-md-6">
                                    <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg">
                                </div>
                              </div>
                               <p> or <a href="login.php">Login</a></p>
                              </div>
                          </form>
                     </div>
                  </div>
                </div>
          </section>
       </div>
       <?php
          require('layout/footer.php'); 
        ?>