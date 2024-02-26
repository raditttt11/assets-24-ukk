<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    // Untuk Table Buku
    protected $table = 'buku';
    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'thn_terbit',
        'kategori',
        'stok',
        'gambar',
    ];
    public function minjam()
    {
        return $this->hasOne(Minjam::class, 'id');
    }
}