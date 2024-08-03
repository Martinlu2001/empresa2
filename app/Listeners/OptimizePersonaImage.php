<?php

namespace App\Listeners;

use App\Events\PersonaSaved;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OptimizePersonaImage implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PersonaSaved $event): void
    {
        $manager = new ImageManager(new Driver());
        $image = $manager->read(Storage::get($event->persona->image))
            ->scale(width: 600)
            ->encode();

        Storage::put($event->persona->image,(string) $image);
    }
}
