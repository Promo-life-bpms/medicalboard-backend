<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventInvited extends Model
{
    use HasFactory;

    public $table = 'event_invited';

    protected $fillable = [
        'users',
        'event_id'
    ];

    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
