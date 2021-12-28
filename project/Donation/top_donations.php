<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section class="my-5 ma-auto">
		<div class="py=5">
    		<h2 class="text-center">Top Donations: </h2>
    		<div class="w-50 m-auto">
    		
    		<div class="card">
            <div class="card-body">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'donation');

                $query = "SELECT * FROM donation_table";
                $query_run = mysqli_query($connection, $query);
            ?>
            <table id="datatableid" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                        	<th scope="col"> Id</th>
                            <th scope="col"> Name</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
            <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['id']; ?> </td>                            
                            <td> <?php echo $row['name']; ?> </td>                            
                            <td> <?php echo $row['amount']; ?> </td>
                        </tr>
                    </tbody>
            <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                </table>
            </div>
        </div>
    </div>
</div>
	</section>

</body>
</html>