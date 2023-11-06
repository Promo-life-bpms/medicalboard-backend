<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\EventLog;
use App\Models\User;
use App\Models\UserLog;
use DateTime;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::paginate(10);

        $today = new DateTime();
        $todayFormat = $today->format('Y-m-d');

       /*  dd(date('Y-m-d', strtotime($events[0]->start))); */   

        return view('events.index', compact('events','todayFormat'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id); 
        
        $users_invited = User::whereIn('id', json_decode($event->invited->users))->get();

        $users_array = collect(json_decode($event->invited->users)); 

        $user_checkin = [];
        $user_no_checkin = [];
        
        $users_logs = EventLog::where('event_id', $event->id)->where('status',1)->pluck('user_id')->toArray();

        $users_no_invited = EventLog::where('event_id', $event->id)->where('status',0)->get();

        $users_logs_collection = collect($users_logs);

        foreach ($users_invited as $user) {

            if ($users_logs_collection->contains($user->id)) {
                array_push($user_checkin, $user);
            } else {
                array_push($user_no_checkin, $user);
            }
        }


       
        $logs = $event->logs()->paginate(10);
    
        return view('events.show', compact('event', 'logs', 'user_checkin','user_no_checkin', 'users_no_invited'));
    }

    public function create()
    {
        
    }
    
    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
