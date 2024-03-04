<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Contracts\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Admin extends Model
{
    use HasFactory, Notifiable;

    // Untuk Table Buku
    protected $table = 'buku';
    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'thn_terbit',
        'stok',
        'gambar',
        'deskripsi',
        'id_kategori',
    ];
    public function minjam()
    {
        return $this->hasOne(Minjam::class, 'id');
    }

    public function ulas(): HasMany
    {
        return $this->hasMany(Ulasan::class, 'id_user', 'id');
    }

    public function koleksi(): HasMany
    {
        return $this->hasMany(koleksi::class, 'id_user', 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori', 'id');
    }
}
