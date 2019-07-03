<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname="webproject"; 
$hhm = "login.php";
session_start();

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
      echo "<br>";
      echo "<br>";   
      echo "<br>";     
	echo"<h2>CONNECTION SUCCESSFUL :) :) :)</h2><br><h3>INAVLID email or password...<br>Please login with VALID credentials.</h3>";
}
else
{
	echo "<h2>NO CONNECTION :( :( :(</h2>";
	echo "<br>";
}

  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
	  $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
	  
      
	  $sql = "SELECT id FROM users WHERE email = '$myusername' and upassword = '$mypassword' ";
	 
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: afterlogin.php");
      }else {
		echo "<script type='text/javascript'>
		alert('INVALID email or password!');
	</script>";
	 
      }
   }
?>