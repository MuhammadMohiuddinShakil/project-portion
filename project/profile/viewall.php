<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
    	height: 30px;
    	width: 60px;
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

<h1>Edit profile</h1>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Appoinment" )
		or die("Can not execute query");

	echo "<table border> \n";
	

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr > <td>name     </td><td> $name     </td> </tr>";
		echo "<tr > <td>location </td><td> $location </td> </tr>";
        echo "<tr > <td>number   </td><td> $number   </td> </tr>";
        echo "<tr > <td>email    </td><td> $email    </td> </tr>";		

		
		echo "</tr> \n";
	}
	echo "</table> \n";


	echo "<button><a href = 'edit_input.php?id=$id & name=$name& location=$location &number=$number &email=$email'> edit </a></button>";
		echo "<button><a href = 'delete.php?id=$id'> delete </a></button>";

	//echo "<p><a href=add_input.php>ad</a>";
	echo "<button><a href=index.html>home </a></button>";

	

?>
</div>
</body>
</html>

