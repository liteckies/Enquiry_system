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
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>signin to place your enquiry</h1>
                    <div class="divider"></div>
                    <p>Also see Courses available</p>
                </div>
                 <div class="row">
                    <div class="col-md-12">
                       <div class="platforms">
                          <div class="error_message">
                                  <span><?php echo $error; ?></span>
                          </div> 
                        </div> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                       <div class="platforms">
                            <!-- Username & Password Login form -->
                          <div class="user-login">
                               <div class="box login">
                                      <form  method="POST"  action="" >
                                          <fieldset class="boxBody">
                                            <label>Username</label>
                                            <input type="text" name="username" tabindex="1" placeholder="username" required>
                                            <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
                                            <input type="password" name="password"  tabindex="2" placeholder="*******" required>
                                          </fieldset>
                                          <footer>
                                            <label><input type="checkbox" tabindex="3">Keep me logged in</label>
                                            <input type="submit" name="submit" class="btnLogin" value="Login" tabindex="4">
                                          </footer>
                                      </form>
                               </div>
                            </div>
                        </div> 
                    </div>
                </div>
           </div>
        </section>
         <?php
          require('layout/footer.php'); 
        ?>