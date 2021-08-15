<html>
    <head>
        <title> Vehicle Rental Website </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!Navigation bar>
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-logo" href="#"><img src="logo1.png"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME </a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="loginfirst.php">QUICK BOOKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#packages">PACKAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT US</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>
            </ul>
            </div>
            </nav>
        </section>
        <!Navigation bar end>
        
        <!Slideshow>
        <div id="slider">
            <div id="headerSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="headerSlider" data-slide-to="0" class="active"></li>
            <li data-target="#headerSlider" data-slide-to="1"></li>
            <li data-target="#headerSlider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="slide/slide1.jpg" class="d-block img-fluid" alt="First slide">
                <div class="carousel-caption">
                    <h5></h5>
                </div>
            </div>
            <div class="carousel-item">
              <img src="slide/slide2.jpg" class="d-block img-fluid" alt="Second slide">
                 <div class="carousel-caption">
                    <h5></h5>
                </div>
            </div>
            <div class="carousel-item">
              <img src="slide/slide3.jpg" class="d-block img-fluid" alt="Third slide">
                 <div class="carousel-caption">
                    <h5></h5>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
        <!Slideshow end>
        
        <!About>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>About Us</h2>
                        <div class="about-content">
                            We are a 100% independently-owned website, not run by any auto rental company.We launched Gudnite rentals in 2012 with an ambitious vision: to make booking an auto rental simple, fast and easy. We've continued to improve and invest in our service to help you save time and money. 
                        </div>
                        <button type="button" class="btn btn-primary"> Read more>> </button>
                    </div>
                    <div class="col-md-6"> 
                        <div class="about-logo">
                        <img class="img" src="logo1.png" alt="about logo"> 
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
        <!About end>
        <!Services>
        <section id="services">
            <div class="container">
                <h1>Our Services</h1>
                <div class="row services">
                    <div class="col-md-3 text-center">
                    <div class="icon" >
                        <img class="rounded-circle" src="Services/Service1.png" alt="service 1">
                    </div>
                        <h3>Airport Drops & Pickups</h3>
                        <p>Airport pick up and drop offers. We are the cheapest rental service in Sri Lanka.</p>
                    </div>
                    <div class="col-md-3 text-center">
                    <div class="icon" >
                        <img class="rounded-circle" src="Services/Service2.png" alt="service 2">
                    </div>
                        <h3>Tourism in Sri Lanka</h3>
                        <p>For you who wish to tour Sri Lanka leisurely and your own way.</p>
                    </div>
                     <div class="col-md-3 text-center">
                     
                    <div class="icon" >
                        <img class="rounded-circle" src="Services/Service3.png" alt="service 3">
                    </div>
                        <h3>Special Holiday Packages</h3>
                        <p>Gudnite rentals gives you special holiday packages for visitors.</p>
                    </div>
                    <div class="col-md-3 text-center">
                    <div class="icon" >
                        <img class="rounded-circle" src="Services/Service4.png" alt="service 4">
                    </div>
                        <h3>Private Tours in Country</h3>
                        <p>We will take you to any location in Sri Lanka, book now.</p>
                    </div>
                    </div>    
                </div>
        </section>
        <!Services end>
        <!Packages>
        <section id="packages">
            <div class="container">
                <h1>Special Packages</h1>
                <div class="row">
                <div class="col-md-3">
                <div class="single-package">
                <div class="package-head">
                    <h2>ZIP Intercity</h2>
                    <p>LKR100/<span>km</span></p>
                </div>
                    <div class="package-content">
                        <p>
                        This package includes economy cars such as Alto,Wagon-R,Estilo,Specia and Kwid.
                        </p>
                    </div>
                    <div class="package-button">
                        <a class="package-btn" href="#">Select Package</a>
                    </div>
                </div>    
                </div>
                     <div class="col-md-3">
                <div class="single-package">
                <div class="package-head">
                    <h2>Premier Intercity</h2>
                    <p>LKR250/<span>km</span></p>
                </div>
                    <div class="package-content">
                        <p>
                        This package includes luxury vehicles such as Axio,Premier,KDH vans and SUVs.
                        </p>
                    </div>
                    <div class="package-button">
                        <a class="package-btn" href="#">Select Package</a>
                    </div>
                </div>    
                </div>
                     <div class="col-md-3">
                <div class="single-package">
                <div class="package-head">
                    <h2>Light Weight</h2>
                    <p>LKR250/<span>km</span></p>
                </div>
                    <div class="package-content">
                        <p>
                        This package is for the transportation of light weight goods such as household furniture.         </p>
                    </div>
                    <div class="package-button">
                        <a class="package-btn" href="#">Select Package</a>
                    </div>
                </div>    
                </div>
                     <div class="col-md-3">
                <div class="single-package">
                <div class="package-head">
                    <h2>Heavy Weight</h2>
                    <p>LKR500/<span>km</span></p>
                </div>
                    <div class="package-content">
                        <p>
                        This package is mainly focused on the business transportations that weights more than 2 tons.
                        </p>
                    </div>
                    <div class="package-button">
                        <a class="package-btn" href="#">Select Package</a>
                    </div>
                </div>    
                </div>
                </div>
            </div>
        </section>
        
        
<!Banner>
        
        <section id="banner">
            <div class="container">
                <p>Travel With The Most Reliable Vehicle Renter in Sri Lanka</p>
            </div>
        </section>
        
<!Banner end>
<!Get in touch>
        <section id="contact">
            <div class="container">
            <h1>Get In Touch</h1>
            <div class="row">
            <div class="col-md-6">
            <form class="contact-form" action="message.php" method="post">
                <div class="form-group">

                <input type="text" class="form-control" name="name" placeholder="Your Name">        
                </div>
                <div class="form-group">
                
                <input type="number" class="form-control" name="mobile" placeholder="Mobile No.">        
                </div>
                <div class="form-group">
                
                <input type="email" class="form-control" name="email" placeholder="E-mail">        
                </div>
                <div class="form-group">
                
                <textarea class="form-control" rows="4" name="message" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
            </form>
            </div>
                <div class="col-md-6 contact-info">
                <div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i>
                No.3, Dikkumbura rd, Habaraduwa</div>
            
                 
                <div class="follow"><b>Telephone:</b><i class="fa fa-phone"></i>
                091 490 8900 </div>
            
                <div class="follow"><b>E-mail:</b><i class="fa fa-envelope-o"></i>
                gudnite.rentals@gmail.com</div>
                
         
                <div class="follow"><lebel><b>Get Social:</b></lebel>
                    <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
                    <a href="https://accounts.google.com/ServiceLogin/signinchooser?hl=si&passive=true&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dgmail%26rlz%3D1C1CHBD_enLK846LK854%26oq%3Dgm%26aqs%3Dchrome.1.69i57j0l5.3365j0j7%26sourceid%3Dchrome%26ie%3DUTF-8&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa fa-google-plus"></i></a>
                </div>
                </div>
            </div>
            </div>
        </section>
<!Get in touch end>
        
<!Footer>
        <section id="footer">
        <div class="container text-center">
            <p>Gudnite Rentals © 2019</p>
        </div>
        </section>
<!Footer end>
        
        <script src="js/smooth-scroll.js"></script>
        <script>
	    var scroll = new SmoothScroll('a[href*="#"]');
        </script>
        
        
        
        
        
        
        
        
    </body>
</html>