<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::paginate(10);
        return view('events.index', compact('events'));
    }

    public function show($id)
    {
        
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
