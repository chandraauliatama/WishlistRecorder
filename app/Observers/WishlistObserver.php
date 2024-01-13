<?php

namespace App\Observers;

use App\Models\Wishlist;

class WishlistObserver
{
    /**
     * Handle the Wishlist "creating" event.
     */
    public function creating(Wishlist $wishlist): void
    {
        if (auth()->check()) {
            $wishlist->user_id = auth()->id();
        }
    }
}
