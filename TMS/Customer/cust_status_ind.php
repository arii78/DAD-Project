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
<center> 
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
  <?php
    include ('../Admin/connect.php');
    $id = $_GET['order_id'];
	
	$ic = $_GET['ic'];
	
    $result = mysql_query("SELECT * from order_details WHERE ic_number = '$ic' AND order_id='$id'" ) or die ("Error running MySQL query");
 	  $row = mysql_fetch_assoc($result);
?>
</p>
<p>&nbsp; </p>
<div class="title">
  <p>CUSTOMER ORDER DETAILS</p>
</div>
<p>&nbsp;</p>
<center>
  <div id="form">
  <p>&nbsp;</p>
  
  <form action="../Admin/status_ind_final.php" method="post">
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
          <td>Order Date</td>
          <td><label for="date"></label>
            <input type="text" name="date" id="date" value="<?php echo $row ["order_date"];?>" disabled="disabled"></td>
        </tr>
         <tr>
          <td>Status Order</td>
          <td><label for="status"></label>
           
           
               <input type="text" name="status" id="status"  value="<?php echo $row["order_status"];?>" disabled="disabled">
           
            </td>
        </tr>
         <tr>
          <td>Price</td>
          <td><label for="price"></label>
            <input type="text" name="price" id="price" value="<?php echo $row["full_price"];?>" disabled="disabled"></td>
        </tr>
        </table>
      <p class="round">MEASUREMENTS</p>
         
         <table width="525" border="1">
           <tr>
          <td width="170">Neck </td>
          <td width="339"><label for="neck"></label>
            <input type="text" name="neck" id="neck" value="<?php echo $row ["neck"];?>" disabled="disabled">
            inch</td>
        </tr>
        <tr>
          <td>Shoulder </td>
          <td><label for="shoulder"></label>
          <input type="text" name="shoulder" id="shoulder" value="<?php echo $row ["shoulder"];?>" disabled="disabled">
          inch</td>
        </tr>
         <tr>
          <td width="170">Bust</td>
          <td width="339"><label for="bust"></label>
            <input type="text" name="bust" id="bust" value="<?php echo $row ["bust"];?>" disabled="disabled">
            inch</td>
        </tr>
        <tr>
          <td>Waist </td>
          <td><label for="waist"></label>
          <input type="text" name="waist" id="waist" value="<?php echo $row ["waist"];?>" disabled="disabled">
          inch</td>
        </tr>
         <tr>
          <td width="170">Hips </td>
          <td width="339"><label for="hips"></label>
            <input type="text" name="hips" id="hips" value="<?php echo $row ["hips"];?>" disabled="disabled">
            inch</td>
        </tr>
        <tr>
          <td>Sleeve Length</td>
          <td><label for="sleeve"></label>
          <input type="text" name="sleeve" id="sleeve" value="<?php echo $row ["sleeve_length"];?>" disabled="disabled">
          inch</td>
        </tr>
         <tr>
          <td width="170">Length</td>
          <td width="339"><label for="length"></label>
            <input type="text" name="length" id="length" value="<?php echo $row ["clothes_length"];?>" disabled="disabled">
            inch</td>
        </tr>
        <tr>
          <td>Thigh</td>
          <td><label for="thigh"></label>
          <input type="text" name="thigh" id="thigh" value="<?php echo $row ["thigh"];?>" disabled="disabled">
          inch</td>
        </tr>
         <tr>
          <td>Inseam</td>
          <td><label for="inseam"></label>
          <input type="text" name="inseam" id="inseam" value="<?php echo $row ["inseam"];?>" disabled="disabled">
          inch</td>
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

