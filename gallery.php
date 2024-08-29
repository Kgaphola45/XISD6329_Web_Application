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

<div class="container gallery-container">
    <h1 class="text-center mb-5">Welcome to Our Gallery</h1>

    <p class="gallery-caption">
        Explore the heart and soul of our old age home through our gallery. Here, 
        you'll find a collection of photos that capture the vibrant daily life, special events, and warm moments shared within our community. 
        From engaging activities and joyous celebrations to serene spaces and heartfelt connections, our gallery offers a glimpse into the enriching environment we provide for our residents. 
        We invite you to browse and see for yourself the nurturing and supportive atmosphere that defines our home.
    </p>

    <div class="row">
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/5a74741ccd2447ef881be5f0493d124d.jpg" alt="Gallery Image 1">
            <div class="gallery-caption">Our cozy chill spot is the perfect place for residents to relax and unwind. Comfortable seating and a warm atmosphere make this the ideal place for a quiet afternoon.</div>
        </div>
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/Makapanstad-CSI-1.jpg" alt="Gallery Image 2">
            <div class="gallery-caption">At Golden Years Old Age Home, we strive to keep our residents smiling every day. Our dedicated staff and engaging activities ensure that there's always a reason to smile.</div>
        </div>
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/img-2625.jpg" alt="Gallery Image 3">
            <div class="gallery-caption">Residents enjoy a variety of engaging activities to stay active and socialize. Weekly arts and crafts sessions to foster creativity and fun.</div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/home-about-us.jpg" alt="Gallery Image 4">
            <div class="gallery-caption">Round-the-clock medical care ensures our residents' health and well-being. Our skilled medical staff are always available to provide the best care</div>
        </div>
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/frail-care-homes-for-sassa-pensioners.jpeg" alt="Gallery Image 5">
            <div class="gallery-caption">Our cozy and fully furnished living spaces offer a home-like environment for our residents.</div>
        </div>
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/72744464_2581755218514595_308585926974504960_n.jpg" alt="Gallery Image 6">
            <div class="gallery-caption">Ensuring cleanliness and comfort, our staff takes special care in washing residents' feet. Foot care is an essential part of our health and wellness services.</div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

 <!-- Site footer -->
 <footer class="site-footer">
  <div class="container"><hr class="hr">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>About Us</h6>
        <p class="text-justify">Our old age home provides compassionate care and support for seniors. Our dedicated staff ensures a comfortable living environment with medical attention, recreational activities, and personalized care plans. We aim to enhance the quality of life for our residents through professional and heartfelt service.</p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Services</h6>
        <ul class="footer-links">
          <li><a href="#">Medical Care</a></li>
          <li><a href="#">Daily Assistance</a></li>
          <li><a href="#">Recreational Activities</a></li>
          <li><a href="#">Nutrition and Meals</a></li>
          <li><a href="#">Family Support</a></li>
          <li><a href="#">Safety and Security</a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Quick Links</h6>
        <ul class="footer-links">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Visit Us</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by 
         <a href="#">Our Old Age Home</a>.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</html>
