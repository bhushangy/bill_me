

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
}
table{
    margin-top: 105px;
    
}
table, th, td {
    border: 1px solid black;

}
th, td           {
    text-align: center;
    font-family: verdana;
}
}
</style>
</head>
<body background="fork2.jpg">

    <form  method="POST" action="fooddelete.php" >

<br>
<p style="margin-left:20px ;";>delete:</p>

  <input  type="text"  name="del" value='id' >
  <br>
  <br>
  <input type="submit" value="submit">
<h1 ><u>FOOD</u></h1>
<div style="text-align:center"> 
<a href="foodb.php"><input type="button" value="view barchart "></a>
<a href="foodd.php"><input type="button" value="view donutchart"></a>
<a href="foodp.php"><input type="button" value="view piechart"></a>
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


$sql = "SELECT ID, GROCERY, BREAKFAST, LUNCH, EATS, DINNER, EPOCH FROM food";
$result = $conn->query($sql);

 
if ($result->num_rows > 0) {
    echo "<table align='center'><tr><th>ID</th><th>GROCERY</th><th>BREAKFAST</th><th>LUNCH</th><th>EATS</th><th>DINNER</th><th>DATE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["GROCERY"]."</td><td>".$row["BREAKFAST"]."</td><td>".$row["LUNCH"]."</td><td>".$row["EATS"]."</td><td>".$row["DINNER"]."</td><td>".$row["EPOCH"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>