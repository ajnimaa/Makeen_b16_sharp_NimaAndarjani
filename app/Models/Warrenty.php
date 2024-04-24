<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warrenty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'started_at',
        'ended_at',
        'product_id',
    ];
}
