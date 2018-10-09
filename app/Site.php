<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'id',
        'client_id',
        'contact_id',
        'name',
        'street_address',
        'city',
        'state',
        'zip',
        'phone_number',
        'time_opens_at',
        'time_closes_at',
    ];

    /**
     * A site HasOne client.  Relationship below.
     * @return client
     */

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function tanks(){
        return $this->hasMany('App\Tank');
    }
}
