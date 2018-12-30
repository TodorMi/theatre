<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    protected $fillable = [
        'theatreName', 'conDate', 'location', 'ticketType'
    ];
}
