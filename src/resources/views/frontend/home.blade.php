<head>
    <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <link href="{{ url('frontend/carousel/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
        }

        a {
            text-decoration: none;
        }

        .header {
            background: #000;
        }

        .logo {
            padding: 10px 0;
        }

        .nav-link:hover {
            color: #ff9601 !important;
        }

        .title-box {
            color: #ff8a00;
            text-decoration: none;
        }

        .title-box:hover {
            color: #ff8a00;
        }

        .bg-blur {
            background: rgba(0, 0, 0, .6);
        }

        .nav-link {
            color: #fff;
        }

        .nav-link:focus {
            color: #ff9601;
        }

        .icon-play {
            margin: auto;
            width: 60px;
            height: 60px;
            background: #ff9601;
            border-radius: 50%;
            visibility: hidden;
            transition: all .3s ease-in-out;
            opacity: 0;
            transform: scale(1.5);
        }

        .card-absolute .image img {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }

        .card-absolute {
            overflow: hidden;
        }

        .card-absolute:hover .icon-play {
            visibility: visible;
            transform: scale(1);
            opacity: .8;
        }

        .card-absolute:hover img {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        .color-white {
            color: #fff;
        }

        .max-width-100 {
            max-width: 100%;
        }

        .sub-title {
            font-size: 10px;
            background: linear-gradient(to right, #C02425 0%, #F0CB35 51%, #C02425 100%);
            padding: 4px;
            border-radius: 3px;
        }

        .sub-title::after {
            content: '';
            border-bottom: 6px solid #dd8b52;
            border-left: 6px solid transparent;
            display: block;
            border-right: 6px solid transparent;
            bottom: -9px;
            left: 50%;
            position: absolute;
            -webkit-transform: translate(-50%, -50%) rotate(180deg);
            transform: translate(-50%, -50%) rotate(180deg);
        }

        .show-all {
            font-size: 12px;
            color: #fff;
            font-weight: 600;
        }

        .bg-gray {
            background: #504d49;
        }

        .nav-link-category {
            font-size: 14px;
            transition: .3s ease-in-out;
        }

        .nav-link-category:hover {
            background: #ff8a00;
            color: #fff;
        }

        .slide {
            position: relative;
        }

        /*.slide .owl-nav {*/
        /*    position: absolute;*/
        /*    top: 35%;*/
        /*}*/

        .slide .owl-nav .owl-prev {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .slide .owl-nav .owl-next {
            position: absolute;
            right: 0;
            top: 30%;
        }
    </style>
</head>


<body>

<header class="header">
    <div class="container d-flex align-items-center">
        <div class="logo">
            <a class="nav-link ps-0" href="#">
                <h2>Movie</h2>
            </a>
        </div>
        <div class="navbar navbar-expand-sm">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Phim mới</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Phim lẻ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Phim bộ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thể loại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quốc gia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Năm phát hành</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<main class="container content">

    <div class="row slide">
        <div class="col-12">
            <h3 class="title-box py-4">Phim đề cử</h3>
        </div>
        <div class="col-12">
            <div class="owl-carousel owl-theme">
                <?php
                for ($i = 0;
                     $i < 9;
                     $i++){
                    ?>
                <div class="item">
                    <div class="col">
                        <div class="card-absolute position-relative">
                            <div class="image">
                                <img width="100%" src="{{ url('image/optimus.jpg') }}"/>
                            </div>
                            <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                                <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                            </div>
                            <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                            <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-2">
        <div class="col-12 py-4">
            <div class="category-title d-flex align-items-center">
                <h3>
                    <a class="title-box" href="#">Phim lẻ mới cập nhật</a>
                </h3>
                <ul class="nav ms-5">
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hành động</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Kinh dị</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hài hước</a></li>
                </ul>
                <a class="ms-auto show-all color-white">Xem tất cả</a>
            </div>
        </div>
        <div class="col" style="width: 40%; height: 100%">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" height="100%" src="{{ url('image/optimus.jpg') }}"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>

        <div class="col" style="width: 60%; height: 100%">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 g-2">
                <?php for ($i = 0;
                           $i < 6;
                           $i++){ ?>
                <div class="col">
                    <div class="card-absolute position-relative">
                        <div class="image">
                            <img width="100%" src="{{ url('image/optimus.jpg') }}"/>
                        </div>
                        <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                            <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                        </div>
                        <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                        <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>


        <?php for ($i = 0;
                   $i < 5;
                   $i++){ ?>
        <div class="col">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>
        <?php } ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-2">
        <div class="col-12 py-4">
            <div class="category-title d-flex align-items-center">
                <h3>
                    <a class="title-box" href="#">Phim lẻ mới cập nhật</a>
                </h3>
                <ul class="nav ms-5">
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hành động</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Kinh dị</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hài hước</a></li>
                </ul>
                <a class="ms-auto show-all color-white">Xem tất cả</a>
            </div>
        </div>
        <div class="col" style="width: 40%; height: 100%">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>

        <div class="col" style="width: 60%; height: 100%">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 g-2">
                <?php for ($i = 0;
                           $i < 6;
                           $i++){ ?>
                <div class="col">
                    <div class="card-absolute position-relative">
                        <div class="image">
                            <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                        </div>
                        <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                            <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                        </div>
                        <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                        <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>


        <?php for ($i = 0;
                   $i < 5;
                   $i++){ ?>
        <div class="col">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>
        <?php } ?>

    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-2">
        <div class="col-12 py-3">
            <div class="category-title d-flex align-items-center">
                <h3>
                    <a class="title-box" href="#">Phim lẻ mới cập nhật</a>
                </h3>
                <ul class="nav ms-5">
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hành động</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Kinh dị</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hài hước</a></li>
                </ul>
                <a class="ms-auto show-all color-white">Xem tất cả</a>
            </div>
        </div>
        <?php for ($i = 0;
                   $i < 7;
                   $i++){ ?>
        <div class="col">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>
        <?php } ?>


    </div>


    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-2">
        <div class="col-12 py-3">
            <div class="category-title d-flex align-items-center">
                <h3>
                    <a class="title-box" href="#">Phim chiếu rạp</a>
                </h3>
                <ul class="nav ms-5">
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hành động</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Kinh dị</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hài hước</a></li>
                </ul>
                <a class="ms-auto show-all color-white">Xem tất cả</a>
            </div>
        </div>
        <?php for ($i = 0;
                   $i < 7;
                   $i++){ ?>
        <div class="col">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>
        <?php } ?>


    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-2">
        <div class="col-12 py-3">
            <div class="category-title d-flex align-items-center">
                <h3>
                    <a class="title-box" href="#">Phim bộ mới cập nhật</a>
                </h3>
                <ul class="nav ms-5">
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hành động</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Kinh dị</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Hài hước</a></li>
                </ul>
                <a class="ms-auto show-all color-white">Xem tất cả</a>
            </div>
        </div>
        <?php for ($i = 0;
                   $i < 7;
                   $i++){ ?>
        <div class="col">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>
        <?php } ?>


    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-2">
        <div class="col-12 py-3">
            <div class="category-title d-flex align-items-center">
                <h3>
                    <a class="title-box" href="#">Phim thịnh hành</a>
                </h3>
                <ul class="nav ms-5">
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Phim lẻ thịnh
                            hành</a></li>
                    <li class="me-3"><a class="bg-gray p-1 color-white nav-link-category" href="#">Phim bộ thịnh
                            hành</a></li>
                </ul>
                <a class="ms-auto show-all color-white">Xem tất cả</a>
            </div>
        </div>
        <?php for ($i = 0;
                   $i < 7;
                   $i++){ ?>
        <div class="col">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>
        <?php } ?>


    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-2 g-lg-2">
        <div class="col-12 py-3">
            <div class="category-title d-flex align-items-center">
                <h3>
                    <a class="title-box" href="#">Phim sắp chiếu</a>
                </h3>
                <a class="ms-auto show-all color-white">Xem tất cả</a>
            </div>
        </div>
        <?php for ($i = 0;
                   $i < 7;
                   $i++){ ?>
        <div class="col">
            <div class="card-absolute position-relative">
                <div class="image">
                    <img width="100%" src="https://img.phimmoichilla.net/images/film/quan-gia-100-won.jpg"/>
                </div>
                <div class="body position-absolute bottom-0 start-0 end-0 px-2 py-1 bg-blur">
                    <span class="d-inline-block text-truncate max-width-100">Cậu bé siêu năng lực năng lực năng lực năng lực</span>
                </div>
                <span class="position-absolute top-0 start-0 sub-title">Tập 15-Vietsub</span>
                <a href="#" class="position-absolute top-0 bottom-0 start-0 end-0">
                        <span
                            class="position-absolute top-0 bottom-0 start-0 end-0 icon-play d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-play fs-2 bg-yellow ms-1 color-white"></i>
                        </span>
                </a>
            </div>
        </div>
        <?php } ?>


    </div>

</main>


<footer class="container mt-5">
    <h2>Footer</h2>
</footer>

<!-- <video width="320" height="240" controls>
    <source src="https://www.sample-videos.com/video123/mp4/720/big_buck_bunny_720p_20mb.mp4" type="video/mp4">
    <source src="https://www.sample-videos.com/video123/mp4/720/big_buck_bunny_720p_20mb.mp4" type="video/ogg">
  Your browser does not support the video tag.
  </video> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="{{ url('frontend/js/jquery.min.js') }}"></script>
<script src="{{ url('frontend/carousel/owl.carousel.min.js') }}"></script>
<script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
<script src="{{ url('frontend/js/carousel.js') }}"></script>

</body>
