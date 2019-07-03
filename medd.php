<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname="webproject";
session_start();
$a=$_SESSION["login_user"];


$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
echo "";
}
else
{
	echo "no connection";
}

mysqli_select_db($conn,$dbname); 

//for medicine sum
$query = "SELECT SUM(MEDICINE) FROM med WHERE email = '$a'";
$med = mysqli_fetch_row(mysqli_query($conn, $query));

//for insurance sum
$query = "SELECT SUM(INSURANCE) FROM med WHERE email='$a'";
$insu = mysqli_fetch_row(mysqli_query($conn, $query));

//for hospital sum
$query = "SELECT SUM(HOSPITAL) FROM med WHERE email='$a'";
$hos = mysqli_fetch_row(mysqli_query($conn, $query));

//for emergency sum
$query = "SELECT SUM(EMERGENC) FROM med WHERE email='$a'";
$eme = mysqli_fetch_row(mysqli_query($conn, $query));







?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
['Order','new'],

          ['Medicine', parseInt('<?php echo $med[0]; ?>')],
          ['Insurance',       parseInt('<?php echo $insu[0]; ?>')],
          ['Hospital', parseInt('<?php echo $hos[0]; ?>')],
          ['Emergency', parseInt('<?php echo $eme[0]; ?>')]
    ]); 

    var options = {
          title: 'Food Expense',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <a href="viewmed.php"><input type="button" value="Back"></a>

    <div id="donutchart"  style="width: 900px; height: 500px;"></div>
  </body>
</html>
</html>