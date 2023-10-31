<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventLog extends Model
{
    use HasFactory;

    public $table = 'event_logs';

    protected $fillable = [
        'event_id',
        'event_id',
        'status',
    ];
}
