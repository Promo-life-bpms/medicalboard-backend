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
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        
        $events = Event::where('status', '1')->paginate(10);
        $today = new DateTime();
        $todayFormat = $today->format('Y-m-d');
        $user = auth()->user();

        $eventos = Event::all();

        $usuarios = User::all();

       /*  dd(date('Y-m-d', strtotime($events[0]->start))); */ 

        return view('events.index', compact('events','todayFormat','user', 'eventos', 'usuarios'));
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

        $user = auth()->user();
        $usuarios = User::all();
    
        $existingUserIds = DB::table('event_invited')
                            ->where('event_id', $id)
                            ->pluck('users')
                            ->flatMap(function ($users) {
                                return json_decode($users);
                            })->toArray();
    
        $names = [];
        foreach ($existingUserIds as $userId) {
            $user = DB::table('users')->where('id', $userId)->first();
            if ($user) {
                $names[] = $user->name.' '. $user->lastname;
            }
        }
        $nombres = implode(",", $names);

        $usuariosFiltrados = $usuarios->reject(function($usuario) use ($existingUserIds) {
            return in_array($usuario->id, $existingUserIds);
        });
        
        $logs = $event->logs()->paginate(10); 
           
        return view('events.show', compact('event', 'logs', 'user_checkin','user_no_checkin', 'users_no_invited', 'usuarios', 'user', 'nombres', 'usuariosFiltrados'));
    }

    public function create(Request $request)
    {
        $user = auth()->user();
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'site' => 'required',
            'location' => 'required',
            'type' => 'required',
            'start' => 'required',
            'end' => 'required',
            'url' => 'required',
            'more_information' => 'required',
            'users' => 'required'
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
        
        $fechastart = Carbon::parse($request->start);
        $fechaend = Carbon::parse($request->end);

        $fechaActual = now()->format('Y-m-d H:i:s');
    
        if ($fechastart <= $fechaActual) {
            return redirect()->back()->with('message2', 'No puedes crear un evento en una fecha pasada');
        }

        $event= Event::create([
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

        $userIds = $request->users;

        EventInvited::create([
            'users' => json_encode($userIds),
            'event_id' => $event->id,            
        ]);

        return redirect()->back()->with('message', "Evento creada correctamente.");
        
    }

    public function edit(Request $request)
    {
        $user = auth()->user();

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
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
        
        $fechastart = Carbon::parse($request->start);
        $fechaend = Carbon::parse($request->end);

        //dd($request);
        DB::table('events')->where('id', $request->event_id)->update([
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

        return redirect()->back()->with('message2', "Evento editado correctamente.");
       
    }

    public function delete(Request $request)
    { 
        DB::table('events')->where('id', $request->event_id)->update([
            'status' => 0
        ]);
        return redirect()->back()->with('message1', 'Evento eliminado'); 
    }

    public function AddUserofEvent(Request $request)
    {
        $user = auth()->user();

        $this->validate($request, [
            'users' => 'required',
            'event_id' => 'required'
        ]);  
        
        // Obtener usuarios existentes en el evento
        $existingUserIds = DB::table('event_invited')
                            ->where('event_id', $request->event_id)
                            ->pluck('users')
                            ->flatMap(function ($users) {
                            return json_decode($users);
                        });

        // Obtener los nuevos usuarios proporcionados en $request->users si es un string de JSON
        $newUserIds = is_array($request->users) ? $request->users : json_decode($request->users);
        // Combinar los usuarios existentes y nuevos
        $combinedUserIds = $existingUserIds->merge($newUserIds);

        DB::table('event_invited')->where('id', $request->event_id)->update([
            'users' => $combinedUserIds
        ]);
        return redirect()->back()->with('message2', 'Usuarios agregados correctamente al evento'); 
    }
}
