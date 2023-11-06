<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\EventLog;
use App\Models\User;
use App\Models\UserLog;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::paginate(10);

        $today = new DateTime();
        $todayFormat = $today->format('Y-m-d');
        $user = auth()->user();

        $eventos = Event::all();

       /*  dd(date('Y-m-d', strtotime($events[0]->start))); */ 

        return view('events.index', compact('events','todayFormat','user', 'eventos'));
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

    public function create(Request $request)
    {
        $user = auth()->user();

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'img' => 'required',
            'site' => 'required',
            'location' => 'required',
            'type' => 'required',
            'start' => 'required',
            'end' => 'required',
            'url' => 'required',
            'more_information' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/img', $fileNameToStore);
            $path = 'storage/img/' . $fileNameToStore;
        } else {
            $path = null;
        }
        
        $inicio = $request->start; // Fecha de inicio del form
        $fechastart = Carbon::parse($inicio);

        $fin = $request->end; // Fecha de inicio del form
        $fechaend = Carbon::parse($fin);

        $event = Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $path,
            'site' => $request->site,
            'location'=>$request->location,
            'type' => $request->type,
            'start' => $fechastart,
            'end' => $fechaend,
            'url' => $request->url,
            'more_information' => $request->more_information,
            'status' => 1,
            'created_by' => $user->id
        ]);

        if($event){
            return redirect()->back()->with('message', "Evento creada correctamente.");
        }
        else{
            return redirect()->back()->with('message1', "Error.");
        }
    }

    public function edit(Request $request)
    {
        $user = auth()->user();

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'img' => 'required',
            'site' => 'required',
            'location' => 'required',
            'type' => 'required',
            'start' => 'required',
            'end' => 'required',
            'url' => 'required',
            'more_information' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/img', $fileNameToStore);
            $path = 'storage/img/' . $fileNameToStore;
        } else {
            $path = null;
        }
        
        $inicio = $request->start; // Fecha de inicio del form
        $fechastart = Carbon::parse($inicio);

        $fin = $request->end; // Fecha de inicio del form
        $fechaend = Carbon::parse($fin);

        $event = Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $path,
            'site' => $request->site,
            'location'=>$request->location,
            'type' => $request->type,
            'start' => $fechastart,
            'end' => $fechaend,
            'url' => $request->url,
            'more_information' => $request->more_information,
            'status' => 1,
            'created_by' => $user->id
        ]);

        if($event){
            return redirect()->back()->with('message', "Evento editado correctamente.");
        }
        else{
            return redirect()->back()->with('message1', "Error.");
        } 
    }

    public function update()
    {
        
    }

    public function delete(Request $request)
    {
        DB::table('events')->where('id', $request->id)->delete();
        return redirect()->back()->with('message', 'Evento eliminado');
    }
}
