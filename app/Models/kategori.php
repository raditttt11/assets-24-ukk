<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Admin;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $guarded = [];

    public function buku(): HasMany
    {
        return $this->hasMany(Admin::class, 'id_kategori', 'id');
    }
}
