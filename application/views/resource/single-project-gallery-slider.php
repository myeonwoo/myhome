<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Tectonic | Single Project: Image Gallery Slider</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/base.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/grid.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/layout.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/colors/brown.css" id="color-scheme">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Open+Sans:400,700,400italic|Open+Sans+Condensed:300">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/prettyPhoto.default.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/switcher.css"> <!-- Style Switcher -->
	
	<!-- Java Script -->
	<script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, 'js');</script>
	<!--[if lt IE 9]><script src="<?php echo base_url(); ?>static/js/html5shiv.js"></script><![endif]-->
	
</head>

<body class="body-bg-image1 image-background">
<div id="page-wrapper">


<!-- START HEADER -->

<header id="header">
	
	<div class="container"> <!-- 1152 pixels Container -->
	
		<div class="sixteen columns">
			
			<!-- Logo -->
			<div id="logo">
				<a href="index.html"><img src="<?php echo base_url(); ?>static/images/logo.png" alt="logo"></a>
			</div>
	
			<!-- Navigation -->
			<nav id="navigation">

				<div id="primary-nav">
					
					<ul id="main-menu">

						<li><a href="index.html">Home</a>
							<ul>
								<li><a href="index.html">Home Page 1</a></li>
								<li><a href="index2.html">Home Page 2</a></li>
							</ul>
						</li>
						
						<li><a href="about-us.html">Page Templates</a>
							<ul>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="services.html">Services Page 1</a></li>
								<li><a href="services-page-2.html">Services Page 2</a></li>
								<li><a href="team.html">Team</a>
									<ul>
										<li><a href="member-profile.html">Member Profile</a></li>
									</ul>
								</li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="fullwidth-page.html">Full-width Page</a></li>
							</ul>
						</li>

						<li><a href="portfolio-2-columns.html" class="current">Portfolio</a>
							<ul>
								<li><a href="portfolio-1-column.html">1 Column</a></li>
								<li><a href="portfolio-2-columns.html">2 Columns</a></li>
								<li><a href="portfolio-3-columns.html">3 Columns</a></li>
								<li><a href="portfolio-3-columns-fullwidth.html">3 Columns Full-width</a></li>
								<li><a href="portfolio-4-columns-fullwidth.html">4 Columns Full-width</a></li>
								<li><a href="single-project.html">Single Project</a></li>
								<li><a href="single-project-gallery-slider.html" class="current">Project with Gallery Slider</a></li>
								<li><a href="single-project-slideshow.html">Project with Slideshow</a></li>
								<li><a href="single-project-video-youtube.html">Project with Video</a>
									<ul>
										<li><a href="single-project-video-youtube.html">YouTube Video</a></li>
										<li><a href="single-project-video-vimeo.html">Vimeo Video</a></li>
										<li><a href="single-project-video-html5.html">HTML5 Video</a></li>
									</ul>
								</li>
							</ul>
						</li>

						<li><a href="blog.html">Blog</a>
							<ul>
								<li><a href="blog.html">Large Image</a></li>
								<li><a href="blog-medium-image.html">Medium Image</a></li>
								<li><a href="single-post.html">Single Post</a></li>
							</ul>
						</li>
						
						<li><a href="typography.html">Features</a>
							<ul>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="columns.html">Columns</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="media.html">Media and Sliders</a></li>
								<li><a href="pricing-tables.html">Pricing Tables</a></li>
							</ul>
						</li>
						
						<li><a href="contact.html">Contact</a>
							<ul>
								<li><a href="contact.html">Defaul Layout</a></li>
								<li><a href="contact2.html">Alternative Layout</a></li>
							</ul>
						</li>

					</ul>

				</div>
				
			</nav>
			
		</div>
		
	</div>
	
</header>

<!-- END HEADER -->


<!-- START CONTENT -->

