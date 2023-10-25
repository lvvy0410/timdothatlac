<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm đồ thất lạc</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
    <!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>

<body>

    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('user-trang-chu')}}">
                <i class="fas fa-film mr-2"></i>
                timdoVTS.com
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-1 active" aria-current="page" href="{{route('user-trang-chu')}}">Trang
                            Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2" href="{{route('user-dang-bai')}}">Đăng Bài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="{{route('user-meo-tim-do')}}">Mẹo Tìm Đồ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-4" href="{{route('user-canh-bao-lua-dao')}}">Cảnh Báo Lừa Đảo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-5" href="{{route('user-ho-so')}}">Hồ Sơ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{asset('img/hero.jpg')}}">
        <form class="d-flex tm-search-form" action="{{ route('user-tim-kiem') }}">
            <input class="form-control tm-search-input" name="tim_kiem" type="search" placeholder="Tìm kiếm" aria-label="Search" required>
            <button class="btn btn-outline-success tm-search-btn" type="submit" onclick="thongBao()">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Bài Đăng
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Trang <input type="text" value="{{ $lsDangBai->currentPage() }}" size="1" class="tm-input-paging tm-text-primary"> trên {{ $lsDangBai->lastPage() }}
                </form>
            </div>
            <div class="row tm-mb-90 tm-gallery">

                @foreach($lsDangBai as $data)
                @csrf

                <?php

                $i = explode('|', $data->anh,);
                $a = count($i) - 1;
                $b = $a * (-1);
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <?php
                        foreach (explode('|', $data->anh, $b) as $img) {
                        ?>
                            <img src="/images/{{ $img }}" alt="Image" class="img-fluid2">
                        <?php
                        }
                        ?>
                        <!-- <img src="/images/ " alt="Image" class="img-fluid2"> -->

                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>{{ $data->tieu_de }}</h2>
                            <a href="{{ route('user-chi-tiet-bai-dang',['id' => $data->id]) }}">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light" style="color: blue;"><?php $day = date_create($data->thoi_gian);
                                                                                echo date_format($day, 'd/m/Y H:i'); ?></span>
                        @if($data->loai == 0)
                        <span>Mất đồ</span>
                        @else
                        <span>Nhặt đồ</span>
                        @endif
                        <span>{{ $data->tinh_tp }}</span>

                    </div>
                </div>
                @endforeach

                {{ $lsDangBai->links('phan-trang') }}
            </div>
        </div>


    </div> <!-- container-fluid, tm-container-content -->

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Giới thiệu trang Tìm Đồ Thất Lạc</h3>
                    <h6>Đã bao giờ bạn bị rơi ví, mất giấy tờ, thất lạc thú cưng yêu quý của bạn chưa?</h6>
                    <p>Nếu đã từng lâm vào hoàn cảnh như vậy thì chắc chắn mọi người sẽ tìm cách để tìm lại những thứ mình bị mất.
                        Trang web <a rel="sponsored" href="{{route('user-trang-chu')}}">timdoVTS.com</a> được sinh ra để làm điều đó. </p>
                    <p>Tại đây mọi người có thể :

                    <div>- Đăng tin tìm đồ, nhặt được đồ.</div>
                    <div>- Đăng tin tìm thú cưng/ bắt được thú cưng bị lạc.</div>
                    <div>- Tìm người thân thất lạc/ gặp người thất lạc thì đăng tin giúp tìm người nhà.</div>
                    <div>- Đăng tin cho đồ không dùng nữa để người đang thiếu có thể lấy, tránh lãng phí tài nguyên cho xã hội.</div>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Thông tin liên hệ</h3>
                    <ul class="tm-footer-links pl-0">
                        <a>Có thể liên hệ qua các cách sau: </a> <br>
                        <a>- Qua email </a>
                        <ul>
                            <a class="tm-text-gray" rel="sponsored" target="_parent">0306201396@caothang.edu.vn</a>
                            <a class="tm-text-gray" rel="sponsored" target="_parent">0306201407@caothang.edu.vn</a>
                            <a class="tm-text-gray" rel="sponsored" target="_parent">0306201377@caothang.edu.vn</a>
                        </ul>
                        <a>- Qua form liên hệ </a>
                        <ul>
                            <li><a href="{{ route('user-lien-he') }}">form</a></li>
                        </ul>
                    </ul>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://www.facebook.com/kimson.chau.18"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <!-- <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                    <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Trang web được xây dựng năm 2022 từ trường Cao Đẳng Kỹ Thuật Cao Thắng
                </div>
                <div class="col-lg-4 col-md-10 col-20 px-20 text-right">
                    Được xây dựng bởi <a class="tm-text-gray" rel="sponsored" target="_parent">Đan Trường-Văn Vỹ-Kim Sơn</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/plugins.js')}}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>

</html>