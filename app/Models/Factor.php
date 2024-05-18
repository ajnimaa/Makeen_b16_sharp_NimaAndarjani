<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

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

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // public function order(): BelongsTo
    // {
    //     return $this->belongsTo(Order::class);
    // }

        public function media(): MorphToMany
        {
            return $this->morphedByMany(Media::class, 'mediable');
        }
}
