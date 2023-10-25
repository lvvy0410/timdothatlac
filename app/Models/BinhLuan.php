<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BinhLuan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'bai_dang_binh_luan';

    protected $fillable = [
        'nguoi_dung_id',
        'bai_dang_id',
        'parent_id', 
        'noi_dung',
        'thoi_gian'
    ];

    public function user()
    {
        return $this->belongsTo(NguoiDung::class, 'nguoi_dung_id');
    }

    public function baiDang()
    {
        return $this->belongsTo(BaiDang::class, 'bai_dang_id');
    }


    public function replies()
    {
        return $this->hasMany(BinhLuan::class, 'parent_id');
    }
}
