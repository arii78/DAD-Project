<?php
$host = "localhost";
$user = "root";
$pswd = "12345678";

$conn = mysql_connect($host, $user, $pswd) or die ("Error connecting to MySQL");
//echo "connected to MySQL <br/>";

$dbname = "tms_new";
mysql_select_db($dbname) or die ("Error connecting to database: ".$dbname);
//echo "connected to Database <br/>";

//closes specified connection
//mysql_close($conn);
?>