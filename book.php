<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
   <title>Shabach Gardens - AirBnB & Rentals</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon-01.png">


    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                     <a href="mailto:info@solrealestate.co.ke">info@solrealestate.co.ke</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+254 792 945 9999">+254 792 945 9999</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                   <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" width="300px"  alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                             <ul>
                                <li><a href="index.php">Home</a></li>
                              
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="listings.html">Properties</a></li>
                                <li><a href="blog.html">Blog</a></li>
                        
                                <li><a href="contact.html">Contact</a></li>
                                  <li><a href="#">Signup</a>
                                    <ul class="dropdown">
                                        <li><a href="https://lon106.truehost.cloud:2096/"><b style="color: red">Mails</b></a></li>
                                        <li><a href="login/login.html">Login</a></li> 
                                    </ul>
                                </li>
                                 <li><a href="book.php" class="btn btn-warning" data-wow-delay="500ms">Book</a></li>
                                     
                            </ul>

                            <!-- Search Form -->
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Search Button -->
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/header-01.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- <h3 class="breadcumb-title">Property</h3> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->



       <!-- ##### Meet The Team Area Start ##### -->
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                       <h1 class="well"><strong>BOOKING FORM</strong></h1>
                        <p>Fill Details Below.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                  <!-- form start -->

                        <div class="col-12">
    
  <div class="col-lg-12 well">
  <div class="row">
   
        <form action="data.php" method="POST">
          <div class="col-sm-12">
              <div class="row">
              <div class="col-sm-6 form-group">
                <label>First Name</label>
                <input type="text"  placeholder="Enter First Name Here.." name="fname" class="form-control">
              </div>  

              <div class="col-sm-6 form-group">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Enter Last Name Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Tel No</label>
                <input type="text"  placeholder="Enter Tel Name Here.." name="tel" class="form-control">
              </div>  

              <div class="col-sm-6 form-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter Email Here.." class="form-control">
              </div>    
            </div>

            <div class="row">
                <div class="col-sm-6 form-group">
                <label>Kind of House</label>
                <select  name="kind"  class="form-control">
                <option selected>-- Select --</option>
                <option value="Rental">Rental</option>
                <option value="AirBnB">AirBnB</option>
              </select>
              </div>
                   <div class="col-sm-6 form-group">
                <label>No of Bedrooms</label>
                <select  name="bedroom"  class="form-control">
                <option selected>-- Select --</option>
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Three">THree</option>
                <option value="Others">Others</option>
              </select>
              </div>
          </div>
          

        
            <div class="form-group">
              <label>Address</label>
              <textarea placeholder="Enter Address" name="address" rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Town</label>
                <input type="text"  placeholder="Enter Town Name" name="town" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>County</label>
                <input type="text" name="county" placeholder="Enter County"  class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Postal Code</label>
                <input type="text" name="postal" placeholder="Enter Postal" class="form-control">
              </div>    
            </div>
              <div class="row">
              <div class="col-sm-6 form-group">
                <label>Gender</label>
                <select  name="gender"  class="form-control">
                <option selected>-- Select --</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
              </div>
               <div class="col-sm-6 form-group">
                <label>No of People</label>
                <select  name="people"  class="form-control">
                <option selected>-- Select --</option>
                <option value="One">One</option>
                <option value="two">Two</option>
                <option value="Three">Three</option>
                <option value="More Than Three">More than Three</option>
              </select>
              </div>  
            </div>

              <div class="row">
              <div class="col-sm-6 form-group">
                <label>From:</label>
                <input type="date"  placeholder="Date From.." name="date1" class="form-control">
              </div>  

              <div class="col-sm-6 form-group">
                <label>To:</label>
                <input type="date" name="date2" placeholder="Date To.." class="form-control">
              </div>    
            </div>


            <div class="form-group">
              <label>Additional Information</label>
              <textarea placeholder="Enter information Here.." name="additional" rows="3" class="form-control"></textarea>
            </div> 
                <div class="form-group">
                <label>House Name</label>
                <select  name="housename"  class="form-control">
                <option selected>-- Select --</option>
                <option value="TOWDAH">TOWDAH</option>
                <option value="YADAH">YADAH</option>
                <option value="KIFARU">KIFARU</option>
                <option value="NYATI">NYATI</option>
                <option value="SIMBA">SIMBA</option>
                <option value="NDOVU">NDOVU</option>


              </select>
              </div>  
            <button type="submit" name="submit" class="btn btn-lg btn-info" data-toggle="modal" data-target="#exampleModal">Submit</button> 
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Successful !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Booking Successful !!
        Thank for booking with Shabach Gardens. You Invoice successful downloaded in your machine. Check your email for more information. Thank you. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="book.php">Close</a> </button>
       
      </div>
    </div>
  </div>
</div>  
              
          </div>
        </form></div></div></div>

                        <!-- form end -->   
                <!-- Single Team Member -->
               
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->


 
    <!-- ##### Footer Area Start ##### -->
  <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>
                            <p align="justify">At Sol Real Estate, you are number one. Whether you are a property owner, tenant or buyer, We value your business and we will provide you with individual attention and service you deserve. We believe a strict code of ethics. We believe in integrity, commitment to excellence, a professional attitude and professional care... <a href="about-us.html"> <b style="color: green">Read More</b> </a></p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +254 792 945 999</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> info@solrealestate.co.ke</h6>
                                <h6><img src="img/icons/location.png" alt=""> Main Str. no 45-46, Village Market, Nairobi - Kenya</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Listings</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Elements</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Featured Properties</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed  by <a href="https://www.softwaretechnologykenya.co.ke" target="_blank">Software Technology Kenya</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>
