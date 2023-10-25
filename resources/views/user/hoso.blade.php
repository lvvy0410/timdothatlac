<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm đồ thất lạc</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="client_assets/css/library/bootstrap/bootstrap-grid.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="base_assets/fonts/awesome-5-pro/css/custom.css"> -->
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('client_assets/css/styles-m.min.css')}}" type="text/css">
    <link rel="stylesheet" media="screen and (min-width: 992px)" href="{{asset('client_assets/css/styles-l.min.css')}}" type="text/css">
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
            <a class="navbar-brand" href="{{ route('user-trang-chu') }}">
                <i class="fas fa-film mr-2"></i>
                timdoVTS.com
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-1" href="{{ route('user-trang-chu') }}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2" href="{{ route('user-dang-bai') }}">Đăng Bài</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link nav-link-3" href="{{ route('user-meo-tim-do') }}">Mẹo tìm đồ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-4" href="{{ route('user-canh-bao-lua-dao') }}">Cảnh Báo Lừa Đảo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-5 active" aria-current="page" href="{{ route('user-ho-so') }}">Hồ sơ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{asset('img/hero.jpg')}}"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <div class="col-lg-4 col-12 mb-5">
                <h2 class="tm-text-primary mb-5" style="font-size: 30px;">Danh mục hồ sơ</h2>
                <div class="aduvjp">
                    <div class="sidebar-left sticky-top">
                        <div class="block user-information">
                            <div class="user-information__head">
                                <div class="user-avatar">
                                    <p>{{ substr(Auth::user()->ten,0,1) }}</p>
                                </div>
                                <div class="full-name">
                                    {{Auth::user()->ten}}
                                </div>
                                <div class="email">
                                    {{Auth::user()->email}}
                                </div>

                            </div>
                            <div class="user-information__body">
                                <div class="user-info-menu">
                                    <ul>
                                        <li>
                                            <a href='javascript:window.scrollTo(maxWidth,maxHeight/3)'>
                                                Thông tin chung</a>
                                        </li>
                                        <li>
                                            <script type='text/javascript'>
                                                var maxWidth = (document.body.clientWidth);
                                                var maxHeight = (document.body.clientHeight);
                                            </script>
                                            <a href='javascript:window.scrollTo(maxWidth,maxHeight/0.9)'>
                                                Bài đăng của tôi</a>
                                        </li>
                                        <li>
                                            <a href="{{route('user-chinh-sua-mat-khau')}}">
                                                Đổi mật khẩu</a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" href="{{route('da-dang-xuat')}}" type="submit">
                                                Đăng xuất
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-5">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5" style="font-size: 30px;">Thông tin cá nhân</h2>
                    <div class="aduvjp">
                        <div class="contents">


                            <div class="create-post">
                                <div class="create-post__head">
                                    <h1>Thông tin tài khoản</h1>
                                </div>
                                <div class="create-post__body">

                                    <div class="field-2">
                                        <div class="field field-2-left">
                                            <h5>Họ và tên:</h5>
                                            <p>{{Auth::user()->ten}}</p>
                                            <div class="field">
                                                <h5>Số điện thoại:</h5>
                                                <p>

                                                    <?php
                                                    if (Auth::user()->so_dien_thoai == null) {
                                                        echo '<p style="color: red;">Chưa cập nhật</p>';
                                                    } else {
                                                        echo Auth::user()->so_dien_thoai;
                                                    }
                                                    ?>

                                                </p>
                                            </div>
                                        </div>
                                        <div class="field field-2-right">
                                            <div class="field">
                                                <h5>Địa chỉ:</h5>
                                                <p>
                                                    <?php
                                                    if (Auth::user()->dia_chi == null) {
                                                        echo '<p style="color: red;">Chưa cập nhật</p>';
                                                    } else {
                                                        echo Auth::user()->dia_chi;
                                                    }
                                                    ?>
                                                    </span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field text">
                                        <div class="control">
                                            <a rel="nofollow" href="{{ route('user-chinh-sua-ho-so') }}" class="btn-secondary" type="submit">
                                                Chỉnh sửa
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="tm-text-primary mb-5" style="font-size: 30px;">Địa điểm của bạn</h2>
                <!-- Map -->
                <div class=" mapouter mb-4">
                    <div class="gmap-canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5178265418617!2d106.70135160000001!3d10.771595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40a3b49e59%3A0xa1bd14e483a602db!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEvhu7kgdGh14bqtdCBDYW8gVGjhuq9uZw!5e0!3m2!1svi!2s!4v1667108734615!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </div>

        <!-- //======================================Chỉnh sửa================================================================================ -->
        <div class="container-fluid tm-container-content tm-mt-60">
            <div class="row mb-4">
                <h2 class="col-6 tm-text-primary" style="font-size: 30px;">
                    Bài đăng của tôi
                    <br>    </br>
                </h2>
                
                <div class="x_content">
                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist" style="padding-bottom: 10px;">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cá nhân</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đang theo dõi</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row tm-mb-90 tm-gallery">
                                @foreach($lsDangBai as $baiDangUser)
                                @csrf
                                <?php
                                $i = explode('|', $baiDangUser->anh);
                                $a = count($i) - 1;
                                $b = $a * (-1);
                                if ($baiDangUser->nguoi_dung_id == $users) {
                                ?>

                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                                        <figure class="effect-ming tm-video-item">
                                            <?php
                                            foreach (explode('|', $baiDangUser->anh, $b) as $img) {
                                            ?>
                                                <img src="/images/{{ $img }}" alt="Image" class="img-fluid2">
                                            <?php
                                            }
                                            ?>
                                            <!-- <img src="/images/ " alt="Image" class="img-fluid2"> -->

                                            <figcaption class="d-flex align-items-center justify-content-center">
                                                <h2>{{ $baiDangUser->tieu_de }}</h2>
                                                <a href="{{ route('user-chi-tiet-bai-dang',['id' => $baiDangUser->id]) }}">View more</a>
                                            </figcaption>
                                        </figure>
                                        <div class="d-flex justify-content-between tm-text-gray">
                                            <span class="tm-text-gray-light" style="color: blue;"><?php $day = date_create($baiDangUser->thoi_gian);
                                                                                                    echo date_format($day, 'd/m/Y H:i'); ?></span>
                                            @if($baiDangUser->loai == 0)
                                            <span>Mất đồ</span>
                                            @else
                                            <span>Nhặt đồ</span>
                                            @endif
                                            <span>{{ $baiDangUser->tinh_tp }}</span>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                @endforeach
                            
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row tm-mb-90 tm-gallery">
                                @foreach($lsDangBaiTD as $baiDangTD)
                                @csrf
                                <?php
                                $i = explode('|', $baiDangTD->anh);
                                $a = count($i) - 1;
                                $b = $a * (-1);
                                if ($baiDangTD->nguoi_dung_id == $users) {
                                ?>

                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                                        <figure class="effect-ming tm-video-item">
                                            <?php
                                            foreach (explode('|', $baiDangTD->anh, $b) as $img) {
                                            ?>
                                                <img src="/images/{{ $img }}" alt="Image" class="img-fluid2">
                                            <?php
                                            }
                                            ?>

                                            <figcaption class="d-flex align-items-center justify-content-center">
                                                <h2>{{ $baiDangTD->tieu_de }}</h2>
                                                <a href="{{ route('user-chi-tiet-bai-dang',['id' => $baiDangTD->bai_dang_id]) }}">View more</a>
                                            </figcaption>
                                        </figure>
                                        <div class="d-flex justify-content-between tm-text-gray">
                                            <span class="tm-text-gray-light" style="color: blue;"><?php $day = date_create($baiDangTD->thoi_gian);
                                                                                                    echo date_format($day, 'd/m/Y H:i'); ?></span>
                                            @if($baiDangTD->loai == 0)
                                            <span>Mất đồ</span>
                                            @else
                                            <span>Nhặt đồ</span>
                                            @endif
                                            <span>{{ $baiDangTD->tinh_tp }}</span>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                @endforeach
                             
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- //======================================Chỉnh sửa================================================================================ -->

        <!-- container-fluid, tm-container-content  -->

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
                                <li><a href="">form</a></li>
                            </ul>
                        </ul>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                        <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                            <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
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