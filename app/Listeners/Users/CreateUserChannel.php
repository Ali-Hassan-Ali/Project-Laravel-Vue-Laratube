<?php

namespace App\Listeners\Users;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserChannel
{

    public function handle($event)
    {
        $event->user->channel()->create([
            
            'name' => $event->user->name

        ]);

    }//end of function handle

}//end of classs
