<?php
//Initialise the session
session_start();
if (!isset($_SESSION['cust_login']))
{
	$_SESSION['ic'] = $_POST['ic'];
	$_SESSION['password'] = $_POST['password'];
}
/*$host = "localhost";
$user = "root";
$pswd = "12345678";

$conn = mysql_connect($host, $user, $pswd) or
die ("Error connecting to MySQL");
//echo "Connected to MySQL <br />";*/
include ('connect.php');

$dbname = "tms_new";
mysql_select_db($dbname) or
	die ("Error connecting to Database: ".$dbname);
//echo "Connected to Database <br />";

$sql = "SELECT * FROM customer WHERE ic_number ='".$_SESSION['ic']."' AND password = '".$_SESSION['password']."'";
$result = mysql_query($sql);
$row = mysql_num_rows($result);
if ($row == 0)
{
	echo "<script>";
	echo "alert ('Log In Fail!')";
	echo "</script>";
	session_unset();
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=cust_login.html\">";
}
else
{
include ("cust_home.php");
}

//Closes specified connection
mysql_close($conn);
?>