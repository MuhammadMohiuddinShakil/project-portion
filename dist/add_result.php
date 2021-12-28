<?php

	$doctor_name = $_GET["doctor_name"];

	$patient_name= $_GET["patient_name"];

    $date=$_GET["date"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO Appoinment VALUES ( '', '$doctor_name', '$patient_name','$date' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> doctor_name = $doctor_name <br> patient_name = $patient_name <br> date = $date";



	echo "<p><a href=viewall.php>click for  view all records</a>";

?>