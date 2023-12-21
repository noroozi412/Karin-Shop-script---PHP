<?php
session_start();
include '../include/product.php'; 
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
$ZarinGate 		= true;
$SandBox 		= true; 

$zp 	= new zarinpal();
$result = $zp->verify($MerchantID, $Amount, $SandBox, $ZarinGate);
$name=implode(" و ",array_column($cart,"name"));
if (isset($result["Status"]) && $result["Status"] == 100)
{
		// Success
	echo "تراکنش با موفقیت انجام شد";
	echo "<br />مبلغ : ". $result["Amount"];
	echo "<br />کد پیگیری : ". $result["RefID"];
	echo "<br />Authority : ". $result["Authority"];
	echo "<br />تفسیر و علت خطا : ". $name;

} else {
	// error
	echo "پرداخت ناموفق";
	echo "<br />کد خطا : ". $result["Status"];
	echo "<br />تفسیر و علت خطا : ". $result["Message"];
	echo "<br />تفسیر و علت خطا : ". $name;

}
//addOrder(1,'1',$result["Amount"],$result["RefID"],$result["Authority"],$result["Status"]);
//addOrder($_SESSION['userid'],$name,$result["Amount"],$result["RefID"],$result["Authority"],$result["Status"],1,1);
echo '</br>'.$_SESSION['addresss'];
$akbar='تهران';
addOrder($_SESSION['userid'],$name,$result["Amount"],$result["RefID"],$result["Authority"],$result["Status"],$_SESSION['addresss'],$_SESSION['phone'],$_SESSION['familyname']);
$data=orderDetails($result["Authority"],$result["Status"]);
unset($_SESSION['cart']);
for ($i= 0; $i < 1000; $i++)
unset($_SESSION['cart_'. $i]);

header("Location: ../detailOrder.php?id=".$data['0']['id']);

?>