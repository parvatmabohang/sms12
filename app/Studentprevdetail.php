<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentprevdetail extends Model
{
    protected $fillable = array(
		        'student_register_number',
                'prev_school_name',
                'prev_school_address'
	);
}
