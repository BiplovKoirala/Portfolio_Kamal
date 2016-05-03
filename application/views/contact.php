<?php
session_start();
?>

<?php include("includes/header.php");
            ?>
	<div class="content">
		<div class="container">
			<div class="page-title">
    				<h1 class="title-default">
    					<span>Contact</span>
    				</h1>
				</div>
                
			<div class="row">
		        <div class="col-md-6 col-sm-4">
		    		<div class="contact-form">
		    			<p>Please fill up the form to drop us a line.We would get back to you in a 24 hours.</p>
		        <form id="contact" action="<?php echo base_url();?>Contact/contact" method="post">
					<div class="form-group">
						<label for="name" id="namelabel">Name<span required class="text-danger">*</span> <span class="err">Enter your name</span></label>
		                <input id="name" name="name" type="text" required class="form-control" placeholder="Name">
		             </div>
		             <div class="form-group">
		            	<label for="email" id="emailabel">E-mail<span class="text-danger">*</span> <span class="err">Enter a valid e-mail address</span></label>
		                <input id="email" name="email" type="email" required class="form-control" placeholder="Email">
		             </div>
		             <div class="form-group">
		            	<label for="message" id="msglabel">Message<span class="text-danger">*</span> <span class="err">Share some stuff with us</span></label>
						<textarea id="message" name="message" required class="form-control" placeholder="Message" rows="6"></textarea>
		             </div>
					 <div class="form-group">
						<label for="captcha" id="captchalabel">You're not a spammer, right?<span class="text-danger">*</span> <span class="err">Your CAPTCHA code looks wrong</span></label>
						<img src="captcha/captcha.php" id="captchaimg">
						<input type="text" name="captchavalue" id="captchavalue" class="textcaptcha form-control" placeholder="Captcha">
					</div>
		             <div class="form-group">
		            	<section id="subber">
							<input type="submit" name="submitlink" id="submitlink" class="btn btn-warning btn-lg" value="Send">
						</section>
		             </div>
				</form>
		    </div>
		 </div>
		 <div class="col-md-6 col-sm-4">
		            <div class="contact-info">
		                <h2></h2>
		                <address>
		                    <p>Bhaktapur,Nepal<br />
		                    <strong>Tel: </strong> <a href="callto:+977-1-6613095">+977-1-6613095</a><br />
		                    <strong>Email: </strong> <a href="tgunjana@yahoo.com">forlantamang@gmail.com</a><br />
		                    <strong>Url: </strong> <a href="http//:www.websitecompany.com">www.websitecompany.com</a><br/>
                        </address>
		                    </div>
							
					<!-- <div class="contact-buttom"
						<h5>Did you like my project?<br>Would you like me to work in next project?</h5>
						<p class="hireme-btn"><a class="btn btn-warning" href="#">Hire Me</a></p>
					</div> -->
		         	</div>
		    	</div>
			</div>
		

<?php include("includes/footer.php");
            ?>
