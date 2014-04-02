<!--
Filename: contactme.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: This is my contact me page. It has fictional contact information to show formatting.
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
				<h1>Contact Me</h1>
				<hr />
				<h4>Contact Information</h4>
			</div>
		</div>

		<div class="row">
			<div class="small-3 columns">				
				<p>Email Address:</p>
			</div>
			<div class="small-9 columns">
				<p>graydon.armstrong@madeupemail.com</p>
			</div>			
		</div>
		
		<div class="row">
			<div class="small-3 columns">
				<p>Work Address:</p>
			</div>
			<div class="small-9 columns">
				<p>555 Smith Street, Barrie, Ontario, Canada</p>
			</div>			
		</div>
		
		<div class="row">
			<div class="small-3 columns">
				<p>Phone Number:</p>
			</div>
			<div class="small-9 columns">
				<p>1-(705)-718-5555</p>
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