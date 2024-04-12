<?php

namespace App\Http\Controllers;

use App\Models\EventInvited;
use App\Models\Medical;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('id', 2);
        })->where('status', 1)->paginate(15);

        return view('admin.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
        ]);

        $correos = User::all()->pluck('email')->toArray();

        if(in_array($request->email, $correos)){
            return redirect()->route('admin.index')->with('alerta', 'Ya existe un correo igual');
        }

        $create_user = new User();
        $create_user->name = $request->name;
        $create_user->lastname = $request->lastname;
        $create_user->email = $request->email;
        $create_user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $create_user->save();

        DB::table('role_user')->insert([
            'user_id' => $create_user->id,
            'role_id' => 2,
            'user_type' => 'App\Models\User',
        ]);

        return redirect()->route('admin.index')
        ->with('success', 'Usuario agregado satisfactoriamente');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
           
        ]);

        DB::table('users')->where('id',$request->user_id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.index')
        ->with('update', 'Usuario agregado satisfactoriamente');
    }

    public function delete(Request $request)
    {
        DB::table('users')->where('id',$request->user_id)->update([
            'status' => 0,
        ]);

        return redirect()->route('admin.index')
        ->with('delete', 'Usuario eliminado satisfactoriamente');
    }

    public function importUsers(Request $request) {

    
        $data = Excel::toArray(null, $request->file('file'));

        // Obtener los datos de la columna A a partir de la fila 4 hacia abajo
        $columnAData = collect($data[0])->splice(5)->pluck(0);

        $eventInvited = EventInvited::where('event_id', $request->event_id)->get()->first();

        // Convertir la cadena de usuarios en un array
        $existingUsers = json_decode($eventInvited->users);

        // Obtener los datos de la columna A a partir de la fila 4 hacia abajo
        $columnAData = collect($data[0])->splice(5)->pluck(0);

        // Iterar sobre los datos obtenidos
        foreach ($columnAData as $data) {
            // Buscar si el usuario existe en el array de usuarios
            if (!in_array($data, $existingUsers)) {
                // Si no existe, agregarlo al array
                $existingUsers[] = $data;
            }
        }

        // Actualizar el campo users en el modelo EventInvited
        $eventInvited->users = json_encode($existingUsers);
        $eventInvited->save();



        return redirect()->back()->with('success', 'Archivo Excel importado correctamente.');
    }
}
