<!doctype html>
<html>

<head>
    <title>TMS</title>
    <script src="chart/jquery.min.js"></script><!-- graph from mat-->
    <script src="chart/Chart.bundle.js"></script><!-- graph from mat -->
    <script src="chart/sje.js"></script> <!-- graph from stack flow -->
    	
	<link rel="shortcut icon" href="images/db icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- navbar bootstrap -->
    <link rel="stylesheet" href="css/navbar.css"> <!-- navbar style -->
    <link rel="stylesheet" href="../css_keluarbawah.css">
    <style>
	  canvas {
		  -moz-user-select: none;
		  -webkit-user-select: none;
		  -ms-user-select: none;
	  }
	  .bar{
		  width:75%;
		  height:50%;
		  border:thin solid #999;
		  margin: 0;
		  background-color:#C0C0C0;
		  position: absolute;
		  top: 55%;
		  left: 50%;
		  margin-right: -50%;
		  transform: translate(-50%, -50%)
	  }
	  h4{
		  text-align:center;
		  padding-top:20px;
		  color:#f80d7e;
	  }
	  h5{
		  color:#f80d7e;
	  }
	  body
{background-image:url(../Background/16.jpg);
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
        <script>
	function myFunction() {
		window.print() ;
	}
	</script>
    
</head>

<?php
	include ("connect.php");
	
	
	$sql1="SELECT state FROM customer where state= 'Johor'";
	$run1=mysql_query($sql1);
	$value1=mysql_num_rows($run1);
	
	
	include ("connect.php");
	$sql2="SELECT state FROM customer WHERE state='Kedah'";
	$run2=mysql_query($sql2);
	$value2=mysql_num_rows($run2);
	
	include ("connect.php");
	$sql3="SELECT state FROM customer WHERE state='Kelantan'";
	$run3=mysql_query($sql3);
	$value3=mysql_num_rows($run3);
	
	include ("connect.php");
	$sql4="SELECT state FROM customer WHERE state='Kuala Lumpur'";
	$run4=mysql_query($sql4);
	$value4=mysql_num_rows($run4);
	
	include ("connect.php");
	$sql5="SELECT state FROM customer WHERE state='Melaka'";
	$run5=mysql_query($sql5);
	$value5=mysql_num_rows($run5);
	
	include ("connect.php");
	$sql6="SELECT state FROM customer WHERE state='Negeri Sembilan'";
	$run6=mysql_query($sql6);
	$value6=mysql_num_rows($run6);
	
	include ("connect.php");
	$sql7="SELECT state FROM customer WHERE state='Pahang'";
	$run7=mysql_query($sql7);
	$value7=mysql_num_rows($run7);
	
	include ("connect.php");
	$sql8="SELECT state FROM customer WHERE state='Perak'";
	$run8=mysql_query($sql8);
	$value8=mysql_num_rows($run8);
	
	include ("connect.php");
	$sql9="SELECT state FROM customer WHERE state='Perlis'";
	$run9=mysql_query($sql9);
	$value9=mysql_num_rows($run9);
	
	include ("connect.php");
	$sql10="SELECT state FROM customer WHERE state='Pulau Pinang'";
	$run10=mysql_query($sql10);
	$value10=mysql_num_rows($run10);
	
	include ("connect.php");
	$sql11="SELECT state FROM customer WHERE state='Sabah'";
	$run11=mysql_query($sql11);
	$value11=mysql_num_rows($run11);
	
	include ("connect.php");
	$sql12="SELECT state FROM customer WHERE state='Sarawak'";
	$run12=mysql_query($sql12);
	$value12=mysql_num_rows($run12);
	
	include ("connect.php");
	$sql13="SELECT state FROM customer WHERE state='Selangor'";
	$run13=mysql_query($sql13);
	$value13=mysql_num_rows($run13);
	
	include ("connect.php");
	$sql14="SELECT state FROM customer WHERE state='Terengganu'";
	$run14=mysql_query($sql14);
	$value14=mysql_num_rows($run14);
?>


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
  <a href="taff_logout.php">Logout</a>  
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

   
    <h4>LOCATION-BASED REPORT</h4>
    <canvas id="myChart2" class="bar"></canvas>
    <center><h5>
   THE BAR GRAPH SHOWS ALL CUSTOMER THAT HAVE BEEN REGISTERED BASED ON LOCATION </h5>
 </center>
    
    <script>


var chartData = 
{
    labels: ["JOHOR", "KEDAH", "KELANTAN", "KUALA LUMPUR", "MELAKA", "NEGERI SEMBILAN", "PAHANG", "PERAK", "PERLIS", "PULAU PINANG", "SABAH", "SARAWAK" ,"SELANGOR", "TERENGGANU" ],
    datasets: 
	[
   	 	{
			label: "location",
			fillColor:"rgba(209, 5, 94, 1)",
			strokeColor: "rgba(164, 4, 89, 1))",
			highlightFill: "rgba(239, 6, 142, 1)",
			highlightStroke: "rgba(164, 4, 73, 1)",
			backgroundColor: "rgba(164, 4, 145, 1)",
            data: [<?php echo $value1;?>, <?php echo $value2;?>, <?php echo $value3;?>, <?php echo $value4;?>, <?php echo $value5;?>, <?php echo $value6;?>, <?php echo $value7;?>, <?php echo $value8;?>, <?php echo $value9;?>, <?php echo $value10;?>, <?php echo $value11;?>, <?php echo $value12;?>, <?php echo $value13;?>, <?php echo $value14;?>,]        
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
    <center>
    <button onClick="myFunction()">Print</button></center>
</body>

</html>
