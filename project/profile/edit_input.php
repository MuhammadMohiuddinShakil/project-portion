

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<style>
    .name input {
      width: 200px;
      height: 25px;
      border-radius:10px;
    }
    body
   {
   background:#a6f4f4;
   }
    .name input:hover{
      background-color: lightgreen;

    }
    .container{
    	margin-left: 300px;
    }
    #name input{
    	margin-left: 15px;
    }
    #number input{
    	margin-left: 3px;
    }
    #email input{
    	margin-left: 15px;
    }
    .button{
    	margin-left: 120px;
    	width: 80px;
    	height: 30px;
    	border-radius: 10px;
    }
    .button:hover{
    	background-color: lightgreen;

    }

    </style>
</head>
<body>

<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$location = $_GET["location"];

    $number=$_GET["number"];

    $email=$_GET["email"];


?>





<div class="container">
 <form method=get action=edit_result.php>

<h1>Update Record here</h1>


	<input type=hidden name=id value='<?php echo $id; ?>'> <br>


    <span class="name" id="name">
	name: <input type=text name=name value='<?php echo $name; ?>'>
    </span>
    <p>
    <span class="name" id="location">
	location: <input type=text name=location value='<?php echo $location; ?>'>
    </span>
    <p>


    <span class="name" id="number">

    number: <input type=text name=number value='<?php echo $number; ?>'>
    </span>
    <p>

    <span class="name" id="email">

    email: <input type=text name=email value='<?php echo $email; ?>'>
    </span>
    <p>
	<input class="button"type=submit value=edit>

</div>


 </form>

</body>
</html>

