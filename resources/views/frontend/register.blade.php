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
    <title>Signup PUJC</title>
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
    margin-bottom: 1%;
    background: hsla(0, 0%, 100%, 0.671);
    backdrop-filter: blur(10px);">

        <div class="container-form">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-login" data-mdb-toggle="pill" href="{{url('/login')}}"
                           role="tab"
                           aria-controls="pills-login" aria-selected="false">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-register" data-mdb-toggle="pill"
                           href="{{url('/register')}}" role="tab"
                           aria-controls="pills-register" aria-selected="true">Register</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-register" role="tabpanel"
                         aria-labelledby="tab-register">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <!-- Name input -->
                            <div class="row">
                                {{-- <div class="col-md-6 mb-2"> --}}
                                    <div class="form-outline text-lg-start">
                                        <label class="form-label" for="form3Example1">User Name</label>
                                        <input type="text" id="form3Example1" name="name" class="form-control"
                                               placeholder="Enter first name" value="{{old('name')}}"/>
                                        <span class="text-danger ">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                        </span>

                                    </div>
                                {{-- </div> --}}
                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-2 text-lg-start">
                                <label class="form-label" for="registerEmail">Email</label>
                                <input type="email" id="registerEmail" name="email" class="form-control"
                                       placeholder="Enter your email address" value="{{old('email')}}"/>
                                <span class="text-danger">
                      @error('email')
                                    {{$message}}
                                    @enderror
                    </span>

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-2 text-lg-start">
                                <label class="form-label" for="registerPassword">Password</label>
                                <input type="password" id="registerPassword" name="password" class="form-control"
                                       placeholder="Enter your password"/>
                                <span class="text-danger">
                      @error('password')
                                    {{$message}}
                                    @enderror
                    </span>

                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-2 text-lg-start">
                                <label class="form-label" for="registerRepeatPassword">Confirm password</label>
                                <input type="password" id="registerRepeatPassword" name="password_confirmation"
                                       class="form-control" placeholder="Confirm your password"/>
                                <span class="text-danger">
                      @error('password_confirmation')
                                    {{$message}}
                                    @enderror
                    </span>

                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex text-lg-start mb-3">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                                       checked
                                       aria-describedby="registerCheckHelpText"/>
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
                        </form>
                        {{-- <div class="text-center mb-3">
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<x-footer/>
</html>
