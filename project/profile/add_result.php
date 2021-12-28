<?php

	$name = $_GET["name"];

	$location= $_GET["location"];

    $number=$_GET["number"];

    $email=$_GET["email"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO Appoinment VALUES ( '', '$name', '$location','$number','$email' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> name = $name <br> location = $location <br> number = $number <br> email =$email";



	echo "<p><a href=viewall.php>click for  view all records</a>";

?>