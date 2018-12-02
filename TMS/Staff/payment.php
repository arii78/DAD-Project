<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_paymentform.css" rel="stylesheet" type="text/css" />
<link href="../css_menustaff.css" rel="stylesheet" type="text/css" />
</head>



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

<?php

session_start();

    include ('connect.php');
    //$ic = $_POST['ic'];
	$ic_number= $_GET['ic_number'];
	$order_id= $_GET['order_id'];
    $result = mysql_query("select * from order_details JOIN payment where order_id = '".$order_id."'" ) or die ("Error running MySQL query");
 	 /*$result= mysql_query("select O.order_id,
						P.payment_id,
                        from order_details O,
                        payment P
                        WHERE ic_number = $ic") or die ("Error running MySQL query");*/
	 
	  $row = mysql_fetch_assoc($result);
	  $remaining_price=$row['remaining_price'];
	  
	  $result1 = mysql_query ("select full_price from order_details where order_id = '".$order_id."'" ) or die ("Error running MySQL query");
$row1 = mysql_fetch_assoc($result1);

	$harga = $row1['full_price'];



$result2 = mysql_query ("select SUM(amount) as samt from order_payment where order_id = '".$order_id."'" ) or die ("Error running MySQL query");
$row2 = mysql_fetch_assoc($result2);
$sumamt = $row2["samt"];

$balance = $harga - $sumamt;
?>


<div class="title">
  <p>ORDER PAYMENT</p>
</div>
<p>&nbsp;</p>
<center>
  <div id="form">
  <p>&nbsp;</p>
  
  <form action="payment_final.php" method="post">
   <center>
     <table width="525" border="1">
          <tr>
          <td width="170">Order ID </td>
          <td width="339"><label for="order_id"></label>
         	 <input type="hidden" name="ic_number" id="ic_number" value="<?php echo $ic_number;?>" size="30" readonly />
            <input type="text" name="order_id" id="order_id" value="<?php echo $row['order_id'];?>" size="30" readonly /></td>
        </tr>
         <tr>
           <td width="170">Payment ID</td>
           <td width="339"><label for="staff_id"></label>
            <input type="text" name="payment_id" id="payment_id" value="<?php echo $row['payment_id'];?>" size="30" readonly /></td>
         </tr>
         <tr>
          <tr>
           <td>Date</td><?php date_default_timezone_set ("Asia/Kuala_Lumpur");?>
           <td><label for="date"></label>
            <input type="text" name="date" id="date" value="<?php echo date('d-m-Y');?>" readonly></td>
         </tr>
          <td>Full Price</td>
          <td><label for="price"></label>
          <input type="text" name="full_price" id="full_price" value="<?php echo $row['full_price'];?>" size="30" readonly /></td>
        </tr>
         <td>Remaining Price</td>
          <td><label for="remaining"></label>
          <input type="text" name="remaining_price" id="remaining_price" value="<?php echo $balance;?>" size="30" readonly /></td>
        </tr>
        <tr>
          <td>Amount</td>
          <td><label for="amount"></label>
          <?php
		  	if($remaining_price <= '0')
			{
				echo "<input type='text' name='amount' id='amount'></td>";
			}
			else{
				echo "<input type='text' name='amount' id='amount' readonly></td>";
			}
		  ?>
        </tr>
        
      </table>
      </center>
      <p>&nbsp;</p>
    
      <button class="button" style="vertical-align:middle" type="submit">
        <span>Save</span>   
     
    </button>
    
   
    </form>
  <p>&nbsp;</p>
  </div>
</center>


</body>
</html>

