<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'buyer_id',
        'property_id'
    ];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
