<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [

        'task_subject',
        'task_description',
        'user_id',
        'team_id',
    ];

    public function taskable(): MorphTo
    {
        return $this->morphTo();
    }
}
