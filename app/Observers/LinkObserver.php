<?php

namespace App\Observers;

use App\Models\Link;

class LinkObserver
{
    /**
     * Handle the Link "creating" event.
     */
    public function creating(Link $link): void
    {
        if (auth()->check()) {
            $link->user_id = auth()->id();
        }
    }
}
