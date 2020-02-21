﻿<?php 
include 'dbconnection01.php';
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from designarc.biz/demos/hilltown/theme/activities.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Dec 2019 12:46:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>HillTown Resort</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!--Start of CSS portion of header-->
    <style type="text/css">
        .h_middle_text2 {
            font-family: "Montserrat", sans-serif;
            font-size: 25px;
            font-weight: bold;
            margin-top: 15px;
            /*letter-spacing: .96px;*/
            text-transform: uppercase;
            padding-bottom: 15px;
            position: relative;
        }

            .h_middle_text2 h3 {
                color: #ffb606;
                letter-spacing: 3.3px;
            }

            .h_middle_text2 h5 {
                color: #ffb606;
            }

        #H {
            font-size: 35px;
        }
    </style>



    <!--End of CSS portion of header-->
    </head>
    <body>

        <!--================Header Area =================-->
        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top">
                <div class="container">
                    <div class="header_top_inner">
                        <div class="pull-left">
                            <a href="#" style="margin-right: 720px;"><i class="fa fa-phone"></i>+ (1800) 456 7890</a>
                            <a href="#"><i class="fa fa-envelope-o"></i>hostelmanagement01@gmail.com</a>

                        </div>
                        <!-- <div class="pull-right">


                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                    </div> -->
                    </div>
                </div>
            </div>
            <div class="header_menu">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <div class="h_middle_text2">
                                    <!-- <a href="#"><img src="img/logo.png" alt=""></a> -->
                                    <h3><span id="H">H</span>OSTEL</h3> <h5> MANAGEMEN<span id="T">T</span></h5>
                                </div>
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="index-4.html">HOME</a></li>
                                <!--  <li class="dropdown submenu active">
                                 <a href="index-4.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                 <ul class="dropdown-menu">
                                     <li><a href="index.html">Home Page 1</a></li>
                                     <li><a href="index-2.html">Home Page 2</a></li>
                                     <li><a href="index-3.html">Home Page 3</a></li>
                                     <li><a href="index-4.html">Home Page 4</a></li>
                                 </ul>
                             </li> -->
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMISSION <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="room.html">APPLICATION</a></li>
                                        <li><a href="room-list.html">UPLOAD DOCUMENTS</a></li>
                                        <li><a href="room-details.html">RESULTS</a></li>
                                    </ul>
                                </li>
                                <li><a href="">FEES</a></li>
                                <!-- <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FEES <i class="fa fa-chevron-down" aria-hidden="true"></i></a> -->
                                <!--  <ul class="dropdown-menu">
                                 <li><a href="aminities.html">Aminities</a></li>
                                 <li><a href="search.html">Search</a></li>
                                 <li class="dropdown submenu">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
                                     <ul class="dropdown-menu">
                                         <li><a href="event.html">-  Event List</a></li>
                                         <li><a href="event-two-column.html">-  Event Grid</a></li>
                                         <li><a href="event-details.html">-  Event Single</a></li>
                                     </ul>
                                 </li>
                                 <li class="dropdown submenu">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                     <ul class="dropdown-menu">
                                         <li><a href="gallery-two-column.html">-  Gallery 2 Column</a></li>
                                         <li><a href="gallery-three-column.html">-  Gallery 3 Column</a></li>
                                         <li><a href="cobage-gallery.html">-  Gallery Cobage</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="restaurant.html">Our Reataurant</a></li>
                                 <li><a href="spa.html">Spa & Relax</a></li>
                                 <li><a href="activities.html">Activities</a></li>
                                 <li><a href="comming-soon.html">Coming Soon page</a></li>
                                 <li><a href="404.html">404 Error</a></li>
                             </ul> -->
                                </li>
                                <li><a href="">COMPLAINT</a></li>
                                <!-- <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Complaint <i class="fa fa-chevron-down" aria-hidden="true"></i></a> -->
                                <!-- <ul class="dropdown-menu">
                                <li><a href="blog-left-sidebar.html">Blog with leftside bar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog with rightside bar</a></li>
                                <li><a href="blog.html">Blog without side bar</a></li>
                                <li><a href="blog-details.html">Blog details</a></li>
                            </ul> -->
                                </li>
                                <li><a href="about-us.html">NOTICE</a></li>
                                <li><a href="contact-us.html">HELP</a></li>
                                <!-- <a href=""><i class="fa fa-user-circle-o" style="font-size: 40px; color:black ;margin-top: 50px;"></i></a> -->
                                <li><a href="#">PROFILE</a></li>

                                <ul class="nav navbar-nav navbar-right">
                                    <!-- <li class="search_dropdown">
                                    <a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a>
                                </li> -->
                                    <li class="book_btn">
                                        <a class="book_now_btn" href="#">LOGIN</a>
                                    </li>
                                </ul>

                                <!-- <li><a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a></li> -->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <!--                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                <ul class="nav navbar-nav">
                                                    <li class="dropdown submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="index.html">Home Page 1</a></li>
                                                            <li><a href="index-2.html">Home Page 2</a></li>
                                                            <li><a href="index-3.html">Home Page 3</a></li>
                                                            <li><a href="index-4.html">Home Page 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu dropdown active">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="room.html">Rooms Grid Style</a></li>
                                                            <li><a href="room-list.html">Rooms List Style</a></li>
                                                            <li><a href="room-details.html">Single Room</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="aminities.html">Aminities</a></li>
                                                            <li><a href="search.html">Search</a></li>
                                                            <li class="dropdown submenu">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="event.html">-  Event List</a></li>
                                                                    <li><a href="event-two-column.html">-  Event Grid</a></li>
                                                                    <li><a href="event-details.html">-  Event Single</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown submenu">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="gallery-two-column.html">-  Gallery 2 Column</a></li>
                                                                    <li><a href="gallery-three-column.html">-  Gallery 3 Column</a></li>
                                                                    <li><a href="cobage-gallery.html">-  Gallery Cobage</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="restaurant.html">Our Reataurant</a></li>
                                                            <li><a href="spa.html">Spa & Relax</a></li>
                                                            <li><a href="activities.html">Activities</a></li>
                                                            <li><a href="comming-soon.html">Coming Soon page</a></li>
                                                            <li><a href="404.html">404 Error</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="blog-left-sidebar.html">Blog with leftside bar</a></li>
                                                            <li><a href="blog-right-sidebar.html">Blog with rightside bar</a></li>
                                                            <li><a href="blog.html">Blog without side bar</a></li>
                                                            <li><a href="blog-details.html">Blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="contact-us.html">Contact Us</a></li>
                                                </ul>
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li class="search_dropdown">
                                                        <a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a>
                                                    </li>
                                                    <li class="book_btn">
                                                        <a class="book_now_btn" href="#">Book now</a>
                                                    </li>
                                                </ul>
                                            </div> /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container" style="padding-bottom:0px;">
                <div class="banner_inner_content">
                    <h3>Activities</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="activities.html">Notices</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Activities Area =================-->
        <section class="activities_title" style="background:white">
            <div class="container">
                <div class="resort_title" style="padding-top:20px;padding-bottom: 40px;">
                    <h2> <span>Notice</span></h2>
                    <h5>Announcements which keeps the users update from time to time</h5>
                    <p>This notice board makes information dissemination much easier in a paperless community as the world tends to interact with the online notice board facility. Notifications regarding hostel fee payments, warnings and reminders etc are provided.</p>
                </div>
            </div>
        </section>
        <!--================Activities Area =================-->
                  <style type="text/css">
                    .notice {
                        font-size: large;
                        padding-bottom: 200px !important;
                        text-decoration: underline;
                        line-height: 65px;}
                </style>
                <section id="content" style="background:white">
                    <div style="background:#E3E4FA;color:black;width: 600px;justify-content: center;align-items: center;" class="container">
                        <div class="container" style="width:100%;padding-bottom:0px;align-items: center;">
                             <pre></pre>
                            <div style="align-items: center;">
                                <center style="font-size:30px;padding: 20px"><b>NOTICE</b></center>
                                <marquee onmouseout="this.start();" onmouseover="this.stop();" style="overflow-y:scroll;padding:10px;padding-top: 30px;padding-bottom: 40px;height: 400px;" scrollamount="4" direction="up" >
                                    <?php
                                        $query="select subject,notice,sdate,edate,status from notice";
                                        $run=mysqli_query($connection,$query);
                                        while ($result=mysqli_fetch_array($run,MYSQLI_NUM)) {
                                            if($result[4]=="1" && $result[2]<=date("Y-m-d") && $result[3]>=date("Y-m-d")){
                                    ?>
                                
                                    <center>
                                        <b class="notice"><?php echo "$result[0]:" ?></b><br />
                                    </center>
                                    <?php echo "$result[1]"; ?>
                                    <br /> 
                                    <br />
                                    <?php } }
                                    ?>
                                </marquee>
                            <pre></pre>
                            </div>
                        </div>
                    </div>
                </section>
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">
                                <img src="img/footer-logo.png" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>54B, Tailstoi Town 5238 MT, La city, IA 522364</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>+ 547 5895 621</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="book_now_area">
                                    <a class="book_now_btn" href="#">Book now</a>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Extra Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">-  About Us</a></li>
                                    <li><a href="#">-  Faq’s</a></li>
                                    <li><a href="#">-  Blog</a></li>
                                    <li><a href="#">-  Testimonials</a></li>
                                    <li><a href="#">-  Reservation Now</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>our services</h3>
                                </div>
                                <ul>
                                    <li><a href="#">-  Food & Drinks</a></li>
                                    <li><a href="#">-  Rooms</a></li>
                                    <li><a href="#">-  Amenities</a></li>
                                    <li><a href="#">-  Spa & Gym</a></li>
                                    <li><a href="#">-  Hill Tours</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget instagram_widget">
                                <div class="f_title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul class="instagram_list" id="instafeed"></ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="pull-left">
                        <h4>Copyright © HillTown Resort  <script>document.write(new Date().getFullYear());</script>. All rights reserved. </h4>
                    </div>
                    <div class="pull-right">
                        <h4>Created by: <a href="#">DesignArc</a></h4>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        
        
        
        
        <!--================End Footer Area =================-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from designarc.biz/demos/hilltown/theme/activities.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Dec 2019 12:46:52 GMT -->
</html>