<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $fillable = [
		'name',
		'description',
		'address'
	];

	/**
	 * Relationship
	 */

	public function site() {
		return $this->belongsTo('App\Site');
	}
}

