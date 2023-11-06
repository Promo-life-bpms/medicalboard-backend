<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class MedicalController extends Controller
{
    public function index() {
        return view('medical.index');
    }

    public function presentation($id)  {
        $user = User::where('id', $id)->get()->first();


        return view('medical.presentation', compact('user'));
    }

    public function medicalInfo($id) {
        $user = User::where('id', $id)->get()->first();
        return view('medical.medical-info', compact('user'));
    }

    public function medicalEvents($id) {

        $user = User::where('id', $id)->get()->first();
        $events_invited = EventInvited::whereRaw("JSON_CONTAINS(users, ?)", [$user->id])->get();
        $today = Date::now()->format('Y-m-d'); 

        return view('medical.medical-events', compact('user','events_invited', 'today'));
    }

    public function medicalEventDetail($id) {
        $event = Event::findOrFail($id); 
        $today = Date::now()->format('Y-m-d');
        return view(' medical.medical-event-info', compact('event', 'today'));
    }
}
