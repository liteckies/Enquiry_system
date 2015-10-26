<?php
require('layout/registration_header.php'); 
include('loginscript.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
  header("location: members_page.php");
}
?>
?>
<section id="getApp">
            <div class="container-fluid">
                <div class="section-heading  sp-effect3">
                    <h1>signin to place your enquiry</h1>
                    <div class="divider"></div>
                    <p>Choose your native platform and get started!</p>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="hanging-phone scrollpoint sp-effect2 hidden-xs">
                            <img src="assets/img/eco/eco-angled2.png" alt="">
                        </div>
                       <div class="platforms">
                            <!-- Username & Password Login form -->
                          <div class="user_login">
                             <div class="error_message">
                                <span><?php echo $error; ?></span>
                             </div> 
                             <div class="user_logininner">
                                    <form action="" method="post" data-validate="parsley">
                                      <div class="form-group">
                                          <div class="input-group">
                                             <span class="input-group-addon"><span class="fa fa-user"></span></span> 
                                              <input type="text" name="username" placeholder="" class="form-control"  data-required="true"  data-trigger="change" />
                                          </div>
                                       </div> 
                                       <div class="form-group">  
                                           <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-eye"></span></span>
                                               <input type="password" name="password" placeholder="" class="form-control"  data-required="true" data-trigger="change"  />
                                           </div>
                                       </div>     
                                        <div class="checkbox">
                                            <input id="remember" type="checkbox" />
                                            <label for="remember">Remember me</label>
                                        </div>
                                         <div class="action_btn">
                                             <div class="col-xs-6 col-md-6">
                                                 <input type="submit" name="submit" value="login" class="btn btn-primary btn-block btn-lg">
                                             </div>
                                        </div>
                                    </form>
                             </div>
                              <a href="#" class="forgot_password">Forgot password?</a>
                            </div>
                        </div> 
                    </div>
                </div>
           </div>
        </section>
         <?php
          require('layout/footer.php'); 
        ?>