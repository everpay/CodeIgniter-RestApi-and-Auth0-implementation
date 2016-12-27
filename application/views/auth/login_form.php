<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'class'	=> 'small input-text',
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'class'	=> 'small input-text',
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);


$error_message = '';
if( form_error($login['name']) !=''){
$error_message = "<small class=\"error\">".str_replace("Login field", "Email field", form_error($login['name']) )."</small>";
}

if(isset($errors[$login['name']])){
$error_message .= "<small class=\"error\">".str_replace("Login", "Email", $errors[$login['name']] )."</small>";
}

if( form_error($password['name']) !='' ){
$error_message .= "<small class=\"error\">".form_error($password['name'])."</small>";
}

if(isset($errors[$password['name']])){
$error_message .= "<small class=\"error\">".$errors[$password['name']]."</small>";
}

$captcha_content = '';
if ($show_captcha) {
	if ($use_recaptcha) {
		$captcha_content = '
		<div id="account-signup-divider" class="shared-divider">
			<div class="shared-divider-label">
				<span>Confirmation Code</span>
			</div>
		</div>

		<div id="recaptcha_image"></div>
		<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
		<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type(\'audio\')">Get an audio CAPTCHA</a></div>
		<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type(\'image\')">Get an image CAPTCHA</a></div>

		<div class="recaptcha_only_if_image">Enter the words above</div>
		<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />

		<div id="account-signup-divider" class="shared-divider"></div>
		';

		$captcha_content .= $recaptcha_html;
	} else {
		$captcha_content = '
		<div id="account-signup-divider" class="shared-divider">
			<div class="shared-divider-label">
				<span>Confirmation Code</span>
			</div>
		</div>

		<p>Enter the code exactly as it appears:</p>
		'.$captcha_html.'
		<p>'.form_label('Confirmation Code', $captcha['id']).'</p>
		<p>'.form_input($captcha).'</p>

		<div id="account-signup-divider" class="shared-divider"></div>
		';
	}
}

if( form_error('recaptcha_response_field') !=''){
$error_message = "<small class=\"error\">".form_error('recaptcha_response_field')."</small>";
}

if( form_error($captcha['name']) !=''){
$error_message = "<small class=\"error\">".form_error($captcha['name'])."</small>";
}
?>

<div id="wrapper">
	<div class="slim container">
		<div class="row">
			<div class="box01">
				<div class="login-window login-top">
					<div id="header1">
						<h1>Login</h1>
					</div>
					
					<?php echo $error_message; ?>

					<div class="row left10">

						<?php echo form_open($this->uri->uri_string(), array('class'=>'nicely')); ?>
							<div>
								<?php echo form_label($login_label.'*', $login['id']); ?>
								<?php echo form_input($login); ?>
							</div>
							<div>
								<?php echo form_label('Password'.'*', $password['id']); ?>
								<?php echo form_password($password); ?>
							</div>
							<div class="remember-section">
								<?php echo form_checkbox($remember); ?>
								<span>Remember me.</span>
								
							</div>
							
							<?php echo $captcha_content; ?>
							<a href="<?php echo site_url(); ?>/auth/forgot_password/" class="forgot">Forgot your password?</a>
							<!--<div class=logbtn>
								
							</div>-->
							
							<button type="submit" id="loginBtn" class="submit">Login</button>
								
							
						</form>
					</div>
					<div style="margin:0 0 0 -2px;padding:0;">
						 Don't have an account? <a href="<?php echo base_url(); ?>/auth/register/">Register</a> for free!
					</div>
					<div id="account-signup-divider" class="shared-divider">
						<div class="shared-divider-label">
							<span>or Login with</span>
						</div>
					</div>
					<div id="connect-with-buttons">
						<a href="/auth_oa2/session/facebook" class="connect-with-button account-sprites account-sprites-facebook" title="Facebook Connect"></a>
						<a href="/auth_oa2/session/google" class="connect-with-button marginleft13 account-sprites account-sprites-google" title="Google"></a>
					</div>
				</div>
	    
			</div>
		</div>
	</div>
</div>

<!--<div id="login" class="login-section">
	<div class="login-top">
		<h4>Login</h4>
		<form id="login" action="" method="post">
			<label>Email</label>
			<input type="email" name="email" >
			<label>Password</label>
			<input type="password" name="password" >
			<a href="#">Forgot password?</a>
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
</div>-->

<?php
  $this->load->view('footer');
?>