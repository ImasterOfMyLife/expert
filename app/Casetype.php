<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casetype extends Model
{
    protected $table = 'case_types';
    protected $fillable = ['type'];



   #Many cases with one type
	public function cases(){
		return $this->hasMany('App\Casemain');
	} 
}
