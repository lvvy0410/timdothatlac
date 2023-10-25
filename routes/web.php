<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CanhBaoLuaDaoController;
use App\Http\Controllers\HoSoController;
use App\Http\Controllers\MeoTimDocontroller;
use App\Http\Controllers\TrangChuController;
use App\Http\Controllers\ChiTietBaiDangController;
use App\Http\Controllers\BaiDangController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DangKyController;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Requests\DangNhapRequest;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// chưa đăng nhập
Route::get('/', [GuestController::class, 'trangchu'])->name('trang-chu');
Route::get('/trangchu', [GuestController::class, 'trangchu'])->name('trang-chu');
Route::get('/canhbaoluadao', [GuestController::class, 'canhbaoluadao'])->name('canh-bao-lua-dao');
Route::get('/meotimdo', [GuestController::class, 'meotimdo'])->name('meo-tim-do');
Route::get('/chitietbaidang/{id}', [GuestController::class, 'chitietbaidang'])->name('chi-tiet-bai-dang');
Route::get('/tim-kiem', [GuestController::class, 'timKiem'])->name('tim-kiem');
//liên hệ
Route::get('/lien-he', [GuestController::class, 'lienHe'])->name('lien-he');
Route::post('/lien-he', [GuestController::class, 'xuLyGuiLienHe'])->name('xl-gui-lien-he');

// đăng nhập
Route::get('dang-nhap', [DangNhapController::class, 'dangNhap'])->name('dang-nhap')->middleware('guest');
Route::post('dang-nhap', [DangNhapController::class, 'xyLyDangNhap'])->name('xl-dang-nhap')->middleware('guest');
Route::get('dang-xuat', [DangNhapController::class, 'dangXuat'])->name('da-dang-xuat')->middleware('auth');

// đăng ký user
Route::get('/dang-ky', [DangKyController::class, 'user'])->name('dang-ky');
Route::post('/dang-ky', [DangKyController::class, 'dangKyUser'])->name('xl-dang-ky');

// đăng ký admin
Route::get('/admin/them-moi-admin', [DangKyController::class, 'admin'])->name('admin-dang-ky');
Route::post('/admin/them-moi', [DangKyController::class, 'dangKyAdmin'])->name('admin-xl-dang-ky');

// người dùng đã đăng nhập
// chỉnh sửa bài đăng
Route::get('/user/chinh-sua-bai-dang/{id}', [UserController::class, 'chinhSuaBaiDang'])->name('user-chinh-sua-bai-dang');
Route::post('/user/chinh-sua-bai-dang/{id}', [UserController::class, 'xlChinhSuaBaiDang'])->name('user-xl-chinh-sua-bai-dang');

// xóa bài viết
Route::get('/user/xoa-bai-dang/{id}', [UserController::class, 'xoaBaiDang'])->name('user-xoa-bai-dang');

Route::get('/user/dangbai', [UserController::class, 'dangbai'])->name('user-dang-bai');
Route::post('/user/dangbai', [UserController::class, 'xldangbai'])->name('user-xl-bai-dang');
Route::get('/user/trangchu', [UserController::class, 'trangchu'])->name('user-trang-chu');
Route::get('/user/hoso', [UserController::class, 'hoso'])->name('user-ho-so');
Route::get('/user/canhbaoluadao', [UserController::class, 'canhbaoluadao'])->name('user-canh-bao-lua-dao');
Route::get('/user/meotimdo', [UserController::class, 'meotimdo'])->name('user-meo-tim-do');
Route::get('/user/chitietbaidang/{id}', [UserController::class, 'chitietbaidang'])->name('user-chi-tiet-bai-dang');
Route::get('/user/tim-kiem', [UserController::class, 'timKiem'])->name('user-tim-kiem');
//hồ sơ
Route::get('/user/chinh-sua-ho-so', [UserController::class, 'chinhSuaHoSo'])->name('user-chinh-sua-ho-so');
Route::post('/user/xl-chinh-sua-ho-so', [UserController::class, 'xlChinhSuaHoSo'])->name('user-xl-chinh-sua-ho-so');
//mật khẩu
Route::get('/user/chinh-sua-mat-khau', [UserController::class, 'chinhSuaMatKhau'])->name('user-chinh-sua-mat-khau');
Route::post('/user/xl-chinh-sua-mat-khau', [UserController::class, 'xlChinhSuaMatKhau'])->name('user-xl-chinh-sua-mat-khau');

//bình luận
Route::post('/user/binh-luan', [UserController::class, 'store'])->name('user-binh-luan');
Route::get('/user/binh-luan-all', [UserController::class, 'tatCaBinhLuan'])->name('user-binh-luan-all');
Route::post('/user/xoa-binh-luan/{id}', [UserController::class, 'xoaBinhLuan'])->name('user-xoa-binh-luan');


