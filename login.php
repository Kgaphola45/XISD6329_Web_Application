<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Golden Years Old Age Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>
        .form-control {
            border-radius: 0.75rem;
        }
        .welcome-section {
            text-align: center;
            margin-top: 50px;
            color: white;
        }
        .services-section, .contact-section {
            margin-top: 50px;
            margin-left: auto; 
            margin-right: auto; 
            max-width: 1200px; 
            text-align: center;
            color: white;
        }
        .services-section img, .welcome-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
 
        h3 {
            text-align: center;
            margin-bottom: 30px;
        }
     
    </style>



    <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
                document.getElementById('message').style.color = '#5dd05d';
                document.getElementById('message').innerHTML = 'Matched';
            } else {
                document.getElementById('message').style.color = '#aa4f4f';
                document.getElementById('message').innerHTML = 'Not Matching';
            }
        }

        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
                alert("Password must be at least 6 characters long. Try again!");
                return false;
            }
            return true; 
        }
    </script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #007bff;">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px; margin-left:-65px; font-family: 'IBM Plex Sans', sans-serif;">
            <h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Golden Years Old Age Home</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link js-scroll-trigger" href="index.php" style="color: white; font-family: 'IBM Plex Sans', sans-serif;">
                        <h6>HOME</h6>
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link js-scroll-trigger" href="index1.php" style="color: white; font-family: 'IBM Plex Sans', sans-serif;">
                        <h6>SIGN UP</h6>
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link js-scroll-trigger" href="services.html" style="color: white; font-family: 'IBM Plex Sans', sans-serif;">
                        <h6>ABOUT US</h6>
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 20px;">
                    <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white; font-family: 'IBM Plex Sans', sans-serif;">
                        <h6>CONTACT</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="gallery.php" style="color: white; font-family: 'IBM Plex Sans', sans-serif;">
                        <h6>GALLERY</h6>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">

        

         <div class="col-md-7" style="padding-left: 180px; ">
                 <div style="-webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;">
          <img src="images/ambulance1.png" alt="" style="width: 20%;padding-left: 40px;margin-top: 150px;margin-left: 45px;margin-bottom:15px">
      </div>

      <div style="color: white;">
            <h4 style="font-family: 'IBM Plex Sans', sans-serif;"> </h4>
          </div>

         </div>

         <div class="col-md-4" style="margin-top: 5%;right: 8%">
          <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="card-body">
              <center>
                <i class="fa fa-hospital-o fa-3x" aria-hidden="true" style="color:#0062cc"></i>
                <br>
              <h3 style="margin-top: 10%">Elder Login</h3><br>
              <form class="form-group" method="POST" action="elder_login.php">
                <div class="row" style="margin-top: 10%">
                  <div class="col-md-4"><label>Elder ID: </label></div>
                  <div class="col-md-8"><input type="text" name="elder_id" class="form-control" placeholder="Enter Elder ID" required/></div><br><br>
                  <div class="col-md-4" style="margin-top: 8%"><label>Password: </label></div>
                  <div class="col-md-8" style="margin-top: 8%"><input type="password" class="form-control" name="password" placeholder="Enter password" required/></div><br><br><br>
                </div>
                <div class="row">
                 <div class="col-md-4"  style="padding-left: 160px;margin-top: 10%">
                    <center><input type="submit" id="inputbtn" name="elder_login" value="Login" class="btn btn-primary"></center></div>
                </div>
              </form>
            </center>
            </div>
          </div>
        </div>


      </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>