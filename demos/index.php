<!doctype html>
<!--[if lte IE 8]> <html lang="en" class="ie-lte8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>ResponsiveImages.org</title>
	<meta name="description" content="Our goal is a markup-based means of delivering alternate image sources based on device capabilities.">

	<meta property="og:url" content="http://responsiveimages.org">
	<meta property="og:site_name" content="Responsive Images Community Group">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Responsive Images Community Group">
	<meta property="og:image" content="http://responsiveimages.org/img/ricg-icon.png">
	<meta property="og:description" content="Read the latest news on responsive images, and get involved!">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="/css/enhanced.css" media="only all">
</head>
<body>

	<header class="doc-head">
	  <div class="col-a demo-intro">
			<h1 class="logo"><a href="http://responsiveimages.org"><img src="/img/logo.png" alt="Responsive Images Community Group logo"></a></h1>
			<p class="intro">The demos work in any modern browser.</p>
		</div>
	<figure class="col-b live-demo">
			<picture>
				<source srcset="http://responsiveimages.org/img/devices-sm.gif 1x, http://responsiveimages.org/img/devices.gif 2x">
				<source media="(min-width: 40em)" src="http://responsiveimages.org/img/devices.gif">
				<noscript>
					<img src="http://responsiveimages.org/img/devices-sm.png">
				</noscript>
			</picture>
			<figcaption>Examples of <a href="http://usecases.responsiveimages.org/#art-direction">art direction</a>. See more <a href="/demos/">demos of responsive images</a>.</figcaption>
		</figure>
	</header>

	<div class="main">
		<div>

			<section class="demo">
				<div class="col-a">
					<h1 class="demo-hed"><a href="basic-implementation/index.html">Simple Cropping</a></h1>
					<p>This shows the basic implementation and usage of the <code>picture</code> element. It uses the <code>source</code> element and different @media-queries to fetch the correct image for the device-screen.</p>
					<address>Author:
						<a href="http://anselm-hannemann.com">Anselm Hanneman</a> |
						<a href="https://twitter.com/anselmhannemann">@anselmhannemann</a>
					</address>
				</div>
				<figure class="demo-thumb col-b">
					<a href="basic-implementation/index.html"><img src="http://responsiveimages.org/img/demo-crop.jpg"></a>
					<figcaption>
						<p class="demo-hed">This demo shows:</p>
						<ul>
							<li>mobile</li>
							<li>tablet</li>
							<li>desktop</li>
							<li>monochrome / eInk</li>
							<li>fallback</li>
						</ul>
					</figcaption>
				</figure>
			</section>

			<section class="demo">
				<div class="col-a">
					<h1 class="demo-hed"><a href="on-a-grid/index.html">Grid System</a></h1>
					<p>This shows the basic implementation and usage of the <code>picture</code> element. It uses the <code>source</code> element and different @media-queries to fetch the correct image for the device-screen.</p>
					<address>Author: <a href="http://www.andreasklein.org/">Andreas Klein</a> | <a href="https://twitter.com/ixisio">@ixisio</a></address>
				</div>
				<figure class="demo-thumb col-b">
					<a href="on-a-grid/index.html"><img src="http://responsiveimages.org/img/demo-grid.jpg"></a>
					<figcaption>
						<p class="demo-hed">This demo shows:</p>
						 <ul>
							<li>mobile</li>
							<li>tablet</li>
							<li>desktop</li>
							<li>monochrome / eInk</li>
							<li>fallback</li>
						</ul>
					</figcaption>
				</figure>
			</section>

			<section class="demo">
				<div class="col-a">
					<h1 class="demo-hed"><a href="art-direction/index.html">Art Direction</a></h1>
					<p>Using the <code>picture</code> element for “<a href="http://blog.cloudfour.com/a-framework-for-discussing-responsive-images-solutions/">art direction</a>.”</p>
					<address>Author: <a href="http://www.shanehudson.net/">Shane Hudson</a> | <a href="https://twitter.com/shanehudson">@shanehudson</a></address>
				</div>
				<figure class="demo-thumb col-b">
					<a href="art-direction/index.html"><img src="http://responsiveimages.org/img/demo-orientation.jpg"></a>
					<figcaption>
						<p class="demo-hed">This demo shows:</p>
						 <ul>
							<li>small / large screen</li>
							<li>art-direction</li>
							<li>fallback</li>
						</ul>
					</figcaption>
				</figure>
			</section>

			<!--
			Not working: see bug 
			https://github.com/ResponsiveImagesCG/responsiveimages.org/issues/47

			section class="demo">
				<div class="col-a">
					<h1 class="demo-hed"><a href="no-folri/index.html">No FOLRI on reorientation</a></h1>
					<p>Shows the <code>picture</code> element handling on orientation-change</p>
					<address>Author: <a href="http://code.medula.cl/">Agustín Amenabar</a> | <a href="https://twitter.com/ImINaBAR">@ImINaBAR</a></address>
				</div>
				<figure class="demo-thumb col-b">
					<a href="no-folri/index.html"><img src="http://responsiveimages.org/img/demo-orientationchange.jpg"></a>
					<figcaption>
						<p class="demo-hed">This demo shows:</p>
						 <ul>
							<li>orientation-change</li>
							<li>fallback</li>
						</ul>
					</figcaption>
				</figure>

			</section-->
		</div>

	</div>


	<div class="doc-foot">
		<p style="clear:both">Hosting and bandwidth for these demos is provided by <a href="http://cdnconnect.com">CDNConnect.com</a></p>
		<aside class="assets">
			<a href="/RICG-Logos.zip">
				<img src="http://responsiveimages.org/img/ricg-icon.png" class="assets-thumb">
				<h1 class="assets-hed">Download the RICG Logos</h1>
				<p>Want to show your support for the goals of the RICG? Use our logo!</p>
			</a>
		</aside>

		<nav class="social">
			<h1 class="a11y">Share this page</h1>
            <a class="subhed humans" href="https://github.com/ResponsiveImagesCG/responsiveimages.org/graphs/contributors">Contributors</a>
			<a class="subhed twitter" href="http://twitter.com/home?status=Read%20the%20latest%20news%20on%20responsive%20images%2C%20and%20get%20involved!%0Ahttp%3A%2F%2Fresponsiveimages.org">Twitter</a>
			<a class="subhed facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fresponsiveimages.org&amp;t=Read%20the%20latest%20news%20on%20responsive%20images%2C%20and%20get%20involved!">Facebook</a>
			<a class="subhed g-plus" href="https://plus.google.com/share?url=http%3A%2F%2Fresponsiveimages.org">Google Plus</a>
		</nav>

	</div>
	<script src="http://responsiveimages.org/js/picturefill.js"></script>

	<script>var _gaq=[['_setAccount','UA-35760540-1'],['_trackPageview'],['_setDomainName', 'responsiveimages.org']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
</body>
</html>
