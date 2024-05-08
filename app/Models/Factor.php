<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Factor extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'number',
        'seller_name',
        'description',
        'order_id',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // public function order(): BelongsTo
    // {
    //     return $this->belongsTo(Order::class);
    // }
}
