<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rut',
        'email'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
