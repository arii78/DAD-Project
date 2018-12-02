<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_payment.css" rel="stylesheet" type="text/css" />
<link href="../css_menustaff.css" rel="stylesheet" type="text/css" />
</head>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link href="../Staff/jquery.datepick.css" rel="stylesheet">
<script src="../Staff/jquery.min.js"></script>
<script src="../Staff/jquery.plugin.js"></script>
<script src="../Staff/jquery.datepick.js"></script>

  <script>
  $(function() {
  	$('#date').datepick();
  	$('#inlineDatepicker').datepick({onSelect: showDate});
  });

  </script>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
  <label style="margin-left:30px;color:#fc97c8;font-size:16; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><?php echo $row ['staff_name'];?></label><br><br><br>
  <a href="staff_home.php">Home Page</a>
  <a href="staff_profile.php">Profile</a>
  
  <div id="dropdown" class="dropdown-btn">Customer Profile 
    <i class="fa fa-caret-down"></i>
    </div>
  <div class="dropdown-container">
    <a href="add_customer.html">Add</a>
    <a href="update_customer1.php">Update</a>
  </div>
  
   <button class="dropdown-btn">Record Order 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="record_order1.html">Individual</a>
    <a href="record_corporder1.html">Corporate</a>
  </div>
  <a href="status_order1.php">Status Order</a>
   <a href="corp_data.php">Corporate Data</a>
  <a href="payment_ic.php">Payment Receipt</a>
  <a href="reports_type.html">Reports</a>
  <a href="staff_logout.php">Logout</a>  
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
  <p>ORDER PAYMENT</p>
</div>
<p>&nbsp;</p>
<center>
  <div id="form">
  <p>&nbsp;</p>
  
  <form action="" method="post">
   <center>
   <table width="1092" border="3">
      <tr>
        <?php
		
	  include ('connect.php');
	  
	  $ic = $_POST['ic'];
	  
	  $result = mysql_query("SELECT * from order_details WHERE ic_number = '$ic'") or die ("Error running MySQL query");
        echo "<th><center>ORDER ID</center></th>";
        echo "<th><center>ORDER DATE</center></th>";
        echo "<th><center>STATUS</center></th>";
		echo "<th><center>TYPE</center></th>";
        
		 while($row = mysql_fetch_assoc($result))
	  {
		  echo "<tr>";
		  //echo "<td><a href = \"listmp.php?kppn=" . $row['no_kppn'] . "\">" . $row['order_date'] . $row['nama_penghutang'] . "</a></td>";
		  //echo "<td><a href= \"payment.php?ic=". $row['order_id']. "\">" . $row['order_date']. $row['order_status']. "</a></td>";
		  //echo "<td><a href = \"payment.php?ic=" . $row['ic_number'] . "&order_id=" . $row['order_id'] ." </a></td>";
		  //echo "<td><a href= \"payment.php?ic=" . $row['ic_number'] . "\">". $row['order_date']. $row['order_id'] ."</a></td>";
		  //echo "<td><a href= \"payment.php?ic=" . $row['ic_number'] . "\">". $row['order_status']. $row['order_id'] ."</a></td>";
		  
		   echo "<td><a href= \"payment.php?ic_number=$ic&&order_id=" . $row['order_id'] . "\">". $row['order_id']. "</a></td>";
		  echo "<td><a href= \"payment.php?ic_number=$ic&&order_id=" . $row['order_id'] . "\">". $row['order_date']."</a></td>";
		  echo "<td><a href= \"payment.php?ic_number=$ic&&order_id=" . $row['order_id'] . "\">". $row['order_status']."</a></td>";
		  echo "<td><a href= \"payment.php?ic_number=$ic&&order_id=" . $row['order_id'] . "\">". $row['order_type']."</a></td>";
		    
		  echo "</tr>";
	  }
	  echo "</table>";
	  
	  mysql_free_result($result);
	  mysql_close($conn);
	  ?>
      </tr>
    </table>
   </center>
    

    </form>
  <p>&nbsp;</p>
  </div>
</center>


</body>
</html>

