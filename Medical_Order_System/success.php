<?php
session_start();
include("connection.php");
$session=session_id();
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="e5iIg1jwi8";

$query="update order_invoice set transaction_id='".$txnid."',status='paid' where email='".$email."' and session='".$session."'";

mysqli_query($con,$query);

$select="select m_id,qty,session from order_session where session='".$session."'";
$result = mysqli_query($con,$select);

while($fetch=mysqli_fetch_object($result))

{
	$query="insert into order_final set m_id='".$fetch->m_id."',qty='".$fetch->qty."',session='".$fetch->session."'";
	mysqli_query($con,$query);
}
$del="delete from order_session where session='".$session."'";
mysqli_query($con,$del);


// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		   }
?>	