<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee_add()
    {
    	return view("admin.employee.employee_add");
    }
}
