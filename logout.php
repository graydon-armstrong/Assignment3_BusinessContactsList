<!--
Filename: logout.php
Authors name: Graydon Armstrong
Website name: Graydon Web Design
File Description: The logout page destroys the session to log the user out and redirects
-->
<?php
	session_start();
	session_destroy();
	header("Location: login.php");
?>