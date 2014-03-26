<?php include_once( "issues.php" ); ?><!doctype html>
<!--[if lte IE 8]> <html lang="en" class="ie-lte8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>ResponsiveImages.org</title>
	<meta name="description" content="Our goal is a client-side solution for delivering alternate image data based on device capabilities.">
	<meta property="og:url" content="http://responsiveimages.org">
	<meta property="og:site_name" content="Responsive Images Community Group">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Responsive Images Community Group">
	<meta property="og:image" content="http://responsiveimages.org/img/ricg-icon.png">
	<meta property="og:description" content="Read the latest news on responsive images, and get involved!">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/enhanced.css?1" media="only all">
	<link rel="author" href="humans.txt" />
</head>
<body>

	<header class="doc-head">
		<div class="col-a">
			<h1 class="logo"><img src="img/logo.png" alt="Responsive Images Community Group logo"></h1>
			<p class="intro">We’re a group of developers working towards a client-side solution for delivering alternate image data based on device capabilities to prevent wasted bandwidth and optimize display for both screen and print. </p>
			<a href="http://www.w3.org/community/respimg/" class="subhed go">Join Us!</a>
		</div>
		<figure class="col-b live-demo">
			<picture>
				<source srcset="img/devices-sm.gif 1x, img/devices.gif 2x">
				<source media="(min-width: 40em)" src="img/devices.gif">
				<noscript>
					<img src="img/devices-sm.png">
				</noscript>
			</picture>
			<figcaption>Examples of <a href="http://usecases.responsiveimages.org/#art-direction">art direction</a>. See more <a href="/demos/">demos of responsive images</a>.</figcaption>
		</figure>

	</header>

	<div class="main">
		<div>
			<section class="col-two topic">
				<h1 class="subhed"><a href="http://picture.responsiveimages.org">What is the `picture` Element?</a></h1>
				<p>The <code>picture</code> element is a markup pattern that allows developers to declare multiple sources for
				an image. By using media queries, it gives developers control as to when and if those
				images are presented to the user.</p>

				<figure class="snippet">
					<figcaption class="codehed">Sample Markup for `picture`</figcaption>
					<code>
<pre>
&lt;picture&gt;
  &lt;source media="(min-width: 40em)" srcset="big.jpg 1x, big-hd.jpg 2x"&gt;
  &lt;source srcset="small.jpg 1x, small-hd.jpg 2x"&gt;
  &lt;img src="fallback.jpg" alt=""&gt;
&lt;/picture&gt;
</pre>
					</code>
				</figure>
				<a href="http://picture.responsiveimages.org" class="more">The <code>picture</code> Specification</a>
			</section>

			<section class="col-two topic">
				<h1 class="subhed"><a href="http://dev.w3.org/html5/srcset/">What is the `srcset` attribute?</a></h1>
				<p>The <code>srcset</code> attribute is an extension to the <code>img</code> and <code>source</code> elements
				that provides a concice method for delivering high-res assets to high-density displays only, while allowing the
				user to override requests based on a preference or available bandwidth.</p>

				<figure class="snippet">
					<figcaption class="codehed">Sample Markup for `srcset`</figcaption>
					<code>
