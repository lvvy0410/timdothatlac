<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LienHe extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'bai_dang_report';

    protected $fillable = [
        'ten_nguoi_lien_he',
        'email',
        'so_dien_thoai',
        'noi_dung',
        'thoi_gian'
    ];
}
