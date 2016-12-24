<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casestatus extends Model
{
 	protected $table = 'case_statuses';
 	protected $fillable = ['status','comment'];



 	#Many cases with one status
	public function cases(){
		return $this->hasMany('App\Casemain');
	}

	#Many events with one status
	public function events(){
		return $this->hasMany('App\Caseevent');
	}
 }
