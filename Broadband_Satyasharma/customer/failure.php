<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  </head>
  <style media="screen">
    body{
      padding: 100px;
    }
  </style>
  <body>

    <?php
    $status=$_POST["status"];
    $firstname=$_POST["firstname"];
    $amount=$_POST["amount"];
    $txnid=$_POST["txnid"];

    $posted_hash=$_POST["hash"];
    $key=$_POST["key"];
    $productinfo=$_POST["productinfo"];
    $email=$_POST["email"];
    $salt="";

    // Salt should be same Post Request

    If (isset($_POST["additionalCharges"])) {
           $additionalCharges=$_POST["additionalCharges"];
            $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
      } else {
            $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
             }
    		 $hash = hash("sha512", $retHashSeq);

           if ($hash != $posted_hash) {
    	       echo "Transaction Failed. Please try again";


    		   } else {
             echo "<h3>Your order status is ". $status .".</h3>";
             echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
    		 }
    ?>
    <a href="customer.php"><button type="button" class="btn btn-success" name="button">Go Home</button></a>

  </body>
</html>
