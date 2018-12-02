<?php
session_start();
include 'connect.php'; 
foreach ($_POST['corp_order_id'] as $corp_order_id) {
$conn = mysqli_connect("localhost","root","12345678",$dbname);
	$sql = "UPDATE corporate SET user_type='archive' WHERE corp_order_id='$corp_order_id'";

	if (mysqli_query($conn, $sql)) {
   	$_SESSION["staff_login"] = "<strong>Success!</strong> Data Changed!";
    header("Location:corp_data.php");
	} else {
    	echo "Error updating record: " . mysqli_error($conn);
		}
}
?>