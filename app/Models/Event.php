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


}
