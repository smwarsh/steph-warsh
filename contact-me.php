<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Use this form to contact Steph Warsh. This page is under construction." />
		<meta name="keywords" content="Steph, Warsh, New, York, Jersey, Digital, Website, Design, Development, Coding, Programming, Contact" />
		<meta name="author" content="Steph Warsh" />
		
		<title>Contact | Steph Warsh | Web Designer</title>

		<?php include 'inc/head.php'; ?>
	
	</head>

	<body class="contact-page">
		<div class="container" id="contact">
		
			<h1>Contact</h1>
			<p class="home-page-link"><a href="index.php">Home</a></p>

			<p class="notice">Notice: This page is under construction. The form does not work (yet).</p>

			<div class="contact-form">
				<form action="form-processor.php" method="post">
					<p><label for="name"><input id="name" name="name" type="text" placeholder="Full name" tabindex="1" required></label></p>
					<p><label for="mail"><input id="email" name="email" type="email" placeholder="Your email address" tabindex="2" required></label></p>
					<p><label for="subject"><input id="subject" name="subject" type="text" placeholder="Subject" tabindex="3" required></label></p>
					<p><label for="message">Message:<br /><textarea id="message" name="message" placeholder="Message" tabindex="4" required></textarea></label></p>
					<button type="submit" name="submit" tabindex="5">Send</button>
				</form>
			</div><!-- .contact-form -->


		</div><!-- .container #contact -->
	</body><!-- .contact-page -->

</html>