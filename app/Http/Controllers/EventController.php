<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\User;
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
    
        $logs = $event->logs()->paginate(10);
    
        return view('events.show', compact('event', 'logs'));
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
