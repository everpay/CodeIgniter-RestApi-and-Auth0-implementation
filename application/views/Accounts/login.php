<div class="login-dropdown modal-dialog modal-lg fade" id="abcmodal" role="dialog" style="width:600px; height: 700px;">
                            	<div id="login" class="login-section">
                                	<div class="login-top">
                            			<h4>Login</h4>
                            			<?php echo $error_message; ?>
                                        <?php echo form_open($this->uri->uri_string(), array('class'=>'nicely','id' => 'login')); ?>
                                        	<!--<label>Email</label>
                                            <input type="email" name="email" required />
                                            <label>Password</label>
                                            <input type="password" name="password" required />-->
                                            <?php echo form_label($login_label, $login['id']); ?>
							                <?php echo form_input($login); ?>
                                            <?php echo form_label('Password', $password['id']); ?>
							                <?php echo form_password($password); ?>
                                           
                                            <div class="sendoffer-section">
                                                 <?php echo form_checkbox($remember); ?>
                                                <span> Remember me on this computer.</span>
                                            </div>
                                            <?php echo $captcha_content; ?>
                                            <a href="<?php echo site_url(); ?>/auth/forgot_password/">Forgot password?</a>

                                      
                                            <input class="submit" type="submit" name="submit" value="Login">
                                		</form>
                                        <div class="other-resource">
                                            <span>OR</span>
                                        	<a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
                                            <a class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a>
                                        </div>
                                    </div>
                                    <div class="login-bottom">
                                    	<span>No account yet?</span>
                                        <a href="#signup">Sign Up</a>
                                        <div class="other-resource">
                                            <span>OR</span>
                                        		<a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
                                            <a class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="signup" class="login-section signup-section">
                                	<div class="login-top">
                            			<h4>Sign Up</h4>
                            			<form id="login" action="" method="post">
                                        	<div class="row">
                                            	<div class="col-sm-6">
                                                	<label>First Name*</label>
                                            		<input type="text" name="firstname" required >
                                                </div>
                                                <div class="col-sm-6">
                                                	<label>Last Name*</label>
                                            		<input type="text" name="lastname" required >
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="col-sm-6">
                                                	<label>Email*</label>
                                            		<input type="email" name="email" required >
                                                </div>
                                                <div class="col-sm-6">
                                                	<label>Password*</label>
                                            		<input type="password" name="password" required >
                                                </div>
                                            </div>
                                            <div class="sendoffer-section">
                                            	<input class="checkbox" type="checkbox" name="sendoffer" >
                                                <span>Send me Special Offers &amp; Promotions</span>
                                            </div>
                                            <input class="submit" type="submit" name="signup" value="Sign Up">
                                		</form>
                                    </div>
                                    <div class="login-bottom">
                                    	<span>Already have an account?</span>
                                        <a href="#login">Login</a>
                                        <div class="other-resource">
                                            <span>OR</span>
                                        	<a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
                                            <a class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>