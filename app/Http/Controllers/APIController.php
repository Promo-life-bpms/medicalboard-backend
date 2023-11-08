<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\EventLog;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function checkin(Request $request)
    {

        $today =  Carbon::now()->toDateString();
        $find_user = User::where('id',intval($request->id))->get()->first();
        $find_event = Event::whereDate('start', $today)->get()->last();
       
        if($find_event != null && $find_event != [] && $find_user !=null){
           
            $event_invited = EventInvited::where('event_id', $find_event->id)->get()->last();
            $decoded_users = json_decode($event_invited->users, true);
    
            //1 ok , 0 no invitado
            $create_event_log = new EventLog();
            $create_event_log->event_id = $find_event->id;
            $create_event_log->user_id = $find_user->id;
            $create_event_log->status = in_array($find_user->id, $decoded_users)? 1: 0;
            $create_event_log->save();

            return response('Asistencia confirmada', 200);
        }else{
            return response('Evento no encontrado', 404); 
        }
        
    }

    public function monthEvents()
    {
        
    }
}
