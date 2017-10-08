<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Binet Réseau - Espace X</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
			<?php include('header.php'); ?>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Espace Pro</h2>
							<p>Formulaire destiné aux entreprises et aux associations</p>
						</header>

						<!-- Content -->
							<section id="content">
								<a href="#" class="image no-background fit"><img src="images/pic05.jpg" alt="" /></a>
								<h3>Nous contacter</h3>

								<form name="contact-form" id="contactForm" action="assets/php/sendemail.php" method="POST">
									<div class="row uniform 50%">
										<div class="4u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Nom" required/>
										</div>
										<div class="4u 12u$(xsmall)">
											<input type="text" name="organisation" id="organisation" value="" placeholder="Organisation" required/>
										</div>
										<div class="4u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder="Email" required/>
										</div>

										<div class="12u$">
											<input type="text" name="subject" id="subject" value="" placeholder="Objet" required/>
										</div>

										<div class="12u$">
											<textarea name="message" id="message" placeholder="Votre message…" rows="6" required></textarea>
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="submit" class="special" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>

										<!--
										<div class="6u 12u$(medium)">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">M'envoyer une copie de ce message</label>
										</div>
										-->

									</div>
								</form>

							</section>

					</div>
				</div>

			<!-- Footer -->
			<?php include('footer.php'); ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>