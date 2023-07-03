<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOTEL WILOW LAKE</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
        <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <!--//fonts-->
        <style>
               .logo {
                width: 15vh;
                height: 15vh;
            }
            .social-icons
            {
                padding-left:0;
                margin-bottom:0;
                list-style:none
            }
            .social-icons li
            {
                display:inline-block;
                margin-bottom:4px
            }
            .social-icons li.title
            {
                margin-right:15px;
                text-transform:uppercase;
                color:#96a2b2;
                font-weight:700;
                font-size:13px
            }
            .social-icons a{
                background-color:#eceeef;
                color:#818a91;
                font-size:16px;
                display:inline-block;
                line-height:44px;
                width:44px;
                height:44px;
                text-align:center;
                margin-right:8px;
                border-radius:100%;
                -webkit-transition:all .2s linear;
                -o-transition:all .2s linear;
                transition:all .2s linear
            }
            .social-icons a:active,.social-icons a:focus,.social-icons a:hover
            {
                color:#fff;
                background-color:#29aafe
            }
            .social-icons.size-sm a
            {
                line-height:34px;
                height:34px;
                width:34px;
                font-size:14px
            }
            .social-icons a.facebook:hover
            {
                background-color:#3b5998
            }
            .social-icons a.Instagram:hover
            {
                background-color:#ea4c89
            }
            .social-icons a.twitter:hover
            {
                background-color:#00aced
            }
            .social-icons a.linkedin:hover
            {
                background-color:#007bb6
            }
            .social-icons a.dribbble:hover
            {
                background-color:#ea4c89
            }
            @media (max-width:767px)
            {
                .social-icons li.title
                {
                    display:block;
                    margin-right:0;
                    font-weight:600
                }
            }
            .site-section{
                padding:4em 0;
            }

            /* .details{{
                background-color:grey !important;
            }} */

         

            .circle-border{
                border-radius: 50%;
            }

            a .fa-facebook-square.social-bordered, .fa-facebook-square.social-bordered{
                border-color: #3b5999;
                color: #3b5999;
                background-color: rgba(59,89,153,0);
                -webkit-transition: color .7s, background-color .7s;
                transition: color .7s, background-color .7s;
            }
            a .fa-facebook-square.social-bordered:hover, .fa-facebook-square.social-bordered:hover{
                color: #fff;
                background-color: #3b5999;
            }

            a .fa-github.social-bordered, .fa-github.social-bordered{
                border-color: #333;
                color: #333;
                background-color: rgba(59,89,153,0);
                -webkit-transition: color .7s, background-color .7s;
                transition: color .7s, background-color .7s;
            }
            a .fa-github.social-bordered:hover, .fa-github.social-bordered:hover{
                color: #fff;
                background-color: #333;
            }

            a .fa-linkedin.social-bordered, .fa-linkedin.social-bordered{
                border-color: #4078c0;
                color: #4078c0;
                background-color: rgba(59,89,153,0);
                -webkit-transition: color .7s, background-color .7s;
                transition: color .7s, background-color .7s;
            }
            a .fa-linkedin.social-bordered:hover, .fa-linkedin.social-bordered:hover{
                color: #fff;
                background-color: #4078c0;
            }
            
      
            
        </style>
    </head>
    <body>
        <!-- header -->
      
        <div class="w3_navigation">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img class="logo" src="images/Wilow lake.jpg" alt="Wilow Lake">
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--iris">
                            <ul class="nav navbar-nav menu__list">
                                <li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Home</a></li>
                                <li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
                               
                                <li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
                                <li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
                                <li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>

            </div>
        </div>
        <!-- //header -->
        <!-- banner -->
        <div id="home" class="w3ls-banner">
            <!-- banner-text -->
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">
                        <li>
                            <div class="w3layouts-banner-top">

                                <div class="container">
                                    <div class="agileits-banner-info">
                                        <h4>HOTEL WILOW LAKE</h4>
                                        <h3>We know what you love</h3>
                                        <p>Welcome to our hotels</p>
                                        <div class="agileits_w3layouts_more menu__item">
                                            <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top1">
                                <div class="container">
                                    <div class="agileits-banner-info">
                                        <h4>HOTEL WILOW LAKE</h4>
                                        <h3>Stay with friends & families</h3>
                                        <p>Come & enjoy precious moment with us</p>
                                        <div class="agileits_w3layouts_more menu__item">
                                            <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top2">
                                <div class="container">
                                    <div class="agileits-banner-info">
                                        <h4>HOTEL WILOW LAKE</h4>
                                        <h3>want luxurious vacation?</h3>
                                        <p>Get accommodation today</p>
                                        <div class="agileits_w3layouts_more menu__item">
                                            <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top3">
                                <div class="container">
                                    <div class="agileits-banner-info">
                                        <h4>HOTEL WILOW LAKE</h4>
                                        <h3>want luxurious vacation?</h3>
                                        <p>Get accommodation today</p>
                                        <div class="agileits_w3layouts_more menu__item">
                                            <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top4">
                                <div class="container">
                                    <div class="agileits-banner-info">
                                        <h4>HOTEL WILOW LAKE</h4>
                                        <h3>want luxurious vacation?</h3>
                                        <p>Get accommodation today</p>
                                        <div class="agileits_w3layouts_more menu__item">
                                            <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <!--banner Slider starts Here-->
            </div>
            <div class="thim-click-to-bottom">
                <a href="#about" class="scroll">
                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>	
        <!-- //banner --> 
        <!--//Header-->
        <!-- //Modal1 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <!-- Modal1 -->
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>HOTEL WILOW <span>LAKE</span></h4>
                        <img src="images/hotelfontend.jpg" alt=" " class="img-responsive">
                        <h5>We know what you love</h5>
                        <p>With its unparalleled amenities and breathtaking
                            vistas visible from every room, Willow Lake Hotel 
                            stands out as one of the finest establishments of its kind. 
                            Immerse yourself in our delectable food menu, experience our exceptional services,
                            and enjoy the warm hospitality of our friendly staff during your stay..</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Modal1 -->
       

        <!-- /about -->
        <div class="about-wthree" id="about">
            <div class="container">
                <div class="ab-w3l-spa">
                    <h3 class="title-w3-agileits title-black-wthree">About Our Hotel Wilow lake</h3> 
                    <p class="about-para-w3ls">Wilow Lake is hotel situated in Kurunegala.27 miles from Kandy Royal Botanic Gardens and 27 miles from Kandy City Center.
                        Offering top quality services that every customer deserves. We aim to focus on:

                    Core Values and Heritage
                    Diversity and Inclusion
                    Sustainability and Social Impact
                    
                        Our main goal is to provide the best experience to every customer and make their stay memorable. 
                    </p>
                    <img src="images/outdoor.jpg" class="img-responsive" alt="">
                    <div class="w3l-slider-img">
                        <img src="images/a1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="w3ls-info-about">
                        <h4>You'll adore the wide range of amenities we provide!</h4>
                        <p>Come with and enjoy. </p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //about -->
        <!--sevices-->
        <div class="advantages">
            <div class="container">
                <div class="advantages-main">
                    <h3 class="title-w3-agileits">Our Services</h3>
                    <div class="advantage-bottom">
                        <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
                            <div class="advantage-block ">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <h4>Stay First, Pay After! </h4>
                                
                                <p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>

                            </div>
                        </div>
                        <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
                            <div class="advantage-block">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h4>24 Hour Restaurant</h4>
                               
                                <p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
                                <p><i class="fa fa-check" aria-hidden="true"></i>24-hour Laundry and valet service</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//sevices-->
        <!-- team -->
        
        
       
        <!-- //team -->
        <!-- Gallery -->
        <section class="portfolio-w3ls" id="gallery">
            <h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
                    <div class="textbox">
                        <h4>HOTEL WILOW LAKE</h4>
                        <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="clearfix"> </div>
        </section>
        <!-- //gallery -->
        <!-- rooms & rates -->
        <section class="page-section">
        </section>
	<div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                	<?php 
                	include'db.php';
                	$qry = $con->query("SELECT * FROM  room_categories order by rand() ");
                	while($row = $qry->fetch_assoc()):
                	?>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="#">
                            <img class="img-fluid" src="assets/img/<?php echo $row['cover_img'] ?>" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-30"><?php echo "$ ".number_format($row['price'],2) ?> per day</div>
                                <div class="project-name"><?php echo $row['name'] ?></div>
                            </div>
                        </a>
                    </div>
                	<?php endwhile; ?>

                </div>
            </div>
        </div>
        
        <div class="plans-section" id="rooms">
            <div class="container">
                <h3 class="title-w3-agileits title-black-wthree">Rooms</h3>
                <div class="priceing-table-main">
                     <div class="col-md-3 price-grid ">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="images/Rooms/simpleroom.jpeg" alt=" " class="img-responsive" />
                                <h4> Simple Room</h4>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                       <h3 class="align-top">Rs.15000</h3> 
                                        per night,1person
                                    </ul>
                                </div>
                                <div class="price-selet">
                                   
                                    <a href="admin/reservation.php" >Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 price-grid ">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="images/Rooms/deluxroom.jpeg" alt=" " class="img-responsive" />
                                <h4>Deluxroom Room</h4>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                       <h3 class="align-top">Rs.20000</h3> 
                                        per night,1person
                                    </ul>
                                </div>
                                <div class="price-selet">
                                   
                                    <a href="admin/reservation.php" >Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3 price-grid ">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="images/Rooms/double.jpg" alt=" " class="img-responsive" />
                                <h4>Double Room </h4>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                       <h3 class="align-top">Rs.22000</h3> 
                                        per night,2person
                                    </ul>
                                </div>
                                <div class="price-selet">
                                   
                                    <a href="admin/reservation.php" >Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3 price-grid ">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="images/Rooms/simpleroom.jpeg" alt=" " class="img-responsive" />
                                <h4> Simple Room</h4>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                       <h3 class="align-top">Rs.15000</h3> 
                                        per night,1person
                                    </ul>
                                </div>
                                <div class="price-selet">
                                   
                                    <a href="admin/reservation.php" >Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--// rooms & rates -->
        <!-- visitors -->
       
        <!-- visitors -->
        <!-- contact -->
        <section class="contact-w3ls" id="contact">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                    <div class="contact-agileits">
                        <h4>Contact Us</h4>
                        <p class="contact-agile2">Sign Up For Our News Letters</p>
                        <form  method="post" name="sentMessage" id="contactForm" >
                            <div class="control-group form-group">

                                <label class="contact-p1">Full Name:</label>
                                <input type="text" class="form-control" name="name" id="name" required >
                                <p class="help-block"></p>

                            </div>	
                            <div class="control-group form-group">

                                <label class="contact-p1">Phone Number:</label>
                                <input type="tel" class="form-control" name="phone" id="phone" required >
                                <p class="help-block"></p>

                            </div>
                            <div class="control-group form-group">

                                <label class="contact-p1">Email Address:</label>
                                <input type="email" class="form-control" name="email" id="email" required >
                                <p class="help-block"></p>

                            </div>


                            <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
                        </form>
                        <?php
                        if (isset($_POST['sub'])) {
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $approval = "Not Allowed";
                            $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')";


                            if (mysqli_query($con, $sql))
                                echo"OK";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                    <h4>Connect With Us</h4>
                    <p class="contact-agile1"><strong>Phone :</strong>077 759 6666</p>
                    <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">wilowlake@gmail.com</a></p>
                    <p class="contact-agile1"><strong>Address :</strong> 208 S Lake Rd,Mawathagama,Kurunegala.</p>

                    
                
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li> 

                        </ul>
                    
                   <iframe class="w-100 " height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.7443621785214!2d80.35576247476281!3d7.493451992518787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae33a0496c94389%3A0xa1ff72b86d0480d7!2sHotel%20Willow%20Lake!5e0!3m2!1sen!2slk!4v1685967370605!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        <!-- /contact -->
        <div class="copy">
            <p>Copyright &copy; 2023 All Rights Reserved by SKdeveloper</p>
        </div>
        <!--/footer -->
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- contact form -->
        <script src="js/jqBootstrapValidation.js"></script>

        <!-- /contact form -->	
        <!-- Calendar -->
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
            });
        </script>
        <!-- //Calendar -->
        <!-- gallery popup -->
        <link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        <!-- //gallery popup -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <!-- flexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
        <!--search-bar-->
        <script src="js/main.js"></script>	
        <!--//search-bar-->
        <!--tabs-->
        <script src="js/easy-responsive-tabs.js"></script>
        <script>
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    closed: 'accordion', // Start closed if in accordion view
                    activate: function (event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
                $('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
        </script>
        <!--//tabs-->
        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>

        <div class="arr-w3ls">
            <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
        <!-- //smooth scrolling -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>
