<?php

$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("test6149f527de9da");
$store_passwd=urlencode("test6149f527de9da@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;

} else {

	echo "Failed to connect with SSLCOMMERZ";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<section class="my-5">
		<h2 class="text-center">Transaction Succeded</h2>
    
	</div>
  <div class="m-auto">
    <h2 class="text-center">Thanks for Your Donation😊</h2>
  </div>
  <div class="container-fluid">
	<div class="row">

	<div  class="col-lg-4 col-mg-4 col-12">
	<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="image4.jpg">
  <div class="card-body">
    <h3 class="card-title">Transaction Summary:</h3>
    <h3 class="card-text">Transaction Id: <?php echo $tran_id ?></h3>
    <h3 class="card-text">Transaction Date: <?php echo $tran_date ?></h3>
    <h3 class="card-text">Transaction Amount: <?php echo $amount ?></h3>
    <h3 class="card-text">Transaction Status: <?php echo $status ?></h3>
  </div>
</div>
</div>
</div>
</div>
</section>

</body>
</html>