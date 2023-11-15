<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'description',
        'total_area',
        'price',
        'status',
        'photo_path',
        'seller_id',
        'agent_id'
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
