<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thư viện sách Scammer</title>
    <link rel="stylesheet" href="/public/lib/bootstrap/bootstrap.min.css" />
    <script src="/public/lib/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/public/lib/jquery-3.6.3.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/public/css/Style_user.css" />
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">Thư viện scammer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-warning" href="">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="">Sách của tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="">Tài khoản</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="m-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('/public/img/slide/slice1.jpg')">
                    <div class="carousel-caption">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/public/img/slide/slice2.jpg')">
                    <div class="carousel-caption">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/public/img/slide/slice3.jpg')">
                    <div class="carousel-caption">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>


    <script>
        $(window).on("load", function() {
            $("body").addClass("loaded");
        });
    </script>
</body>

</html>