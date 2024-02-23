<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\EventLog;
use App\Models\User;
use App\Models\Medical;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function checkin(Request $request)
    {  
        $tag = substr($request->tag, 3); 

        $event_id = $request->eventID;

        $today =  Carbon::now()->toDateString();
        $find_medical = Medical::where('tag', $tag)->get()->first();

        if($find_medical !=null || $find_medical != '' ){
           
            $event_invited = EventInvited::where('event_id', $event_id)->get()->last();
            $decoded_users = json_decode($event_invited->users, true);
    
            //1 ok , 0 no invitado, 2 ok doble invitado, 3 no invitado doble asistencia
            $check_medical_log = EventLog::where('event_id', $event_id)->where('user_id', $find_medical->user->id)->get();
            if(count($check_medical_log) >=1 ){
                DB::table('event_logs')->where('user_id', $find_medical->user->id)->update([
                    'status' => 2,
                ]);

                $create_event_log = new EventLog();
                $create_event_log->event_id = $event_id;
                $create_event_log->user_id = $find_medical->user->id;
                $create_event_log->status = in_array($find_medical->user->id, $decoded_users)? 2: 3;
                $create_event_log->save();
                
            }elseif(count($check_medical_log) ==0 ){
                
                $create_event_log = new EventLog();
                $create_event_log->event_id = $event_id;
                $create_event_log->user_id = $find_medical->user->id;
                $create_event_log->status = in_array($find_medical->user->id, $decoded_users)? 1: 0;
                $create_event_log->save();
            }

            $data = [];

            array_push($data, (object)[
                'name' => $find_medical->user->name,
                'idapi' => $find_medical->user->medical->idapi,
            ]);

            return response($data, 200);
            
        }else{

            $data = [];

            array_push($data, (object)[
                'name' => 'no encontrado',
                'idapi' => 'null',
            ]);


            return response('Usuario no encontrado', 404); 
        }
        
    }

    public function monthEvents()
    {
        $today = now();
        $events = Event::whereMonth('start', $today->month)
            ->whereMonth('end', $today->month)
            ->where('status',1)
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


    public function iosCheckin(Request $request)
    {  
        $tag = substr($request->tag, 0); 

        $event_id = $request->eventID;

        $today =  Carbon::now()->toDateString();
        $find_medical = Medical::where('tag', $tag)->get()->first();

        if($find_medical !=null || $find_medical != '' ){
           
            $event_invited = EventInvited::where('event_id', $event_id)->get()->last();
            $decoded_users = json_decode($event_invited->users, true);
    
            //1 ok , 0 no invitado, 2 ok doble invitado, 3 no invitado doble asistencia
            $check_medical_log = EventLog::where('event_id', $event_id)->where('user_id', $find_medical->user->id)->get();
            if(count($check_medical_log) >=1 ){
                DB::table('event_logs')->where('user_id', $find_medical->user->id)->update([
                    'status' => 2,
                ]);

                $create_event_log = new EventLog();
                $create_event_log->event_id = $event_id;
                $create_event_log->user_id = $find_medical->user->id;
                $create_event_log->status = in_array($find_medical->user->id, $decoded_users)? 2: 3;
                $create_event_log->save();
                
            }elseif(count($check_medical_log) ==0 ){
                
                $create_event_log = new EventLog();
                $create_event_log->event_id = $event_id;
                $create_event_log->user_id = $find_medical->user->id;
                $create_event_log->status = in_array($find_medical->user->id, $decoded_users)? 1: 0;
                $create_event_log->save();
            }

            $data = [];

            array_push($data, (object)[
                'name' => $find_medical->user->name,
                'idapi' => $find_medical->user->medical->idapi,
            ]);

            return response($data, 200);
            
        }else{

            $data = [];

            array_push($data, (object)[
                'name' => 'no encontrado',
                'idapi' => 'null',
            ]);


            return response('Usuario no encontrado', 404); 
        }
        
    }

}
