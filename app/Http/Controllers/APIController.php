<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\EventLog;
use App\Models\User;
use App\Models\Medical;
use Carbon\Carbon;
use Illuminate\Http\Request;


class APIController extends Controller
{
    public function checkin(Request $request)
    {
        $tag = $request->tag;
        $event_id = $request->eventID;

        $today =  Carbon::now()->toDateString();
        $find_medical = Medical::where('tag', $tag)->get()->first();
       
        if($find_medical !=null || $find_medical != '' ){
           
            $event_invited = EventInvited::where('event_id', $event_id)->get()->last();
            $decoded_users = json_decode($event_invited->users, true);
    
            //1 ok , 0 no invitado
            $check_medical_log = EventLog::where('event_id', $event_id)->where('user_id', $find_medical->user->id)->get()->first();

            if(count($check_medical_log )==0){
                $create_event_log = new EventLog();
                $create_event_log->event_id = $event_id;
                $create_event_log->user_id = $find_medical->user->id;
                $create_event_log->status = in_array($find_medical->user->id, $decoded_users)? 1: 0;
                $create_event_log->save();
            }

            return response('Asistencia confirmada', 200);
        }else{
            return response('Medico no encontrado', 404); 
        }
        
    }

    public function monthEvents()
    {
        $today = now();
        $events = Event::whereMonth('start', $today->month)
            ->whereMonth('end', $today->month)
            ->get();


        $data = [];

        foreach($events as $event){
            array_push($data, (object)[
                'eventID' => $event->id,
                'eventName' => $event->name,
            ]);
        }

        return $data;
    }
}
