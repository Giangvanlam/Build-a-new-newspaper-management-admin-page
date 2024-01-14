<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['ma_tgia', 'ten_tgia', 'hinhanh'];
    protected $primaryKey = 'ma_tgia';
}
