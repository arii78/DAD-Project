<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_profile.css" rel="stylesheet" type="text/css" />
<link href="../css_menu.css" rel="stylesheet" type="text/css" />
<link href="../css_dropdown.css" rel="stylesheet" type="text/css" />
<link href="../css_keluarbawah.css" rel="stylesheet" type="text/css" />
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
  <p>CUSTOMER PROFILE</p>
</div>
<p>&nbsp;</p>
<center>
  <div id="form">
  <p>&nbsp;</p>
  
  <form action="update_customer3.php" method="post">
  
  <?php
	  include ('connect.php');
	  
	 $ic = $_POST['ic'];
	 
	 $result = mysql_query("SELECT * from customer WHERE ic_number = '$ic'") or die ("Error running MySQL query");
	 $row = mysql_fetch_assoc($result);
	 $gender = $row["gender"];
	  ?>
  
   <center> 
      <table width="525" border="1">
        <tr>
          <td width="164">Customer ID</td>
          <td width="345"><input type="text" name="cust_id" id="cust_id" value="<?php echo $row['cust_id'];?>" size="30" readonly /></td>
        </tr>
        <tr>
          <td>Customer Name</td>
          <td><label for="cust_name"></label>
          <input type="text" name="cust_name" id="cust_name" value="<?php echo $row['cust_name'];?>" size="30" readonly/></td>
        </tr>
        <tr>
          <td>IC Number</td>
          <td><label for="ic"></label>
          <input type="text" name="ic" id="ic" value="<?php echo $row['ic_number'];?>" size="30" readonly /></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><label for="address"></label>
          <textarea name="address" id="address" cols="45" rows="5"> <?php echo $row['address'];?></textarea></td>
        </tr>
        <tr>
          <td>Postcode</td>
          <td><label for="postcode"></label>
          <input type="text" name="postcode" id="postcode" value="<?php echo $row['postcode'];?>" size="30"/></td>
        </tr>
       <tr>
          <td>State</td>
          <td><label for="state"></label>
            <p id="state" name="state" size="1">
            <div class="styled-select">
              <select name="state" size="1" id="state" value="<?php echo $row['state'];?>" size="30"/>
              <option><?php echo $row['state'];?></option>
                <option>Johor</option>
                <option>Kedah</option>
                <option>Kelantan</option>
                <option>Kuala Lumpur</option>
                <option>Melaka</option>
                <option>Negeri Sembilan</option>
                <option>Pahang</option>
                <option>Perak</option>
                <option>Perlis</option>
                <option>Pulau Pinang</option>
                <option>Sabah</option>
                <option>Sarawak</option>
                <option>Selangor</option>
                <option>Terengganu</option>
              </select> 
              </div>
            </p></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><input name="gender" type="radio" id="male" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
            Male
            <label for="male">
              <input type="radio" name="gender" id="female" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
              Female
            </label></td>
        </tr>
        <tr>
          <td>Phone Number</td>
          <td><label for="phone"></label>
          <input type="text" name="phone" id="phone" value="<?php echo $row['phone'];?>" size="30"/></td>
        </tr>
       
      </table>
      </center>
      <p>&nbsp;</p>
    
      <button class="button" style="vertical-align:middle" type="submit">
        <span>Update Customer</span>   
     
    </button>
    
   
    </form>
  <p>&nbsp;</p>
  </div>
</center>


</body>
</html>

