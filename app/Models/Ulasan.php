<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $table="ulasan";
    protected $fillable=[
        'id_user',
        'id_buku',
        'ulasan',
        'rating',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function buku(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'id_buku', 'id');
    }
}
