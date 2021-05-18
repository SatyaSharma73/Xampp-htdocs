<?php
session_start();
$session=session_id();
include("connection.php");

?>

<form method="post" action="payment.php">

	<table>
		<tr><td>Medicine No.</td><td>Medicine Name</td><td>Medicine Price</td><td>Quantity</td><td>Sub Total</td><td>Actions</td></tr>
		<?php

		$total=0;
		$index=1;
		$_SESSION['cart']=session_id();
		$query1 = "SELECT DISTINCT m_id FROM order_session WHERE session='".$_SESSION['cart']."'";
		$result = mysqli_query($con,$query1);
		while ($fetch=mysqli_fetch_object($result)) {
		$query2="select M_ID, Name, c_id, Price from medicine where M_ID='".$fetch->m_id."'";
		$result1 = mysqli_query($con,$query2);
		$fetch1=mysqli_fetch_object($result1)
		?>
		<tr>
		<td><?php echo $index; ?></td>
		<td><?php
		echo $fetch1->Name; ?></td>
	 <td><?php echo $fetch1->Price; ?></td>
	<td>
	<?php
	$query3 = "SELECT distinct id FROM order_session WHERE m_id='".$fetch->m_id."' and session='".$_SESSION['cart']."'";
	$result3 = mysqli_query($con,$query3);
	$fetch3=mysqli_num_rows($result3);
	echo $fetch3;
	?>

	</td>
	<td>
		<?php
		$subtotal=$fetch3*$fetch1->Price;
		echo $subtotal;
		$total=$total+$subtotal;
		?>
	</td>
	<td><a href="cart.php?increase=<?php echo $fetch1->M_ID;?>">Increase</a></td>
	<td><a href="cart.php?decrease=<?php echo $fetch1->M_ID;?>">Decrease</a></td>
	<td><a href="cart.php?delete=<?php echo $fetch1->M_ID;?>">Delete</a></td>
		</tr>
		<?php
		$index++;
		}?>
		<td>Total Cost:<?php echo $total; ?></td>
	</table>
	<table>
		<tr><td>Your Name:</td><td><input type="text" name="firstname" value=""></td></tr>
		<tr><td>Your Address:</td><td><textarea type="text" name="address" value=""></textarea></td></tr>
		<tr><td>Your Email:</td><td><input type="text" name="email" value=""></td></tr>
		<tr><td>Your Phone:</td><td><input type="text" name="phone" value=""></td></tr>
		<tr><td><input type="hidden" name="productinfo" value="test"></td></tr>
		<tr><td><input type="hidden" name="amount" value="<?php echo $total; ?>"></td></tr>
		<tr><td><input type="hidden" name="surl" value="http://localhost/Medical_Order_System/success.php"></td></tr>
		<tr><td><input type="hidden" name="furl" value="http://localhost/Medical_Order_System/failure.php"></td></tr>
		<tr><td><input type="submit" name="submit" value="Proceed to payment"></td></tr>
	</table>
</form>
<a href="medicine.php">View Products</a>
