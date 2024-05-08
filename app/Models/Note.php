<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    protected $follable = [

        'note_subject',
        'note_text',
        'writer',
        'user_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