//báo cáo
Route::get('/user/xu-ly-bao-cao', [UserController::class, 'xlBaoCao'])->name('xl-bao-cao');
//theo dõi
Route::get('/user/xu-ly-theo-doi', [UserController::class, 'xlTheoDoi'])->name('xl-theo-doi');
Route::get('/user/xu-ly-huy-theo-doi', [UserController::class, 'xlHuyTheoDoi'])->name('xl-huy-theo-doi');

//liên hệ
Route::get('/user/lien-he', [UserController::class, 'lienHe'])->name('user-lien-he');
Route::post('/user/lien-he', [UserController::class, 'xuLyGuiLienHe'])->name('user-xl-gui-lien-he');


// chức năng admin
Route::get('/admin/trang_quan_ly', [AdminController::class, 'trangquanly'])->name('admin-trang-quan-ly');
Route::get('/admin/danh_sach_quan_tri_vien', [AdminController::class, 'danhsachquantrivien'])->name('admin-danh-sach');
Route::get('/admin/danh-sach-nguoi-dung', [AdminController::class, 'danhSachNguoiDung'])->name('admin-danh-sach-nguoi-dung');
Route::get('/admin/chi-tiet-bai-dang/{id}', [AdminController::class, 'chitietbaidang'])->name('admin-chi-tiet-bai-dang');
Route::get('/admin/ho-so', [AdminController::class, 'hoSo'])->name('admin-ho-so');
Route::get('/admin/chinh-sua-ho-so', [AdminController::class, 'chinhSuaHoSo'])->name('admin-chinh-sua-ho-so');
Route::post('/admin/xl-chinh-sua-ho-so', [AdminController::class, 'xlChinhSuaHoSo'])->name('admin-xl-chinh-sua-ho-so');
Route::get('/admin/chinh-sua-mat-khau', [AdminController::class, 'chinhSuaMatKhau'])->name('admin-chinh-sua-mat-khau');
Route::post('/admin/xl-chinh-sua-mat-khau', [AdminController::class, 'xlChinhSuaMatKhau'])->name('admin-xl-chinh-sua-mat-khau');
Route::get('/admin/tim-kiem', [AdminController::class, 'timKiem'])->name('admin-tim-kiem');

Route::get('/admin/danh-muc-mat-giay-to', [AdminController::class, 'danhMucMatGiayTo'])->name('admin-danh-muc-mat-giay-to');
Route::get('/admin/danh-muc-mat-dien-thoai', [AdminController::class, 'danhMucMatDienThoai'])->name('admin-danh-muc-mat-dien-thoai');
Route::get('/admin/danh-muc-mat-vi', [AdminController::class, 'danhMucMatVi'])->name('admin-danh-muc-mat-vi');
Route::get('/admin/danh-muc-mat-thu-cung', [AdminController::class, 'danhMucMatThuCung'])->name('admin-danh-muc-mat-thu-cung');

Route::get('/admin/danh-muc-nhat-giay-to', [AdminController::class, 'danhMucNhatGiayTo'])->name('admin-danh-muc-nhat-giay-to');
Route::get('/admin/danh-muc-nhat-dien-thoai', [AdminController::class, 'danhMucNhatDienThoai'])->name('admin-danh-muc-nhat-dien-thoai');
Route::get('/admin/danh-muc-nhat-vi', [AdminController::class, 'danhMucNhatVi'])->name('admin-danh-muc-nhat-vi');
Route::get('/admin/danh-muc-nhat-thu-cung', [AdminController::class, 'danhMucNhatThuCung'])->name('admin-danh-muc-nhat-thu-cung');

//danh sách bình luận
Route::get('/admin/danh-sach-binh-luan', [AdminController::class, 'danhSachBinhLuan'])->name('admin-danh-sach-binh-luan');
Route::get('/admin/xoa-binh-luan/{id}', [AdminController::class, 'xoaBinhLuan'])->name('admin-xoa-binh-luan');
//danh sách liên hệ
Route::get('/admin/quan-ly-lien-he', [AdminController::class, 'danhSachLienHe'])->name('admin-danh-sach-lien-he');
//danh sách tiêu đề
Route::get('/admin/danh-sach-tieu-de', [AdminController::class, 'danhSachTieuDe'])->name('admin-danh-sach-tieu-de');
// quản lý báo cáo
Route::get('/admin/quan-ly-bao-cao', [AdminController::class, 'danhMucBaoCao'])->name('admin-danh-sach-bao-cao');

// xóa bài viết
Route::get('/admin/xoa-bai-dang/{id}', [AdminController::class, 'xoaBaiDang'])->name('admin-xoa-bai-dang');
Route::get('/admin/xoa-tieu-de/{id}', [AdminController::class, 'xoaTieuDe'])->name('admin-xoa-tieu-de');
Route::get('/admin/xoa-nguoi-dung/{id}', [AdminController::class, 'xoaNguoiDung'])->name('admin-xoa-nguoi-dung');
Route::get('/admin/xoa-lien-he/{id}', [AdminController::class, 'xoaLienHe'])->name('admin-xoa-lien-he');
Route::get('/admin/xoa-bao-cao/{id}', [AdminController::class, 'xoaBaoCao'])->name('admin-xoa-bao-cao');
