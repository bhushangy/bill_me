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



$sql = "INSERT INTO misc (email,RENT, WATER, ELECTRICITY, LOAN, MAINTENANCE, MISCELLANEOUS, EPOCH)
VALUES ('$a','$_POST[RENT]','$_POST[WATER]','$_POST[ELECTRICITY]','$_POST[LOAN]','$_POST[MAINTENANCE]','$_POST[MISCELLANEOUS]', '$_POST[EPOCH]')";

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
body, html {
    height: 100%;
}
.bg{
  background-image: url("287.jpg");

   
    height: 100%; 

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
h3 {


}
</style>
</head>
<body class="bg">
<a href="viewmisc.php"><input type="button" value="view records"></a>
</body>
</html>

