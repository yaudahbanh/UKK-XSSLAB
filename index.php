<?php
error_reporting(0);
session_start();
if(time()-$_SESSION["login_time_stamp"] > 3600) {
    session_unset();
    session_destroy();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>XSS LAB</title>
  </head>
  <body>
   
    <!-- Navbar -->
    <?php if($_SESSION["status_login_admin"] != "true") { ?>
    <div class="container atas">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    
                    <a class="navbar-brand" href="#">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav active ml-auto menu">
                        <li class="nav-item active">
                        <a class="nav-link ml-2" href="about.php">About</a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link ml-2" href="login.php" target="_blank">Login</a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link ml-2" href="register.php" target="_blank">Register</a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <?php if($_SESSION["status_login_admin"] == "true") { ?>
    <div class="container atas">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    

                    <a class="navbar-brand" href="#">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav active ml-auto menu">
                    <style>
                        .atas .btn {
                        font-weight: 600;
                        border-radius: 20px;
                        background-color: rgb(37, 106, 233);

                    }

                    .atas .btn:hover {
                        background-color:  rgb(106, 156, 250) !important;
                    }

                    </style>
                    <li class="nav-item active">
                        <a class="nav-link btn text-center" href="user/logout.php">Logout</a>
                    </li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <!-- Text tengah -->
    <div class="container tengah">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center text-white">XSS LAB</h1>
                <p class="text-center">Try your <span>XSS</span> Skills here and Capture the <span>Flags</span>.</p>
                <?php if($_SESSION["status_login_admin"] != "true") { ?>
                <a href="login.php" class="btn text-center">GET STARTED</a>
                <?php }elseif($_SESSION["status_login_admin"] == "true") { ?>
                <a href="user/dashboard.php" class="btn text-center">CHALLENGE</a>
                <?php } ?>
            </div>
        </div>
    </div>


    <!-- Bawah -->
        <div class="row footer">
            <div class="col text-center">
                <p>Created by Tunas Abdi Pranata XII-RPL</p>
            </div>
        </div>
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>