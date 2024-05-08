<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [

        'team_name',
        'team_leader_id',
    ];

    public function taskable(): MorphTo
    {
        return $this->morphTo();
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
