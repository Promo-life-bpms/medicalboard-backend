<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\EventLog;
use App\Models\User;
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
    public $totalInvited;
    public $totalAsist;
    public $totalNoAsist;
    public $totalNoInvited;

    public function mount($id)
    {
        $this->event = Event::findOrFail($id);
    }

    public function loadData()
    {
        $this->user = auth()->user();
        $this->usuarios = User::all();

        $existingUserIds = $this->event->invited->users;
        $existingUserIdsArray = json_decode($existingUserIds, true);

        $names = [];
        foreach ($existingUserIdsArray as $userId) {
            $user = $this->usuarios->where('id', $userId)->first();
            if ($user) {
                $names[] = $user->name . ' ' . $user->lastname;
            }
        }

        $this->nombres = $names;

        $this->usuariosFiltrados = $this->usuarios->reject(function ($usuario) use ($existingUserIdsArray) {
            return in_array($usuario->id, $existingUserIdsArray);
        });

        // Apartir de aquí convertir a livewire
        $users_invited = User::whereIn('id', $existingUserIdsArray)->get();

        $user_checkin = EventLog::where('event_id', $this->event->id)
            ->whereIn('status', [1, 2])
            ->distinct()
            ->pluck('user_id')
            ->toArray();

        $users_no_invited = EventLog::where('event_id', $this->event->id)
            ->whereIn('status', [0, 3])
            ->distinct('user_id')
            ->get();

        $this->totalInvited = count($existingUserIdsArray);
        $this->totalAsist = count($user_checkin) + count($users_no_invited);
        $this->totalNoAsist = count($users_invited) - count($user_checkin);
        $this->totalNoInvited = count($users_no_invited);
        // Termina aquí
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