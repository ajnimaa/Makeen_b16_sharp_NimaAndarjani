<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_name',
        'product_code',
        'product_price',
        'inventory',
    ];

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function factor(): HasOne
    {
        return $this->hasOne(Factor::class);
    }

    public function labels(): MorphToMany
    {
        return $this->morphToMany(Label::class, 'labelable');
    }
}
