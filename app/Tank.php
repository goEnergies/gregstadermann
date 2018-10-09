<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    protected $fillable = [
    'id',
    'name',
    'site_id',
    'product_id',
    'volume_max',
    'volume_current',
    'volume_capacity_limit',
    'pump',

    ];

    public function site(){
        return $this->belongsTo('App\Site');
    }

    }
