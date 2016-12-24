<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $fillable = [
		'firstname',
		'secondname',
		'thirdname',
		'phone',
		'comment'
	];



	#Client can have many cases
	public function cases(){
		return $this->hasMany('App\Casemain');
	}
}


