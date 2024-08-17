<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Years Old Age Home - Gallery</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
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
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="#">Golden Years Old Age Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="gallery.php">Gallery <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container gallery-container">
    <h1 class="text-center mb-5">Gallery</h1>

    <div class="row">
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/5a74741ccd2447ef881be5f0493d124d.jpg" alt="Gallery Image 1">
            <div class="gallery-caption">Image 1</div>
        </div>
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/Makapanstad-CSI-1.jpg" alt="Gallery Image 2">
            <div class="gallery-caption">Image 2</div>
        </div>
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/img-2625.jpg" alt="Gallery Image 3">
            <div class="gallery-caption">Image 3</div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/home-about-us.jpg" alt="Gallery Image 4">
            <div class="gallery-caption">Image 4</div>
        </div>
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/frail-care-homes-for-sassa-pensioners.jpeg" alt="Gallery Image 5">
            <div class="gallery-caption">Image 5</div>
        </div>
        <div class="col-md-4 gallery-item">
            <img src="images/Gallery/72744464_2581755218514595_308585926974504960_n.jpg" alt="Gallery Image 6">
            <div class="gallery-caption">Image 6</div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
