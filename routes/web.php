<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// login view register view
Route::get('/', function () {
    return view('admin.login-register.login');
});
Route::get('reg',function(){
	return view('admin.login-register.register');
	});

//Auth routes
Auth::routes();
Route::get('home', 'HomeController@index')->name('home');

//login-register-logout
Route::match(['get','post'],'portal','LoginController@portal');
Route::get('logout','LoginController@logout');

//admincontrol
Route::get('admin/dashboard','AdminController@show');

//student-lists or bulk insertions
Route::match(['post','get'],'admin/student/student_lists','StudentController@student_lists');
Route::get('admin/student/get_class_students','StudentController@get_class_students');
//student-admission
Route::match(['get','post'],'admin/student/student_admission','StudentController@student_admission');
//student-search
Route::get('admin/student/search_students','StudentController@search_students');
//student-profile
Route::get('admin/student/{reg_id}','StudentController@student_profile');

//employee-add
Route::get('admin/employee/employee_add','EmployeeController@employee_add');

//student_fees_collection
Route::get('admin/fees/student_fees_collection','FeesController@student_fees_collection');
Route::get('admin/fees/student_fees_collection/{student_reg_no}','FeesController@student_fees_collection');
Route::match(['post','get'],'admin/fees/invoice_print','FeesController@invoice_print');
Route::get('admin/fees/student_search_id','FeesController@student_search_id');

//academic_assign_subject
Route::get('admin/academic/subjects/assign_subject','AcademicController@assign_subject');
Route::get('admin/academic/subjects/store_subject','AcademicController@store_subject');
Route::get('admin/academic/subjects/get_class_subjects','AcademicController@get_class_subjects');
Route::match(['get','post'],'admin/academic/subjects/assign_bulk_subjects','AcademicController@assign_bulk_subjects');
Route::get('admin/academic/subjects/assign_bulk_subject','AcademicController@assign_bulk_subject');

