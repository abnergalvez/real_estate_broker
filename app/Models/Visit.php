<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'status',
        'property_id',
        'buyer_id'
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
