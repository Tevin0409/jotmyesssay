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


<body class="order-page">
<!--==========================
Header Section
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
        <a href="{{url('/')}}"><img src="{{asset('landing/img/logo.png')}}" alt="" title="" /></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Header 1</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/')}}#about">About Us</a></li>
                <li><a href="{{url('/')}}#services">Services</a></li>
                <li><a href="{{url('/')}}#portfolio">Portfolio</a></li>
                <li><a href="{{url('/')}}#testimonials">Testimonials</a></li>
                {{-- <li><a href="#team">Team</a></li> --}}
                {{-- <li class="menu-has-children">{{ucfirst(Auth()->user()->name)}}
                    <ul>
                    <li><a href="{{url(logout)}}">Log Out</a></li>
                     <li class="menu-has-children"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                     </li>
                    </ul>
                </li>
                --}}
                <li><a href="{{url('/')}}#contact">Contact Us</a></li>
            </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>
<!-- #header -->

{!! Form::open(['action'=>'OrderContoller@store','method' => 'POST']) !!}
    <div class='form-group form-group col-sm-12 card card-block'>
        <section id="order">
            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Academic Level")}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>

                {{Form::select('academic_level', ['Highschool' => 'Highschool', 'Undergraduate' => 'Undergraduate','Masters'=>'Masters','PhD'=>'PhD'],null,[
                    'class'=>'form-control'
                ])}}

            </div>
            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Type of Paper")}}
            </div>


            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::select('paper_type',['Essay' => 'Essay',
                'Articles'=> 'Article',
                'Assignment'=>'Assignment',
                'Content (Any Type)'=>'Content (Any Type)',
                'Admission Essay' => 'Admission Essay',
                'Annotated Bibliography' =>'Annotated Bibliography',
                'Argumentative Essay' => 'Argumentative Essay',
                'Article Review' => 'Article Review',
                'Book/Movie Review' => 'Book/Movie Review',
                'Business Plan' => 'Business Plan',
                'Capstone Project' =>'Capstone Project',
                'Case Study' => 'Case Study',
                'Coursework'=>'Coursework',
                'Creative Writing'=>'Creative Writing',
                'Critical Thinking'=>'Critical Thinking',
                'Dissertation'=>'Dissertation',
                'Dissertation chapter' => 'Dissertation chapter',
                'Lab Report' =>'Lab Report',
                'Math Problem' =>'Math Problem',
                'Research Paper' =>'Research Paper',
                'Research Proposal' =>'Research Proposal',
                'Research Summary' =>'Research Summary',
                'Scholarship Essay' =>'Scholarship Essay',
                'Speech' =>'Speech',
                'Statistic Project' => 'Statistic Project',
                'Term Paper' => 'Term Paper',
                'Thesis' =>'Thesis',
                'Other'=>'Other',
                'Presentation or Speech' =>'Presentation or Speech',
                'Q&amp;A'=>'Q&amp;A',
                'speech work'=>'speech work'],null,['class'=>'form-control'])}}
            </div>            

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Subject Area")}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>

                {{Form::select('subject_area',['Archaeology'=>'Archaeology',
                'Architecture'=>'Architecture',
                'Arts' =>'Arts',
                'Astronomy' =>'Astronomy',
                'Biology' =>'Biology',
                'Business' =>'Business',
                'Chemistry' =>'Chemistry',
                'Childcare' =>'Childcare',
                'Computers' =>'Computers',
                'Counseling' =>'Counseling',
                'Criminology' =>'Criminology',
                'Economics' =>'Economics',
                'Education' =>'Education',
                'Engineering' =>'Engineering',
                'Environmental-Studies' =>'Environmental-Studies',
                'Ethics' =>'Ethics',
                'Ethnic-Studies' =>'Ethnic-Studies',
                'Finance' =>'Finance',
                'Food-Nutrition' =>'Food-Nutrition',
                'Geography' =>'Geography',
                'Healthcare' =>'Healthcare',
                'History' =>'History',
                'Law' =>'Law',
                'Linguistics' =>'Linguistics',
                'Literature' =>'Literature',
                'Management' =>'Management',
                'Marketing' =>'Marketing',
                'Mathematics' =>'Mathematics',
                'Medicine' =>'Medicine',
                'Music' =>'Music',
                'Nursing' =>'Nursing',
                'Philosophy' =>'Philosophy',
                'Physical-Education' =>'Physical-Education',
                'Physics' =>'Physics',
                'Political-Science' =>'Political-Science',
                'Programming' =>'Programming',
                'Psychology' =>'Psychology',
                'Religion' =>'Religion',
                'Sociology' =>'Sociology',
                'Statistics' =>'Statistics'                                
                ],null,
                [
                "class" => "form-control",
                
                ])}}

            </div>

            <div class='form-group form-group col-sm-12 card card-block'>

                {{ Form::text('topic','',['class'=>'form-control','placeholder'=> 'topic'])}}

            </div>
            
            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"No. of Slides")}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>

                {{ Form::number('no_of_slides', '1',['class'=>'form-control','min'=>"1"])}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"No. of Pages")}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                {{ Form::number('No_of_pages', '1',['class'=>'form-control','min'=>"1"])}}
            </div>


            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Spacing")}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::select('spacing',['Single' => 'Single','Double'=>'Double'],null,[
                    "class" => "form-control",
                    
                ])}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Deadline")}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                    {{Form::select('deadline',[

                        '3HRS' => '3HRS',
                        '6HRS' => '6HRS',
                        '9HRS' => '9HRS',
                        '12HRS' => '12HRS',
                        '18HRS' => '18HRS',
                        '24HRS' => '24HRS',
                        '48HRS' => '48HRS',
                        '3days' => '3days',
                        '6days' => '6days',
                        '9days' => '9days',
                        '12days' => '12days'
                        ],null,["class" => "form-control"])
                    }}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Additional File")}}
            </div>
            <div class='form-group form-group col-sm-12 card card-block'>

                {{Form::file("file", $attributes = [])}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Writer Category")}}
            </div>

            <div class='form-group form-group col-sm-12 card card-block'>

                {{Form::select('category',['Standard' => 'Standard','Premium'=>'Premium','Platinum' =>'Platinum'],null,['class'=>'form-control'])}}

            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::textarea('instructions','',['class'=>'form-control','placeholder'=> 'Additional Information'])}}

            </div> 

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title'," VIP Support")}}
                {{Form::checkbox('vip_support', 'Vip Support Need')}}
            </div>   

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            </div>
        </section>
    </div>

{!! Form::close() !!}


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



</div>
</section>
</div>
</div>
</body>
</html>
