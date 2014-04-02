<!--
Filename: services.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: This is my services page. It has information with pictures about various services I offer.
-->

<!DOCTYPE html>
<html class="no-js" lang="en">

	<?php include('head.php'); ?>
	
	<body>
	
	<div class="row" id= "main_layout">
		<div class="large-12 columns">
		
		<?php include('header.php'); ?>
		
		<div class="row">
			<div class="large-12 columns">
				<h1>Services</h1>
				<hr />
				<h4>Web Design</h4>
			</div>
		</div>

		<div class="row">
			<div class="small-9 columns">				
				
				<p>I offer web design services that range from static sites, to content management systems and e-commerce websites. With meticulous work put into design and functionality, websites produced by our company will be engaging and memorable. We are competent in all current web design practices such as HTML5 and responsive design, which will help us to deliver a long lasting website with broad appeal.</p>
			</div>
			<div class="small-3 columns">
				<img class="shadow_image" src="img/webdesign.jpg" width=256 height=256>
			</div>			
		</div>
		
		<div class="row">
			<div class="large-12 columns">
				<h4>Developement</h4>
			</div>
		</div>
		
		<div class="row">
			<div class="small-9 columns">				
				
				<p>We offer programming and development services to add functionality to your existing websites. We are willing to expand a static website to include e-commerce or other services to help expand your business into the global market. We are also able to develop web applications that you can use to run your business.</p>
			</div>
			<div class="small-3 columns">
				<img class="shadow_image" src="img/development.jpg" width=256 height=256>
			</div>			
		</div>
		
		<div class="row">
			<div class="large-12 columns">
				<h4>Branding</h4>
			</div>
		</div>
		
		<div class="row">
			<div class="small-9 columns">				
				
				<p>We offer branding services to help bring a single image for your entire company. We will design a brand for you that will be in sync from your website to your business cards.</p>
			</div>
			<div class="small-3 columns">
				<img class="shadow_image" src="img/branding.jpg" width=256 height=256>
			</div>			
		</div>

		<?php include('footer.php') ?>
		
		</div>
	</div>
	
	<script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
	

	</body>

</html>