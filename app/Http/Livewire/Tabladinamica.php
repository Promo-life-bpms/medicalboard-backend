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

    public function mount($id)
    {
        $this->event = Event::findOrFail($id);
    }

    public function loadData()
    {
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
            $user = $this->usuarios->where('id', $userId)->first();
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
        $this->loadData(); 
        $this->emit('logsUpdated'); 
        
    }
}
