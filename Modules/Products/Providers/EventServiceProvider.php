<?php

namespace Modules\Products\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    protected $listen  = [
        'Modules\Products\Events\ProductCreated' => [
            'Modules\Products\Listeners\ProductCreatedListener',
        ],
    ];

}

?>