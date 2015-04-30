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
	<link href="img/favicon.ico" rel="icon">
</head>
<body>

	<header class="doc-head">
		<div class="col-a">
			<h1 class="logo"><img src="img/logo.png" alt="Responsive Images Community Group logo"></h1>
			<p class="intro">We’re a group of developers working towards a client-side solution for delivering alternate image data based on device capabilities to prevent wasted bandwidth and optimize display for both screen and print. </p>
			<a href="http://www.w3.org/community/respimg/" class="subhed go">Join Us!</a>
		</div>
		<figure class="col-b live-demo">
			<img src="/img/devices-sm.gif" srcset="/img/devices.gif 2x">
			<figcaption>Examples of <a href="http://usecases.responsiveimages.org/#art-direction">art direction</a>. See more <a href="/demos/">demos of responsive images</a>.</figcaption>
		</figure>

	</header>

	<div class="main">
		<div>
			<section class="col-two topic">
				<h1 class="subhed"><a href="https://html.spec.whatwg.org/multipage/embedded-content.html#the-picture-element">What is the `picture` Element?</a></h1>
				<p>The <code>picture</code> element is a markup pattern that allows developers to declare multiple sources for
				an image. By using media queries, it gives developers control as to when and if those
				images are presented to the user.</p>
				<p>The <code>picture</code> element is one part of the  <a href="https://html.spec.whatwg.org/multipage/embedded-content.html#the-picture-element">HTML specification</a>.</p>

			  <figure class="snippet">
					<figcaption class="codehed">Sample Markup for `picture`</figcaption>
					<code>
<pre>
&lt;picture&gt;
  &lt;source media="(min-width: 40em)"
    srcset="big.jpg 1x, big-hd.jpg 2x"&gt;
  &lt;source 
    srcset="small.jpg 1x, small-hd.jpg 2x"&gt;
  &lt;img src="fallback.jpg" alt=""&gt;
&lt;/picture&gt;
</pre>
					</code>
				</figure>
			</section>

			<section class="col-two topic">
				<h1 class="subhed"><a href="https://html.spec.whatwg.org/multipage/embedded-content.html#attr-img-srcset">What are the `srcset` and `sizes` attributes?</a></h1>
				<p>The <code>srcset</code> and <code>sizes</code> attributes extend the <code>img</code> and <code>source</code> elements to provide a list of available image sources and their sizes. Browsers can then use this information to pick the best image source.</p>
				<p>Both <code>srcset</code> and <code>sizes</code> are part of the <a href="https://html.spec.whatwg.org/multipage/embedded-content.html#attr-img-srcset">HTML specification</a> and can used separately or in conjunction with the <code>picture</code> element.</p>

				<figure class="snippet">
					<figcaption class="codehed">Sample Markup for `srcset` and `sizes`</figcaption>
					<code>
<pre>
&lt;img src="small.jpg"
     srcset="large.jpg 1024w, medium.jpg 640w, small.jpg 320w"
     sizes="(min-width: 36em) 33.3vw, 100vw"
     alt="A rad wolf"&gt;
</pre>
					</code>
				</figure>
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
						<dt class="assets-hed">Discussion List Archives</dt>
						<dd><a href="http://list.responsiveimages.org">http://list.responsiveimages.org</a></dd>
					</dl>
				</section>

				<section class="col-three topic newsletter" id="newsletter">
					<h1 class="subhed"><a href="http://responsiveimages.org/demos/">Want to stay updated?</a></h1>

					<p class="assets-hed">Subscribe to our newsletter!</p>
					<p class="desc">Get news, announcements, and implementation updates every other Friday!</p>
					<div id="mc_embed_signup">
						<form action="http://responsiveimages.us8.list-manage1.com/subscribe/post?u=c988d9ca55d5d09e73a7dc993&amp;id=1593118b9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<label for="mce-EMAIL" class="a11y">Email Address</label>
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;"><input type="text" name="b_c988d9ca55d5d09e73a7dc993_1593118b9a" value=""></div>
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="subhed go">
						</form>
					</div>
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
					<li><strong>Blink / Chrome / Opera</strong>
						<ul>
							<li>Picture: <a href="https://code.google.com/p/chromium/issues/detail?id=368830">IMPLEMENTED/SHIPPED (Chrome 38, Opera 25)</a></li>
							<li>srcset: <a href="https://code.google.com/p/chromium/issues/detail?id=357586">IMPLEMENTED/SHIPPED (Chrome 34, Opera 21)</a></li>
						</ul>
					</li>
					<li><strong>WebKit / Safari</strong>
						<ul>
							<li>Picture: <a href="https://bugs.webkit.org/show_bug.cgi?id=116963">UNCONFIRMED (not implemented)</a></li>
							<li>srcset: <a href="https://bugs.webkit.org/show_bug.cgi?id=110252">IMPLEMENTED/SHIPPED (Safari 6.2, Safari 7.1, iOS8)</a></li>
						</ul>
					</li>
					<li><strong>Mozilla Firefox</strong>
						<ul>
							<li>Picture: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1017875">IMPLEMENTED/SHIPPED (Firefox 38)</a></li>
							<li>srcset: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1018389">IMPLEMENTED/SHIPPED (Firefox 38)</a></li>
						</ul>
					</li>
					<li><strong>Microsoft Internet Explorer</strong>
						<ul>
							<li>Picture: <a href="http://status.modern.ie/pictureelement">UNDER CONSIDERATION</a></li>
							<li>srcset: <a href="http://status.modern.ie/imgsrcset">IN DEVELOPMENT</a></li>
						</ul>
					</li>
				</ul>
			</section>

			<section class="issue-tracker" id="issue-tracker">
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
		<nav class="social">
			<h1 class="a11y">Share this page</h1>
			<a class="subhed humans" href="https://github.com/ResponsiveImagesCG/responsiveimages.org/graphs/contributors">Contributors</a>
			<a class="subhed no-txt twitter" href="https://twitter.com/respimg">Twitter</a>
			<a class="subhed no-txt facebook" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fresponsiveimages.org&amp;t=Read%20the%20latest%20news%20on%20responsive%20images%2C%20and%20get%20involved!">Facebook</a>
			<a class="subhed no-txt g-plus" href="https://plus.google.com/share?url=http%3A%2F%2Fresponsiveimages.org">Google Plus</a>
		</nav>
	</div>
	<script src="js/tabs.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/picturefill/2.3.1/picturefill.min.js"></script> 
	<script>var _gaq=[['_setAccount','UA-35760540-1'],['_trackPageview'],['_setDomainName', 'responsiveimages.org']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
	<!-- Twitter feed -->
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>
