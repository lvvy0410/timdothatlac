<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\NguoiDung;


class BaiDang extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bai_dang';

    protected $fillable = [
        'loai',
        'tieu_de',
        'noi_dung',
        'tinh_tp',
        'quan_huyen',
        'phuong_xa',
        'so_dien_thoai',
        'thoi_gian',
        'anh',
        'path',
        'nguoi_dung_id',
        'loai_do_vat_id'
    ];

    public function nguoiDang()
    {
        return $this->beLongsTo(NguoiDung::class, 'nguoi_dung_id');
    }
    public function loaiDoVat()
    {
        return $this->beLongsTo(LoaiDoVat::class,'loai_do_vat_id');
    }
    public function comments()
    {
        return $this->hasMany(BinhLuan::class)->whereNull('parent_id')->orderBy('id', 'desc');
    }
}
