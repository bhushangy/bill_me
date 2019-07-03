<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connectto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="stylesconnectto.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="#" style="color:rgb(57,69,81);font-size:44px;">BILL IT</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="margin-right:0px;">HOME&nbsp;</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">LOGIN</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">REACH US</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>


    <?php

    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname="webproject"; 
    
    //Create connection
    $conn =  mysqli_connect($servername, $username, $password, $dbname);
     if(!$conn)
     {
    echo("Successful connection");
    }
    
    if(!mysqli_select_db($conn,$dbname))
    {
        echo 'database not selected';
    }
    
    $usernamee = $_POST['username'];
    $email = $_POST['email'];
    $passworde=$_POST['password'];
    $passwordr = $_POST['passwordrepeat'];
    
    $register_result= "INSERT INTO users (username, email, upassword, passwordrep) VALUES ('$usernamee','$email','$passworde','$passwordr')";
    
    if(!mysqli_query($conn, $register_result))
    {
        echo 'REGISTRATION UNSUCCESSFUL.';
    }
    
    else
    {   echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<marquee behaviour = alternate scrollamount="20" width=1400 height=450><h4>REGISTRATION SUCCESSFUL</h4><br><h4>Please login to continue...</h4></marquee>';
        
               
    }
    ?>
    
    
    


    <div class="footer-basic" style="margin-bottom:0px;margin-top:354px;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">BILL IT © 2018</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>