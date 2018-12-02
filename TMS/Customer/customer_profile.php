<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TMS</title>
<link href="../css_profile.css" rel="stylesheet" type="text/css" />
<link href="../css_menu.css" rel="stylesheet" type="text/css" />
<link href="../css_dropdown.css" rel="stylesheet" type="text/css" />
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
  <p>CUSTOMER PROFILE</p>
</div>
<p>&nbsp;</p>
<center>
  <div id="form">
  <p>&nbsp;</p>
  
  <form action="customer_profile2.php" method="post">
  
   <?php
   
session_start();

	  include ('connect.php');
	  
	 $ic = $_SESSION['ic'];
	 
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
          <td width="164">Customer Name</td>
          <td width="345"><label for="cust_name"></label>
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
          <textarea name="address" id="address" cols="45" rows="5" required> <?php echo $row['address'];?> </textarea></td>
        </tr>
        <tr>
          <td>Postcode</td>
          <td><label for="postcode"></label>
          <input type="text" name="postcode" id="postcode" required value="<?php echo $row['postcode'];?>" size="30"/></td>
        </tr>
       <tr>
          <td>State</td>
          <td><label for="state"></label>
            <p id="state" name="state" size="1">
            <div class="styled-select">
              <select name="state" size="1" id="state">
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
          <td> 
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> required value="male">Male</td>
        </tr>
        <tr>
          <td>Phone Number</td>
          <td><label for="phone"></label>
          <input type="text" name="phone" id="phone" value="<?php echo $row['phone'];?>" size="30" required/></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><label for="password"></label>
          <input type="text" name="password" id="password" value="<?php echo $row['password'];?>" size="30" required/></td>
        </tr>
          <td>Keyword</td>
          <td><label for="keyword"></label>
          <input type="text" name="keyword" id="keyword" value="<?php echo $row['keyword'];?>" size="30" required/>
          *For forgot password use</td>
        </tr>
      </table>
      </center>
      <p>&nbsp;</p>
    
      <button class="button" style="vertical-align:middle" type="submit">
        <span>Update Profile</span>   
     
    </button>
    
   
    </form>
  <p>&nbsp;</p>
  </div>
</center>


</body>
</html>

