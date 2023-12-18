<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventInvited;
use App\Models\Medical;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class MedicalController extends Controller
{
    public function index() {
        $medicals = Medical::where('status', 1)->orderBy('id', 'desc')->paginate(15);
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

    public function update(Request $request) {

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'degree' => 'required',
        ]);

        DB::table('users')->where('id',$request->user_id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);


        DB::table('medicals')->where('user_id',$request->user_id)->update([
            'degree' => $request->degree,
            'idapi' => $request->idapi,
            'category' => $request->category,
            'tag' => $request->tag,
            'phone' => $request->phone,
            'tag' => $request->tag,
        ]);

        return redirect()->route('medicals.index')
        ->with('update', 'Usuario agregado satisfactoriamente');
    }

    public function delete(Request $request) {
        DB::table('medicals')->where('user_id',$request->user_id)->update([
            'status' => 0,
        ]);

        return redirect()->route('medicals.index')
        ->with('delete', 'Usuario eliminado satisfactoriamente');
    }

    public function presentation($id)  {

        $medical = Medical::where('tag',$id)->get()->first();
        $user = $medical->user;
        return view('medical.presentation', compact('user'));
    }

    public function medicalInfo($id) {

        $medical = Medical::where('tag',$id)->get()->first();
        $user = $medical->user;
        return view('medical.medical-info', compact('user'));
    }

    public function medicalEvents($id) {

        $medical = Medical::where('tag',$id)->get()->first();
        $user = $medical->user;

        //FECHA ACTUAL//
        $today = now()->format('Y-m-d');
        $tomorrow = now()->addDay()->format('Y-m-d');

        //DÍAS PASADOS//
        $sixDays = now()->subDays(6)->format('Y-m-d');
        //dd($sixDays);

        //DÍAS FUTUROS//
        $sixDaysLater = now()->addDays(6)->format('Y-m-d');
        //dd($sixDaysLater);

        //TRAER 30 DÍAS//
        $DaysLater = now()->addDays(30)->format('Y-m-d');
        
        $past = EventInvited::whereRaw("JSON_CONTAINS(users, ?)", [json_encode($user->id)])
                            ->with('events') // Assuming there's a relationship named 'events' in the EventInvited model
                            ->whereHas('events', function ($query) use ($sixDays, $today) {
                        $query->where('status', 1)->whereBetween('start', [$sixDays, $today]);
                    })->take(6)->get();
                               
        $present = EventInvited::whereRaw("JSON_CONTAINS(users, ?)", [json_encode($user->id)])
                                ->with('events') // Asumiendo que hay una relación llamada 'event' en el modelo EventInvited
                                ->whereHas('events', function ($query) use ($today, $tomorrow) {
                                    $query->where('status',1)
                                        ->whereBetween('start', [$today, $tomorrow]);
                                })
                                ->take(6)->get();  
        
        $future = EventInvited::whereRaw("JSON_CONTAINS(users, ?)", [json_encode($user->id)])
                                ->with('events')
                                ->whereHas('events', function ($query) use ($today, $sixDaysLater) {
                                    $query->where('status', 1)
                                        ->whereBetween('start', [$today, $sixDaysLater]);
                                })->take(6)->get();
        //dd($future);

        //dd($future);

        $interest = EventInvited::with('events')->whereHas('events', function($query) use ($today, $DaysLater){
            $query->where('status', 1)->whereBetween('start', [$today, $DaysLater]);
        })->take(6)->get();
 
        //dd($interest);
        return view('medical.medical-events', compact('user', 'future', 'today', 'past', 'present', 'interest'));
    }

    public function medicalEventDetail($id) {

        $event = Event::findOrFail($id); 
        $today = Date::now()->format('Y-m-d');
        return view(' medical.medical-event-info', compact('event', 'today'));
    }
}
