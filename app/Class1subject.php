<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class1subject extends Model
{
    //protected $table = 'class1subjects';
    protected $fillable = array(
		'subject',
		'subject_code',
		'subject_theory_fm',
		'subject_theory_pm',
		'subject_practical_fm',
		'subject_practical_pm',
		'subject_teacher'
	);
}
