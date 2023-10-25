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
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css')}}" rel="stylesheet">

    <!-- alert -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="login">
    <div>
        <div class="login_wrapper">

            <div class="animate form login_form">
                <section class="login_content">
                    @if($errors->any())
                    <ul style="color: red;">
                        @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{ route('xl-dang-ky') }}" method="POST" id="myform">
                        @csrf
                        <h1>Tạo tài khoản</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Tên người dùng" name="ten" />
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="Tên đăng nhập" name="ten_dang_nhap" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" name="email" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="mat_khau" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" name="confirm_password" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-secondary">Đăng ký</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link" style="font-size: 15px;">Bạn đã có tài khoản?
                                <a href="{{ route('dang-nhap') }}" class=" to_register" style="font-size: 20px;"> Đăng nhập </a>
                            </p>

                            <div class=" clearfix">
                            </div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> TimDoThatLac</h1>
                                <p>@timdoVTS.com hỗ trợ mọi quyền lợi của người dùng. Hãy tôn trọng quyền riêng tư và Điều khoản</p>
                            </div>
                        </div>
                    </form>
                    @if(session('error'))
                    <p style="color: red;">{{ session('error') }}</p>
                    @endif
                </section>
            </div>
        </div>
    </div>

</body>

<!-- <script>
    document.querySelector('button').addEventListener('click', (event) => {
        event.preventDefault();
        Swal.fire({
            title: 'Đăng ký',
            text: 'Chúc mừng bạn đăng ký thành công!',
            icon: 'success',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector('form').submit();
            }
        });
    });
</script> -->

<!-- <script>
    document.getElementById('myform').addEventListener('submit', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        });
    });
</script> -->



</html>