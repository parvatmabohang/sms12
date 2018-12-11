<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1student;

class FeesController extends Controller
{
    public function student_fees_collection($student_reg_no = null)
    {
    	return view('admin.fees.student_fees_collection')->with(compact('student_reg_no'));
    }
    public function invoice_print(Request $request)
    {
    	$data = $request->input();
    	return view('invoice_print')->with(compact('data'));
    }
    public function student_search_id(Request $request)
    {
    	$data = $request->all();
        $student_search_id = $data['student_search_id'];
        $get_student_names = Class1student::where('register_number', $student_search_id)->select('student_name','class','register_number','roll_no','present_address','country','mobile','email')->get();
        echo $get_student_names;
    }
    
}
