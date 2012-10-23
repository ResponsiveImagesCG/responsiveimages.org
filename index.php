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
		<p class="intro">Our goal is a markup-based means of delivering alternate image sources based on device capabilities, to prevent wasted bandwidth and optimize display for both screen and print.</p>
	</header>

	<div class="main">
		<div>
			<section class="topic">
				<a href="#">
					<h1 class="subhed">What is the `picture` Element?</h1>
					<p>The picture element is an image whose source content is determined by one or more CSS media queries.</p>

					<b>The <code>picture</code> Specification</b>
				</a>
			</section>

			<section class="topic">
				<a href="#">
					<h1 class="subhed">What is the `srcset` attribute?</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum libero nibh, iaculis vestibulum interdum.</p>
					
					<b>The <code>srcset</code> Specification</b>
				</a>
			</section>

			<section class="topic">
				<a href="#">
					<h1 class="subhed">What are the use cases for each?</h1>
					<p>Vehicula eget massa. Nam leo turpis, convallis eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					
					<b>Use Cases and Requirements</b>
				</a>
			</section>

			<section id="issue-tracker">
				<h1 class="a11y">Issue Tracker</h1>

				<div id="issues-open">
					<?php get_issues( "open" ); ?>
				</div>

				<div id="issues-closed" class="closed">
					<?php get_issues( "closed" ); ?>
				</div>
			</section>
		</div>
	</div>

	<div class="doc-foot">

		<aside class="assets">
			<a href="#">
				<img src="img/ricg-icon.png" class="assets-thumb">
				<h1 class="assets-hed">Download the RICG Logos</h1>
				<p>[TK: Encourage spreading the word] We’ve got a few guidelines for our logo—please read the usage agreement and follow them!</p>
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
</body>
</html>