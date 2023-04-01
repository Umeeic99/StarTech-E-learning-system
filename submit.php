<?php
require('config1.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>100000,
		"currency"=>"pkr",
		"description"=>"",
		"source"=>$token,
	));

	echo "<pre>";
	print_r($data);
}
?>