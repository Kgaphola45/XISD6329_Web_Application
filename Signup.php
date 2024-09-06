<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Years Old Age Home - Gallery</title>
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
         .gallery-item img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .gallery-item:hover img {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .gallery-caption {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            color: #f0f0f0;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }
        .gallery-item:hover .gallery-caption {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        body {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            background-size: cover;
            color: white;
        }
        .navbar {
            background-color: transparent;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: white;
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: rgba(255,255,255,.5);
        }
        .gallery-container {
            padding: 20px;
        }
        .gallery-item {
            margin-bottom: 30px;
        }
        .gallery-item img {
            width: 100%;
            border-radius: 10px;
        }
        .gallery-caption {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            opacity: 0.8;
            transition: opacity 0.3s ease-in-out;
        }
    </style>
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
                <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link js-scroll-trigger" href="index.php" style="color: white; font-family: 'IBM Plex Sans', sans-serif;">
                        <h6>HOME</h6>
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link js-scroll-trigger" href="services.html" style="color: white; font-family: 'IBM Plex Sans', sans-serif;">
                        <h6>ABOUT US</h6>
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link js-scroll-trigger" href="signup.php" style="color: white; font-family: 'IBM Plex Sans', sans-serif;">
                        <h6>SIGN UP</h6>
                    </a>
                </li>
                <li class="nav-item">
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