<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
    	'last_name',
    	'first_name',
    	'middle_initial'
    ];
}
