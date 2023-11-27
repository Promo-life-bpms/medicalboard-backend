<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

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
}
