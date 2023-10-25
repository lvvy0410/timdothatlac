<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangNhapRequest;
use Illuminate\Support\Facades\Auth;

class DangNhapController extends Controller
{
    public function index()
    {
        return view('user\trangchu');
    }
    public function dangnhap()
    {
        return view('user\dang-nhap');
    }
    public function xyLyDangNhap(DangNhapRequest $request)
    {
        $credentials = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password' => $request->password,
            'loai' => 1,
        ];
        $credentials2 = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password' => $request->password,
            'loai' => 2,
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin-trang-quan-ly');
        } else if (Auth::attempt($credentials2)) {
            return redirect()->route('user-trang-chu');
        }
        return redirect()->back()->with("error", "Đăng nhập không thành công. Kiểm tra lại tên đăng nhập và mật khẩu");
    }
    public function dangXuat()
    {
        Auth::logOut();
        return redirect()->route('dang-nhap');
    }
}
