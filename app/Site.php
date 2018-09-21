<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
	protected $fillable = [
		'name',
		'address'
	];

	/**
	 * Relationship
	 */

	public function client() {
		return $this->hasOne('App\Client');
	}
}


