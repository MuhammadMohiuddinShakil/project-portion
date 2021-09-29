<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Appoinment" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>doctor_name</th> <th>patient_name</th> <th>date</th> <th>Edit</th> <th>delete</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $doctor_name </td>";
		echo "<td> $patient_name </td>";
        echo "<td> $date </td>";
		echo "<td> <a href = 'edit_input.php?id=$id&doctor_name=$doctor_name&patient_name=$patient_name&date=&date'> edit </a> </td>";
		echo "<td> <a href = 'delete.php?id=$id'> delete </a></td>";
		echo "</tr> \n";
	}
	echo "</table> \n";

	echo "<p><a href=add_input.php>add a new appoinment</a>";
	echo "<p><a href=search_input.php>Search by date</a>";
?>