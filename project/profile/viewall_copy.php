<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	

	<style>
    
    body
    {
       background:#a6f4f4;
    }
    .container{
    	margin-left: 300px;
    	margin-top: 100px;
    }
    button{
    	margin-left: 80px;
    	height: 30px;
    	margin-top: 20px;
    	border-radius: 10px;
    }
    button:hover{
        background:#a6f4f4;

    }
     button:hover{
    	background-color: lightgreen;
    }
    td{
    	height: 30px;
    }
    td:hover{
    	background-color: lightgreen;
    }
    h1{
    	margin-left: 45px;
    	margin-bottom: 20px;
    }

    
</style>
</head>

<body>

<div class="container">
	<h1>my profile </h1>

<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Appoinment" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "   \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr > <td>name     </td><td> $name     </td> </tr>";
		echo "<tr > <td>location </td><td> $location </td> </tr>";
        echo "<tr > <td>number   </td><td> $number   </td> </tr>";
        echo "<tr > <td>email    </td><td> $email    </td> </tr>";

		echo "</tr> \n";
		
	}
	echo "</table> \n";

	echo "<p><button><a href=index.html>home</a></button>";	

?>
	
</div>
</body>
</html>

