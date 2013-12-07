<?php
/**
 * replaceMe
 *
 * Header
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="copyright" content="Copyright <?=date('Y'), ' ', bloginfo('name')?>. All Rights Reserved.">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

	<?php FrontEnd::getTitle() ?>

	<link rel="profile" href="//gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<link rel="image_src" href="<?=assetDir?>/images/logo.png" />
	<link rel="shortcut icon" href="<?=home_url()?>/favicon.ico" />

	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head() ?>
</head>
<body <?php body_class() ?> ng-app="app" ng-controller="MainCtrl">

<!-- MOBILE DROPDOWN -->
<nav id="mobile-dd" ng-init="mobile.status = 'closed'" class="{{ mobile.status }}" style="
{{ modernizr.transform }}: translate(0, {{ mobile.status == 'open' ? 0 : -mobile.y }}px);
">
	<ul>
		<li><a href="#">Menu Item</a></li>
		<li><a href="#">Menu Item</a></li>
		<li><a href="#">Menu Item</a></li>
		<li><a href="#">Menu Item</a></li>
	</ul>
</nav>

<div id="container" class="{{ mobile.status }}" style="
{{ modernizr.transform }}: translate(0, {{ mobile.status == 'open' ? mobile.y : 0 }}px);
">

<!-- HEADER -->
<header id="header">
<div class="wrapper">
	<!-- Logo -->
	<a href="<?=home_url()?>" title="<?php bloginfo('name') ?>" id="logo" class="small-6 medium-4 columns">
		<img src="<?=assetDir?>/images/logo.png" alt="<?php bloginfo('name') ?>" />
	</a>

	<!-- Main menu -->
	<nav id="nav" class="right medium-8 columns hide-for-small" ng-hoverintent timeout="200">
		<ul>
			<li><a href="#">Menu Item</a></li>
			<li><a href="#">Menu Item</a></li>
			<li><a href="#">Menu Item</a></li>
			<li><a href="#">Menu Item</a></li>
		</ul>
	</nav>

	<!-- Mobile menu link -->
	<div class="right small-6 medium-6 large-8 columns show-for-small">
		<a href="javascript:;" id="mobile-dd-link" class="{{ mobile.status }}" ng-click="mobile.toggle()">
			Menu <span></span>
		</a>
	</div>
</div>
</header>