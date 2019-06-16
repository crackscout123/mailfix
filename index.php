<?php
$err_post = $_GET['err'];
if(isset($err_post)){
	if($err_post == "0"){
		$err = "Die Nachricht wurde erfolgreich gesendet!";
	}else{
		$err = $_GET['err'];
	}
}

?>
<!DOCTYPE HTML>
<!--
	Kontakt by baumirein.de
	baumirein | @JOE_
-->
<html>
	<head>
		<title>Kontakt </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>KONTAKT</h1>
								<p><?php echo $err; ?></p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="https://werkstatt-company.de">Home</a></li>
								<li><a href="https://werkstatt-company.de/forum">Forum</a></li>
								<li><a href="#contact">Kontakt</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Kontakt</h2>
								<form method="post" action="mailer.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<input type="text" id="to" name="to" value="RECIVERS E-MAIL ADRESS COMMES HERE" style="display: none"/>
										<li><input type="submit" value="Nachricht senden" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<!--
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
								-->
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Werkstatt-Company.de . Design: <a href="https://baumirein.de">baumirein</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
