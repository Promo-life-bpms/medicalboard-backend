<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventInvited;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $create_event = new Event();
        $create_event->name = 'Evento de prueba';
        $create_event->type = 'online';
        $create_event->start = '2023-11-03 10:00:00';
        $create_event->end = '2023-11-03 22:00:00';
        $create_event->url = 'https://www.google.com.mx/?hl=es';
        $create_event->more_information = 'Sin informacion adicional';
        $create_event->status = 1;
        $create_event->created_by = 1;
        $create_event->save();

        $users = [1,2,3,4,5,6,7,8,9];
        $create_event_invited = new EventInvited();
        $create_event_invited->event_id = $create_event->id;
        $create_event_invited->users = json_encode($users);
        $create_event_invited->save();

    }
}
