<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="stylesregister.min.css">

    <style>
        .error {color: #FF0000;}


</style>
</head>

<body>
<script>
                function validate(){
                    
        var a=document.getElementById("u").value;
        var b=document.getElementById("e").value;
        var c=document.getElementById("pass").value;
        var d=document.getElementById("passr").value;
        if ( a=="" || b=="" || c=="" || d=="")
        {
            alert("Please Fill All Required Fields");
            return false;
        }
    
                    var e = document.getElementById("pass").value;
                    var f = document.getElementById("passr").value;
                    if (e!=f) {
                       alert("Passwords do no match!!!");
                       return false;
                    }
                    
                }
             </script>
        
        
               <?php
        // define variables and set to empty values
        $usernameErr = $emailErr = $passwordErr = $passwordrErr = "";
        $username = $email = $password = $passwordr = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
          } else {
            $username = test_input($_POST["username"]);
          }
          
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
          }
            
          if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
          } else {
            $password = test_input($_POST["password"]);
          }
        
          if (empty($_POST["passwordr"])) {
            $passwordrErr = "Repeat password";
          } else {
            $passwordr = test_input($_POST["passwordr"]);
          }
        
          
        }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="#" style="color:rgba(57,69,81);font-size:45px;">&nbsp;BILL IT</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="home.html">HOME</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">LOGIN</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contact.html">REACH US</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    <div class="register-photo" style="width:522px;margin-top:82px;margin-right:0px;margin-left:372px;">
        <div class="form-container">
       
            <form method="POST" onSubmit="return validate();"  action="connectto.php">
                <h2 class="text-center"><strong>Register</strong> with us.</h2>
                <p><span class="error">* required field</span></p>
                <div class="form-group"><input class="form-control" id="u" type="username" name="username" placeholder="Username"><span class="error">* <?php echo $usernameErr;?></span>
                
                <input class="form-control" id="e" type="email" name="email" placeholder="Email"><span class="error">* <?php echo $emailErr;?></span>
                 </div>
                <div class="form-group"><input class="form-control" id="pass" type="password" name="password" placeholder="Password" pattern="(?=.*[A-Z]).{8,}" title="Must contain at least one uppercase and at least 8 or more characters" required><span class="error">* <?php echo $passwordErr;?></span>
                </div>
                <div class="form-group"><input class="form-control" id="passr" type="password" name="passwordrepeat" placeholder="Password (repeat)"><span class="error">* <?php echo $passwordrErr;?></span>
                </div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" onSubmit="connect.php">Sign Up</button></div><a href="#" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>