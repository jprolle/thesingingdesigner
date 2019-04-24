			<?php

				if (isset($_POST['name']) && isset($_POST['email']) && isset ($_POST['subject']) && isset($_POST['message'])) {

					$name = $_POST ['name'];
					$email = $_POST ['email'];
					$subject = $_POST ['subject'];
					$message = $_POST ['message'];

					if (!empty($name) && !empty ($email) && !empty ($subject) && !empty ($message)) {

						$to = 'hello@jprolle.com';
						$subject = 'Contact form submitted';
						$body = $name . $message;
						$headers = 'From: '. $email;

						if (@mail($to, $subject, $body, $headers)) {

							echo "Thanks for your business. I will be in touch soon.";
						} else {
							echo "Sorry, an error occured. Please try again later.";
						}
					}
				}
			?>

	<div class="row item_fade_in">
			<h4 class="text-center">Let's Talk Business</h4>
			<div class="col-md-6 col-md-offset-3">
				<div class="form-respond text-center">
				</div>
			<form action="index.php" method="POST" name="contactform" id="contactform" class="form validate item_bottom" role="form">
				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control required" placeholder="Name">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control required email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="subject" name="subject" class="form-control required subject" placeholder="Subject">
				</div>
				<div class="form-group">
					<textarea name="message" id="message" class="form-control input-lg required" rows="9" placeholder="Enter Message"></textarea>
				</div>
				<div class="form-group text-center">
					<input type="submit" id="contactForm_submit" class="btn btn-trans btn-border btn-full" value="SEND">
				</div>
				<input type="hidden" name="subject" value="Contact from your site">
			</form>
		</div>
	</div>
<!-- End form contact -->