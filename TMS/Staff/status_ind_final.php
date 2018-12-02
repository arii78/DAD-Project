<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_tailoringorder.css" rel="stylesheet" type="text/css" />
<link href="../css_menustaff.css" rel="stylesheet" type="text/css" />
</head>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link href="jquery.datepick.css" rel="stylesheet">
<script src="jquery.min.js"></script>
<script src="jquery.plugin.js"></script>
<script src="jquery.datepick.js"></script>

  <script>
  $(function() {
  	$('#date').datepick();
  	$('#inlineDatepicker').datepick({onSelect: showDate});
  });

  </script>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
 <a href="staff_home.html">Home Page</a>
 <a href="staff_profile.php">Update Profile</a>
  <a href="add_cust.html">Add Customer Profile</a>
  <a href="updatecustomer_st.php">Update Customer Profile</a>
  <a href="tailoring_order_st.html">Record Customer Order</a>
  <a href="updateorder_status.php">Update Order Status</a>
  <a href="#">Payment Receipt</a>
  <a href="#">Report</a>
  <a href="logout_staff.php">Logout</a> 
</div>

<span style="font-size:25px;cursor:pointer" onClick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>
<center> 
<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="title">
  <p>CUSTOMER ORDER DETAILS</p>
</div>
<p>&nbsp;</p>
<center>
  
    <?php
	  include ('connect.php');
	 
$id =$_POST['id'];
$ic = $_POST['ic'];
$date = $_POST['date'];
$stat = $_POST['status'];
$nk = $_POST['neck'];
$sh = $_POST['shoulder'];
$bs = $_POST['bust'];
$wa = $_POST['waist'];
$hip = $_POST['hips'];
$sv = $_POST['sleeve'];
$lg = $_POST['length'];
$th = $_POST['thigh'];
$in = $_POST['inseam'];
	  
	  $sql = "UPDATE order_details SET order_status='".$stat."' WHERE order_id = '".$id."'"; 
	  
	  //echo $sql;
	  $result = mysql_query($sql) or die ("Error running MySQL query");
	  echo "Data $ic had been updated!";
	  
	  session_unset();
	  echo "<meta http-equiv=\"refresh\" content=\"3;URL=staff_home.php\">";
	  
	  mysql_close($conn);
	  ?>
   
   
  <p>&nbsp;</p>
</center>


</body>
</html>

