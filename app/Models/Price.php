<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    use HasFactory;

    public function link(): BelongsTo
    {
        return $this->hasMany(Link::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
