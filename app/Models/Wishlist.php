<?php

namespace App\Models;

use App\Models\Scopes\UserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wishlist extends Model
{
    use HasFactory;

    protected static function booted(): void
    {
        static::addGlobalScope(new UserScope);
    }

    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category():  BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
