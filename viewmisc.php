

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
body, html {
    height: 100%;
}

.bg{
  background-image: url("287.jpg");

   
   

    
    background-position: fill;
    background-repeat: no-repeat;
    background-size: cover;
}
h1{
    
    margin-left:300px;
}
table{ 
    margin-top: 105px;
    align: center;
    margin-left:100px;
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
<body class="bg">
    <form  method="POST" action="miscdelete.php" >

<br>
<p style="margin-left:20px ;";>delete:</p>

  <input  type="text"  name="del" value='id' >
  <br>
  <br>
  <input type="submit" value="submit">
<h1 ><u>MISCELLANEOUS</u></h1>
<div style="text-align:center"> 
<a href="miscb.php"><input type="button" value="view barchart "></a>
<a href="miscd.php"><input type="button" value="view donutchart"></a>
<a href="miscp.php"><input type="button" value="view piechart"></a>
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


$sql = "SELECT ID, RENT, WATER, ELECTRICITY, LOAN, MAINTENANCE, MISCELLANEOUS, EPOCH FROM misc";
$result = $conn->query($sql);

 
if ($result->num_rows > 0) {
    echo "<table align='center'><tr><th>ID</th><th>RENT</th><th>WATER</th><th>ELECTRICITY</th><th>LOAN</th><th>MAINTENANCE</th><th>MISCELLANEOUS</th><th>DATE</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["RENT"]."</td><td>".$row["WATER"]."</td><td>".$row["ELECTRICITY"]."</td><td>".$row["LOAN"]."</td><td>".$row["MAINTENANCE"]."</td><td>".$row["MISCELLANEOUS"]."</td><td>".$row["EPOCH"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>