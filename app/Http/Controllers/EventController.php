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

        $events = Event::paginate(10);

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

        $usuarios = User::all();
        $user = auth()->user();


       
        $logs = $event->logs()->paginate(10);    
        return view('events.show', compact('event', 'logs', 'user_checkin','user_no_checkin', 'users_no_invited', 'usuarios', 'user'));
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
        $event = Event::find($request->event_id);
        if ($event) {
            // Eliminar la imagen si existe
            if ($event->img) {
                // Obtener el nombre del archivo desde la ruta almacenada en la base de datos
                $filename = basename($event->img);
    
                // Verificar si el archivo existe en la carpeta 'public/img'
                if (Storage::exists('public/img/' . $filename)) {
                    // Eliminar el archivo
                    Storage::delete('public/img/' . $filename);
                }
            }
            // Eliminar el registro del evento
            $event->delete();
            
            return redirect()->back()->with('message1', 'Evento eliminado');
        } else {
            // Manejar el caso en el que no se encuentra el evento
            return redirect()->back()->with('message1', 'No se pudo encontrar el evento para eliminar');
        }
    }

    public function AddUserofEvent(Request $request)
    {
        $user = auth()->user();

        $this->validate($request,[
            'users' => 'required',
            'event_id' => 'required'
        ]);  
        
        $usuarios = DB::table('event_invited')->where('event_id', $request->event_id)->get('users');
        $nombresUsuarios = DB::table('users')->whereIn('id', $usuarios)->pluck('name');

        
        dd($nombresUsuarios);
        dd($usuarios);
      


        
    }
    
}
