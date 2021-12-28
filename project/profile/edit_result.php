<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$location = $_GET["location"];

    $number=$_GET["number"];

    $email=$_GET["email"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Appoinment SET name='$name', location='$location', number='$number', email='$email'  WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated here:<br> name = $name <br> location = $location <br> number = $number <br> email = $email";



	echo "<p><a href=viewall_copy.php>check your information</a>";

?>