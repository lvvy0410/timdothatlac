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
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Danh sách Quản trị viên</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Tìm</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Danh sách</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">



                                    <!-- start project list -->
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">STT</th>
                                                <th style="width: 20%">Tên Quản trị viên</th>
                                                <th>Tên đăng nhập</th>
                                                <th>Số điện thoại</th>
                                                <th>Trạng thái</th>
                                                <th style="width: 20%">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            foreach ($lsQuanTriVien as $data) {
                                                $i++;
                                            ?>
                                                @csrf
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <a>{{ $data->ten }}</a>

                                                    </td>
                                                    <td>
                                                        <a>{{ $data->ten_dang_nhap }}</a>
                                                    </td>
                                                    <td>
                                                        <a>{{ $data->so_dien_thoai }}</a>
                                                    </td>
                                                    <td>
                                                        @if($data->trang_thai == 1)
                                                        <button type="button" class="btn btn-success btn-xs">Online</button>
                                                        @else
                                                        <button type="button" class="btn btn-danger btn-xs">Offline</button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Xem chi tiết </a>
                                                        <!-- <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a> -->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <!-- end project list -->

                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>