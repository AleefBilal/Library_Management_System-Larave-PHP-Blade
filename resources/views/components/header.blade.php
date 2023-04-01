@php
    $current_route=request()->route()->getName();
@endphp

<!--Header-->
 <script src="{{url('frontend/JS/index.js')}}"></script>
 <header class="text-center header-social-icon text-lg-start bg-primary text-white">
        <div class="container">
            <!-- Header Top: Secti on: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-1 border-bottom">
                <!-- Left -->
                <div class="me-5 d-lg-block">
                    <span><i class="fa fa-phone mx-1"></i> +923123456789</span>
                    <span><i class="fa fa-calendar mx-1"></i> Mon-Fri 09.00Am-05.00PM</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fa fa-linkedin"></i>
                    </a>

                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->
        </div>
    </header>
    <!--Header Closed-->
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container ">
            <a class="navbar-brand fw-bold" href="{{url('/')}}">PUJC Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link {{$current_route=='/'?'active': ''}}" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link {{$current_route=='about'?'active': ''}}" aria-current="page" href="{{url('/about')}}">About</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{url('/')}}">
                            Collection
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class=" dropdown-item" href="{{url('/accounting')}}">Accounting</a></li>
                            <li><a class="dropdown-item" href="{{url('/businessadminis')}}">Business Administration</a></li>
                            <li><a class="dropdown-item" href="{{url('/businessmanagement')}}">Business Management</a></li>
                            <li><a class="dropdown-item" href="{{url('/computerscience')}}">Computer Science</a></li>
                            <li><a class="dropdown-item" href="{{url('/economics')}}">Economic</a></li>
                            <li><a class="dropdown-item" href="{{url('/literature')}}">Literature </a></li>
                            <li><a class="dropdown-item" href="{{url('/law')}}">Law</a></li>
                            <li><a class="dropdown-item" href="{{url('/marketing')}}">Marketing Management</a></li>
                            <li><a class="dropdown-item" href="{{url('/maths')}}">Mathematics</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle btn-btn-primary" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('/service')}}">Library Membership Form</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link {{$current_route=='facility'?'active': ''}}" aria-current="page" href="{{url('/facility')}}">Facilities</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link {{$current_route=='contact'?'active': ''}}" aria-current="page" href="{{url('/contact')}}">Contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        @if(auth()->check())
                            <a href="#!">{{auth()->user()->name}}</a>
                        @else
                            <a class="nav-link active" aria-current="page" href="{{url('/login')}}">Login/Signup</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar closed-->
