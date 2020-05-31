<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Steph Warsh is an aspiring web developer living in New Jersey, outside New York City." />
		<meta name="keywords" content="Steph, Warsh, New, York, Digital, Website, Design, Development, Coding, Programming, Front, End" />
		<meta name="author" content="Steph Warsh" />
		
		<title>Portfolio | Steph Warsh | Web Developer</title>

		<?php include 'inc/head.php'; ?>
	
	</head>

	<body class="sub-page">

		<?php 
			$page = 'portfolio';
			include 'inc/nav.php';
		?>

		<div class="container" id="portfolio">

			<h1>My Work</h1>

			<div class="white-bg">

				<h2>Projects</h2>

				<div class="work-item">
					<a href="https://github.com/smwarsh/thrift" target="_blank"><img src="img/dollars_sm.jpg" alt="Thrift Spending Tracker"></a><!--
					--><div class="description">
					<h3>Thrift Spending Tracker</h3>
					<p>JavaScript, HTML templates (Pug/Jade), Git, Node.js, Express, MongoDB</p>
					<p>I am developing a spending tracker web application to replace a tedious spreadsheet with which I am currently tracking my expenses.</p>
					<p class="click"><a href="https://github.com/smwarsh/thrift" target="_blank">See it on GitHub &#8594;</a></p>
					</div><!-- .description -->
				</div><!-- .work-item -->

				<div class="work-item">
					<a href="https://github.com/smwarsh/challenge-channel" target="_blank"><img src="img/challengechannel_sm.jpg" alt="Challenge Channel"></a><!--
					--><div class="description">
					<h3>Challenge Channel</h3>
					<p>Design, HTML, CSS, SASS, Bootstrap, GitHub</p>
					<p>I worked with a team to complete this web app for a web programming course. I designed the layout and coded all the HTML and CSS for the project.</p>
					<p class="click"><a href="https://github.com/smwarsh/challenge-channel" target="_blank">See it on GitHub &#8594;</a></p>
					</div><!-- .description -->
				</div><!-- .work-item -->

				<h2>Experience</h2>

				<div class="work-item">
					<a href="warner.php"><img src="img/warner_sm.jpg" alt="Warner"></a><!--
					--><div class="description">
					<h3>Warner School of Education</h3>
					<p>Design, HTML, CSS, PHP, CMS</p>
					<p>I enhanced the website for the graduate school of education at the University of Rochester, transferred content from the old site to the new site, and designed layouts.</p>
					<p class="click"><a href="warner.php">Learn more &#8594;</a></p>
					</div><!-- .description -->
				</div><!-- .work-item -->

			</div> <!-- .white-bg -->
		<div id="about">
			
		</div><!-- .about -->
	</div><!-- .container -->
	</body>

</html>