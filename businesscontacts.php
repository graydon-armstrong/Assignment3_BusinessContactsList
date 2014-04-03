<!--
Filename: index.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: The home page for the website. Has the tag and mission statements, a more work button, and a slider
-->
<?php session_start() ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

	<?php include('head.php'); ?>
	
	<body>
	
	<div class="row" id= "main_layout">
		<div class="large-12 columns">
		
		<?php include('header.php'); ?>
		
		<div class="row">
			<div class="large-12 columns">
				<h1>Business Contacts</h1>
				<hr />
			</div>
		</div>

		<div class="row">
			<div id="content">
				<div class="large-12 columns">

				<?php
					//create connection to database
					$conn = mysqli_connect("localhost", "graydonw_admin", "peasoup123", "graydonw_contacts");

					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					//select all the admins in an sql string
					$sql = "SELECT * FROM contacts ORDER BY name";
					$result = mysqli_query($conn, $sql) or die('Error querying database.');

					//echo the top of the table
					echo 	'<table border="0">
							<tr><td>Name</td></tr>';

					//go through all the results of the sql query
				  	while ($row = mysqli_fetch_array($result))
					{

						echo '<tr><td><a href="#" data-reveal-id="myModal' . $row['id'] . '" data-reveal>' . $row['name'] . '</a></td></tr>';

				 	}
					//finish the table and close the database connection
					echo '</table>';

					//select all the admins in an sql string
					$sql = "SELECT * FROM contacts ORDER BY name";
					$result = mysqli_query($conn, $sql) or die('Error querying database.');

					while ($row = mysqli_fetch_array($result))
					{
						echo '<div id="myModal' . $row['id'] . '" class="reveal-modal tiny" data-reveal>
							  	<h2>' . $row['name'] . '</h2>
							  	<table border="0">
								<tr><td>Address</td><td>' . $row['address'] . '</td></tr>
								<tr><td>Phone Number</td><td>' . $row['phonenumber'] . '</td></tr></table>
							  	<a class="close-reveal-modal">&#215;</a>
							</div>';
					}

					mysqli_close($conn);
				?>
				

				</div>
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