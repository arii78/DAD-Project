<!doctype html>
<html>

<head>
    <title>TailorSys</title>
    <script src="chart/jquery.min.js"></script><!-- graph from mat-->
    <script src="chart/Chart.bundle.js"></script><!-- graph from mat -->
    <script src="chart/sje.js"></script> <!-- graph from stack flow -->
    	
	<link rel="shortcut icon" href="images/db icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- navbar bootstrap -->
    <link rel="stylesheet" href="css/navbar.css"> <!-- navbar style -->
    <style>
	  canvas {
		  -moz-user-select: none;
		  -webkit-user-select: none;
		  -ms-user-select: none;
	  }
	  .bar{
		  width:75%;
		  height:75%
		  border:thin solid #999;
		  margin: 0;
		  background-color:transparent;
		  position: absolute;
		  top: 55%;
		  left: 50%;
		  margin-right: -50%;
		  transform: translate(-50%, -50%)
	  }
	  h4{
		  text-align:center;
		  padding-top:20px;
	  }
	  body
{background-image:url(Background/8.jpg);
background-size:cover;
color:#FFF;
}


#header h1
{font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:22px;}

ul {
	
	margin : 0;
	padding: 0;
	overflow: hidden;
	background-color:#2828FF;
	list-style-type:none;
}

li {
    float:left;
	
}

.intro
{ font-size:20px;
text-align:center;
width:65%;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
	text-decoration:none;	
}

li a:hover {
	background-color:#111;
}

.active {background-color:#4CAF50; }

table, th, td { border:hidden; }

.button {
  display: inline-block;
  border-radius: 4px;
  background-color:#FF7575;
  border: none;
  color: white;
  text-align: center;
  font-size: 14px;
  padding: 15px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

/*.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}*/

/*.button:hover span {
  padding-right: 25px;
}*/

.button:hover span:after {
  opacity: 1;
  right: 0;
}
input[type=text], [type=password] {
    width: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


.button2 {
  display: inline-block;
  border-radius: 4px;
  background-color:#C89780;
  border: none;
  color: white;
  text-align: center;
  font-size: 14px;
  padding: 15px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}

input[type=text], [type=password] {
    width: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
/*input [type=password] {
	 width: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}*/

#form {
    border-radius: 5px;
    background-color:#333;
    padding: 0.5px 20px;
	width:800px;
	height:800px;
	opacity: 0.8;
    filter: alpha(opacity=0.8);
}

.title
{
    background-color:transparent;
    color:white;
    border:;
	border-bottom-style:;
	border-top-style:;
	border-left-style:;
	border-left-style:;
	width:50%;
	font-size:34px;
}

a
{
	color:#97FFFF;
	}

.custstaff
{
	text-decoration:none;
	color:white;
}
	
p.round { 
border-radius:8px;
background-color:#000;
font-size:22px;
padding:7.5px;
width:80%;

}

p.round2
{
	border-radius:8px;
background-color:#000;
font-size:22px;
padding:7.5px;
width:80%;
}

.table1
{
	font-size:20px;
}

.table2
{
	font-size:20px;
}

.sidenav {
    display: none;
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

/* color: #f1f1f1; */
.sidenav a:hover, .offcanvas a:focus{
    color:#FF2291; 
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


    </style>
    
</head>

<?php
	include ("connect.php");
	$sql1="SELECT gender FROM customer WHERE gender='male'";
	$run1=mysql_query($sql1);
	$value1=mysql_num_rows($run1);
	
	include ("connect.php");
	$sql2="SELECT gender FROM customer WHERE gender='female'";
	$run2=mysql_query($sql2);
	$value2=mysql_num_rows($run2);
	
	
?>


<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
   <a href="Staff/staff_home.html">Home Page</a>
  <a href="Staff/staff_profile.php">Update Profile</a>
  <a href="Staff/add_cust.html">Add Customer Profile</a>
  <a href="Staff/updatecustomer_st.php">Update Customer Profile</a>
  <a href="Staff/tailoring_order_st.html">Record Customer Order</a>
  <a href="Staff/updateorder_status.php">Update Order Status</a>
  <a href="Staff/payment_ic.php">Payment Receipt</a>
  <a href="Staff/reports_type.html">Reports</a>
  <a href="Staff/logout_staff.php">Logout</a>    
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

   
    <h4>GENDER-BASED REPORT</h4>
    <canvas id="myChart2" class="bar"></canvas>
    
    
    <script>


var chartData = 
{
    labels: ["MALE", "FEMALE", ],
    datasets: 
	[
   	 	{
			label: "MALE",
			backgroundColor: "rgba(192, 38, 110, 1)",
            data: [<?php echo $value1;?>, <?php echo $value2;?>]        
		}
    ]
	
};



var ctx = document.getElementById("myChart2").getContext("2d");
var myBar = new Chart(ctx).Bar(chartData, {
    showTooltips: false,
    onAnimationComplete: function () {

        var ctx = this.chart.ctx;
        ctx.font = this.scale.font;
        ctx.fillStyle = this.scale.textColor
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";

        this.datasets.forEach(function (dataset) {
            dataset.bars.forEach(function (bar) {
                ctx.fillText(bar.value, bar.x, bar.y - 5);
            });
        })
    }
});
    </script>
</body>

</html>
