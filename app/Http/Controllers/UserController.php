<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiDang;
use App\Models\BinhLuan;
use App\Models\NguoiDung;
use App\Models\LoaiDoVat;
use App\Models\TheoDoi;
use App\Models\BaoCao;
use App\Models\LienHe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UserController extends Controller
{
    public function dangbai()
    {
        $lsLoaiDoVat = LoaiDoVat::all();
        return view('user\dangbai', compact('lsLoaiDoVat'));
    }
    public function xldangbai(Request $request)
    {
        $image = array();
        $path = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                //$upload_path = 'public/images/';
                //$image_url = $upload_path . $image_full_name;
                $path[] = $file->move('images', $image_full_name, 'public');
                $image[] = $image_full_name;
            }
        }
        $user = Auth::id();
        $baiDang = BaiDang::create([
            // 'loai_do_vat_id' => $request->loai_do_vat,
            'loai_do_vat_id' => 1,
            'nguoi_dung_id' => $user,
            'loai' => $request->loai_tin,
            'tieu_de' => $request->tieu_de,
            'noi_dung' => $request->noi_dung,
            'tinh_tp' => $request->tinh_tp,
            'quan_huyen' => $request->quan_huyen,
            'phuong_xa' => $request->phuong_xa,
            'thoi_gian' => $request->thoi_gian,
            'so_dien_thoai' => $request->so_dien_thoai,
            //$img = $request->file('image'),
            //'anh' => $request->file('image')->getClientOriginalName(),
            'anh' => implode('|', $image),
            'path' => implode('|', $path),



            //$file = $request->image,
            //$file_name = $file->getClientOriginalName(),
            //$file->move(public_path('images'), $file_name),
            //$request->merge(['image' => $file_name]),

        ]);

        if (!empty($baiDang)) {
            return redirect()->route('user-dang-bai');
        }
        return redirect()->route('user-trang-chu');
    }
    public function trangchu()
    {
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->paginate(16);
        // $lsDangBaiMat = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->where('loai', '0')->paginate(1);
        // $lsDangBaiNhat = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->where('loai', '1')->paginate(1);
        $lsUser = NguoiDung::all();
        return view('user\trangchu', compact('lsDangBai', 'lsUser'));
    }
    public function hoso()
    {
        // $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->get();
        // $lsBaiDangTD = DB::table('theo_doi')
        //     ->join('bai_dang', 'theo_doi.bai_dang_id', '=', 'bai_dang.id')
        //     ->join('nguoi_dung', 'theo_doi.nguoi_dung_id', '=', 'nguoi_dung.id')
        //     ->whereNull('theo_doi.deleted_at')
        //     ->get();
        // $users = Auth::id();
        // return view('user\hoso', compact('lsDangBai', 'users', 'lsBaiDangTD'));
        $lsDangBai = DB::table('bai_dang')->whereNull('deleted_at')->orderBy('id', 'desc')->paginate(8);
        $lsDangBaiTD = BaiDang::join('nguoi_dung', 'bai_dang.nguoi_dung_id', '=', 'nguoi_dung.id')
            ->join('theo_doi', 'bai_dang.id', '=', 'theo_doi.bai_dang_id')
            ->whereNull('theo_doi.deleted_at')->get(['bai_dang.*', 'theo_doi.*']);
        $users = Auth::id();
        // dd($lsDangBaiTD);
        return view('user\hoso', compact('lsDangBai', 'users', 'lsDangBaiTD'));
    }

    public function canhbaoluadao()
    {
        return view('user/canhbaoluadao');
    }
    public function meotimdo()
    {
        return view('user/meotimdo');
    }
    public function chitietbaidang($id)
    {
        $user = Auth::id();
        $lsDangBai = BaiDang::find($id);
        $lsUser = NguoiDung::all();
        $baiDangId = TheoDoi::where('bai_dang_id', '=', $lsDangBai->id)->whereNull('deleted_at')->first();
        $userId = TheoDoi::where('nguoi_dung_id', '=', $user)->whereNull('deleted_at')->first();
        $lsLoaiDoVat = LoaiDoVat::all();
        return view('user\chitietbaidang', compact('lsDangBai', 'lsUser', 'lsLoaiDoVat', 'baiDangId', 'userId'));
    }
    public function timKiem(Request $request)
    {

        $lsUser = NguoiDung::all();
        $lsDangBai = BaiDang::select('bai_dang.*', 'loai_do_vat.ten')->join('loai_do_vat', 'bai_dang.loai_do_vat_id', '=', 'loai_do_vat.id')->where('tieu_de', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('loai_do_vat.ten', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('tinh_tp', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('quan_huyen', 'like', '%' . $request->tim_kiem . '%')
            ->orWhere('phuong_xa', 'like', '%' . $request->tim_kiem . '%')->paginate(16);
        return view('user\tim-kiem', compact('lsDangBai', 'lsUser'));
    }

    public function chinhSuaHoSo()
    {
        return view('user\chinh-sua-ho-so');
    }
    public function xlChinhSuaHoSo(Request $request)
    {
        $nguoi_dung = NguoiDung::find(Auth::id());
        $nguoi_dung->so_dien_thoai = null;
        $nguoi_dung->dia_chi = null;
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
        return redirect()->route('user-ho-so');
    }
    public function chinhSuaMatKhau()
    {
        return view('user\doi-mat-khau');
    }
    public function xlChinhSuaMatKhau(Request $request)
    {
        $nguoi_dung = NguoiDung::find(Auth::id());
        if (
            $request->mat_khau != null
            && $request->mat_khau == $request->xac_nhan_mat_khau
        ) {
            //if('123123'==$request->mat_khau_cu)
            if (Hash::check($request->mat_khau_cu, $nguoi_dung->mat_khau)) {
                $nguoi_dung->mat_khau = Hash::make($request->mat_khau);
                $nguoi_dung->save();
                return redirect()->route('user-ho-so');
            }
        }
        return redirect()->route('user-chinh-sua-mat-khau');
    }
    public function chinhSuaBaiDang($id)
    {
        $DangBai = BaiDang::find($id);
        $lsLoaiDoVat = LoaiDoVat::all();
        return view('user\chinh-sua-bai-dang', compact('DangBai', 'lsLoaiDoVat'));
    }
    public function xlChinhSuaBaiDang($id, Request $request)
    {
        $DangBai = BaiDang::find($id);
        $image = array();
        $path = array();
        if ($DangBai->nguoi_dung_id == Auth::id()) {
            $DangBai->loai_do_vat_id = $request->loai_do_vat;
            $DangBai->loai = $request->loai_tin;
            $DangBai->tieu_de = $request->tieu_de;
            $DangBai->noi_dung = $request->noi_dung;
            $DangBai->tinh_tp = $request->tinh_tp;
            $DangBai->quan_huyen = $request->quan_huyen;
            $DangBai->phuong_xa = $request->phuong_xa;
            $DangBai->thoi_gian = $request->thoi_gian;
            $DangBai->so_dien_thoai = $request->so_dien_thoai;
            if ($request->file('image') != null) {
                if ($files = $request->file('image')) {
                    foreach ($files as $file) {
                        $image_name = md5(rand(1000, 10000));
                        $ext = strtolower($file->getClientOriginalExtension());
                        $image_full_name = $image_name . '.' . $ext;
                        //$upload_path = 'public/images/';
                        //$image_url = $upload_path . $image_full_name;
                        $path[] = $file->move('images', $image_full_name, 'public');
                        $image[] = $image_full_name;
                    }
                }
                $DangBai->anh = implode('|', $image);
                $DangBai->path = implode('|', $path);
            }
            $DangBai->update();
            return redirect()->route('user-chi-tiet-bai-dang', $id);
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
        return redirect()->route('user-trang-chu');
    }

    // bình luận
    public function store(Request $request)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $request->validate([
            'noi_dung' => 'required',

        ]);

        $input = $request->all();
        $input['nguoi_dung_id'] = auth()->user()->id;
        $input['thoi_gian'] = $now;

        BinhLuan::create($input);

        return back();
    }

    public function tatCaBinhLuan()
    {
        $lsBinhLuan = BinhLuan::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        return view('user\binh-luan', compact('lsBinhLuan'));
    }
    public function xoaBinhLuan($id, Request $request)
    {
        $BinhLuan = BinhLuan::where('id', $id)->delete();
        // dd($request->bai_dang);
        if ($BinhLuan != null) {
            return redirect()->route('user-chi-tiet-bai-dang', ['id' => $request->bai_dang]);
        }
    }

    // báo cáo
    public function xlBaoCao(Request $request)
    {
        $user = Auth::id();

        $baoCao = BaoCao::create([
            'noi_dung' => $request->noi_dung_bao_cao,
            'bai_dang_id' => $request->bai_dang_id,
            'nguoi_dung_id' => $user,
        ]);
        if (!empty($baoCao)) {
            return redirect()->route('user-chi-tiet-bai-dang', ['id' => $request->bai_dang_id]);
        }
        return redirect()->route('user-trang-chu');
    }

    // theo dõi
    public function xlTheoDoi(Request $request)
    {
        $user = Auth::id();
        $theoDoi = TheoDoi::create([
            'bai_dang_id' => $request->bai_dang,
            'nguoi_dung_id' => $user,
        ]);
        if (!empty($theoDoi)) {
            return redirect()->route('user-chi-tiet-bai-dang', ['id' => $request->bai_dang]);
        }
        return redirect()->route('user-trang-chu');
    }

    public function xlHuyTheoDoi(Request $request)
    {
        $user = Auth::id();
        $dangBai = $request->dang_bai;
        $baiDangId = TheoDoi::where([['bai_dang_id', '=', $dangBai], ['nguoi_dung_id', '=', $user]])->whereNull('deleted_at')->delete();
        if ($baiDangId != null) {
            return redirect()->route('user-chi-tiet-bai-dang', ['id' => $request->dang_bai]);
        }
        return redirect()->route('user-trang-chu');
    }

    public function lienHe()
    {
        return view('user\lien-he');
    }
    public function xuLyGuiLienHe(Request $request)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $lienHe = LienHe::create([
            'ten_nguoi_lien_he' => $request->ten_nguoi_lien_he,
            'so_dien_thoai' => $request->so_dien_thoai,
            'email' => $request->email,
            'noi_dung' => $request->noi_dung,
            'thoi_gian' => $now,
        ]);
        return view('user/trang-chu');
    }
}
