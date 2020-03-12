
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jot My ESsay:Order</title>
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

</head>

<body>
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

    <section id="order">
        <div class=" container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Place Your Order</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description"> It is fast, secure and confidential</p>
                </div>
            </div>
        </div>
        <div class="container about-container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <div class="row form-group col-sm-12" >
                        <h4>Order Details</h4>
                    </div>
                    <br>
                    <div class="form-group row col-sm-12">
                        <label class="col-sm-4"> Academic level </label>
                        <div class="col-sm-8">
                            <div class="btn-group row" data-toggle="buttons">
                                <label class="btn btn-default">
                            <input type="radio" name="ops_aclevel" id="ops_aclevel" value="1#High School">High School
                            </label>
                            <label class="btn btn-default">
                            <input type="radio" name="ops_aclevel" id="ops_aclevel" value="1.13#Undergraduate">Undergraduate
                            </label>
                            <label class="btn btn-default">
                            <input type="radio" name="ops_aclevel" id="ops_aclevel" value="1.3#Masters" checked="">Masters
                            </label>
                            <label class="btn btn-default active">
                            <input type="radio" name="ops_aclevel" id="ops_aclevel" value="1.5#PhD">PhD
                            </label>
                    
                        </div>
                      </div>
                    </div>
            
                    <div class="form-group row col-sm-12">
                        <label for="exampleSelect1" class="col-sm-4">Type of Paper</label>
                        <select name="order_tpaper" class="form-control col-sm-8" id="exampleSelect1">
                            <option value="1#essay" selected="selected">Essay (Any Type)</option>
                            <option value="1#Essay (Any Type)">Essay (Any Type)</option>
                            <option value="1#Article (Any Type)">Article (Any Type)</option>
                            <option value="1.1#Assignment">Assignment</option>
                            <option value="1#Content (Any Type)">Content (Any Type)</option>
                            <option value="1#Admission Essay">Admission Essay</option>
                            <option value="1#Annotated Bibliography">Annotated Bibliography</option>
                            <option value="1#Argumentative Essay">Argumentative Essay</option>
                            <option value="1#Article Review">Article Review</option>
                            <option value="1#Book/Movie Review">Book/Movie Review</option>
                            <option value="1.1#Business Plan">Business Plan</option>
                            <option value="1#Capstone Project">Capstone Project</option>
                            <option value="1#Case Study">Case Study</option>
                            <option value="1.1#Coursework">Coursework</option>
                            <option value="1#Creative Writing">Creative Writing</option>
                            <option value="1#Critical Thinking">Critical Thinking</option>
                            <option value="1.3#Dissertation">Dissertation</option>
                            <option value="1.3#Dissertation chapter">Dissertation chapter</option>
                            <option value="1.3#Lab Report">Lab Report</option>
                            <option value="1.3#Math Problem">Math Problem</option>
                            <option value="1.1#Research Paper">Research Paper</option>
                            <option value="1.1#Research Proposal">Research Proposal</option>
                            <option value="1#Research Summary">Research Summary</option>
                            <option value="1#Scholarship Essay">Scholarship Essay</option>
                            <option value="1#Speech">Speech</option>
                            <option value="1.3#Statistic Project">Statistic Project</option>
                            <option value="1.1#Term Paper">Term Paper</option>
                            <option value="1.3#Thesis">Thesis</option>
                            <option value="1#Other">Other</option>
                            <option value="1#Presentation or Speech">Presentation or Speech</option>
                            <option value="1#Q&amp;A">Q&amp;A</option>
                            <option value="1#speech work">speech work</option>
                        </select>
                    </div>
                    <div class="form-group row col-sm-12">
                        <label for="exampleSelect2" class="col-sm-4">Subject Area</label>
                        <select name="order_subject" class="form-control col-sm-8 custom-select border-default" id="exampleSelect2">
                            <option value="1#Any" selected="selected"> Select Subject </option>
                            
                            <option value="1#Archaeology">Archaeology</option>
                            <option value="1.5#Architecture">Architecture</option>
                            <option value="1#Arts">Arts</option>
                            <option value="1#Astronomy">Astronomy</option>
                            <option value="1#Biology">Biology</option>
                            <option value="1#Business">Business</option>
                            <option value="1.5#Chemistry">Chemistry</option>
                            <option value="1#Childcare">Childcare</option>
                            <option value="1.5#Computers">Computers</option>
                            <option value="1#Counseling">Counseling</option>
                            <option value="1#Criminology">Criminology</option>
                            <option value="1.5#Economics">Economics</option>
                            <option value="1#Education">Education</option>
                            <option value="1.5#Engineering">Engineering</option>
                            <option value="1#Environmental-Studies">Environmental-Studies</option>
                            <option value="1#Ethics">Ethics</option>
                            <option value="1#Ethnic-Studies">Ethnic-Studies</option>
                            <option value="1.5#Finance">Finance</option>
                            <option value="1#Food-Nutrition">Food-Nutrition</option>
                            <option value="1.5#Geography">Geography</option>
                            <option value="1#Healthcare">Healthcare</option>
                            <option value="1#History">History</option>
                            <option value="1#Law">Law</option>
                            <option value="1#Linguistics">Linguistics</option>
                            <option value="1#Literature">Literature</option>
                            <option value="1#Management">Management</option>
                            <option value="1#Marketing">Marketing</option>
                            <option value="1.5#Mathematics">Mathematics</option>
                            <option value="1#Medicine">Medicine</option>
                            <option value="1#Music">Music</option>
                            <option value="1#Nursing">Nursing</option>
                            <option value="1#Philosophy">Philosophy</option>
                            <option value="1#Physical-Education">Physical-Education</option>
                            <option value="1.5#Physics">Physics</option>
                            <option value="1#Political-Science">Political-Science</option>
                            <option value="1#Programming">Programming</option>
                            <option value="1#Psychology">Psychology</option>
                            <option value="1#Religion">Religion</option>
                            <option value="1#Sociology">Sociology</option>
                            <option value="1.5#Statistics">Statistics</option>
                        </select>
                    </div>
                    <div class="form-group row col-sm-12">
                        <label class="col-sm-4" for="order_title">Title</label>
                        <input type="text" name="order_title" class="form-control col-sm-8 border-default" id="order_title" aria-describedby="emailHelp" placeholder="Enter topic" required="">
                        {{-- <input type="hidden" name="cpn_namedb" class="form-control col-sm-8"> --}}
                    </div>
                    <div class="form-group row col-sm-12">
                        <label class="col-sm-4" for="ppInstructios">Paper Instructions</label>
                        <textarea class="form-control col-sm-8"name="ppInstructios" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group row col-sm-12">
                        <label for="additionalinfo" class="col-sm-4">Additional Information</label>
                        <input type="file" class="form-control col-sm-8" title="Upload file">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row form-group col-sm-12" >
                        <h4>Pricing Details</h4>
                    </div>
                    <br>
                    <div class="form-group col-sm-12 row">
                        <label class="col-sm-4"> Number of Pages </label>

                        <input type="number" class="col-sm-12 form-control" max="100" min="1">
                        <br>
                        <br>
                        <br>
                        
                        <div class="col-sm-8 btn-group" style="margin-left:2px;">
                            <div class="row" data-toggle="buttons">
                                <label class="col-sm-2 btn btn-default active">
                                    <input type="radio" name="order_citation" value="SingleSpaced" checked="">SingleSpaced
                                    </label>
                                
                                   
                                <label class="btn btn-default col-sm-2">
                                    <input type="radio" name="order_citation" value="DoubleSpaced">DoubleSPaced
                                </label>
                            </div>
                        </div>                        
                    </div>
                    <div class="form-group row col-sm-12">
                        <label class=" col-sm-4"> Currency </label>
                        <div class=" col-sm-8">
                            <div class="btn-group row" data-toggle="buttons">
                                <label class="btn btn-default">
                            <input type="radio" name="currency" id="currency" value="1#USD">USD
                            </label>
                            <label class="btn btn-default">
                            <input type="radio" name="currency" id="currency" value="1.13#GBP">GBP
                            </label>
                            <label class="btn btn-default">
                            <input type="radio" name="currency" id="currency" value="1.3#EUR" checked="">EUR
                            </label>
                            <label class="btn btn-default active">
                            <input type="radio" name="currency" id="currency" value="1.5#KSH">KSH
                            </label>
                    
                        </div>
                      </div>
                    </div>
                    <div class="form-group row col-sm-12">
                        <label for="ppSlides" class="col-sm-4">Power Point Slides</label>
                        <input type="number" min="1" max="100" name="ppSlides" class="form-control col-sm-8">
                    </div>
                    <div class="row form-group col-sm-12">
                        <label for="urgency" class="col-sm-4"><strong>Deadline:</strong></label>
                        <select name="order_deadline" class="form-control col-sm-8" id="exampleSelect1">
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
                    <div class="form-group row col-sm-12">
                        <label class="col-sm-4"> Writer category </label>
                        <div class="col-sm-8 btn-group">
                            <div class="row" data-toggle="buttons">
                        
                        
                                <label class="btn text-center btn-default col-sm-4 active">
                                <input type="radio" name="order_wquality" value="1#Standard" checked="">
                        
                                        <h6> Standard </h6><hr>
                                <small> Standard Price writers</small>
                                </label>
                                    <label class="btn text-center btn-default col-sm-4 ">
                                <input type="radio" name="order_wquality" value="1.25#Premium">
                        
                                        <h6> Premium </h6><hr>
                                <small> High-rank professional writer,<br> proficient in <br> the requested field of study</small>
                                </label>
                                    <label class="btn text-center btn-default col-sm-4 ">
                                <input type="radio" name="order_wquality" value="1.35#Platinum">
                        
                                        <h6> Platinum </h6><hr>
                                <small>  English as a native <br> language writer <br>(US, UK, CA, AU writers)<br> </small>
                                </label>
                                
                             </div>
                         </div>
                  </div>
                  <div class="form-group row col-sm-12">
                    <label class="col-sm-4" for="order_title">Preferred writer's ID</label>
                    <input type="text" name="order_writer" class="form-control col-sm-8 border-default" id="order_prefwriter" aria-describedby="emailHelp" placeholder="optional" value="">
                  </div>
                  <div class="form-group row col-sm-12">
                    <label class="col-sm-4" for="order_title">Additional services</label>
                    <div class="col-sm-8 addons">
                
                            <label class="text-left checkbox" style="width: 100%;" for="Checkbox1">
                                <input value="10" name="order_upsells[]" type="checkbox" class="addon" data-toggle="checkbox"> VIP support                <p style="float: right"> $10 </p>
                            </label>
                             <hr>                      
                    </div>
                  </div>
                  <div class="col-sm-12 form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>

                  </div>

                    
                </div>
            </div>
        </div>
    
    </section>
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