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

if(isset($_POST['del']) and is_numeric($_POST['del']))
{
 
   $delete = $_POST['del'];
   $sql = "DELETE FROM food where id = '$delete' ";



}


if ($conn->query($sql) === TRUE) {
    echo "<h2>Record deleted successfully <br><br></h2>";
} else {
    echo "Error deleting record!!! <br><br> " . $conn->error;
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
