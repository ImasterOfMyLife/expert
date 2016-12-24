<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casemain extends Model
{
    protected $table = 'cases';
    protected $fillable = [
		'client_id',
		'status_id',
		'casetype_id',
		'check_date',
		'comment'
	];

	protected $dates = [
		'created_at', 
		'updated_at', 
		'check_date',
	];


	#Case is owned by client
	public function client(){
		return $this->belongsTo('App\Client');
	}

	#Case has one status
	public function status(){
		return $this->belongsTo('App\Casestatus');
	}	

	#Case has one type
	public function casetype(){
		return $this->belongsTo('App\Casetype');
	}

	#Case can have many events
	public function events(){
		return $this->hasMany('App\Caseevent');
	}


	
/*	public function getCheckDateAttribute($value)
    {
        return date("d-m-Y",strtotime($value));
    }
*/
//	public function setCheckDateAttribute($value){
//		$this->attributes['check_date'] = date("Y-m-d ",strtotime($value));

//	}


/*	public function getUpdatedAtAttribute($value)
    {
        return date("d-m-Y",strtotime($value));
    }
*/    

}


