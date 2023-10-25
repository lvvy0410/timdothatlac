<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Tìm đồ thất lạc </title>
    <!-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/templatemo-style.css') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ route('admin-trang-quan-ly') }}" class="site_title"><i class="fa fa-paw"></i> <span>Tìm đồ thất lạc</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{Auth::user()->ten}}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Danh mục quản lý</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ route('admin-trang-quan-ly') }}"><i class="fa fa-home"></i> Trang chủ <span"></span></a>
                                </li>
                                <li><a><i class="fa fa-sitemap"></i> Quản lý đồ thất lạc <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a>Mất đồ<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li class="sub_menu"><a href="{{ route('admin-danh-muc-mat-giay-to')}}">Giấy tờ</a>
                                                </li>
                                                <li class="sub_menu"><a href="{{ route('admin-danh-muc-mat-dien-thoai')}}">Điện thoại</a>
                                                </li>
                                                <li><a href="{{ route('admin-danh-muc-mat-vi')}}">Ví</a>
                                                </li>
                                                <li class="sub_menu"><a href="{{ route('admin-danh-muc-mat-thu-cung')}}">Thú cưng</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Nhặt đồ<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li class="sub_menu"><a href="{{ route('admin-danh-muc-nhat-giay-to')}}">Giấy tờ</a>
                                                </li>
                                                <li class="sub_menu"><a href="{{ route('admin-danh-muc-nhat-dien-thoai')}}">Điện thoại</a>
                                                </li>
                                                <li><a href="{{ route('admin-danh-muc-nhat-vi')}}">Ví</a>
                                                </li>
                                                <li class="sub_menu"><a href="{{ route('admin-danh-muc-nhat-thu-cung')}}">Thú cưng</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> Quản lý quản trị viên <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('admin-danh-sach') }}">Danh sách quản trị viên</a></li>
                                        <li><a href="{{ route('admin-dang-ky') }}">Thêm quản trị viên</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-users"></i> Quản lý người dùng <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('admin-danh-sach-nguoi-dung') }}">Danh sách người dùng</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Quản lý nội dung <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="tables.html">Mẹo tìm đồ</a></li>
                                        <li><a href="tables_dynamic.html">Cảnh báo lừa đảo</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Quản lý nội dung khác <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('admin-danh-sach-tieu-de') }}">Tiêu đề</a></li>
                                        <li><a href="{{ route('admin-danh-sach-binh-luan') }}">Bình luận</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Hỗ trợ - Báo cáo</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Bài viết bị báo cáo <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('admin-danh-sach-bao-cao') }}">Danh sách báo cáo</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-windows"></i> Hỗ trợ người dùng <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('admin-danh-sach-lien-he') }}">Danh sách liên hệ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>





            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('images/img.jpg')}}" alt="">{{Auth::user()->ten}}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin-ho-so') }}"> Hồ sơ</a>
                                    <a class="dropdown-item" href="{{ route('da-dang-xuat') }}"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
                                </div>
                            </li>

                            <!-- sẽ tận dụng cho chức năng nhắn tin -->

                            <!-- <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->

            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>
                    <div class="tm-text-gray-dark reposts">
                        <span class="repost-2">
                            <a style="font-size: 20px" onclick="quay_lai_trang_truoc()" class="tm-text-gray-dark" data-toggle="tooltip" data-placement="bottom" title="Thoát trang chi tiết"><i class="fa fa-times repost-1-b"></i></a>
                        </span>
                    </div>
                    <div class="row tm-mb-90">
                        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                            <!-- /*=========COPY============*/ -->

                            <div class="display-container">

                                <?php
                                $item = explode('|', $lsDangBai->anh);
                                if (count($item) > 1) {
                                    foreach (explode('|', $lsDangBai->anh) as $img) {
                                ?>
                                        <img class="mySlides" src="/images/{{ $img }}">
                                    <?php
                                    }
                                    ?>
                                    <button class="image-button button-left" onclick="plusDivs(-1)">&#10094;</button>
                                    <button class="image-button button-right" onclick="plusDivs(1)">&#10095;</button>
                                    <?php
                                } else {
                                    foreach (explode('|', $lsDangBai->anh) as $img) {
                                    ?>
                                        <img class="mySlides" src="/images/{{ $img }}">
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <!-- /*=========COPY============*/ -->
                        </div>


                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">


                            <div class="tm-bg-gray tm-video-details">

                                <div class="row mb-4">

                                    <h1 class="col-12 tm-text-primary">{{ $lsDangBai->tieu_de }}</h1>
                                </div>

                                <div class="mb-4">
                                    <h4 class="tm-text-gray-dark mb-3">
                                        Người đăng:
                                        <a style="color: black;">
                                            <?php
                                            foreach ($lsUser as $nguoidung) {
                                                if ($nguoidung->id == $lsDangBai->nguoi_dung_id) {
                                                    echo $nguoidung->ten;
                                                }
                                            } ?>
                                        </a>
                                    </h4>
                                </div>

                                <div>
                                    <h4 class="tm-text-gray-dark mb-3">Loại tin:
                                        @if($lsDangBai->loai == 0)
                                        <span class="tm-text-gray-dark"> Mất đồ</span>
                                        @else
                                        <span class="tm-text-gray-dark"> Nhặt đồ</span>
                                        @endif
                                    </h4>
                                </div>

                                <div class="mb-4 d-flex flex-wrap">
                                    <h4 class="tm-text-gray-dark mb-3">
                                        Thời gian: <span class="tm-text-primary">{{ $lsDangBai->thoi_gian }}</span>

                                    </h4>
                                </div>

                                <div class="mb-4">
                                    <h3 class="tm-text-gray-dark mb-3">Nội dung</h3>
                                    <h2>{{ $lsDangBai->noi_dung }}</h2>
                                </div>
                                <div>
                                    <h3 class="tm-text-gray-dark mb-3">Địa điểm</h3>
                                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">{{ $lsDangBai->phuong_xa }}</a>
                                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">{{ $lsDangBai->quan_huyen }}</a>
                                    <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">{{ $lsDangBai->tinh_tp }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
            <!-- /page content -->

        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js')}}"></script>



    <script src="{{ asset('/js/plugins.js') }}"></script>
    <script src="{{ asset('/js/hinh.js') }}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>

    <script>
        function quay_lai_trang_truoc() {
            history.back();
        }
    </script>

</body>

</html>