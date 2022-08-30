<?php

namespace App\Listeners;

use Tenancy\Identification\Events\NothingIdentified;

class NoTenantIdentified
{
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
     * @param object $event
     * @return void
     */
    public function handle(NothingIdentified $event)
    {
        abort(404);
    }
}
