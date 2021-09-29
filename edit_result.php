<?php

	$id = $_GET["id"];

	$doctor_name = $_GET["doctor_name"];

	$patient_name = $_GET["patient_name"];

    $date=$_GET["date"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Appoinment SET doctor_name='$doctor_name', patient_name='$patient_name',date='$date'  WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated here:<br> doctor_name = $doctor_name <br> patient_name = $patient_name";



	echo "<p><a href=viewall.php>click for view all records</a>";

?>