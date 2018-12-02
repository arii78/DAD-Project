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
  <p>STAFF PROFILE</p>
</div>
<p>&nbsp;</p>
<center>
 <?php
	  include ('connect.php');
	  $id = $_POST['staff_id'];
	  $nm = $_POST['staff_name'];
	  $ic = $_POST['ic'];
	  $add = $_POST['address'];
	  $pcd = $_POST['postcode'];
	  $state = $_POST['state'];
	  $gdr = $_POST['gender'];
	  $ph = $_POST['phone'];
	  $pos = $_POST['pos'];
	  $pwd = $_POST['password'];
	  $key = $_POST['keyword'];
	  
	  $sql = "UPDATE staff SET staff_address = '".$add."' , postcode = '".$pcd."' , state = '".$state."' , phone = '".$ph."' , password = '".$pwd."' , keyword = '".$key."' WHERE ic_number = '".$ic."'"; 
	  $result = mysql_query($sql) or die ("Error running MySQL query");
	  echo "Data $ic had been updated!";
	  session_unset();
	  echo "<meta http-equiv=\"refresh\" content=\"3;URL=staff_home.php\">";
	  
	  mysql_close($conn);
	  ?>
      
</center>


</body>
</html>


