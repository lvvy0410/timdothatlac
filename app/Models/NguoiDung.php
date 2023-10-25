<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NguoiDung extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'nguoi_dung';

    protected $fillable = [
        'ten',
        'ten_dang_nhap',
        'mat_khau',
        'so_dien_thoai',
        'email',
        'dia_chi',
        'loai',
        'trang_thai'
    ];
    public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }
}