<section id="main" class="container"> <!-- 1152 pixels Container -->

	<!-- Page Title -->
	<div class="sixteen columns">
		<div class="page-title">
			<h3>Portfolio / Things we have done</h3>
			<h1>Blender Artwork Gallery</h1>
		</div>
	</div>
	
	<!-- Info Board -->
	<!-- data-smallscreen: "yes" or "no" - whether to show a block on a small-screen mobile device or not -->
	<!-- five-item-menu - corresponds to the number of items in the secondary menu -->
	<div class="four columns five-item-menu" id="iBoard" data-smallscreen="yes">
		
		<!-- Secondary Menu -->
		<div class="menu shadow" data-smallscreen="yes">
			<ul id="secondary-menu">
				<li><a href="portfolio-2-columns.html"><h6 class="title">All Categories</h6></a></li>
				<li><a href="#"><h6 class="title">Planning</h6></a></li>
				<li class="current"><a href="#"><h6 class="title">Interior Design</h6></a></li>
				<li><a href="#"><h6 class="title">Photography</h6></a></li>
				<li><a href="#"><h6 class="title">Environment</h6></a></li>
			</ul>
		</div>
		
		<!-- Info Text -->
		<div class="five columns alpha omega">
			<aside id="info-board" class="shadow" data-smallscreen="yes">
				<h5>Overview</h5>
				<p>This is an example of a single project page with the image gallery slider. Clicking the preview image opens the full-size picture gallery in a lightbox overlay.</p>
				<p>Each element of the portfolio item description can be easily modified.</p>
				<h5>Main features:</h5>
				<ul class="check-list colored tight remove-bottom">
					<li>Fluid preview images</li>
					<li>Full-size picture gallery in lightbox</li>
					<li>Fade effect</li>
					<li>Responsive design</li>
				</ul>
			</aside>
		</div>
	</div>
	
	<!-- Page Content -->
	<div class="twelve columns" id="pContent">
	
		<section id="page-content" class="clearfix"> <!-- inner grid 720 pixels wide -->
		
			<div class="twelve columns">
		
				<!-- Image Gallery Slider -->
				<section class="flexslider gallery margin-bottom-35px">
					<ul class="slides">
						<li class="item-picture">
							<img src="<?php echo base_url(); ?>static/images/portfolio/project2-slide1.jpg" alt="">
							<div class="image-overlay">
								<a href="images/portfolio/project2-full-slide1.jpg" data-rel="prettyPhoto[gallery]" title="Indigo Room &ndash; Artwork by Johannes Eich"><span class="zoom"></span></a>
							</div>
						</li>
						<li class="item-picture">
							<img src="<?php echo base_url(); ?>static/images/portfolio/project2-slide2.jpg" alt="">
							<div class="image-overlay">
								<a href="images/portfolio/project2-full-slide2.jpg" data-rel="prettyPhoto[gallery]" title="Sala &ndash; Artwork by Dantrix"><span class="zoom"></span></a>
							</div>
						</li>
						<li class="item-picture">
							<img src="<?php echo base_url(); ?>static/images/portfolio/project2-slide3.jpg" alt="">
							<div class="image-overlay">
								<a href="images/portfolio/project2-full-slide3.jpg" data-rel="prettyPhoto[gallery]" title="Time for Tea &ndash; Artwork by Marcin Jarka"><span class="zoom"></span></a>
							</div>
						</li>
					</ul>
				</section>
				
				<!-- Description -->
				<h2>Summary</h2>
				<p class="margin-bottom-30px">Integer vel enim mi, sed suscipit neque. Integer at enim cursus massa malesuada tempus. Praesent congue molestie tristique. Nullam tortor leo, tristique ac tempus eget, vestibulum nec ante. Mauris rhoncus aliquet lectus, lobortis fringilla tortor placerat ac. Vestibulum quis dui dui. Nulla ornare neque sit amet magna volutpat cursus sit amet sollicitudin massa. Sed non venenatis erat. Etiam sollicitudin lectus vitae velit vulputate quis consequat nunc placerat. In ac risus quam, in congue purus. Nunc velit nisl, lobortis non eleifend ut, adipiscing et turpis. Suspendisse ut eros nibh, quis consequat augue. Nam sodales erat ornare erat iaculis commodo. Curabitur et luctus vivamus ut arcu in arcu mollis consectetur id mauris. Curabitur porta risus eu lorem tempus vitae sodales ante mollis. Curabitur gravida tincidunt ornare. Sed vulputate, a cursus imperdiet, felis tortor interdum purus, non viverra justo libero et erat. Aliquam dignissim lorem ac leo egestas pellentesque.</p>
				
				<h2>The aims of the project</h2>
				<ul class="square-list margin-bottom-25px">
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>	
					<li>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</li>
					<li>Nulla ornare neque sit amet magna volutpat cursus sit amet sollicitudin massa. Sed a sapien ac odio fringilla accumsan, aliquam lectus ligula, fringilla quis ornare nec, sodales mollis nibh.</li>
					<li>Aliquam lectus ligula, fringilla quis ornare nec, sodales mollis nibh.</li>
					<li>Curabitur gravida tincidunt ornare. Sed vulputate, nunc a cursus imperdiet, felis tortor interdum purus, non viverra justo libero et erat. Aliquam dignissim lorem ac leo egestas pellentesque.</li>
					<li>Aenean cursus, justo ut tristique tincidunt, sapien turpis egestas nisi, non ultricies lorem risus nec neque. In nec quam sit amet erat iaculis cursus. Morbi porta, urna at euismod placerat, nibh mauris tincidunt erat, quis lobortis leo augue ac erat. Aenean quis diam nunc. Quisque nisl enim, volutpat vitae fermentum sed, convallis non ante. Quisque tincidunt lacus turpis. Nulla congue suscipit turpis, vitae hendrerit augue facilisis quis.</li>
				</ul>
				
				<h2>Benefits for heritage</h2>
				<p>Donec non eros ipsum, vel suscipit enim. Proin at leo a ligula egestas pellentesque. Maecenas porta pretium quam, et rutrum nunc lobortis id. Aenean cursus, justo ut tristique tincidunt, sapien turpis egestas nisi, non ultricies lorem risus nec neque. In nec quam sit amet erat iaculis cursus. Morbi porta, urna at euismod placerat, nibh mauris tincidunt erat, quis lobortis leo augue ac erat. Aenean quis diam nunc. Quisque nisl enim, volutpat vitae fermentum sed, convallis non ante. Quisque tincidunt lacus turpis. Nulla congue suscipit turpis, vitae hendrerit augue facilisis quis.</p>
				<blockquote>
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum.</p>
					<cite>Smashing Magazine, <a href="#">Typography</a></cite>
				</blockquote>
				<p>Sed commodo fermentum urna nec rutrum. Nulla fermentum nulla orci. Pellentesque a consectetur lectus. Maecenas in sapien nunc. Duis congue enim non quam malesuada fringilla. Duis placerat tellus sed arcu vehicula ac ultrices eros condimentum. Duis quis elit eu purus fringilla gravida. Nulla pretium elementum lacus, eget condimentum est ullamcorper at. Nam a ipsum tortor. Nunc nec nisl ac urna posuere dictum. Nullam nec feugiat ipsum. Nam sed purus in purus dictum iaculis. Fusce fringilla tellus ac leo luctus ultricies. Integer ultrices ultrices leo, pellentesque laoreet dui feugiat vitae. Quisque egestas adipiscing turpis ultricies feugiat. Aliquam ut mi id mi malesuada feugiat in quis velit.</p>
				
			</div> <!-- end twelve columns -->
		
		</section> <!-- end inner grid -->
	
	</div>
	<!-- end Page Content -->
	
	<!-- Sidebar -->
	<div class="four columns" id="sBar">
	
		<aside id="sidebar">
			
			<!-- Projects List -->
			<div class="widget" data-smallscreen="yes"> <!-- show widget on a small-screen mobile device: "yes" or "no" -->
				<h5>Our Projects</h5>
				<ul class="categories arrow-list">
					<li><a href="single-project.html">Smile Mug</a></li>
					<li class="current"><a href="single-project-gallery-slider.html">Blender Artwork Gallery</a></li>
					<li><a href="single-project-video-youtube.html">Google Custom Search</a></li>
					<li><a href="single-project-video-vimeo.html">CCTV Ink</a></li>
					<li><a href="single-project-video-html5.html">Taste Lab</a></li>
					<li><a href="single-project-slideshow.html">Middle Fork Salmon Hiking</a></li>
				</ul>
			</div>
			
		</aside>
		
	</div>
	<!-- end Sidebar -->
	
	<div class="clear"></div>
	
