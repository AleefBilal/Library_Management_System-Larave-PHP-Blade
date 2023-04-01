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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!--Font Awesome W3School-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!--Kit Awesome-->
    <script src="https://kit.fontawesome.com/fd08c8cdc0.js" crossorigin="anonymous"></script>
    <title>Contact PUJC</title>
</head>
<body style="background-image: url('https://pujc.edu.pk/wp-content/uploads/2018/01/pujc-bg-Webp.net-compress-image.jpg');
background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;">
     <!--Header-->
<x-header />
    <!--contact us section-->
<main id="contact-us">
     <div class="about mt-5 mb-5">
        <div class="container">
            <h2 class="h2-responsive section-heading fw-bold text-center my-2">Contact Us</h2>
                <p class="text-center w-responsive mx-auto mb-1">lorem50Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Assumenda tempore dolores quam quisquam dignissimos reprehenderit voluptate sint
                    quos officia doloribus.
                </p>
        </div>
        <div class="container">
        <section class="mb-5">
            <div class="row mt-5">
                <div class="col-md-6 mb-md-4 mb-5">

                    <form id="contact-form" name="contact-form" action="" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Name">
                                </div>
                                <span class="text-danger">
                                    @error('name')
                                      {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6 ">
                                <div class="md-form mb-0">
                                            <label for="email" class="">Your email</label>
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <span class="text-danger">
                                    @error('email')
                                      {{$message}}
                                    @enderror
                                  </span>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <span class="text-danger">
                                        @error('subject')
                                          {{$message}}
                                        @enderror
                                      </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="md-form">
                                        <label for="message">Message</label>
                                        <textarea type="text" id="message" name="message" rows="2"
                                        class="form-control md-textarea" placeholder="Message"></textarea>
                                    </div>
                                    <span class="text-danger">
                                        @error('message')
                                          {{$message}}
                                        @enderror
                                      </span>
                                </div>
                            </div>
                    </form>
                        <div class="text-center text-md-left mt-3">
                            <button class="btn btn-primary" type="submit"
                                onclick="document.getElementById('contact-form').submit();">Send</button>
                        </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->

                        <div class="col-md-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1672.9933088620003!2d73.66275894611412!3d33.00412828967598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f92721b215abd%3A0x3aa71961b2764545!2sPUJC%20Library!5e0!3m2!1sen!2s!4v1664098086581!5m2!1sen!2s"
                                width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </section>
                <!--Section: Contact v.2-->
            </div>

        </div>
    </main>
</body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('status'))
        <script>
            swal("{{session('status')}}");
        </script>
    @endif
    <!--Contact us section end-->
    <x-footer />
</html>
