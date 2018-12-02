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
  <p>INDIVIDUAL ORDER DETAILS</p>
</div>
<p>&nbsp;</p>
<center>
<?php
include ('connect.php');

$ic = $_POST['ic'];
//echo $ic;	 
	 $result = mysql_query("SELECT cust_id from customer WHERE ic_number = '$ic'") or die ("Error running MySQL query");
	 $row = mysql_fetch_assoc($result);

$id =$_POST['id'];
$ic = $_POST['ic'];

$date = $_POST['date'];
$stat = $_POST['status'];
$pr = $_POST['price'];
$type = $_POST['type'];
$nk = $_POST['neck'];
$sh = $_POST['shoulder'];
$bs = $_POST['bust'];
$wa = $_POST['waist'];
$hip = $_POST['hips'];
$sv = $_POST['sleeve'];
$lg = $_POST['length'];
$th = $_POST['thigh'];
$in = $_POST['inseam'];

$cust_id = $row['cust_id'];
//$tgk = "INSERT INTO order_details(order_id,cust_id, ic_number, order_date, order_status, neck, shoulder, bust, waist, hips, sleeve_length, clothes_length, thigh, inseam) VALUES ('123','345','4/1/2017','status',0,0,0,0,0,0,0,0,0,0)";
//echo $tgk;
//mysql_query("INSERT into order_details ( cust_id , ic_number, order_date, order_status, neck, shoulder, bust, waist, hips ,sleeve_length, length, thigh, inseam) VALUES( '$cust_id', '$ic' , '$date' , '$stat' , '$nk' , '$sh' ,'$bs' , '$wa' , '$hip' , '$sv', '$lg' , '$th' , '$in')")
mysql_query("INSERT INTO order_details(order_id,cust_id, ic_number, order_date, order_status, full_price, order_type, neck, shoulder, bust, waist, hips, sleeve_length, clothes_length, thigh, inseam) VALUES ('','$cust_id','$ic', '$date','$stat','$pr', '$type', '$nk','$sh','$bs','$wa','$hip','$sv','$lg','$th','$in')") 
or die ("Error inserting data into table");

mysql_query("INSERT INTO payment(payment_id, pay_date, payment_status) VALUES ('',sysdate(),'In Progress')") 
or die ("Error inserting data into table");

//kena buat select statement ikut max order then baru boleh insert dalam table payment
//comment yg ni
$result = mysql_query ("SELECT MAX(order_id) as OrderID FROM order_details");
$row = mysql_fetch_assoc($result);
$getOrderID = $row['OrderID'];

$result = mysql_query ("SELECT MAX(payment_id) as PaymentID FROM payment");
$row = mysql_fetch_assoc($result);
$getPaymentID = $row['PaymentID'];

//echo "INSERT INTO order_payment(order_id, payment_id, amount, date) VALUES ('$getOrderID','','$pr',sysdate())";
echo $row['order_id'];
echo $row['payment_id'];


//mysql_query("INSERT INTO order_payment(order_id, payment_id, amount, date) VALUES ('$getOrderID','$getPaymentID','$pr',sysdate())") 
//or die ("Error inserting data into table");

//mysql_query("INSERT INTO order_payment(order_id, payment_id, date, amount) VALUES ('$getOrderID','$getPaymentID',sysdate() ,'$pr')") 
//or die ("Error inserting data into table"); */

echo $cust_id;
echo "Data inserted!";

echo "<meta http-equiv=\"refresh\" content=\"3;URL=staff_home.php\">";

mysql_close($conn);
?>
</center>


</body>
</html> 