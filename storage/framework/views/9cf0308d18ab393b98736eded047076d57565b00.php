<div style="background: #E8F0FE; padding: 5%;">
	</br></br>
	<center>
		<div style="width: 70%; padding: 10px; background: #E8E8E8; margin-top: -5px; border-radius: 20px; ">
			<?php if($data['Type'] == 'contactusform'): ?>
					<p>Hi, This is <?php echo e($data['Name']); ?>,</p>
					<p> Email: <?php echo e($data['Email']); ?></p>
					<p>I have some query like <?php echo e($data['Message']); ?>.</p>
					<p>It would be appriciative, if you gone through this feedback.</p>
			<?php elseif($data['Type'] == "reset_password"): ?>
					<p style="font-size: 17px; color: black;"><?php echo e($data['msg']); ?></p> </br>
					<p style="font-size: 17px; color: black;"><?php echo e($data['sub_msg1']); ?></p>
					<p style="margin-bottom: 5%; margin-top: 5%;"><a href="<?php echo e($data['sub_msg8']); ?>" class="btn col-sm-10" style="background: #1d1d49!important; border: 1px solid #1d1d49!important;color: white; padding: 10px; text-decoration: none; font-size: 20px; border-radius: 7px;"> Reset password</a></p>
					<br><br>
					<p style="font-size: 17px;margin-bottom: 2px; margin-top: 5%;color: black;">Thank You,</p>
					<p style="font-size: 17px; margin-top: 2px;margin-bottom: 50px;color: black;">The BGC Team.</p>
			<?php elseif($data['Type'] == "welcome"): ?>	
					<p style="font-size: 17px;color: black;">Hi <?php echo e($data['name']); ?>, </p>
					<p style="font-size: 17px; color: black;">Thank you for joining BGC. </p>
					<p style="font-size: 17px; font-weight: inherit; color: black;">Please click the button below to activate your account. </p>
					<p style="margin-bottom: 5%; margin-top: 5%;"><a href="<?php echo e($data['msg']); ?>" class="btn col-sm-10" style="background: #1d1d49!important; border: 1px solid #1d1d49!important;color: white; padding: 10px; text-decoration: none; font-size: 20px; border-radius: 7px;">Activate account</a></p>					
					<p style="font-size: 17px; margin-bottom: 1px;color: black;">Thank You,</p>
					<p style="font-size: 17px; margin-top: 1px; margin-bottom: 50px;color: black;">The BGC Team.</p>
			<?php endif; ?>
		</div>
		<div style="padding: 5px; width: 69%;">
				<p style="font-size: 13px; margin-bottom: 0px; margin-bottom: 1px;color: black;">
					You are receiving this email because you have registered an account with BGC. Please see our <a href="<?php echo config('app.baseURL').'/privacyPolicy';?>" style="text-decoration: underline;"> BGC Policy</a> for more information on how BGC handles your personal information.
				</p>
				<p style="font-size: 13px; margin-bottom: 0px; margin-top: 1px;color: black;">
					BGC &copy; <?php echo e(now()->year); ?>. If you are having problems, please email infobgcmail@gmail.com</a>. Please do not reply to this automatically generated email.
				</p>
		</div>
	</center>
</div>
<?php /**PATH /app/app1/html/BGC/resources/views/frontend/contact_mail_template.blade.php ENDPATH**/ ?>