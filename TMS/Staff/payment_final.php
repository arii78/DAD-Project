<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_profile.css" rel="stylesheet" type="text/css" />
<link href="../css_menustaff.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<center> 
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="title">
  <p>ORDER PAYMENT</p>
</div>
<p>&nbsp;</p>
<center>
<?php
include ('connect.php');

$ic_number= $_POST['ic_number'];
$order_id = $_POST['order_id'];
//$payment_id = $_POST['payment_id'];
$date = $_POST['date'];
$full_price = $_POST['full_price'];
$remaining_price = $_POST['remaining_price'];
//$amt2 = $_POST['amount2'];
$amount = $_POST['amount'];


/*$result = mysql_query ("SELECT MAX(payment_id) as PaymentID FROM payment");
$row = mysql_fetch_assoc($result);
$getPaymentID = $row['PaymentID'];*/


$result = mysql_query ("insert into payment(pay_date,payment_status) values ('".$date."', 'In Progress')" ) or die ("Error running MySQL query");

$res = mysql_query ("select MAX(payment_id) as pid from payment" ) or die ("Error running MySQL query");
$row = mysql_fetch_assoc($res);
$payment_id = $row["pid"];


/*$result1 = mysql_query ("select full_price from order_details where order_id = '".$order_id."'" ) or die ("Error running MySQL query");
$row1 = mysql_fetch_assoc($result1);

	$harga = $row1['full_price'];



$result2 = mysql_query ("select SUM(amount) as samt from order_payment where order_id = '".$order_id."'" ) or die ("Error running MySQL query");
$row2 = mysql_fetch_assoc($result2);
$sumamt = $row2["samt"];

$balance = $harga - $sumamt;
*/
if ($amount > $remaining_price)
{
	echo "<script>alert('The amount inserted is exceeding the remaining price');</script>";
	
}
else
{
	$result3 = mysql_query ("insert into order_payment(order_id, payment_id, amount) values ('".$order_id."', '".$payment_id."', $amount)") or die ("Error running MySQL query");
	echo "Data inserted!";
}

echo "<meta http-equiv=\"refresh\" content=\"3;URL=staff_home.php\">";
//or die ("Error inserting data into table");

//mysql_query("UPDATE into order_payment ( order_id, payment_id, date , amount) VALUES( '$oi' , '$pi' , '$date' , '$amt')") 
//or die ("Error inserting data into table");

//mysql_query("INSERT into order_payment ( order_id, payment_id, date , amount) VALUES( '$oi' , '$pi' , '$date' , '$amt')") 
//or die ("Error inserting data into table");



mysql_close($conn);
?>
</center>


</body>
</html>