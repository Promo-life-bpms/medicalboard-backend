<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $table = 'events';

    protected $fillable = [
        'name',
        'type',
        'start',
        'end',
        'url',
        'more_information',
        'status',
        'created_by',
    ];

    public function invited()
    {
        return $this->hasOne(EventInvited::class, 'event_id');
    }

    public function logs()
    {
        return $this->hasMany(EventLog::class, 'event_id');
    }

}
