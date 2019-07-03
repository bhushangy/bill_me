<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

session_start();
$a=$_SESSION["login_user"];


// Create connection
$conn = new mysqli("localhost", "root", $password, "webproject");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<h3>Connected successfully.</h3>";
echo "<br>";
echo "<hr>";

$sql = "INSERT INTO food (email,GROCERY, BREAKFAST, LUNCH, EATS, DINNER, EPOCH)
VALUES ('$a','$_POST[GROCERY]','$_POST[BREAKFAST]','$_POST[LUNCH]','$_POST[EATS]','$_POST[DINNER]', '$_POST[EPOCH]')";

if ($conn->query($sql) === TRUE) {
    
    echo "<h3>New records created successfully.</h3>";
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
h3 {


}
</style>
</head>
<body background="fork2.jpg">
<a href="viewfood.php"><input type="button" value="view records"></a>

</body>
</html>

