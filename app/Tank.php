<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
protected $fillable = [
		'name',
		'max_volume',
		'current_volume',
	];

	/**
	 * Relationship
	 */

	public function site() {
		return $this->belongsTo('App\Site');
	}

}
