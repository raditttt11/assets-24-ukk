<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'jml_pinjam',
        'id_buku',
        'id_user',
    ];

    public function buku()
    {
        return $this->belongsTo(Admin::class, 'id_buku');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
