<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiDang;
use App\Models\BaoCao;
use App\Models\BinhLuan;
use App\Models\LienHe;
use App\Models\LoaiDoVat;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dangbai()
    {
        return view('admin\dangbai');
    }
    public function xldangbai(Request $request)
    {
        $baiDang = BaiDang::create([
            'loai' => $request->loai_tin,
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'tinh_tp' => $request->tinh_tp,
            'quan_huyen' => $request->quan_huyen,
            'phuong_xa' => $request->phuong_xa,
            'thoi_gian' => $request->thoi_gian,
            'so_dien_thoai' => $request->so_dien_thoai,
            'anh' => $request->file('image')->getClientOriginalName(),
            'path' => $request->file('image')->store('public/images'),
            $file = $request->image,
            $file_name = $file->getClientOriginalName(),
            $file->move(public_path('images'), $file_name),
            $request->merge(['image' => $file_name]),
        ]);

        if (!empty($baiDang)) {
            return redirect()->route('admin-dang-bai');
        }
        return redirect()->route('admin-trang-quan-ly');
    }
    public function trangquanly()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                $lsLoaiDoVat = LoaiDoVat::all();
                $lsDangBaiAll = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
                $lsDangBaiMat = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->where('loai', '0')->get();
                $lsDangBaiNhat = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->where('loai', '1')->get();
                $lsUser = NguoiDung::all();
                return view('admin\trang_quan_ly', compact('lsDangBaiAll', 'lsUser', 'lsDangBaiMat', 'lsDangBaiNhat', 'lsLoaiDoVat'));
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function danhsachquantrivien()
    {
        // $lsQuanTriVien = NguoiDung::all();
        // return view('admin\danh_sach_quan_tri_vien', compact('lsQuanTriVien'));
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                $lsQuanTriVien = DB::table('nguoi_dung')->where('loai', '1')->get();
                return view('admin\danh_sach_quan_tri_vien')->with(compact('lsQuanTriVien'));
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function danhSachNguoiDung()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                $lsNguoiDung = DB::table('nguoi_dung')->whereNull('deleted_at')->where('loai', '2')->get();
                return view('admin\danh-sach-nguoi-dung')->with(compact('lsNguoiDung'));
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function hoSo()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                return view('admin\ho-so-admin');
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function canhbaoluadao()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                return view('admin/canhbaoluadao');
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function meotimdo()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                return view('admin/meotimdo');
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function chitietbaidang($id)
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                $lsDangBai = BaiDang::find($id);
                $lsUser = NguoiDung::all();
                return view('admin\chi-tiet-bai-dang', compact('lsDangBai', 'lsUser'));
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function chinhSuaHoSo()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                return view('admin\chinh-sua-ho-so');
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function xlChinhSuaHoSo(Request $request)
    {

        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                $nguoi_dung = NguoiDung::find(Auth::id());
                if ($request->ten != null) {
                    $nguoi_dung->ten = $request->ten;
                }
                if ($request->so_dien_thoai != null) {
                    $nguoi_dung->so_dien_thoai = $request->so_dien_thoai;
                }
                if ($request->email != null) {
                    $nguoi_dung->email = $request->email;
                }
                if ($request->dia_chi != null) {
                    $nguoi_dung->dia_chi = $request->dia_chi;
                }
                $nguoi_dung->save();
                return redirect()->route('admin-ho-so');
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function chinhSuaMatKhau()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                return view('admin\doi-mat-khau');
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function xlChinhSuaMatKhau(Request $request)
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                $nguoi_dung = NguoiDung::find(Auth::id());
                if (
                    $request->mat_khau != null
                    && $request->mat_khau == $request->xac_nhan_mat_khau
                ) {
                    //if('123123'==$request->mat_khau_cu)
                    if (Hash::check($request->mat_khau_cu, $nguoi_dung->mat_khau)) {
                        $nguoi_dung->mat_khau = Hash::make($request->mat_khau);
                        $nguoi_dung->save();
                        return redirect()->route('admin-ho-so');
                    }
                }
                return redirect()->route('admin-chinh-sua-mat-khau');
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }
    public function timKiem(Request $request)
    {
        $lsUser = NguoiDung::all();
        $lsDangBai = BaiDang::select('bai_dang.*', 'loai_do_vat.ten', 'nguoi_dung.ten')->join('loai_do_vat', 'bai_dang.loai_do_vat_id', '=', 'loai_do_vat.id')
            ->join('nguoi_dung', 'bai_dang.nguoi_dung_id', '=', 'nguoi_dung.id')
            ->where('tieu_de', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('loai_do_vat.ten', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('loai_do_vat.ten', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('nguoi_dung.ten', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('noi_dung', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('bai_dang.so_dien_thoai', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('thoi_gian', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('tinh_tp', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('quan_huyen', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('phuong_xa', 'like', '%' . $request->tim_kiem . '%')->paginate(16);
        return view('admin\tim-kiem', compact('lsDangBai', 'lsUser'));
    }

    public function danhMucMatGiayTo()
    {
        $lsUser = DB::table('nguoi_dung')->get();
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->where('loai_do_vat_id', '1')->where('loai', '0')->paginate(16);
        return view('admin\danh-muc', compact('lsDangBai', 'lsUser'));
    }

    public function danhMucMatDienThoai()
    {
        $lsUser = DB::table('nguoi_dung')->get();
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->where('loai_do_vat_id', '2')->where('loai', '0')->paginate(16);
        return view('admin\danh-muc', compact('lsDangBai', 'lsUser'));
    }
    public function danhMucMatVi()
    {
        $lsUser = DB::table('nguoi_dung')->get();
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->where('loai_do_vat_id', '3')->where('loai', '0')->paginate(16);
        return view('admin\danh-muc', compact('lsDangBai', 'lsUser'));
    }

    public function danhMucMatThuCung()
    {
        $lsUser = DB::table('nguoi_dung')->get();
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->where('loai_do_vat_id', '4')->where('loai', '0')->paginate(16);
        return view('admin\danh-muc', compact('lsDangBai', 'lsUser'));
    }

    public function danhMucNhatGiayTo()
    {
        $lsUser = DB::table('nguoi_dung')->get();
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->where('loai_do_vat_id', '1')->where('loai', '1')->paginate(16);
        return view('admin\danh-muc', compact('lsDangBai', 'lsUser'));
    }

    public function danhMucNhatDienThoai()
    {
        $lsUser = DB::table('nguoi_dung')->get();
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->where('loai_do_vat_id', '2')->where('loai', '1')->paginate(16);
        return view('admin\danh-muc', compact('lsDangBai', 'lsUser'));
    }
    public function danhMucNhatVi()
    {
        $lsUser = DB::table('nguoi_dung')->get();
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->where('loai_do_vat_id', '3')->where('loai', '1')->paginate(16);
        return view('admin\danh-muc', compact('lsDangBai', 'lsUser'));
    }

    public function danhMucNhatThuCung()
    {
        $lsUser = DB::table('nguoi_dung')->get();
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->where('loai_do_vat_id', '4')->where('loai', '1')->paginate(16);
        return view('admin\danh-muc', compact('lsDangBai', 'lsUser'));
    }

    public function danhSachBinhLuan()
    {
        $lsBinhLuan = BinhLuan::whereNull('deleted_at')->get();
        return view('admin\danh-sach-binh-luan', compact('lsBinhLuan'));
    }

    public function danhSachTieuDe()
    {
        $lsDangBai = BaiDang::get();
        return view('admin\danh-sach-tieu-de', compact('lsDangBai'));
    }

    public function danhSachLienHe()
    {
        $lsLienHe = LienHe::whereNull('deleted_at')->get();
        return view('admin\danh-sach-lien-he', compact('lsLienHe'));
    }

    public function danhMucBaoCao()
    {
        if (Auth::id() != null) {
            $admin = Auth::user();
            if ($admin->loai == 1) {
                $lsBaoCao = BaoCao::all();
                $lsDangBaiAll = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
                $lsNguoiDung = DB::table('nguoi_dung')->where('loai', '2')->get();
                return view('admin\danh-sach-bao-cao')->with(compact('lsBaoCao', 'lsDangBaiAll', 'lsNguoiDung'));
            } else {
                return redirect()->route('user-trang-chu');
            }
        } else {
            return redirect()->route('trang-chu');
        }
    }

    public function xoaBaiDang($id)
    {
        $baiDang = BaiDang::find($id);
        $BaoCao = BaoCao::where('bai_dang_id', $id);
        $BinhLuan = BinhLuan::where('bai_dang_id', $id);
        $BinhLuan->delete();
        $baiDang->delete();
        $BaoCao->delete();
        return redirect()->route('admin-trang-quan-ly');
    }


    public function xoaBaoCao($id)
    {
        $baiDang = BaiDang::find($id);
        $BaoCao = BaoCao::where('bai_dang_id', $id);
        $BinhLuan = BinhLuan::where('bai_dang_id', $id);
        $BinhLuan->delete();
        $baiDang->delete();
        $BaoCao->delete();
        return redirect()->route('admin-danh-sach-bao-cao');
        // $baiDang = BaiDang::find($id1);
        // $BaoCao = BaoCao::find($id2);
        // $BinhLuan = BinhLuan::where('bai_dang_id', $id1)->delete();
        // $baiDang->delete();
        // $BaoCao->delete();
        // return redirect()->route('admin-danh-muc-bao-cao');
    }

    public function xoaBinhLuan($id)
    {
        $BinhLuan = BinhLuan::where('id', $id)->delete();
        return redirect()->route('admin-danh-sach-binh-luan');
    }

    public function xoaNguoiDung($id)
    {
        $nguoiDung = NguoiDung::where('id', $id)->delete();
        return redirect()->route('admin-danh-sach-nguoi-dung');
    }

    public function xoaTieuDe($id)
    {
        $baiDang = BaiDang::find($id);
        $BaoCao = BaoCao::where('bai_dang_id', $id);
        $BinhLuan = BinhLuan::where('bai_dang_id', $id);
        $BinhLuan->delete();
        $baiDang->delete();
        $BaoCao->delete();
        return redirect()->route('admin-danh-sach-tieu-de');
    }

    public function xoaLienHe($id)
    {
        $lienHe = LienHe::where('id', $id)->delete();
        return redirect()->route('admin-danh-sach-lien-he');
    }
}
