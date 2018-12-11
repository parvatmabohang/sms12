<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class1student extends Model
{
      protected $fillable = array(
		        'academic_year',
                'register_number',
                'joining_date',
                'class',
                'roll_no',
                'student_name',
                'dob',
                'gender',
                'blood_group',
                'birth_place',
                'nationality', 
                'mother_tongue',
                'religion',
                'caste',
                'permanent_address',
                'present_address',
                'city',
                'country',
                'state',
                'phone',
                'mobile',
                'email'
	);
      public function studentprevdetail()
    {
        return $this->hasOne('App\Studentprevdetail','student_register_number','register_number');
    }
    public function studentparent()
    {
        return $this->hasOne('App\Studentparent','student_register_number','register_number');
    }
}

