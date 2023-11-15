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
use PhpOffice\PhpSpreadsheet\Spreadsheet;

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

    public function stadistics(Request $request) {

        $id = $request->id;

        $event = Event::findOrFail($id); 

        $users_invited = User::whereIn('id', json_decode($event->invited->users))->get();
        
        $users_array = collect(json_decode($event->invited->users)); 

        $user_checkin = [];
        $user_no_checkin = [];
        
        $users_logs = EventLog::where('event_id', $event->id)->where('status',1)->pluck('user_id')->toArray();

        //Usuarios que asistieron pero no fueron invitados
        $event_users_no_invited = EventLog::where('event_id', $event->id)->where('status',0)->get()->pluck('user_id');
        $users_no_invited = User::whereIn('id',$event_users_no_invited)->get();

        /* $all_users = $users_invited->merge($users_no_invited); */
        
        $users_logs_collection = collect($users_logs);

        foreach ($users_invited as $user) {

            if ($users_logs_collection->contains($user->id)) {
                array_push($user_checkin, $user);
            } else {
                array_push($user_no_checkin, $user);
            }
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Asistieron');

        //Estilo
        $styleRows = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
           /*  'font'  => array(
                'size'  => 10,
                'name'  => 'DeJaVu Sans Mono'
            ) */
        ];



        $titleStyleRows = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => array('argb' => 'FFe0e0e0')
            ],
          /*   'font'  => array(
                'bold'  => true,
                'size'  => 10,
                'name'  => 'DeJaVu Sans Mono'
            ) */
        ];

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);


        $contador_col = 1;

        $sheet->setCellValue('A1', 'Nombre(s)');
        $sheet->setCellValue('B1', 'Apellidos');
        $sheet->setCellValue('C1', 'Evento');
        $sheet->setCellValue('D1', 'Status de asistencia');
        $sheet->setCellValue('E1', 'Hora de entrada');
        
        foreach($user_checkin as $user_check){
            $contador_col =  $contador_col + 1;
            
            $sheet->setCellValue('A'. $contador_col, $user_check->name);
            $sheet->setCellValue('B'. $contador_col, $user_check->lastname);
            $sheet->setCellValue('C'. $contador_col, $event->name);
            $sheet->setCellValue('D'. $contador_col, 'Asistió');
            $sheet->setCellValue('E'. $contador_col, $user_check->created_at);
        }

        foreach($users_no_invited as $user_no_invited){
            $contador_col =  $contador_col + 1;
            
            $sheet->setCellValue('A'. $contador_col, $user_no_invited->name);
            $sheet->setCellValue('B'. $contador_col, $user_no_invited->lastname);
            $sheet->setCellValue('C'. $contador_col, $event->name);
            $sheet->setCellValue('D'. $contador_col, 'No invitado');
            $sheet->setCellValue('E'. $contador_col, $user_no_invited->created_at);
        }

        $spreadsheet->createSheet();
        $sheet = $spreadsheet->getActiveSheet();
        $spreadsheet->setActiveSheetIndex(1); 
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('No asistieron');

        $page2_contador = 1;

        $sheet->setCellValue('A1', 'Nombre(s)');
        $sheet->setCellValue('B1', 'Apellidos');
        $sheet->setCellValue('C1', 'Evento');
        $sheet->setCellValue('D1', 'Status de asistencia');

        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);

        foreach($user_checkin as $user_check){
            $page2_contador =  $page2_contador + 1;

            $sheet->setCellValue('A'. $page2_contador, $user_check->name);
            $sheet->setCellValue('B'. $page2_contador, $user_check->lastname);
            $sheet->setCellValue('C'. $page2_contador, $event->name);
            $sheet->setCellValue('D'. $page2_contador, 'No asistió');
            
        }

        header('Content-Disposition: attachment;filename="' . $event->name . '.xls');
        header('Cache-Control: max-age=0');
          
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
        $writer->save('php://output');

    }
}
