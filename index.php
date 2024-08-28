<html>
<head>
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

<div class="container welcome-section">
   
    
    <img src="images/logo/logo.png" alt="Welcome to Golden Years Old Age Home" width="300" height="200">
    <h1>Welcome to Golden Years Old Age Home</h1>
    <p>Your comfort and well-being are our top priorities. At Golden Years, we provide a safe and nurturing environment where our residents can enjoy their golden years with dignity and respect.</p>
</div>



<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
    <div class="row">
        <div class="col-md-3 register-left" style="margin-top: 10%; right: 5%">
            <img src="images/logo/logo.png" alt=""/>
            <h3>Golden Years Old Age Home</h3>
        </div>
        <div class="col-md-9 register-right" style="margin-top: 40px; left: 80px;">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Elders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Caregiver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Receptionist</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <h3 class="register-heading">Register as Elders: </h3>
                    
                    <method="post" action="func2.php">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" name="fname" onkeydown="return alphaOnly(event);" required/>
                                </div>


                               


                                <div class="form-group">
                                    <input type="ElderID" minlength="13" maxlength="14" class="form-control" placeholder="Enter Elder ID number *" name="ElderID" onkeyup='check();' required/>
                                </div>
                                 


                                <div class="form-group">
                                    <input type="Allergies" class="form-control" placeholder="what Allergies does elder have *" name="Allergies" onkeyup='check();' required/>
                                </div>


                                <div class="form-group">
                                    <input type="mobility" class="form-control" placeholder=" mobility used 'eg walker, wheelchair' *" name="Allergies" onkeyup='check();' required/>
                                </div>


                               
                                <div class="form-group">
                                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password *" name="cpassword" onkeyup='check();' required/>
                                    <span id='message'></span>
                                </div>
                              
                                 




                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="Male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="Female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
                                   
                                </div>
                            </div> 



                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                </div>
                                 
                               <div class="form-group">
                               <input type="text" class="form-control" placeholder="Relation to elderly *" name="relation" required/>
                                </div>
                    

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email" />
                                </div>

                                <div class="form-group">
                                    <input type="Medication"  class="form-control" placeholder="List current Medications*" name="Medication" onkeyup='check();' required/>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                   
                               </div>   
</div>
                         

                         <h3>Who's Registering for Elder: </h3>
  

                         <div class="col-md-6">  
                          <div class="form-group">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name *" name="first_name" onkeydown="return alphaOnly(event);" required/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name *" name="last_name" onkeydown="return alphaOnly(event);" required/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter ID number *" name="IDNumber" onkeyup="check();" required/>
                    </div>
 </div>
                  
 
 </div> 
 
                  <div class="col-md-6">  
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Relation to elderly *" name="relation" required/>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <input type="tel" class="form-control" minlength="10" maxlength="10" name="contact2" placeholder="Your Phone number *" required/>
                    </div>
              
 
                   <div class="form-group">
                        <input type="tel" class="form-control" minlength="10" maxlength="10" name="emerPhone" placeholder="Emergency Number *"/>
                    </div>

                      </div> 
 
                   
                 
                   
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender2" value="Male" checked>
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender2" value="Female">
                            <label class="form-check-label">Female</label>
                        </div>
                        
                        <a href="index1.php">Already have an account?</a>
                       
                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                      
               </div>
              
        </div> 
    </div>
</form>




                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Login as Caregiver</h3>
                    <form method="post" action="func1.php">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                </div>
                                <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Login as Admin</h3>
                    <form method="post" action="func3.php">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                </div>
                                <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
        .hr {
            border: 55;
            height: 2px;
            background: #333; /* Dark gray color for the line */
            margin: 20px 0; /* Spacing around the line */
        }
    </style>

<div class="container services-section">
    <h2>Our Services</h2>
    <div class="row">
        <div class="col-md-4">
            <h4>24/7 Cozy Chill Spot</h4>
            <p>Our cozy chill spot provides residents with a tranquil environment to relax and socialize. Outfitted with comfortable seating and a warm ambiance, this area is perfect for reading, chatting, or simply unwinding. The space encourages a sense of community and offers a peaceful retreat where residents can enjoy quiet moments. Soft lighting, plush cushions, and gentle background music enhance the soothing atmosphere. The chill spot is a testament to our commitment to creating a homely and comfortable living space for all our residents.</p>
            <img src="images/Home/pngwing.com (2).png" alt="24/7 Medical Care"><hr class="hr">
        </div>
        <div class="col-md-4">
            <h4> Why Choose Us?</h4>
            <p>Choosing Golden Years Old Age Home means opting for excellence in elderly care. Our experienced team is dedicated to providing personalized care tailored to each resident’s needs. We prioritize health, happiness, and well-being, ensuring a positive and fulfilling experience. With us, your loved ones will enjoy their golden years with dignity and joy.  Our facility is designed to offer a home-like atmosphere with professional care and comfort. Our dedicated staff ensures that every resident feels valued and well-cared for, making their golden years truly special.</p>
            <img src="images/Home/pngwing.com (1).png" alt="Comfortable Living"><hr class="hr">
        </div>

        <div class="col-md-4">
            <h4>Our Services</h4>
            <p>At Golden Years Old Age Home, we offer a comprehensive range of services to meet the diverse needs of our residents. Our 24/7 medical care ensures that help is always available. We provide comfortable living spaces that feel like home, complete with amenities to enhance quality of life. Additionally, our recreational activities keep residents active, engaged, and socially connected. Our wide range of activities ensures our residents stay active and engaged, fostering a sense of community.</p>
            <img src="images/Home/pngwing.com.png" alt="Recreational Activities"><hr class="hr">
        </div>
    </div>
</div>





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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
