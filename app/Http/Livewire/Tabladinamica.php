<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\EventLog;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Tabladinamica extends Component
{
    use WithPagination;

    public $event;
    public $userCheckin = [];
    public $userNoCheckin = [];
    public $usersNoInvited;
    public $usuarios;
    public $user;
    public $nombres;
    public $usuariosFiltrados;
    public $user_checkin;
    public $user_no_checkin;
    public $users_no_invited;

    

    public function mount($id)
    {
        $this->event = Event::findOrFail($id);
    }

    public function loadData()
    {
        $users_invited = User::whereIn('id', json_decode($this->event->invited->users))->get();
        $users_array = collect(json_decode($this->event->invited->users));

        $user_checkin = [];
        $user_no_checkin = [];

        $users_logs = EventLog::where('event_id', $this->event->id)->where('status', 1)->pluck('user_id')->toArray();

        $users_no_invited = EventLog::where('event_id', $this->event->id)->where('status', 0)->get();

        $users_logs_collection = collect($users_logs);

        foreach ($users_invited as $user) {
            if ($users_logs_collection->contains($user->id)) {
                array_push($user_checkin, $user);
            } else {
                array_push($user_no_checkin, $user);
            }
        }        

        $this->userCheckin = $user_checkin;
        $this->userNoCheckin = $user_no_checkin;
        $this->usersNoInvited = $users_no_invited;

        $this->user = auth()->user();
        $this->usuarios = User::all();

        $existingUserIds = DB::table('event_invited')
            ->where('event_id', $this->event->id)
            ->pluck('users')
            ->flatMap(function ($users) {
                return json_decode($users);
            })->toArray();

        $names = [];
        foreach ($existingUserIds as $userId) {
            $user = DB::table('users')->where('id', $userId)->first();
            if ($user) {
                $names[] = $user->name . ' ' . $user->lastname;
            }
        }

        $this->nombres =  $names;

        $this->usuariosFiltrados = $this->usuarios->reject(function ($usuario) use ($existingUserIds) {
            return in_array($usuario->id, $existingUserIds);
        });
    }

    public function render()
    {
        $this->loadData();
        $logs = $this->event->logs()->paginate(10);
        return view('livewire.tabladinamica', compact("logs"));
    }

    public function updateLogs()
    {
        $this->loadData(); // Llama a la lógica de carga de datos
        $this->emit('logsUpdated'); // Emite el evento de logs actualizados

       
        
    }
}
