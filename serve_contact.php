<?php
echo '
<div class="about_title">CONTACT</div>
<div class="about_text">
Have questions? Contact me for more information. You can get in touch using the form below or directly at <a href="mailto:l.eyths@gmail.com">l.eyths@gmail.com</a>.
</div>
<div class="contact-form"> 
			<form action="/contactScript.php" method="post"> 
				<input type="hidden" name="process" value="1" /> 
				<input type="text" name="email" style="display:none" /><!-- << simple antispam --> 
			
				<label for="email_name">Your Name</label> 
				<input type="text" id="email_name" name="email_name" value="" /><br /> 
			
				<label for="email_address">Your Email</label> 
				<input type="text" id="email_address" name="email_address" value="" /><br /> 
			
				<label for="subject">Subject</label> 
				<input type="text" id="subject" name="subject" value="" /><br /> 
			
				<label for="message">Message</label> 
				<textarea name="message" id="message"></textarea><br /> 
			
				<input type="submit" value="Send" class="submit" /> 
			</form> 
		</div> 

';
?>