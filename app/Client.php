<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id',
        'name',
        'legal_name',
        'tax_payer_id',
        'description',
        'street_address',
        'city',
        'state',
        'zip',
        'tax_exempt_federal',
        'tax_exempt_state',
        'tax_exempt_county',
    ];

    /**
     * A client HasMany sites.  Relationship below.
     * @return sites
     */

     public function site()
     {
        return $this->hasOne('App\Site');
     }
}
