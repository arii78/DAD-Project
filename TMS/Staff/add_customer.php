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
  <p>CUSTOMER PROFILE</p>
</div>
<p>&nbsp;</p>
<center>
<?php
include ('connect.php');

//$id = $_POST['cust_id'];
$nm = $_POST['cust_name'];
$ic = $_POST['ic'];
$add = $_POST['address'];
$pcd = $_POST['postcode'];
$ste = $_POST['state'];
$gdr = $_POST['gender'];
$ph = $_POST['phone'];
$pass = '1234';
$key = $_POST['keyword'];


	  $result = mysql_query("SELECT ic_number from customer WHERE ic_number = '$ic'") or die ("Error running mySQL query");
	 $row = mysql_num_rows($result);
	 
	 if ($row > 0)
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('IC Number is not valid!') 
	window.location.href='add_customer.html';
	</SCRIPT>");
	
}
else
{

mysql_query("INSERT into customer ( cust_name, ic_number, address, postcode, state, gender, phone, password, keyword) VALUES( '$nm' , '$ic' , '$add' , '$pcd' , '$ste' , '$gdr' ,'$ph' , '$pass' , '$key')") 
or die ("Error inserting data into table");

echo "Data inserted!";
}

echo "<meta http-equiv=\"refresh\" content=\"3;URL=staff_home.php\">";

mysql_close($conn);
?>
</center>


</body>
</html>