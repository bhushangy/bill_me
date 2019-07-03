

<!DOCTYPE html>
<html>
<head>
<style>
input[type=text] {
    
    
    margin-left: 20px ;
  
}
input[type=submit] {
    
    
    margin-left: 20px ;
  
}
h1{
    font-family:'verdana';
    text-align: center;
    color:white;
}
table{
    margin-top: 105px;
    
}
table, th, td {
    border: 1px solid black;
    color:white;
}
th, td           {
    text-align: center;
    font-family: verdana;
}

</style>
</head>
<body background="bills.jpg">
    <form  method="POST" action="entdelete.php" >

<br>
<p style="margin-left:20px ;";>delete:</p>

  <input  type="text"  name="del" value='id' >
  <br>
  <br>
  <input type="submit" value="submit">




<form action="viewent.php" method="post">
<h1><u>ENTERTAINMENT</u></h1>
<div style="text-align:center"> 
<a href="entb.php"><input type="button" value="view barchart "></a>
<a href="entd.php"><input type="button" value="view donutchart"></a>
<a href="entp.php"><input type="button" value="view piechart"></a>
<a href="afterlogin.php"><input type="button" value="menu"></a>
</div>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";


// Create connection
$conn = new mysqli("localhost", "root", $password, "webproject");

// Check connection
if ($conn->connect_error) {
    
    
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT ID, TRAVEL, FUEL, ECOMM, INTERNET, TV, MOVIE, EPOCH FROM ent";
$result = $conn->query($sql);

 
if ($result->num_rows > 0) {
    echo "<table align='center'><tr><th>ID</th><th>TRAVEL</th><th>FUEL</th><th>ECOMM</th><th>INTERNET</th><th>TV</th><th>MOVIE</th><th>DATE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["TRAVEL"]."</td><td>".$row["FUEL"]."</td><td>".$row["ECOMM"]."</td><td>".$row["INTERNET"]."</td><td>".$row["TV"]."</td><td>".$row["MOVIE"]."</td><td>".$row["EPOCH"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>