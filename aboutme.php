<!--
Filename: aboutme.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: The is my about me page. It has a short bio about me with a recent picture of me. There is also a Resume on the page in HTML formatting.
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
				<h1>About Me</h1>
				<hr />
			</div>
		</div>

		<div class="row">
			<div class="medium-9 columns">
				<h4>My Bio</h4>
				<p>I am a 21 year old student who is taking the computer programmer analyst program at Georgian College. I was born in Barrie, and have spent my whole life here, apart from various vactions to different parts of the world. I enjoy many activities such as going to the movies or seeing bands in concert. I enjoy programming as both a hobby and a job. I wish to open my own web design business that will cater to different clientell.</p>
			</div>
			<div class="medium-3 columns">
				<img class="shadow_image" src="img/self_image.JPG" width=160 >
			</div>
		</div>
		
		<div class="row">
			<div class="large-12 columns">
				<hr />
				<h4>Resume</h4>
				<h5>Summary of Skills</h5>
				<ul>
					<li>Competent with standard office applications such as: Microsoft Word, Excel, Powerpoint, Outlook</li>
					<li>Academic Experience with: HTML, CSS, ASP.NET, C#, Python, Java, PHP, SQL, DB2, Visual Basic</li>
					<li>Industry experience with computer hardware & software doing tasks such as: building my own computer, setting up a home network, O/S installations, deploying hardware for departments & classrooms, troubleshooting for staff and students</li>
					<li>Familiar and knowledgeable with operating systems: Windows XP, Windows 7, Windows 8, Linux, Mac OS X</li>
					<li>Full G License</li>
				</ul>
				
				<h5>Education</h5>
				<p>Georgian College, Barrie, Ontario <br/>
				Computer Programmer Analyst - Co-op Program, 3 Year Course<br/>
				Courses include:</p>
				<ul>
					<li>Web Programming, Advanced Java, Advanced Databases, System Analysis and Design, Web Design, Rapid Application Dev</li>
					<li>Academic Deans List - 92 Percent Average</li>
				</ul>
				<h5>Job Experience</h5>
			</div>
		</div>
		
		<div class="row">
			<div class="small-3 columns">
				<p>Company:<br/>
				Position:<br/>
				Date Worked:<br/></p>
				<p>Company:<br/>
				Position:<br/>
				Date Worked:<br/></p>
				<p>Company:<br/>
				Position:<br/>
				Date Worked:<br/></p>
				<p>Company:<br/>
				Position:<br/>
				Date Worked:<br/></p>
				<p>Company:<br/>
				Position:<br/>
				Date Worked:<br/></p>	
			</div>
			
			<div class="small-9 columns">				
				<p>Geddasoft Inc<br/>
				Programmer<br/>
				Sept 2013 - Dec 2013<br/></p>
				<p>Air Command Academy Base Borden<br/>
				Courseware Programming Assistant<br/>
				Jan 2013 - Apr 2013<br/></p>
				<p>Georgian College<br/>
				Level 2 Desktop Technician<br/>
				May 2012 - Aug 2012<br/></p>
				<p>Mcdonalds<br/>
				Assembler/Maintenance<br/>
				April 2011 - Present<br/></p>
				<p>Armstrong Trailers<br/>
				Delivery/Service/Maintenance<br/>
				May 2004 - Present<br/></p>				
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