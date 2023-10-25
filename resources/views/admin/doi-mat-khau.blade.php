<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tìm đồ thất lạc </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
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
                            <h3>Đổi mật khẩu <code>Quản trị viên</code> </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">

                                <div class="x_content">
                                    <form action="{{route('admin-xl-chinh-sua-mat-khau') }}" method="POST">
                                        @csrf

                                        <span class="section">Nhập đầy đủ thông tin</span>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mật khẩu cũ<span class="required"><code>*</code></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="password" name="mat_khau_cu" required='required' />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mật khẩu mới<span class="required"><code>*</code></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="password" id="password1" name="mat_khau" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" placeholder="Tối thiểu 8 ký tự và có một chữ cái viết hoa, một số và một ký tự đặc biệt" required />

                                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                                    <i id="slash" class="fa fa-eye-slash"></i>
                                                    <i id="eye" class="fa fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Xác nhận mật khẩu mới<span class="required"><code>*</code></span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="password" name="xac_nhan_mat_khau" data-validate-linked='mat_khau' required='required' />
                                            </div>
                                        </div>

                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Xác nhận</button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">

                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>

    <!-- Javascript functions	-->
    <script>
        function hideshow() {
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if (password.type === 'password') {
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            } else {
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }
    </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- validator -->
    <!-- <script src="../vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>

</body>

</html>