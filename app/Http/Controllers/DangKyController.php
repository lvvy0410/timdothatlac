<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use Illuminate\Http\Request;
use App\Http\Requests\DangKyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DangKyController extends Controller
{
    public function user()
    {
        return view('user\dang-ky');
    }
    public function admin()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                return view('admin\dang_ky_admin');
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }

    public function dangKyUser(DangKyRequest $request)
    {
        $dangKy = NguoiDung::create([
            'ten' => $request->ten,
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'mat_khau' => Hash::make($request->mat_khau),
            'so_dien_thoai' => null,
            'email' => $request->email,
            'dia_chi' => null,
            'loai'=>2
        ]);


        if (!empty($dangKy)) {
            return redirect()->route('dang-nhap');
        }
        return redirect()->route('dang-ky');
    }
    public function dangKyAdmin(Request $request)
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                $dangKy = NguoiDung::create([
                    'ten' => $request->ten,
                    'ten_dang_nhap' => $request->ten_dang_nhap,
                    'mat_khau' => Hash::make($request->mat_khau),
                    'so_dien_thoai' => $request->so_dien_thoai,
                    'email' => $request->email,
                    'dia_chi' => $request->dia_chi,
                    'loai' => 1
                ]);

                if (!empty($dangKy)) {
                    return redirect()->route('admin-trang-quan-ly');
                }
                echo "Đăng ký thất bại";
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
}
