<?php
session_start();
include 'include/product.php'; 
                
$session=$_SESSION;
$cart=[];
foreach ($session as $key => $value) {
	if(substr($key,0,5) == 'cart_') {
		$cart[$key] = $value;
	}
}
$price=array_column($cart,'price');
$price=array_sum($price);

/*
 * ZarinPal Advanced Class
 *
 * version 	: 1.0
 * link 	: https://vrl.ir/zpc
 *
 * author 	: milad maldar
 * e-mail 	: miladworkshop@gmail.com
 * website 	: https://miladworkshop.ir
*/

require_once("zarinpal_function.php");

$MerchantID 	= "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx";
$Amount 		= $price;
$Description 	= "تراکنش زرین پالی";
$Email 			= "";
$Mobile 		= "";
$CallbackURL 	= "http://localhost/payment/verify.php";
$ZarinGate 		= true;
$SandBox 		= true;

$zp 	= new zarinpal();
$result = $zp->request($MerchantID, $Amount, $Description, $Email, $Mobile, $CallbackURL, $SandBox, $ZarinGate);

if (isset($result["Status"]) && $result["Status"] == 100)
{
	// Success and redirect to pay
	$zp->redirect($result["StartPay"]);
} else {
	// error
	echo "خطا در ایجاد تراکنش";
	echo "<br />کد خطا : ". $result["Status"];
	echo "<br />تفسیر و علت خطا : ". $result["Message"];
}