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
    <title>Home</title>
</head>

<body>
    <!--Header-->
    <x-header />

    <!--Image slider-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="h-100 w-100" src="{{url('images/Pujc-lib-1.jpeg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h2><span>PUJC</span> Library</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo ipsa cumque praesentium
                        facere, sequi sapiente facilis. Eos enim, placeat rerum at suscipit veniam laboriosam. Rerum?
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="h-100 w-100" src="{{url('images/Pujc-lib-2.jpeg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h2><span>PUJC</span> Library</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, praesentium. Autem sequi
                        impedit laborum error pariatur quaerat quos facilis, enim recusandae rerum repellat
                        reprehenderit. Dolorem!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="h-100 w-100" src="{{url('images/pujc-lib-3.jpeg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h2><span>PUJC</span> Library</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, quaerat.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Image slider closed-->



    <!--Collection Section Start-->
    <main id="collection">
        <div class="container mt-5">
            <h2 class="h2-responsive section-heading fw-bold text-center my-2">Collection</h2>
            <p class="text-center w-responsive mx-auto mb-1">PUJC Library has different books collection
                which are now available remotely for the students of University. This PUJC Library is
                introducing two main categories of collection i.e, Some books are downloadable and some
                books are just available for physical use and it is mention that this book is available
                in library. so student will get to know easily that which book is downloadable which book
                is available only for physical use.</p>
        </div>
        <div class="container-card">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url('images/Computer.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Accounting</h2>
                                <p class="description">The lorem text the section that contains header with having open
                                    functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <a class="button" href="{{url('/accounting')}}">View More</a>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url('images/Mangemnt.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">Business Administration</h2>
                                <p class="description">The lorem text the section that contains header with having open
                                    functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <a class="button" href="{{url('/businessadminis')}}">View More</a>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url('images/Marketing.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">Business Management</h2>
                                <p class="description">The lorem text the section that contains header with having open
                                    functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <a class="button" href="{{url('/businessmanagement')}}">View More</a>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url('images/Management.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Computer Science</h2>
                                <p class="description">The lorem text the section that contains header with having open
                                    functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <a class="button" href="{{url('/computerscience')}}">View More</a>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url('images/Mangemnt.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Economics</h2>
                                <p class="description">The lorem text the section that contains header with having open
                                    functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <a class="button" href="{{url('/economics')}}">View More</a>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url('images/maths.jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mathematics</h2>
                                <p class="description">The lorem text the section that contains header with having open
                                    functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <a class="button" href="{{url('/maths')}}">View More</a>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="{{url('images/law (2).jpg')}}" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Law</h2>
                                <p class="description">The lorem text the section that contains header with having open
                                    functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                                <a class="button" href="{{url('/law')}}">View More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
     </div>
</main>
<x-footer />
</body>
</html>
