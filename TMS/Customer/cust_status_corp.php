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
<link href="../Admin/jquery.datepick.css" rel="stylesheet">
<script src="../Admin/jquery.min.js"></script>
<script src="../Admin/jquery.plugin.js"></script>
<script src="../Admin/jquery.datepick.js"></script>

  <script>
  $(function() {
  	$('#date').datepick();
  	$('#inlineDatepicker').datepick({onSelect: showDate});
  });

  </script>

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

<?php
    include ('../Admin/connect.php');
    $id = $_GET['order_id'];
	
	$ic = $_GET['ic'];
	
    $result = mysql_query("SELECT * from corporate WHERE ic_number = '$ic'" ) or die ("Error running MySQL query");
 	  $row = mysql_fetch_assoc($result);
?>

<center> 
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="title">
  <p>CORPORATE ORDER DETAILS</p>
</div>
<p>&nbsp;</p>
<center>
  <div id="form">
  <p>&nbsp;</p>
  
   <form action="" method="post">
   <center> 
      <table width="525" border="1">
        <tr>
          <td width="169">IC Number</td>
          <td width="340"><label for="ic"></label>
          <input type="hidden" name="id" id="id" value="<?php echo $id;?>" size="30" readonly />
            <input type="text" name="ic" id="ic" value="<?php echo $row ["ic_number"];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td>Order Type</td>
          <td><input type="text" name="type" id="type"  value="<?php echo $row ["order_type"];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td>Company Name</td>
          <td><input type="text" name="company" id="company"  value="<?php echo $row ["company_name"];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td>Person In Charge</td>
          <td><input type="text" name="pic" id="pic"  value="<?php echo $row ["pic"];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td>Contact</td>
          <td><input type="text" name="contact" id="contact" value="<?php echo $row ["contact_num"];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td>Order Date</td>
          <td><label for="date"></label>
            <input type="text" name="date" id="date"  value="<?php echo $row ["order_date"];?>" disabled="disabled"></td>
        </tr>
         <tr>
          <td>Status Order</td>
          <td><label for="status"></label>
           
           
               <input type="text" name="status" id="status"  value="<?php echo $row["order_status"];?>" disabled="disabled">
           
            </p></td>
        </tr>
         <tr>
           <td>Price</td>
           <td><input type="text" name="price" id="price" value="<?php echo $row ["full_price"];?>" disabled="disabled"></td>
         </tr>
         <tr>
           <td>Address</td>
           <td><textarea name="add" id="add" cols="45" rows="5" disabled="disabled"> <?php echo $row["address"];?></textarea></td>
         </tr>
            
         
        </table>
      <p class="round">CLOTHES DETAIL</p>
         
         <table width="525" border="1">
           
            <td>Type of clothes:</td>
          <td><label for="toc"></label>
           
           
               <input type="text" name="toc" id="toc"  value="<?php echo $row["toc"];?>" disabled="disabled">
           
            </p></td>
           
        <tr>
          <td>QUANTITY:</td>
          <td></td>
        </tr>
         <tr>
          <td width="184">XS</td>
          <td width="325"><label for="xs"></label>
            <input type="text" name="xs" id="xs" value="<?php echo $row ["XS"];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td>S</td>
          <td><label for="s"></label>
          <input type="text" name="s" id="s" value="<?php echo $row ["S"];?>" disabled="disabled"></td>
        </tr>
         <tr>
          <td width="184">M</td>
          <td width="325"><label for="m"></label>
            <input type="text" name="m" id="m" value="<?php echo $row ["M"];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td>L</td>
          <td><label for="l"></label>
          <input type="text" name="l" id="l" value="<?php echo $row ["L"];?>" disabled="disabled"></td>
        </tr>
         <tr>
          <td width="184">XL</td>
          <td width="325"><label for="xl"></label>
            <input type="text" name="xl" id="xl" value="<?php echo $row ["XL"];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td>XXL</td>
          <td><label for="xxl"></label>
          <input type="text" name="xxl" id="xxl" value="<?php echo $row ["XXL"];?>" disabled="disabled"></td>
        </tr>
         <tr>
           <td>XXXL</td>
           <td><label for="xxl"></label>
		<input type="text" name="xxxl" id="xxxl" value="<?php echo $row ["XXXL"];?>" disabled="disabled"></td>
         </tr>
         <tr>
          <td>Notes:</td>
          <td>
            <textarea name="notes" id="notes" cols="45" rows="5" disabled="disabled">  <?php echo $row["notes"];?> </textarea>
          </td>
          
        </tr>
      </table>
      </center>
      <p>&nbsp;</p>
    
     
    
   
    </form>
  <p>&nbsp;</p>
  </div>
</center>


</body>
</html>

