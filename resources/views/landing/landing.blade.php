<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to JotMyEssay</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="favicon.ico" rel="shortcut icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('landing/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('landing/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/lib/animate-css/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Imperial
      Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<div id="preloader"></div>

<!--==========================
Hero Section
============================-->
<section id="hero">
    <div class="hero-container">
        <div class="wow fadeIn">
            <div class="hero-logo">
                <img class="" src="{{asset('landing/img/logo.png')}}" alt="Imperial">
            </div>

            <h1>Custom Essay writing</h1>
                 </h1>
            <h2>One-stop solution for scholars in need of <span class="rotating">creative writings,essay help, powerful speeches</span></h2>
            <div class="actions">
                <a href="{{route('portal.register')}}" class="btn-get-started">Register/Login</a>
                <a href="#services" class="btn-services">Get started</a>
            </div>
        </div>
    </div>
</section>

<!--==========================
Header Section
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="{{asset('landing/img/logo.png')}}" alt="" title="" /></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Header 1</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="menu-has-children"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>
<!-- #header -->

<!--==========================
    Order Form Section 
============================--> 
<section id="order">
    <div class=" container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Place Your Order</h3>
                <div class="section-title-divider"></div>
                <p class="section-description"> May we take your order please</p>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-12">
                    <h3>Calculate Price</h3>
                </div>
                <form action="" class="form">
                    <div class="row form-group col-sm-12">
                        <label for="level" class="col-sm-4 left"><strong>Academic Level:</strong></label>
                        <select required class="form-control col-sm-7">
                            <option value="High_School" selected>High School</option>
                            <option value="Undergraduate">UnderGraduate</option>
                            <option value="Masters">Masters</option>
                            <option value="PhD">PhD</option>
                            
                        </select>
                    </div>
                    <br>
                    <div class="row form-group col-sm-12">
                        <label for="PaperType" class="col-sm-4"><strong>Type of Paper</strong></label>
                        <select name="order_tpaper" class="form-control col-sm-7" id="exampleSelect1">

                            <option value="1"> Essay (Any Type) </option>
                            <option value="1"> Article (Any Type) </option>
                            <option value="1.1"> Assignment </option>
                            <option value="1"> Content (Any Type) </option>
                            <option value="1"> Admission Essay </option>
                            <option value="1"> Annotated Bibliography </option>
                            <option value="1"> Argumentative Essay </option>
                            <option value="1"> Article Review </option>
                            <option value="1"> Book/Movie Review </option>
                            <option value="1.1"> Business Plan </option>
                            <option value="1"> Capstone Project </option>
                            <option value="1"> Case Study </option>
                            <option value="1.1"> Coursework </option>
                            <option value="1"> Creative Writing </option>
                            <option value="1"> Critical Thinking </option>
                            <option value="1.3"> Dissertation </option>
                            <option value="1.3"> Dissertation chapter </option>
                            <option value="1.3"> Lab Report </option>
                            <option value="1.3"> Math Problem </option>
                            <option value="1.1"> Research Paper </option>
                            <option value="1.1"> Research Proposal </option>
                            <option value="1"> Research Summary </option>
                            <option value="1"> Scholarship Essay </option>
                            <option value="1"> Speech </option>
                            <option value="1.3"> Statistic Project </option>
                            <option value="1.1"> Term Paper </option>
                            <option value="1.3"> Thesis </option>
                            <option value="1"> Other </option>
                            <option value="1"> Presentation or Speech </option>
                            <option value="1"> Q&amp;A </option>
                            <option value="1"> speech work </option>
                        </select>
                    </div>
                    <br>
                    <div class="row form-group col-sm-12">
                        <label for="NumberofPages" class="col-sm-4"><strong>Number of Pages:</strong></label>
                        <input type="number" min=1 max="100" class="form-control col-sm-7">
                    </div>
                    <br>
                    <div class="row form-group col-sm-12">
                        <label for="urgency" class="col-sm-4"><strong>Urgency:</strong></label>
                        <select name="order_deadline" class="form-control col-sm-7" id="exampleSelect1">
                            <option name="order_deadline" value="14#Days#14">
                                14 Days </option>
                            <option name="order_deadline" value="15#Days#10">
                                10 Days </option>
                            <option name="order_deadline" value="16#Days#6">
                                6 Days </option>
                            <option name="order_deadline" value="27#Hours#18">
                                18 Hours </option>
                            <option name="order_deadline" value="30#Hours#12">
                                12 Hours </option>
                            <option name="order_deadline" value="35#Hours#6">
                                6 Hours </option>
                            <option name="order_deadline" value="45#Hours#3">
                                3 Hours </option>
                            <option name="order_deadline" value="16#Hours#7">
                                7 Hours </option>                       
                            <option name="order_deadline" value="19#Days#4">
                                4 Days </option>
                            <option name="order_deadline" value="12#Days#5">
                                5 Days </option>
                            <option name="order_deadline" value="20#Days#3">
                                3 Days </option>
                            <option name="order_deadline" value="23#Hours#48">
                                48 Hours </option>
                            <option name="order_deadline" value="27#Hours#24">
                                24 Hours </option>
                            <option name="order_deadline" value="33#Hours#8">
                                8 Hours </option>
                        </select>
                    </div>
                    <br>
                    <div class="row form-group col-sm-12">
                        <button type="submit" class="btn btn-get-started">Order Now</button>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>

