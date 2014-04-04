<!--
Filename: business contacts.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: THe business contacts page of the web site. You need to be logged in to access this page. It grabs a list
				  of contacts from a mysql database and puts it in a table. Also sets up the dialog boxs that will come up
				  if you click on one of the contacts looking for more information
-->
<?php
		//if the user is not logged in, redirect them back to the login page
	session_start();
		if(!(isset($_SESSION['user_id']))) {
			echo '<script type="text/javascript">
									window.location = "login.php";
									</script>';
		} 
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

	<?php include('head.php'); ?>
	
	<body>
	
	<div class="row" id= "main_layout">
		<div class="large-12 columns">
		
		<?php require('header.php'); ?>
		
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

					//check for connection errors
					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					//select all the contacts from the mysql database
					$sql = "SELECT * FROM contacts ORDER BY name";
					$result = mysqli_query($conn, $sql) or die('Error querying database.');

					//echo the top of the table
					echo 	'<table border="0">
							<tr><td>Name</td></tr>';

					//go through all the results of the sql query and echo the names into the table. Also set the names for a modal
				  	while ($row = mysqli_fetch_array($result))
					{
						echo '<tr><td><a href="#" data-reveal-id="myModal' . $row['id'] . '" data-reveal>' . $row['name'] . '</a></td></tr>';
				 	}

					//finish the table and close the database connection
					echo '</table>';

					//select all the contacts from the mysql database
					$sql = "SELECT * FROM contacts ORDER BY name";
					$result = mysqli_query($conn, $sql) or die('Error querying database.');

					//go through all the results from the mysql database and setup the modals that will come up when you click on a name
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

					//close the database connection
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