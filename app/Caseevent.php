<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caseevent extends Model
{
    protected $table = 'case_events';
    protected $fillable = [
		'case_id',
		'status_id',
		'event_date',
		'comment'
	];



	#Event belong to case
	public function casemain(){
		return $this->belongsTo('App\Casemain');
	}

	#Event belong to status
	public function casestatus(){
		return $this->belongsTo('App\Casestatus');
	}
}
