<?php
   include('session.php');
?>





<!DOCTYPE html>

<html>

<head>
    <title>Welcome </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afterlogin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="stylesafterlogin.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesentry.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="#" style="font-size:44px;color:rgb(57,69,81);">BILL IT</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" onclick="signoutb();" href="#">HOME</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href = "logout.php">SIGN OUT</a></li>
                        
                    </ul>
            </div>
    </div>
    </nav>
    </div>

    <h3 style="margin-top:130px;margin-left:50px;text-align:center;">HEY <?php echo $login_session; ?> <?php echo':)'?> </h3>
    <br>
    <br>
    <marquee behaviour = alternate scrollamount="20" width=1400 height=100><h4 style=margin-left:50px;>WELCOME TO BILL IT</h4></marquee>
    <br>
    <hr style="border-width:2px;">;
    <br>
    <br>
    <h5 style="margin-left:50px;">Choose from the below categories to record you expenses...</h5>

     


     <div class="team-grid"></div>
    <div></div>
    <div class="card-group" style="margin:0px;padding:14px;">
        <div class="card" style="padding:3px;"><img class="card-img-top w-100 d-block" src="artem-bali-682651-unsplash.jpg" style="height:312px;width:337px;margin:1px;padding:1px;">
            <div class="card-body">
                <h4 class="text-center card-title">FOOD</h4>
                <ul>
                    <li>Grocery</li>
                    <li>Breakfasts</li>
                    <li>Lunch</li>
                    <li>Snacks</li>
                </ul><a class="btn btn-primary ml-5" href="foodhtml.php" role="button" style="height:36px;width:76px;background-color:#0076e2;">ENTER</a></div>
        </div>
        <div class="card" style="padding:3px;margin:0px;"><img class="card-img-top w-100 d-block" src="jens-kreuter-85328-unsplash.jpg" style="height:311px;padding:0px;">
            <div class="card-body">
                <h4 class="text-center card-title">ENTERTAINMENT&nbsp;</h4>
                <ul>
                    <li>Internet</li>
                    <li>TV subscriptions</li>
                    <li>Movie</li>
                    <li>Travel</li>
                </ul><a class="btn btn-primary ml-5" href="enthtml.php" role="button" style="height:36px;width:76px;background-color:#0076e2;">ENTER</a></div>
        </div>
    </div>
    <div class="card-group" style="padding:14px;margin:0px;">
        <div class="card" style="padding:14px;width:529px;height:572px;"><img class="card-img-top w-100 d-block" src="fancycrave-520422-unsplash.jpg" style="height:319px;width:300px;margin:0px;padding:0px;">
            <div class="card-body">
                <h4 class="text-center card-title">MISCELLANIOUS</h4>
                <ul>
                    <li>Shopping</li>
                    <li>Repairs</li>
                    <li>Rent</li>
                    <li>Others</li>
                </ul><a class="btn btn-primary ml-5" href="mischtml.php" role="button" style="height:36px;width:76px;background-color:#0076e2;">ENTER</a></div>
        </div>
        <div class="card" style="padding:14px;width:543px;"><img class="card-img-top w-100 d-block" src="rawpixel-600792-unsplash.jpg" style="height:311px;">
            <div class="card-body">
                <h4 class="text-center card-title">MEDICAL</h4>
                <ul>
                    <li>Insurance</li>
                    <li>Medicines</li>
                    <li>Hospitals</li>
                    <li>Emergency</li>
                </ul><a class="btn btn-primary ml-5" href="medhtml.php" role="button" style="height:36px;width:76px;background-color:#0076e2;">ENTER</a></div>
        </div>
    </div>









    <div class="footer-basic" style="margin-top:789px;">
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>


    <script type='text/javascript'>
        function  signoutb(){
		alert('Please SIGNOUT to reach HOME !!!');
        }
        window.onbeforeunload = function() { return "Are you sure you want to SIGN OUT ?"; };
	</script>";
</body>

</html>