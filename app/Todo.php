<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  protected $fillable = [
        'text',
        'client_name',
        'site_name',
        'tank_name',
        'finished',
    ];

    protected $casts = [
        'finished' => 'boolean',
    ];
}
