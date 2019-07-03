<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

session_start();
$a=$_SESSION["login_user"];
echo" result ".$a;

// Create connection
$conn = new mysqli("localhost", "root", $password, "webproject");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<h3>Connected successfully.</h3>";
echo "<br>";
echo "<hr>";

$sql = "INSERT INTO ent (email,TRAVEL, FUEL, ECOMM, INTERNET, TV, MOVIE, EPOCH)
VALUES ('$a','$_POST[TRAVEL]','$_POST[FUEL]','$_POST[ECOMM]','$_POST[INTERNET]','$_POST[TV]','$_POST[MOVIE]' ,'$_POST[EPOCH]')";

if ($conn->query($sql) === TRUE) {
    
    echo "<h3>New records created successfully.</h3>.";
    echo "<br>";
    echo "<br>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>
<head>
<style>
h3{
    color:white;
}
</style>
</head>
<body background="bills.jpg">
<a href="viewent.php"><input type="button" value="view records"></a>
</body>
</html>