</section>

<!--==========================
About Section
============================-->
<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">About Us</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
            </div>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-md-6 col-md-push-6 about-content">
                <h2 class="about-title">We provide great services and ideass</h2>
                <p class="about-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate
                </p>
                <p class="about-text">
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est laborum
                </p>
                <p class="about-text">
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est laborum
                </p>
            </div>
        </div>
    </div>
</section>

<!--==========================
Services Section
============================-->
<section id="services">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Our Services</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 service-item">
                <div class="service-icon"><i class="fa fa-desktop"></i></div>
                <h4 class="service-title"><a href="">Lorem Ipsum</a></h4>
                <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
            <div class="col-md-4 service-item">
                <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
                <h4 class="service-title"><a href="">Dolor Sitema</a></h4>
                <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
            <div class="col-md-4 service-item">
                <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                <h4 class="service-title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
            <div class="col-md-4 service-item">
                <div class="service-icon"><i class="fa fa-photo"></i></div>
                <h4 class="service-title"><a href="">Magni Dolores</a></h4>
                <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="col-md-4 service-item">
                <div class="service-icon"><i class="fa fa-road"></i></div>
                <h4 class="service-title"><a href="">Nemo Enim</a></h4>
                <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
            <div class="col-md-4 service-item">
                <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
                <h4 class="service-title"><a href="">Eiusmod Tempor</a></h4>
                <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
        </div>
    </div>
</section>

<!--==========================
Subscrbe Section
============================-->
<section id="subscribe">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-8">
                <h3 class="subscribe-title">Subscribe For Updates</h3>
                <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
            </div>
            <div class="col-md-4 subscribe-btn-container">
                <a class="subscribe-btn" href="#">Subscribe Now</a>
            </div>
        </div>
    </div>
</section>

<!--==========================
Porfolio Section
============================-->
<section id="portfolio">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Portfolio</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url('/landing/img/portfolio-1.jpg');" href="">
                    <div class="details">
                        <h4>Portfolio 1</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url('/landing/img/portfolio-2.jpg');" href="">
                    <div class="details">
                        <h4>Portfolio 2</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url('/landing/img/portfolio-3.jpg');" href="">
                    <div class="details">
                        <h4>Portfolio 3</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url('/landing/img/portfolio-4.jpg');" href="">
                    <div class="details">
                        <h4>Portfolio 4</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url('/landing/img/portfolio-5.jpg');" href="">
                    <div class="details">
                        <h4>Portfolio 5</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url('/landing/img/portfolio-6.jpg');" href="">
                    <div class="details">
                        <h4>Portfolio 6</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url('/landing/img/portfolio-7.jpg');" href="">
                    <div class="details">
                        <h4>Portfolio 7</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url('/landing/img/portfolio-8.jpg');" href="">
                    <div class="details">
                        <h4>Portfolio 8</h4>
                        <span>Alored dono par</span>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<!--==========================
Testimonials Section
============================-->
<section id="testimonials">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Testimonials</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="profile">
                    <div class="pic"><img src="{{asset('landing/img/client-1.jpg')}}" alt=""></div>
                    <h4>Saul Goodman</h4>
                    <span>Lawless Inc</span>
                </div>
            </div>
            <div class="col-md-9">
                <div class="quote">
                    <b><img src="{{asset('landing/img/quote_sign_left.png')}}" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="../../../public/landing/img/quote_sign_right.png" alt=""></small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="quote">
                    <b><img src="{{asset('landing/img/quote_sign_left.png')}}" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="../../../public/landing/img/quote_sign_right.png" alt=""></small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="profile">
                    <div class="pic"><img src="{{asset('landing/img/client-2.jpg')}}" alt=""></div>
                    <h4>Sara Wilsson</h4>
                    <span>Odeo Inc</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!--==========================
Contact Section
============================-->
<section id="contact">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Contact Us</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-push-2">
                <div class="info">
                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p>info.gmail.com</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>
            </div>

            <div class="col-md-5 col-md-push-2">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!--==========================
Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
                    -->
                    Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Required JavaScript Libraries -->
<script src="{{asset('landing/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('landing/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('landing/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('landing/lib/superfish/superfish.min.js')}}"></script>
<script src="{{asset('landing/lib/morphext/morphext.min.js')}}"></script>
<script src="{{asset('landing/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('landing/lib/stickyjs/sticky.js')}}"></script>
<script src="{{asset('landing/lib/easing/easing.js')}}"></script>

<!-- Template Specisifc Custom Javascript File -->

<script src="{{asset('landing/js/custom.js')}}"></script>

<script src="{{asset('landing/contactform/contactform.js')}}"></script>


</body>

</html>

