<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
);
?>
<div id="wrapper">
	<div class="slim container">
		<div class="row">
			<div class="box01">
				<div class="login-window login-top">
					<div id="header1">
						<h1>Change Password</h1>
					</div>
					
					<div class="row left10">

						<?php echo form_open($this->uri->uri_string()); ?>
							<div>
								<?php echo form_label('Old Password', $old_password['id']); ?>
								<?php echo form_password($old_password); ?>
								<span><?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?></span>
							</div>
							<div>
								<?php echo form_label('New Password', $new_password['id']); ?>
								<?php echo form_password($new_password); ?>
								<span><?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?></span>
							</div>
							<div>
								<?php echo form_label('Confirm New Password', $confirm_new_password['id']); ?>
								<?php echo form_password($confirm_new_password); ?>
								<?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
								<span></span>
							</div>
							<div style="clear:Both;"><br /></div>
							<div>
								<?php 
									$attributes1=array('class'=>'btn btn-success');
									echo form_submit('change', 'Change Password' , $attributes1); ?>
								<?php echo form_close(); ?>
							</div>	
							
						</form>
					</div>
					
					
				</div>
	    
			</div>
		</div>
	</div>
</div>


<?php
  $this->load->view('footer');
?>