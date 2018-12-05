<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Contact | Steph Warsh | Web Designer</title>

		<?php include 'inc/head.php'; ?>

	</head>

	<body class="contact-page">

		<?php include 'inc/nav.php'; ?>

		<div class="container" id="contact">
		
		<main>
			<h1>Contact</h1>
			<p class="home-page-link"><a href="index.php">Home</a></p>
			<div class="contact-form">
				<form action="contactform.php" method="post">
					<p><input type="text" name="name" placeholder="Full name" class="form-element"></p>
					<p><input type="text" name="mail" placeholder="Your email" class="form-element"></p>
					<p><input type="text" name="subject" placeholder="Subject" class="form-element"></p>
					<p><textarea name="message" placeholder="Message" class="form-element"></textarea></p>
					<p><button type="submit" name="submit">Send</button></p>
				</form>
			</div>
		</main>
		</div><!-- .container #contact -->
	</body>
</html>