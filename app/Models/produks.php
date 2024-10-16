<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
    use HasFactory;
    //agar laravel mengetahui bahwa kita mengizinkan kolom2 tsbt untuk diisikan
    protected $fillable = ['logo','namaproduk','aksi'];
    protected $table = 'produks';
    public $timestamps = false;
}
