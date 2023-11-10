<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\EventLog;
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
        for ($i = 0; $i < 10; $i++) {
            $create_event = new Event();
            $create_event->name = 'Evento #' . ($i + 1);
            $create_event->type = rand(0, 1) ? 'online' : 'offline'; 
            $create_event->start = now()->addDays(rand(1, 30))->setHour(rand(0, 23))->setMinute(rand(0, 59))->setSecond(0);
            $create_event->end = $create_event->start->copy()->addHours(rand(1, 10));
            $create_event->url = 'https://www.example.com/evento_' . ($i + 1);
            $create_event->more_information = 'Información aleatoria para el evento #' . ($i + 1);
            $create_event->status = rand(0, 1);
            $create_event->created_by = rand(1, 2000);
            $create_event->save();
        
            $randomUsers = range(1, 2000);
            shuffle($randomUsers);
            $randomInvitedUsers = array_slice($randomUsers, 0, rand(1, 20));
        
            $create_event_invited = new EventInvited();
            $create_event_invited->event_id = $create_event->id;
            $create_event_invited->users = json_encode($randomInvitedUsers);
            $create_event_invited->save();
        
           /*  $create_event_log = new EventLog();
            $create_event_log->event_id = $create_event->id;
            $create_event_log->user_id = rand(1, 2000);
            $create_event_log->status = rand(0, 1);
            $create_event_log->save(); */
        }

    }
}
