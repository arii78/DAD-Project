<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_homepage.css" rel="stylesheet" type="text/css" />
<link href="../css_menu.css" rel="stylesheet" type="text/css" />
</head>
<?php
if (!isset($_SESSION)) session_start();
    include ('connect.php');
    $ic = $_SESSION['ic'];
    $result = mysql_query("select * from customer where ic_number = '$ic'" ) or die ("Error running MySQL query");
 	  $row = mysql_fetch_assoc($result);
?>

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
<div class="title">
<br>
 <center> <p>TAILOR MANAGEMENT SYSTEM</p> </center>
   <center><p style="background-color:#333; border-radius:80px; width:auto; height:40px;"><label style="margin-left:30px; color:#fc97c8; font-size:24; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">Hello Customer, <?php echo $row ['cust_name'];?></label></p> </center>
</div>
<div id="form">
  <center>
  <div class="intro">
  <p>&nbsp;</p>
  <p>We are pleased that you have visited our website! With just one click, you can now check your order status online and update your personal information as well.</p> 
    
    <p>Eureka Tailor is a master tailor who does tailoring work for men’s, women’s and children clothing. Eureka has a long experience making precise and fast tailoring for our customers. We would be glad to assist you and help you look your best in your outfit! </p>
  <p>&nbsp;</p>
</div>
 <p class="round">SERVICES</p>
 <p>&nbsp;</p>

 <table width="50%" border="0" class="table1">
  <tr>
  <td width="39%"><li>Baju Kurung</li></td>
   <td width="27%"><li>Suits</li></td>
   <td width="34%"><li>Trousers</li></td>
  </tr>
  <tr>
  <td><li>Baju Melayu</li></td>
  <td><li>Shirt</li></td>
  <td><li>Jeans</li></td>
  </tr>
  
  </table>

  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p class="round2">WORKING HOURS</p>
  <p>&nbsp;</p>
  <table width="50%" border="0" class="table2">
 <tr>
 <td align="center">Monday-Friday : 9am-6pm</td>
 </tr>
<tr>
 <td align="center">Saturday : 9am-5pm</td>
 </tr>
<tr>
<td align="center"> Sunday : Close</td>
</tr>
</table>
</div>
</center>


</body>
</html>

