<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_profile.css" rel="stylesheet" type="text/css" />
<link href="../css_menu.css" rel="stylesheet" type="text/css"/>
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
$id = $_POST['cust_id'];
$nm = $_POST['cust_name'];
$ic = $_POST['ic'];
$add = $_POST['address'];
$pcd = $_POST['postcode'];
$ste = $_POST['state'];
$gdr = $_POST['gender'];
$ph = $_POST['phone'];
$pass = $_POST['password'];
$key = $_POST['keyword'];
	  
	  $sql = "UPDATE customer SET cust_id = '".$id."' , cust_name = '".$nm."' , address='".$add."' , postcode='".$pcd."' , state='".$ste."' ,phone = '".$ph."' , password = '".$pass."' , keyword = '".$key."' WHERE ic_number = '".$ic."'"; 
	  $result = mysql_query($sql) or die ("Error running MySQL query");
	  echo "Data $ic had been updated!";
	  session_unset();
	  echo "<meta http-equiv=\"refresh\" content=\"3;URL=cust_home.php\">";
	  
	  mysql_close($conn);
	  ?>
      
</center>


</body>
</html>


