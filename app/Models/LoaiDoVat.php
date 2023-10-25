<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LoaiDoVat extends Model
{
    use HasFactory;

    protected $table = 'loai_do_vat';

    protected $fillable = [
        'ma',
        'ten',
    ];
}
