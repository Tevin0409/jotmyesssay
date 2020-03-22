<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JotMyEssay - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('user_portal/fontawesome-free-5.9.0-web/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('user_portal/css/main.css')}}" rel="stylesheet">
</head>
<body style="background-color: #1c294e;">
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" method="post" action="{{url('post-login')}}" id="logForm">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        @if ($errors->has('email'))
                                         <span class="error">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="inputPassword" placeholder="Password">
                                        @if ($errors->has('password'))
                                              <span class="error">{{ $errors->first('password') }}</span>
                                        @endif 
                                    </div>
                                    
                                    <a href=' 'class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>

                                </form>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{url('registration')}}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('user_portal/js/jquery.js')}}"></script>
<script src="{{asset('user_portal/js/bootstrap.bundle.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('user_portal/jquery-easing/jquery.easing.min.js')}}"></script>
</body>
</html>