<!DOCTYPE HTML>
<?php
include("DBconnection.php");
?>
<html>
	<head>
		<title>Tellis</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!-- Piwik -->
	</head>
			<script type="text/javascript">
		  var _paq = _paq || [];
		  _paq.push(['trackPageView']);
		  _paq.push(['enableLinkTracking']);
		  (function() {
			var u="//codeurtellis.com/piwik/";
			_paq.push(['setTrackerUrl', u+'piwik.php']);
			_paq.push(['setSiteId', 1]);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
		  })();
		</script>
		<noscript><p><img src="//codeurtellis.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
		<!-- End Piwik Code -->

	<body>

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="icon fa-home active"><span>Home</span></a>
						<a href="#work" class="icon fa-folder"><span>Work</span></a>
						<a href="#contact" class="icon fa-envelope"><span>Contact</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<h1>Tellis</h1>
									<p>Webmaster</p>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="arrow icon fa-chevron-right"><span>See my work</span></span>
									<img src="images/site.jpg" alt="" />
								</a>
							</article>

						<!-- Work -->
							<article id="work" class="panel">
								<header>
									<h2>Work</h2>
								</header>
								<section>
									<div class="row">										
										<div class="12u $u 12u$(mobile)">
											<p>
												<h4>Présentation</h4>
												Je suis un étudiant en école d'ingenieur (<a href='lien.php'>Telecom Nancy</a>) spécialisé dans le numérique, je suis passé par deux années de classe préparatoire en filière MPSI/MP (math physique) . J'aime les défis, les projets bien menés. J'ai créé quelques sites web qui ont marché à la hauteur de mes attentes et de celles des clients.
											</p>
										</div>
									</div>
									<div class="row">										
										<div class="6u 12u$(mobile)">
										<h4>Technologie</h4> 
											<p>
												J'utilise pour créer mes sites web les technologies HTML5 , PHP 5.6, mysql 5.6. Je suis en train de me perfectionner dans tout ce qui est Jquery.
											</p>
										</div>
										<div class="6u 12u$(mobile)">
											<div class='row_img_tech'>
												<img class='img_tech' src='images/html.png'>
												<img class='img_tech' src='images/php.png'>
												<img class='img_tech' src='images/css.png'>
												<img class='img_tech' src='images/js.png'>
												<img class='img_tech' src='images/sql.png'>
											</div>
										</div>								
									</div>
									<div class="row">
										<div class="12y $u 12u$(mobile)">
											<h4>Comment ça marche</h4>
											<p>Un projet ? vous avez une idée en tête ? Une chaine youtube à développer ? Une communauté à consolider ? Mais vous ne connaissez pas ou peu les langages de programmation?
											vous avez besoin d'un site web et c'est moi qui vous le fournirai ! </p>

										</div>
									</div>
									<div class="row">
										<div class="12y $u 12u$(mobile)">
											<h4>Mes dernières créations </h4> 
											<div class="12y $u 12u$(mobile)">
												Site du youtuber En3rgie5 : <a href='http://en3rgie5.com/'>en3rgie5.com</a></br>
												Site du youtuber MisterWallon : <a href='http://misterwallon.com/'>misterwallon.com</a></br>
												Site du youtuber benjifarmer : <a href='http://benjifarmer.com/'>benjifarmer.com</a></br> 
												</p>
											</div>
										</div>
									</div>		
								</section>
							</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>Contact Me</h2>
								</header>
								<?php /*<form action="#" method="post">
									<div>
										<div class="row">
											<div class="6u 12u$(mobile)">
												<input type="text" name="name" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(mobile)">
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="12u$">
												<input type="text" name="subject" placeholder="Subject" />
											</div>
											<div class="12u$">
												<textarea name="message" placeholder="Message" rows="8"></textarea>
											</div>
											<div class="12u$">
												<input type="submit" value="Send Message" />
											</div>
										</div>
									</div>
								</form>*/?>
								Vous êtes près à vous lancer à l'aventure? Alors contactez moi par mail à <span style='font-weight:bold;'>tellis.programmation@gmail.com</span> en m'expliquant votre projet en détail.</br>
								Tout projet mérite son site web !
							</article>

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">							
							<li>&copy; Tellis.</li><li>Design by <a href="http://html5up.net">HTML5 UP</a> Code by <a href="#">Tellis</li>
						</ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>