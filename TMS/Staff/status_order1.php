<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_updateprofile.css" rel="stylesheet" type="text/css" />
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
<div class="title">
  <p>STATUS ORDER</p>
</div>
<p>&nbsp;</p>
<center>
  <div id="form">
  <p>&nbsp;</p>
  
  <form action="status_order2.php" method="post">
   <center>
   </center>
      <p>&nbsp;</p>
      <p>
        <input type="text" name="ic" id="ic" autocomplete="off" placeholder="IC Number" required />
  </p>
  
<button class="button" style="vertical-align:middle" type="submit">
        <span>Update</span>   
     
    </button>
    
   
    </form>
  <p>&nbsp;</p>
  </div>
</center>


</body>
</html>