<pre>
&lt;img src="fallback.jpg" alt="" srcset="photo.jpg 1x, photo-hd.jpg 2x"&gt;
</pre>
					</code>
				</figure>

				<p><a href="http://dev.w3.org/html5/srcset/" class="more">The <code>srcset</code> Specification</a>
				<a href="http://responsiveimagescg.github.com/picture-refimp/demo/" class="more">Example <code>srcset</code> Parser</a></p>
		  </section>

			<div class="subtopics">

				<section class="col-three topic">
					<h1 class="subhed"><a href="http://usecases.responsiveimages.org">What are the use cases for each?</a></h1>
					<p>The <em>Use Cases and Requirements</em> document outlines the goals, objectives, and potential issues
						for end users that must be solved by the <code>picture</code> and <code>srcset</code> extension specifications.</p>

					<a href="http://usecases.responsiveimages.org" class="more">View the Use Cases and Requirements</a>
				</section>

				<section class="col-three topic">
					<h1 class="subhed">Where can I learn more?</h1>
					<dl>
						<dt class="assets-hed">The RICG on GitHub</dt>
						<dd><a href="http://gh.responsiveimages.org">http://gh.responsiveimages.org</a></dd>
						<dt class="assets-hed">IRC Logs</dt>
						<dd><a href="http://ircbot.responsiveimages.org">http://ircbot.responsiveimages.org</a></dd>
						<dt class="assets-hed">Mailing List</dt>
						<dd><a href="http://list.responsiveimages.org">http://list.responsiveimages.org</a></dd>
					</dl>
				</section>

				<section class="col-three topic">
					<h1 class="subhed"><a href="http://responsiveimages.org/demos/">Try it now!</a></h1>
					<p>The members of the RICG have put together a number of demos for the <code>picture</code> and <code>srcset</code> elements. The demos on this page work in any modern browser.</p>

					<a href="http://responsiveimages.org/demos/" class="more">View the Demos</a>
				</section>
			</div>

			<section class="twitter-feed" id="twitter-feed">
				<h1 class="subhed">News / Updates</h1>
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/respimg"  data-widget-id="342992787676999681" width="600" height="400">Tweets by @respimg</a>
			</section>

			<section class="implementation" id="implementation">
				<h1 class="subhed">Implementation status</h1>
				<p><em>This list indicates the status of implementation in major browser engines. We always try to keep this up-to-date but please refer to the linked issues for the latest status.<br> In most bugtrackers you can vote for implementation in the linked bugs.</em></p>
				<ul>
					<li><strong>Blink / Chrome</strong>
						<ul>
							<li>Picture: <a href="#">Strongly inclined to implement, but no official bug open</a></li>
							<li>srcset: <a href="http://blog.chromium.org/2014/02/chrome-34-responsive-images-and_9316.html">IMPLEMENTED/SHIPPED (Chrome 34)</a></li>
							<li><em>Support the <a href="http://www.indiegogo.com/projects/picture-element-implementation-in-blink">RICG Crowd-Funding Campaign for Blink implementation</a></em></li>
						</ul>
					</li>
					<li><strong>WebKit / Safari</strong>
						<ul>
							<li>Picture: <a href="https://bugs.webkit.org/show_bug.cgi?id=116963">UNCONFIRMED (not implemented)</a></li>
							<li>srcset: <a href="https://www.webkit.org/blog/2910/improved-support-for-high-resolution-displays-with-the-srcset-image-attribute/">IMPLEMENTED</a></li>
						</ul>
					</li>
					<li><strong>Mozilla Firefox</strong>
						<ul>
							<li>Picture: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=870022">ASSIGNED (but not implemented)</a></li>
							<li>srcset: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=870021">OPEN (but not implemented)</a></li>
						</ul>
					</li>
					<li><strong>Microsoft Internet Explorer</strong>
						<ul>
							<li>Picture: <a href="https://connect.microsoft.com/IE/feedback/details/825880/implement-picture-element-and-srcset-attribute">NO INFORMATION</a></li>
							<li>srcset: <a href="https://connect.microsoft.com/IE/feedback/details/825880/implement-picture-element-and-srcset-attribute">NO INFORMATION</a></li>
						</ul>
					</li>
				</ul>
			</section>

			<section class="issue-tracker" id="issue-tracker">
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
			<a class="subhed humans" href="https://github.com/ResponsiveImagesCG/responsiveimages.org/graphs/contributors">Contributors</a>
			<a class="subhed no-txt twitter" href="https://twitter.com/respimg">Twitter</a>
			<a class="subhed no-txt facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fresponsiveimages.org&amp;t=Read%20the%20latest%20news%20on%20responsive%20images%2C%20and%20get%20involved!">Facebook</a>
			<a class="subhed no-txt g-plus" href="https://plus.google.com/share?url=http%3A%2F%2Fresponsiveimages.org">Google Plus</a>
		</nav>

	</div>
	<script src="js/tabs.js"></script>
	<script src="js/picturefill.js"></script>
	<script>var _gaq=[['_setAccount','UA-35760540-1'],['_trackPageview'],['_setDomainName', 'responsiveimages.org']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
	<!-- Twitter feed -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>
