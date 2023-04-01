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
    <title>Computer Science Collection</title>
</head>
<body style="background-image: url('https://pujc.edu.pk/wp-content/uploads/2018/01/pujc-bg-Webp.net-compress-image.jpg');
background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;">
     <!--Header-->
<x-header />
    <main id="computerscience">
        <div class="about mt-5 mb-4">
            <div class="container">
                <div class="row m-2">
                    <div class="h2-responsive section-heading text-center my-2">
                        <h2 class="fw-bold">Computer Science Collection</h2>
                    </div>
                    <form action="" class="col-12">
                        <div class="input-group">
                              <input type="search" name="search" id="search-form" class="form-control" placeholder="Search Books by Name ur Author_name" value="{{$search}}"/>
                            <button type="button" class="btn btn-primary">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="collection-container">
            @foreach($books as $book)
                <div class="book-card-container">
                    <div class="book-card">
                        <div class="book-card-header">
                            {{ $book->author_name }}
                        </div>
                        <div class="book-card-body">
                            <div class="card-content-container" style="height: 170px; border-radius: 5px">
                                <h5 class="book-card-title">{{ $book->name }}</h5>
                                <p class="book-card-text">{{ $book->description }}</p>
                                @if ($book->downloadable == 1 && $book->file_path)
                                    <a href="{{ route('file.download', ['id' => $book->id]) }}" class="btn btn-success download-btn mt-5">Download</a>
                                @endif
                            </div>
                        </div>
                        <div class="book-card-footer">
                            {{ $book->published_date }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
<x-footer />
</html>
