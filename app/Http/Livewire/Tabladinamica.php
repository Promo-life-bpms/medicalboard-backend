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
        $this->loadData();
    }

    public function loadData()
    {
        $this->user = auth()->user();

        $existingUserIdsArray = json_decode($this->event->invited->users, true);

        $this->usuarios = User::whereIn('id', $existingUserIdsArray)->get();

        $names = $this->usuarios->map(function ($user) {
            return $user->name . ' ' . $user->lastname;
        });

        $this->nombres = $names->toArray();

        $this->usuariosFiltrados = User::whereNotIn('id', $existingUserIdsArray)->get();

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
        $this->totalNoAsist = $this->usuarios->count() - count($user_checkin);
        $this->totalNoInvited = count($users_no_invited);
    }

    public function render()
    {
        $logs = $this->event->logs()->paginate(10);
        return view('livewire.tabladinamica', compact("logs"));
    }

    public function updateLogs()
    {
        $this->loadData();
        $this->emit('logsUpdated');
    }
}