</section>

<!-- END CONTENT -->


<!-- START FOOTER -->

<footer id="footer">

	<div class="container"> <!-- 1152 pixels Container -->
	
		<!-- Contact Details -->
		<div class="one-third column" id="contact-details">
			<div>
				<p>Connect with Us</p>
				<h2 class="phone-number">+1 (510) 700-1234</h2>
				<a href="mailto:info@ipsum.com">info@ipsum.com</a>
			</div>
		</div>
		
		<div class="two-thirds column" id="footer-links">
			
			<!-- Social Icons -->
			<ul class="social-icons clearfix">
				<li class="twitter"><a href="#">Twitter</a></li>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="pinterest"><a href="#">Pinterest</a></li>
				<li class="linkedin"><a href="#">LinkedIn</a></li>
			</ul>
			
			<!-- Footer Navigation -->
			<ul class="footer-nav clearfix">
				<li><a href="index.html">Home</a></li>
				<li><a href="about-us.html">About</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="portfolio-2-columns.html">Portfolio</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			
			<div class="clear"></div> <!-- IE7 margin-bottom fix -->
			
		</div>
		
	</div>

</footer>

<footer id="footer-bottom">
	
	<div class="container"> <!-- 1152 pixels Container -->
		<div class="sixteen columns">
			
			<div class="twelve columns alpha">
				<ul class="links clearfix">
					<li>&copy; 2013 Tectonic<span>|</span></li>
					<li><a href="#">Legal Notice</a><span>|</span></li>
					<li><a href="#">Terms</a></li>
				</ul>
			</div>
				
			<div class="four columns omega">
				<span class="scroll-top">Back to Top</span>
			</div>
			
		</div>
	</div>
	
</footer>

<!-- END FOOTER -->


</div>

<!-- Java Script -->
<script src="<?php echo base_url(); ?>static/js/respond.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/selectnav.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/detectmobilebrowser.js"></script>
<script src="<?php echo base_url(); ?>static/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/jquery.fitvids.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/jquery.prettyPhoto.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/jquery.flexslider.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/jquery.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/jquery.tweet.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/custom.js"></script>
<script src="<?php echo base_url(); ?>static/js/switcher.js"></script> <!-- Style Switcher -->

</body>
</html>
