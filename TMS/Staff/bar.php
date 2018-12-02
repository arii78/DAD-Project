<!doctype html>
<html>

<head>
    <title>Bar Chart</title>
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
		  width:65%;
		  height:65%
		  border:thin solid #999;
		  margin: 0;
		  background-color:transparent;
		  position: absolute;
		  top: 60%;
		  left: 50%;
		  margin-right: -50%;
		  transform: translate(-50%, -50%)
	  }
    </style>
</head>

<?php
	include ("connect.php");

//NOVEMBER
		$sql11="SELECT sum(order_payment.amount) from order_payment JOIN order_details WHERE (order_payment.order_id=order_details.order_id) AND order_details.order_date LIKE '%/11/%'";
		$run11=mysqli_query($con,$sql11);
		$value11=mysqli_fetch_array($run11);

//DECEMBER

		$sql12="SELECT sum(order_payment.amount) from order_payment JOIN order_details WHERE (order_payment.order_id=order_details.order_id) AND order_details.order_date LIKE '%/12/%'";
		$run12=mysqli_query($con,$sql12);	
		$value12=mysqli_fetch_array($run12);
?>


<body>
    
    
    <canvas id="myChart2" class="bar"></canvas>
    
    <script>

var chartData = 
{
    labels: ["JAN","FEB","MAC","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"  ],
    datasets: 
	[
   	 	{
            label: "BY MONTH",
            fillColor: "rgba(200, 244, 66, 1)", 
            strokeColor: "rgba(80, 244, 66, 1)", 
            highlightFill: "rgba(80, 244, 66, 1)",
            highlightStroke: "rgba(80, 244, 66, 1)",
            data: [1000,900,800,700,600,500,400,300,200,100,<?php echo $value11[0] ?>,<?php echo $value12[0] ?>]        
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
                ctx.fillText(bar.value, bar.x, bar.y - 0);
            });
        })
    }
});
    </script>
</body>

</html>
