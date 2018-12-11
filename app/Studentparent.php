<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentparent extends Model
{
    protected $fillable = array(
		        'student_register_number',
                'father_name',
                'father_mobile',
                'father_job',
                'mother_name',
                'mother_mobile',
                'mother_job'
	);
}
