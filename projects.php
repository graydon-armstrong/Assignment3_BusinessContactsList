<!--
Filename: projects.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: This is the projects page. It has information and pictures about 3 of my assignments. There are also links to those 3 projects if you click the pictures.
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
				<h1>Projects</h1>
				<hr />
				<h4>2D Animation Tools</h4>
			</div>
		</div>

		<div class="row">
			<div class="small-9 columns">				
				
				<p>This is a lab that we worked on in class to learn how to do a basic interactive flash page. It had us using lots of motion tweens and manipulating images to make the page interative.</p>
			</div>
			<div class="small-3 columns">
				<a href="animation.html"><img class="shadow_image" src="img/animation.png" width=256 height=256></a>
			</div>			
		</div>
		
		<div class="row">
			<div class="large-12 columns">
				<h4>Personal Finance</h4>
			</div>
		</div>
		
		<div class="row">
			<div class="small-9 columns">				
				
				<p>This assignment for my personal finance class has us keeping track of all our expenses so that we can learn how to budget. This is our first month of tracking, so we dont yet have an idea of how our spending will change from month to month yet. The next few months of tracking will teach us how to monitor our spending and budget approprietly for the next month.</p>
			</div>
			<div class="small-3 columns">
				<a href="https://www.dropbox.com/s/u1y8kt4wglu5k6d/January%20Expense%20tracker.xlsx"><img class="shadow_image" src="img/finance.png" width=256 height=256></a>
			</div>			
		</div>
		
		<div class="row">
			<div class="large-12 columns">
				<h4>Graphics Programming</h4>
			</div>
		</div>
		
		<div class="row">
			<div class="small-9 columns">				
				
				<p>This is a graphics programming assignment from last semester where we had to make a small game in python. I decided to try and recreate space invaders with the twist of different classes of enemies that are each harder to kill than the last. We used python with the help of Aptana Studio 3 to create our games with the help of the pygame framework.</p>
			</div>
			<div class="small-3 columns">
				<a href="https://github.com/graydon-armstrong/FinalProject"><img class="shadow_image" src="img/pythongame.png" width=256 height=256></a>
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