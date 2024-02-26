<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minjam extends Model
{
    protected $table = 'minjam';
    protected $fillable = [
        'id',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
        'peminjam',
        'id_buku',
    ];

    public function buku()
    {
        return $this->belongsTo(Admin::class, 'id_buku');
    }
}