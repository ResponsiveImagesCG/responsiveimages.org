<?php include_once( "issues.php" ); ?><!doctype html>
<!--[if lte IE 8]> <html lang="en" class="ie-lte8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>ResponsiveImages.org</title>
	<meta name="description" content="Our goal is a markup-based means of delivering alternate image sources based on device capabilities.">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="css/enhanced.css" media="only all">
</head>
<body>
	<header class="doc-head">
		<h1 class="logo"><img src="img/logo.png" alt="Responsive Images Community Group logo"></h1>
		<p class="intro">We’re a <a href="http://www.w3.org/community/respimg/">group of developers</a> working towards a markup-based means of delivering alternate image sources based on device capabilities.</p>
	</header>

	<div class="main">
		<div>
			<section class="topic">
				<h1 class="subhed"><a href="http://picture.responsiveimages.org">What is the `picture` Element?</a></h1>
				<p>The <code>picture</code> element is a markup pattern that allows developers to declare multiple sources for
					an image. By using media queries, it gives developers control as to when and if those
					images are presented to the user.</p>
				<a href="http://picture.responsiveimages.org" class="more">View the <code>picture</code> Specification</a>
			</section>

			<section class="topic">
				<h1 class="subhed"><a href="http://dev.w3.org/html5/srcset/">What is the `srcset` attribute?</a></h1>
				<p>The <code>srcset</code> attribute is an extension to the existing <code>img</code> tag that
					provides some of the functionality of the <code>picture</code> element. It uses a more concise syntax,
					part of which may be used by the <code>picture</code> element.</p>

				<a href="http://dev.w3.org/html5/srcset/" class="more">View the <code>srcset</code> Specification</a>
			</section>

			<section class="topic">
				<h1 class="subhed"><a href="http://usecases.responsiveimages.org">What are the use cases for each?</a></h1>
				<p>The <em>Use Cases and Requirements</em> document outlines the goals, objectives, and potential issues
					for end users that must be solved by the <code>picture</code> and <code>srcset</code> extension specifications.</p>

				<a href="http://usecases.responsiveimages.org" class="more">View the Use Cases and Requirements</a>
			</section>

			<section id="issue-tracker">
				<h1 class="a11y">Issue Tracker</h1>
				<div id="issues-open">
					<? print_issues('open', get_issues( 'open' ))?>
				</div>

				<div id="issues-closed" class="closed">
					<? print_issues('closed', get_issues( 'closed' ))?>
				</div>
			</section>
		</div>
	</div>

	<div class="doc-foot">

		<aside class="assets">
			<a href="RICG-Logos.zip">
				<img src="img/ricg-icon.png" class="assets-thumb">
				<h1 class="assets-hed">Download the RICG Logos</h1>
				<p>Want to show your support for the goals of the RICG? Use our logo!</p>
			</a>
		</aside>

		<nav class="social">
			<h1 class="a11y">Share this page</h1>
			<a class="subhed twitter" href="http://twitter.com/home?status=Read%20the%20latest%20news%20on%20responsive%20images%2C%20and%20get%20involved!%0Ahttp%3A%2F%2Fresponsiveimages.org">Twitter</a>
			<a class="subhed facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fresponsiveimages.org&amp;t=Read%20the%20latest%20news%20on%20responsive%20images%2C%20and%20get%20involved!">Facebook</a>
			<a class="subhed g-plus" href="https://plus.google.com/share?url=http%3A%2F%2Fresponsiveimages.org">Google Plus</a>
		</nav>

	</div>
	<script src="js/tabs.js"></script>
	<script>var _gaq=[['_setAccount','UA-35760540-1'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
</body>
</html>