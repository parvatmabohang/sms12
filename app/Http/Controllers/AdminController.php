<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Classsection;
class AdminController extends Controller
{
    public function show() 
    {
    	if(Session::has('adminSession')) {
            return view("admin.dashboard.all");
        } else {
            return redirect('/')->with('flash_message_error','Please login to access');
        }
    }
}
