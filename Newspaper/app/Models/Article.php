<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['tieude', 'ten_baihat', 'ma_tloai', 'tomtat', 'noidung', 'ma_tgia', 'ngayviet', 'hinhanh'];
    protected $primaryKey = 'ma_bviet';
}
