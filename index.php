<!doctype html> <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>lalal</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

		<div id="header-container">
			<header class="wrapper clearfix">
				<h1 id="title">h1#title</h1>
				<nav>
					<ul>
						<!--TODO
						- i18n
						- Crear links
						-->
						<li>
							<a href="#">Princiapl</a>
						</li>
						<li>
							<a href="#">Tutorial</a>
						</li>
						<li>
							<a href="#">Contacto</a>
						</li>
					</ul>
				</nav>
			</header>
		</div>
		<div id="main-container">
			<div id="main" class="wrapper clearfix">
				<article>
					<!-- TODO i18n http://html5boilerplate.com/docs/internationalization/-->
					<form method="post" action="">
						<input type="date" name="dateQuery" id="dateQuery">
						Provincia:
						<select name="provincia">
							<option value='0'></option>
							<option value='1'>Barcelona</option>
							<option value='2'>Madrid</option>
							<option value='3'>Valencia</option>
						</select>
						<input type="submit" value="Buscar">
					</form>
					<?php
					require_once 'resources/searchData.php';
					?>

				</article>

				<article>

					<h3>Cargar video</h3>
					<form method="post" action="">
						<label for="url">URL: <span class="required">*</span></label>
						<input type="url" name="url" id="url" required="required">
						<!-- TODO ciutat ha de ser un desplegable -->
						<!-- 							TODO Responsive css width -->
						Provincia:
						<select name="provincia">
							<option value='0'></option>
							<option value='1'>Barcelona</option>
							<option value='2'>Madrid</option>
							<option value='3'>Valencia</option>
						</select>
						Fecha:
						<input type="date" name="date" id="date" required="required">
						E-mail:
						<input type="email" name="email" id="email">
						<input type="submit" value="Enviar" id="submit-button">
						<p id="req-field-desc">
							<span class="required">*</span> campo requerido
						</p>
						<?php
						require_once 'resources/loadData.php';
						?>
					</form>

			</div>
			<!-- #main -->
		</div>
		<!-- #main-container -->

		<div id="footer-container">
			<footer class="wrapper">
				<h3>footer</h3>
			</footer>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')
		</script>

		<!-- Add fancyBox -->
		<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.0.6"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.fancybox-media').fancybox({

					'transitionIn' : 'elastic',
					'transitionOut' : 'elastic',
					'speedIn' : 600,
					'speedOut' : 200,
					'overlayShow' : false
				});
			});
		</script>

		<script src="js/script.js"></script>
		<script>
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]; ( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script>

	</body>
</html>
