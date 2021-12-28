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
	<div class="py-5">
		<h2 class="text-center">Donation</h2>
		</div>
		<form action="checkout.php?price=<?php echo $amount?> & name=<?php echo $name?>" method="GET">
			<div class="w-50 m-auto">
    	<div class="form-group">
    <label >Name:</label>
    <input type="text" class="form-control" placeholder="Name" name="name" value=""required>
  		</div>
  		<div class="w-50 ">
      <div class="form-group">
    <label >Contact Info:</label>
    <input type="text" class="form-control" name="contact" placeholder="email/mobile" value=""required>
      </div>
      <div class="w-100 ">
    	<div class="form-group">
    <label >Amount:</label>
    <input type="text" class="form-control"name="amount" value=""required>
  		</div>
  		<div class="btn-group">
  			<button class="btn btn-default" >
     <img src="http://www.hrdbd.org/images/bkash.png" width="100" />
</button>
<button class="btn btn-default">
     <img src="https://download.logo.wine/logo/Nagad/Nagad-Logo.wine.png" width="120" height="70" />
</button>
</div>

      <button type="submit" class="btn btn-primary btn-lg btn-block"> Pay Now
                </button>
            </div>
    </form>

</body>
</html>