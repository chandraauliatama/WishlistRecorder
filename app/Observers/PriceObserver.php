<?php

namespace App\Observers;

use App\Models\Price;

class PriceObserver
{
    /**
     * Handle the Price "creating" event.
     */
    public function creating(Price $price): void
    {
        if (auth()->check()) {
            $price->user_id = auth()->id();
        }
    }
}
