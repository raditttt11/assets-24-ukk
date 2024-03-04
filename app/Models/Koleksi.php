<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Koleksi extends Model
{
    use HasFactory;
    protected $table = 'koleksi';
    protected $fillable = [
        'id_user',
        'id_buku'
    ];

    public function buku(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'id_buku', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
