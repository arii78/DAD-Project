<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_homepage.css" rel="stylesheet" type="text/css" />
<link href="../css_menustaff.css" rel="stylesheet" type="text/css" />
<link href="../css_kotak.css" rel="stylesheet" type="text/css" />


</head>
<?php
if (!isset($_SESSION)) session_start();
    include ('connect.php');
    $ic = $_SESSION['ic'];
    $result = mysql_query("select * from staff where ic_number = '$ic'" ) or die ("Error running MySQL query");
 	  $row = mysql_fetch_assoc($result);
?>

<body>
<ul id="nav-mobile" class="">
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
 </ul>
  <a href="#" data-activates="nav-mobile" class=""></a>
</div>



<span style="font-size:25px;cursor:pointer" onClick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidenav").style.display = "none";
}

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

</script>
<center> 
<p>&nbsp;</p>
<div class="title">
<br>
 <center> <p>TAILOR MANAGEMENT SYSTEM</p> </center>
   <center><p style="background-color:#333; border-radius:80px; width:80%; height:40px;"><label style="margin-left:30px; color:#fc97c8; font-size:24; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">Hello Staff, <?php echo $row ['staff_name'];?></label></p> </center>
</div>

<div id="inprogress">
  <p class="tajuk">ORDER IN PROGRESS</p>
<?php
$conn = mysqli_connect("localhost","root","12345678",$dbname);
		  $sql = "SELECT COUNT(1) FROM order_details WHERE order_status='In Progress'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
						$total=$row[0];
						//echo "Total Item is: " . $total;
						 $sql2 = "SELECT COUNT(1) FROM corporate WHERE order_status='In Progress'";
					$result2 = mysqli_query($conn,$sql2);
					$row = mysqli_fetch_array($result2);
						$total2=$row[0];
					echo  $total+$total2 ;
					
?>
<p class="tajuk">Total</p>
</div>


<div id="complete">
  <p class="tajuk2">COMPLETE</p>
<?php
$conn = mysqli_connect("localhost","root","12345678",$dbname);
		  $sql = "SELECT COUNT(1) FROM order_details WHERE order_status='Complete'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
						$total=$row[0];
						//echo "Total Item is: " . $total;
						 $sql2 = "SELECT COUNT(1) FROM corporate WHERE order_status='Complete'";
					$result2 = mysqli_query($conn,$sql2);
					$row = mysqli_fetch_array($result2);
						$total2=$row[0];
					echo  $total+$total2 ;
					
?>
<p class="tajuk2">Total</p>
</div>


<div id="ready">
  <p class="tajuk3">READY TO COLLECT</p>
<?php
$conn = mysqli_connect("localhost","root","12345678",$dbname);
		  $sql = "SELECT COUNT(1) FROM order_details WHERE order_status='Ready to collect'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
						$total=$row[0];
						//echo "Total Item is: " . $total;
						 $sql2 = "SELECT COUNT(1) FROM corporate WHERE order_status='Ready to collect'";
					$result2 = mysqli_query($conn,$sql2);
					$row = mysqli_fetch_array($result2);
						$total2=$row[0];
					echo  $total+$total2 ;
					
?>
<p class="tajuk3">Total</p>
</div>


<div id="collected">
  <p class="tajuk4">COLLECTED</p>
<?php
$conn = mysqli_connect("localhost","root","12345678",$dbname);
		  $sql = "SELECT COUNT(1) FROM order_details WHERE order_status='Collected'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
						$total=$row[0];
						//echo "Total Item is: " . $total;
						 $sql2 = "SELECT COUNT(1) FROM corporate WHERE order_status='Collected'";
					$result2 = mysqli_query($conn,$sql2);
					$row = mysqli_fetch_array($result2);
						$total2=$row[0];
					echo  $total+$total2 ;
					
?>

<p class="tajuk4">Total</p>
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

