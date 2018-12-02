<?php
//Initialise the session
session_start();
if (!isset($_SESSION['staff_login']))
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

//$sql = "SELECT * FROM pekerja WHERE ID_pekerja ='".$_SESSION['id']."' AND kata_laluan = '".$_SESSION['password']."' AND jawatan = 'Penyimpan Akaun'";


$sql = "SELECT * FROM staff WHERE ic_number ='".$_SESSION['ic']."' AND password = '".$_SESSION['password']."' AND staff_position= 'Staff' ";
$result = mysql_query($sql);
$row = mysql_num_rows($result);
if ($row == 0)
{
	echo "<script>";
	echo "alert ('Log In Fail!')";
	echo "</script>";
	session_unset();
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=staff_login.html\">";
}
else
{
include ("staff_home.php");
}

//Closes specified connection
mysql_close($conn);
?>
