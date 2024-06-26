<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm đồ thất lạc</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        function chooseFile(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>

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
                        <a class="nav-link nav-link-2 active" aria-current="page" href="{{ route('user-dang-bai') }}">Đăng Bài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="{{ route('user-meo-tim-do') }}">Mẹo tìm đồ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-4" href="{{ route('user-canh-bao-lua-dao') }}">Cảnh Báo Lừa Đảo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-5" href="{{ route('user-ho-so') }}">Hồ Sơ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{asset('img/hero.jpg')}}"></div>
    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <!-- <div class="col-lg-4 col-12 mb-5">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5">Our Address</h2>
                    <p class="tm-mb-50">Quisque eleifend mi et nisi eleifend pretium. Duis porttitor accumsan arcu id
                        rhoncus. Praesent fermentum venenatis ipsum, eget vestibulum purus. </p>
                    <p class="tm-mb-50">Nulla ut scelerisque elit, in fermentum ante. Aliquam congue mattis erat, eget
                        iaculis enim posuere nec. Quisque risus turpis, tempus in iaculis.</p>
                    <address class="tm-text-gray tm-mb-50">
                        120-240 Fusce eleifend varius tempus<br>
                        Duis consectetur at ligula 10660
                    </address>
                    <ul class="tm-contacts">
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-envelope"></i>
                                Email: info@company.com
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                Tel: 010-020-0340
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-globe"></i>
                                URL: www.company.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div> -->
            <form action="{{ route('user-xl-bai-dang') }}" enctype="multipart/form-data" id="form-dang-nhap" method="POST">
                @csrf
                <div class="col-lg-4 col-12 mb-5">
                    <h2 class="tm-text-primary mb-5">Đăng Tin Mới</h2>
                </div>
                <div class="col-lg-4 col-12 mb-5" id="content">
                    <div class="form-group">
                        <h5>Tiêu Đề<code> *</code></h5>
                        <textarea rows="8" style="height: 50px;" name="tieu_de" class="form-control rounded-0 khung" id="wi-he" placeholder="Tiêu đề: " required=""></textarea>
                    </div>
                    <div class="form-group">
                        <select style="display: inline;" class="form-control" id="contact-select" name="loai_tin" required="">
                            <option value="">Chọn loại tin</option>
                            <option value="0">Tin mất đồ</option>
                            <option value="1">Tin nhặt đồ</option>
                        </select>
                        <code>*</code>
                    </div>
                    <div class="form-group">
                        <select style="display: inline;" class="form-control" id="contact-select" name="loai_do_vat">
                            <option value="">Chọn loại đồ vật</option>
                            @foreach($lsLoaiDoVat as $loaiDoVat)
                            <option value="{{ $loaiDoVat->id }}"> {{$loaiDoVat->ten}}</option>
                            @endforeach
                        </select>
                        <code>*</code>
                    </div>
                    <div class="form-group">
                        <div>
                            <h5>Thời Gian</h5>
                            <input type="datetime-local" id="meeting-time" name="thoi_gian" min="2018-06-07T00:00" max="2023-12-31T00:00">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Số Điện Thoại</h5>
                        <input class="form-control" type="text" name="so_dien_thoai">
                    </div>
                </div>

                <div class="col-lg-4 col-12 mb-5" id="content-1">
                    <div class="tm-address-col">

                        <div class="form-group">
                            <h5>Khu Vực</h5>
                            <input style="display: inline;" required="" class="form-control" type="text" name="tinh_tp" placeholder="Tỉnh/Thành phố">
                            <code>*</code>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="quan_huyen" placeholder="Quận/Huyện">
                        </div>ss
                        <div class="form-group">
                            <input class="form-control" type="text" name="phuong_xa" placeholder="Phường/Xã">
                        </div>
                        <div class="form-group">
                            <h5>Nội Dung<code> *</code></h5>
                            <textarea rows="8" style="height: 50px;" name="noi_dung" class="form-control rounded-0 khung" placeholder="Nội dung" required=""></textarea>
                        </div>
                        <div class="form-group tm-text-right" id="button">
                            <button type="submit" class="btn btn-primary">Đăng Bài</button>
                        </div>
                    </div>
                </div>
                <div id="content-2">
                    <h5>Chọn hình</h5>
                    <img src="" alt="" id="image" width="250px" height="250px">
                    <input type="file" id="imageFile" name="image[]" multiple onchange="chooseFile(this)" accept="image/gif, image/jpeg, image/png, image/jpg">
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>

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
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
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