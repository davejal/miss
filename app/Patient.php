<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	//use SoftDeletes;
	 
    protected $fillable = [
		'first_name',
		'middle_name',
		'last_name',
		'date_of_birth',
		'date_became_patient',
		'gender',
		'picture',
		'address',
		'other_details',
		'company_id'		
		];
}
