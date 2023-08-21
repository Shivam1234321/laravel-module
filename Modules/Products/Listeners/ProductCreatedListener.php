<?php

namespace Modules\Products\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Modules\Products\Events\ProductCreated;

class ProductCreatedListener implements ShouldQueue{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

     /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ProductCreated $event)
    {
        $product = $event->product;

        Log::debug('Listeners: Product Data Created. '. $product);
    }
} 

?>