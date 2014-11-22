<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title><?= $title; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="<?= base_url('css/ie/html5shiv.js'); ?>"></script><![endif]-->
		<script src="<?= base_url('js/jquery.min.js'); ?>"></script>
		<script src="<?= base_url('js/jquery.dropotron.min.js'); ?>"></script>
		<script src="<?= base_url('js/skel.min.js'); ?>"></script>
		<script src="<?= base_url('js/skel-layers.min.js'); ?>"></script>
		<script src="<?= base_url('js/init.js'); ?>"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <?= link_tag('css/skel.css'); ?>
            <?= link_tag('css/style.css'); ?>
            <?= link_tag('css/style-wide.css'); ?>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
            <?= link_tag('css/main.css'); ?>
		<!--[if lte IE 8]><?= link_tag('css/ie/v8.css'); ?> /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">
						
				<!-- Logo -->
					<h1><a href="home" id="logo">Arcana <em>by HTML5 UP</em></a></h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
                            <li <?= is_curr('home'); ?>><?= anchor('home', 'Home'); ?></li>
                            <li <?= is_curr('about'); ?>><?= anchor('about', 'About'); ?></li>
							<li <?= is_curr('products'); ?>><?= anchor('products', 'Products'); ?></li>
							<li <?= is_curr('articles'); ?>><?= anchor('articles', 'Articles'); ?></li>
							<li <?= is_curr('blogs'); ?>><?= anchor('blogs', 'Blog'); ?></li>
							<li <?= is_curr('calendar'); ?>><?= anchor('calendar', 'Calendar'); ?></li>
							<li <?= is_curr('preferences'); ?>><?= anchor('preferences', 'Preferences'); ?></li>
							<li <?= is_curr('contact'); ?>><?= anchor('contact', 'Contact'); ?></li>
							<li <?= is_curr('login'); ?>><?= anchor('login', 'Login'); ?></li>
						</ul>
					</nav>

			</div>
        <br/><br/>

        <main>
            <?= $body; ?>
        </main>

        <br/><br/>
		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<section class="3u 6u(2) 12u$(3)">
							<h3>Links to Stuff</h3>
							<ul class="links">
								<li><a href="#">Mattis et quis rutrum</a></li>
								<li><a href="#">Suspendisse amet varius</a></li>
								<li><a href="#">Sed et dapibus quis</a></li>
							</ul>
						</section>
						<section class="3u 6u$(2) 12u$(3)">
							<h3>More Links to Stuff</h3>
							<ul class="links">
								<li><a href="#">Duis neque nisi dapibus</a></li>
								<li><a href="#">Sed et dapibus quis</a></li>
								<li><a href="#">Rutrum accumsan sed</a></li>
							</ul>
						</section>
					</div>
				</div>

				<!-- Icons -->
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

				<!-- Copyright -->
					<div class="copyright">
						<ul class="menu">
							<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

	</body>
</html>