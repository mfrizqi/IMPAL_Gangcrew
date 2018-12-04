<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coral - Luxurious Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Cozy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="room.html">Rooms</a>
                  <a class="dropdown-item" href="room.html">Superior Room Twin</a>
                  <a class="dropdown-item" href="room.html">Premier Suite</a>
                  <a class="dropdown-item" href="room.html">Family Room</a>
                </div>
            </li>
            <li class="nav-item"><a href="dining-bar.html" class="nav-link">Dining &amp; Bar</a></li>
            <li class="nav-item"><a href="amenities.html" class="nav-link">Amenities</a></li>
            <li class="nav-item"><a href="reservation.html" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

      <div style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3)), url('image/bg_6.jpg');background-size: cover; height: 100vh">
        <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-sm-12 ftco-animate text-center">
              <h1 class="mb-4 mt-4 text-center" style="color: white">Choose your great time with your family</h1>
              <button class="btn btn-primary btn-outline-white px-4 py-3 mt-5" onclick="scDown()" style="transform: rotate(90deg); border: 2px solid white !important; border-radius: 50px"><span class="ion-ios-arrow-forward ml-3 mr-3"></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="check-reserve" style="background-color: #ff6138">
          <div class="container mr-md-3 mr-0" style="color: #FFF">
              <div class="row justify-content-center mr-0">
                <div class="col-lg-12 col-md-12 p-md-5">
                  <div class="block-17">
                    <!-- <form action="" method="post" class="d-block">
                      <div class="fields d-block">
                        <div class="book-date one-third">
                          <label for="check-in">Check in:</label>
                          <input type="text" id="checkin_date" class="form-control" placeholder="M/D/YYYY">
                        </div>
      
                        <div class="book-date one-third">
                          <label for="check-out">Check out:</label>
                          <input type="text" id="checkout_date" class="form-control" placeholder="M/D/YYYY">
                        </div>
      
                        <div class="one-third">
                          <label for="Guest">Guest:</label>
                          <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4+</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <input type="submit" class="search-submit btn btn-primary" value="Check Availability">  
                    </form> -->
                    <form>
                        <div class="form-row">
                          <div class="form-group col-md-3">
                              <div class="book-date one-third">
                                  <label for="check-in">Check in:</label>
                                  <input type="text" id="checkin_date" class="form-control" placeholder="M/D/YYYY" style="border-radius: 4px; border: 2px solid #ff6138">
                                </div>
                          </div>
                          <div class="form-group col-md-3">
                              <div class="book-date one-third">
                                  <label for="check-out">Check out:</label>
                                  <input type="text" id="checkout_date" class="form-control" placeholder="M/D/YYYY" style="border-radius: 4px; border: 2px solid #ff6138">
                                </div>
                          </div>
                          <div class="form-group col-md-3">
                              <label for="inputZip">Person</label>
                              <div class="select-wrap">
                                  <select name="" id="" class="form-control" style="border-radius: 4px; border: 2px solid #ff6138">
                                      <option value="">1</option>
                                      <option value="">2</option>
                                      <option value="">3</option>
                                      <option value="">4+</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group col-md-3">
                              <!-- <label for="inputZip" style="opacity: 0;">Zip</label>
                              <button type="submit" class="btn btn-primary w-100">Check Availability</button> -->
                              <label for="inputZip" style="opacity: 0;">Zip</label>
                              <input type="submit" class="check-submit btn btn-outline-white" value="Check Availability">  
                            </div>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
      </div>

      
    <section class="ftco-section room-section bg-light" >
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate" id="listRoom">
            <span class="subheading" >Our Rooms</span>
            <h2>Explore our rooms</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(image/room-1.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3><a href="#">Luxury Room</a></h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(image/room-2.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3><a href="#">Family Room</a></h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(image/room-3.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3><a href="#">Deluxe Room</a></h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Cozy</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Opening Hours</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Monday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Tuesday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Wednesday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Thursday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Friday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Saturday: <span>08: - 22:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Sunday: <span>08: - 22:00</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <span class="icon icon-paper-plane"></span>
                  <input type="text" class="form-control" placeholder="Subscribe">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script>

  function scDown(){
    $('html, body').animate({
                    scrollTop: $("#listRoom").offset().top
                }, 1600);
  }

    </script>
    
  </body>
</html>