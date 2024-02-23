<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minjam extends Model
{
    protected $table = 'minjam';
    protected $fillable = [
        'id',
        'judul',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
        'peminjam',
    ];
}