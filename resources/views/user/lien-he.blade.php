<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm đồ thất lạc</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css')}}">
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

    <div class="container-fluid tm-mt-10" style="margin-left: 600px;">

        <div class="row tm-mb-50">
            <div class="col-lg-4 col-12 mb-5">
                <h2 class="tm-text-primary mb-4">Liên hệ - Góp ý</h2>
                <form action="{{ route('user-xl-gui-lien-he') }}" method="POST" class="tm-contact-form mx-auto">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="ten_nguoi_lien_he" class="form-control rounded-0" placeholder="Họ và tên" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control rounded-0" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="so_dien_thoai" class="form-control rounded-0" placeholder="Số điện thoại" />
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="noi_dung" class="form-control rounded-0" placeholder="Nội dung"></textarea>
                    </div>
                    <div class="form-group tm-text-right">
                        <button style="display: inline;" type="submit" class="btn btn-primary">Gửi</button>
                    </div>
                </form>
                <a href="{{ route('user-trang-chu') }}" style="display: inline;" class="btn btn-primary">Quay lại</a>
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

    <script src="{{ asset('js/plugins.js')}}">
    </script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>

</html>