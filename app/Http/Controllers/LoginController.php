<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;

class LoginController extends Controller
{
    public function portal(Request $request)
    {
    	if(Session::has('adminSession')) {
            return redirect('/admin/dashboard');
        } else {
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['pw'], 'admin' => '1'])) {
                    Session::put('adminSession', $data['email']);
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/')->with('flash_message_error', 'Invalid Username or Password');
                }
            } else {
            	return redirect('/');
            }
        }
        
    }

     public function logout()
    {
         Session::flush();
         return redirect('/')->with('flash_message_success','Logged Out Successfully');
    }
    
}
