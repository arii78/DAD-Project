
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_forgotpass.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center> 
<p>&nbsp;</p>
<div class="title">
  <p>TAILOR MANAGEMENT:AN ONLINE SYSTEM</p>
</div>
<p>&nbsp;</p>
<center>
  <div id="login">
  <p>&nbsp;</p>
<?  
include ('connect.php');

$dbname = "tms_new";
mysql_select_db($dbname) or
	die ("Error connecting to Database: ".$dbname);
  
    $sql = "SELECT * FROM customer WHERE ic_number ='".$_POST['ic']."' AND keyword = '".$_POST['keyword']."'";
$result = mysql_query($sql);
$row = mysql_num_rows($result);
if ($row == 0)
{
	echo "<script>";
	echo "alert ('Log In Fail!')";
	echo "</script>";
	session_unset();
	
}
else
{
	$ic = $_POST['ic'];
	
 $sql = "UPDATE customer SET password = '1234' WHERE ic_number = '".$_POST['ic']."'"; 
	  $result = mysql_query($sql) or die ("Error running MySQL query");
	 echo $_POST['ic'];
	  echo "<script>";
	echo "alert ('Password has changed to default = 1234')";
	echo "</script>";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=cust_login.html\">";
	
}
mysql_close($conn);
?>
   
   
  </div>
</center>


</body>
</html>

