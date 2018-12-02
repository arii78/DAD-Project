<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_profile.css" rel="stylesheet" type="text/css" />
<link href="../css_menu.css" rel="stylesheet" type="text/css" />
<link href="../css_dropdown.css" rel="stylesheet" type="text/css" />
<link href="../css_archive.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
  <label style="margin-left:30px;color:#fc97c8;font-size:16; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"><?php echo $row ['cust_name'];?></label><br><br><br>
   <a href="cust_home.php">Home Page</a>
  <a href="customer_profile.php">Profile</a>
  <a href="custviewstat.php">Status Order</a>
  <a href="cust_logout.php">Logout</a>
 
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
  <p>STATUS ORDER</p>
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
		
		session_start();
		
	  include ('connect.php');
	  
	  $ic = $_SESSION['ic'];
	  
	    $result = mysql_query("SELECT * from order_details WHERE ic_number = '$ic'") or die ("Error running mySQL query order");
	  
	   $result1 = mysql_query("SELECT * from corporate WHERE ic_number = '$ic'") or die ("Error running mySQL query order");
	  
	
       echo "<th><center>ORDER ID</center></th>";
        echo "<th><center>ORDER DATE</center></th>";
        echo "<th><center>STATUS</center></th>";
		     echo "<th><center>TYPE</center></th>";
        
	
		 while($row = mysql_fetch_assoc($result))
	  {
		  
		  echo "<tr>";
		  //echo "<td>". $row['no_kppn']."</td>";
		  //echo "<td><a href = \"update_order_status_final.php?ic=" . $row['ic_number'] . "\">" . $row['order_date'] . $row['order_status'] . "</a></td>";
		  //echo "<td>". $row['alamat']."</td>";
		    echo "<td><a href= \"cust_status_ind.php?ic=$ic&&order_id=" . $row['order_id'] . "\">". $row['order_id']. "</a></td>";
			 echo "<td><a href= \"cust_status_ind.php?ic=$ic&&order_id=" . $row['order_id'] . "\">". $row['order_date']. "</a></td>";
			  echo "<td><a href= \"cust_status_ind.php?ic=$ic&&order_id=" . $row['order_id'] . "\">". $row['order_status']. "</a></td>";
			   echo "<td><a href= \"cust_status_ind.php?ic=$ic&&order_id=" . $row['order_id'] . "\">". $row['order_type']. "</a></td>";
		  //echo "<td><a href= \"payment.php?ic=" . $row['ic_number'] . "\">". $row['order_date']."</a></td>";
		  //echo "<td><a href= \"payment.php?ic=" . $row['ic_number'] . "\">". $row['order_status']."</a></td>";
		  //echo "<td>". $row['poskod']."</td>";
		  //echo "<td>". $row['bandar']."</td>";
      	  //echo "<td>". $row['no_tel']."</td>";
		  //echo "<td>". $row['jenis']."</td>";
		  //echo "<td>". $row['tarikh']."</td>";
		  //echo "<td>". $row['maklumat']."</td>";

		  echo "</tr>";
	  }
	  
	   while($row = mysql_fetch_assoc($result1))
	  {
		  
		  echo "<tr>";
		  //echo "<td>". $row['no_kppn']."</td>";
		  //echo "<td><a href = \"update_order_status_final.php?ic=" . $row['ic_number'] . "\">" . $row['order_date'] . $row['order_status'] . "</a></td>";
		  //echo "<td>". $row['alamat']."</td>";
		    echo "<td><a href= \"cust_status_corp.php?ic=$ic&&order_id=" . $row['corp_order_id'] . "\">". $row['corp_order_id']. "</a></td>";
			 echo "<td><a href= \"cust_status_corp.php?ic=$ic&&order_id=" . $row['corp_order_id'] . "\">". $row['order_date']. "</a></td>";
			  echo "<td><a href= \"cust_status_corp.php?ic=$ic&&order_id=" . $row['corp_order_id'] . "\">". $row['order_status']. "</a></td>";
			   echo "<td><a href= \"cust_status_corp.php?ic=$ic&&order_id=" . $row['corp_order_id'] . "\">". $row['order_type']. "</a></td>";
		  //echo "<td><a href= \"payment.php?ic=" . $row['ic_number'] . "\">". $row['order_date']."</a></td>";
		  //echo "<td><a href= \"payment.php?ic=" . $row['ic_number'] . "\">". $row['order_status']."</a></td>";
		  //echo "<td>". $row['poskod']."</td>";
		  //echo "<td>". $row['bandar']."</td>";
      	  //echo "<td>". $row['no_tel']."</td>";
		  //echo "<td>". $row['jenis']."</td>";
		  //echo "<td>". $row['tarikh']."</td>";
		  //echo "<td>". $row['maklumat']."</td>";

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

