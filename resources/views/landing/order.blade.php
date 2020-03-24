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
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
        <!-- #nav-menu-container -->
    </div>
</header>
<!-- #header -->

{!! Form::open(['action'=>'OrderContoller@store','method' => 'POST']) !!}
<div class='form-group form-group col-sm-12 card card-block'>


    <div class='form-group form-group col-sm-12 card card-block'>
    {{Form::Label('title',"Academic Level")}}
<section id="order">

    <div class='form-group form-group col-sm-12 card card-block'>

        {{Form::select('academic_level', ['Highschool' => 'Highschool', 'Undergraduate' => 'Undergraduate','Masters'=>'Masters','PhD'=>'PhD'])}}

    </div>
    <div class='form-group form-group col-sm-12 card card-block'>
        {{Form::Label('title',"Type of Paper")}}
    </div>


        <div class='form-group form-group col-sm-12 card card-block'>
{{Form::select('paper_type',['Essay' => 'Essay','Articles'=> 'Article'])}}
    </div>
            <div class='form-group form-group col-sm-12 card card-block'>

            </div>

            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Subject Area")}}
            </div>

    <div class='form-group form-group col-sm-12 card card-block'>

    {{Form::select('subject_area',['Biology'=>'Biology','Computer Science'=>'Computer Science'])}}

    </div>



            <div class='form-group form-group col-sm-12 card card-block'>

            {{ Form::text('topic','',['class'=>'form-control','placeholder'=> 'topic'])}}

            </div>



    <div class='form-group form-group col-sm-12 card card-block'>
        {{Form::Label('title',"No. of Slides")}}
    </div>

    <div class='form-group form-group col-sm-12 card card-block'>

        {{ Form::number('no_of_slides', '2')}}
    </div>

    <div class='form-group form-group col-sm-12 card card-block'>
        {{Form::Label('title',"No. of Pages")}}
    </div>

    <div class='form-group form-group col-sm-12 card card-block'>
                {{ Form::number('No_of_pages', '2')}}
            </div>


            <div class='form-group form-group col-sm-12 card card-block'>
                {{Form::Label('title',"Spacing")}}
            </div>

    <div class='form-group form-group col-sm-12 card card-block'>


    {{Form::select('spacing',['Single' => 'Single','Double'=>'Double'])}}
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
])}}

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

        {{Form::select('category',['Standard' => 'Standard','Premium'=>'Premium','Platinum' =>'Platinum'])}}

        </div>

            <div class='form-group form-group col-sm-12 card card-block'>


            {{Form::textarea('instructions','',['class'=>'form-control','placeholder'=> 'Additional Information'])}}

        </div>



    <div class='form-group form-group col-sm-12 card card-block'>
        {{Form::Label('title',"Additional File")}}
    </div>
        <div class='form-group form-group col-sm-12 card card-block'>

    <div class='form-group form-group col-sm-12 card card-block'>

    {{Form::select('currency',['KSH' => 'KSH','UDS'=>'UDS'])}}

    </div>

    <div class='form-group form-group col-sm-12 card card-block'>
        {{Form::Label('title'," VIP Support")}}
    </div>

    <div class='form-group form-group col-sm-12 card card-block'>
    {{Form::checkbox('vip_support', 'Vip Support Need')}}
    </div>


        <div class='form-group form-group col-sm-12 card card-block'>

        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>

    {!! Form::close() !!}}}


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
