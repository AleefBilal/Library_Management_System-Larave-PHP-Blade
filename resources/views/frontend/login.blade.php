<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('frontend/CSS/style.css')}}"/>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Swiper CSS and JQuery-->
    <link rel="stylesheet" href="{{url('frontend/CSS/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--Font Awesome W3School-->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!--Kit Awesome-->
    <script src="https://kit.fontawesome.com/fd08c8cdc0.js" crossorigin="anonymous"></script>
    <title>Login PUJC</title>
</head>
<body style="background-image: url('https://pujc.edu.pk/wp-content/uploads/2018/01/pujc-bg-Webp.net-compress-image.jpg');
background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;">
<!-- Section: Design Block -->
<section class="text-center">

    <div class="card shadow-5-strong" style="
      margin-left: 30%;
      margin-right: 30%;
      margin-top: 2%;
      margin-bottom: 0;
      background: hsla(0, 0%, 100%, 0.671);
      backdrop-filter: blur(10px);">

        <div class="container-form">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="{{url('/login')}}"
                           role="tab"
                           aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="{{url('/register')}}"
                           role="tab"
                           aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="login-form" role="tabpanel" aria-labelledby="tab-login">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4 text-lg-start">
                                <label class="form-label" for="loginName">Email</label>
                                <input type="email" id="loginName" name="email" class="form-control"
                                       placeholder="Enter your email"/>

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4 text-lg-start">
                                <label class="form-label" for="loginPassword">Password</label>
                                <input type="password" id="loginPassword" class="form-control"
                                       placeholder="Enter your password"/>

                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex text-lg-start">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                               id="form2Example3"/>
                                        <label class="form-check-label" for="form2Example3">
                                            Remember me
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex text-lg-start">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-2">Sign in</button>
{{--                            <!-- Register buttons -->--}}
{{--                            <div class="text-center mb-3">--}}
{{--                                <p>or sign in with:</p>--}}
{{--                                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                                    <i class="fab fa-facebook-f"></i>--}}
{{--                                </button>--}}

{{--                                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                                    <i class="fab fa-google"></i>--}}
{{--                                </button>--}}

{{--                                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                                    <i class="fab fa-twitter"></i>--}}
{{--                                </button>--}}

{{--                                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                                    <i class="fab fa-github"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="text-center">--}}
{{--                                <p>Not a member? <a href="{{url('/register')}}">Register</a></p>--}}
{{--                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Section: Design Block -->
</body>
<x-footer/>
</html>
