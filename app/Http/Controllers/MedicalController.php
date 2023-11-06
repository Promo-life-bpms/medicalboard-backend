<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\Medical;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use PhpParser\Node\Stmt\Return_;

class MedicalController extends Controller
{
    public function index() {
        $medicals = Medical::paginate(15);
        return view('medical.index', compact('medicals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'degree' => 'required',
        ]);

        $create_user = new User();
        $create_user->name = $request->name;
        $create_user->lastname = $request->lastname;
        $create_user->email = $request->email;
        $create_user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $create_user->save();

        $create_medical = new Medical();
        $create_medical->degree = $request->degree;
        $create_medical->idapi = $request->idapi;
        $create_medical->category = $request->category;
        $create_medical->tag = $request->tag;
        $create_medical->phone = $request->phone;
        $create_medical->status = $request->status;
        $create_medical->user_id = $create_user->id;
        $create_medical->status = 1;
        $create_medical->save();

        return redirect()->route('medicals.index')
        ->with('success', 'Usuario agregado satisfactoriamente');

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
