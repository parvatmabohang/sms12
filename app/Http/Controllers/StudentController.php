<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Class1student;
use App\Studentparent;
use App\Studentprevdetail;

class StudentController extends Controller
{
    public function student_admission(Request $request)
    {
    	if($request->isMethod('post')) {
            $data = $request->all();
            $asc_class_students = Class1student::orderBy('student_name', 'asc')->get();
            echo count($asc_class_students);
            foreach ($asc_class_students as $asc_class_student) {
                //echo $asc_class_student['student_name'];
                if(strcmp($data['student_name'], $asc_class_student['student_name']) < 0){
                    $roll_no = $asc_class_student['roll_no'];
                    for($test_asc=count($asc_class_students);$test_asc>=$roll_no;$test_asc--){
                        Class1student::where('roll_no',$test_asc)->update(['roll_no'=>$test_asc+1]);
                    }
                    break;
                }
                
            }

            // $arrayDataName = array $data['student_name']
            
            // $collect = array_merge($asc_class_students, $arrayDataName)

            
            // $sortCollects = sort($collect);
            // foreach ($sortCollects as $key => $sortCollect) {
            //     // Class1student::where('roll_no',$test_asc)->update(['roll_no'=>$key+1]);

            //     //find (name)
            // }

    		
    		$academic_year = $data['academic_year'];
    		$register_number = $data['register_number'];
    		$joining_date = $data['joining_date'];
    		$class = $data['student_class'];
    		//$roll_no = $data['student_rollno'];
    		$student_name = $data['student_name'];
    		$dob = $data['student_dob'];
    		$gender = $data['student_gender'];
    		$blood_group = $data['student_bloodgroup'];
    		$birth_place = $data['student_birthplace'];
            $nationality = $data['student_nationality']; 
            $mother_tongue = $data['student_mothertongue'];
            $religion = $data['student_religion'];
            $caste = $data['student_caste'];
            $permanent_address = $data['student_address2'];
            $present_address = $data['student_address2'];
            $city = $data['student_city'];
            $country = $data['student_country'];
            $state = $data['student_state'];
            $phone = $data['student_phone'];
            $mobile = $data['student_mobile'];
            $email = $data['student_email'];
            $father_name = $data['father_name'];
            $father_mobile = $data['father_mobile'];
            $father_job = $data['father_job'];
            $mother_name = $data['mother_name'];
            $mother_mobile = $data['mother_mobile'];
            $mother_job = $data['mother_job'];
            $prev_school_name = $data['previousqualification_schoolname'];
            $prev_school_address = $data['previousqualification_address'];
    	    $enter_class1student = Class1student::create([
                'academic_year' => $academic_year,
                'register_number' =>$register_number,
                'joining_date' => $joining_date,
                'class' => $class,
                'roll_no' => $roll_no,
                'student_name' => $student_name,
                'dob' => $dob,
                'gender' => $gender,
                'blood_group' => $blood_group,
                'birth_place' => $birth_place,
                'nationality' => $nationality, 
                'mother_tongue' => $mother_tongue,
                'religion' => $religion,
                'caste' => $caste,
                'permanent_address' => $permanent_address,
                'present_address' => $present_address,
                'city' => $city,
                'country' => $country,
                'state' => $state,
                'phone' => $phone,
                'mobile' => $mobile,
                'email' => $email
            ]);
            $enter_class1student_parent = Studentparent::create([
                'student_register_number' => $register_number,
                'father_name' => $father_name,
                'father_mobile' => $father_mobile,
                'father_job' => $father_job,
                'mother_name' => $mother_name,
                'mother_mobile' => $mother_mobile,
                'mother_job' => $mother_job
            ]);
            $enter_class1student_prevdetails = Studentprevdetail::create([
                'student_register_number' => $register_number,
                'prev_school_name' => $prev_school_name,
                'prev_school_address' => $prev_school_address
            ]);

            return redirect()->back()->with('flash_message_success','Successfully saved...');      
    	}else{
            return view("admin.student.student_admission");
        } 
    }

    public function student_lists(Request $request)
    {
        if($request->isMethod('post')) {
            $files=$request->file('csv_file');
            $name=$files->getPathName();
            $file = fopen($name, "r");
            $csv_gets = array();
            while (($row = fgetcsv($file)) !== FALSE) 
            {
                $csv_gets[] = $row;
            }
            array_shift($csv_gets);
            asort($csv_gets);
            //array_pop($csv_gets);
            //print_r($csv_gets);die;
            $roll_val = 1;
            foreach ($csv_gets as $csv_get) {
                $create_subject = Class1student::create([
                    'academic_year' => 12,
                    'joining_date' =>'09/12/2018',
                    'class' => 1,
                    'roll_no' => 'Class1/'.$roll_val,
                    'religion' => 'Hindu',
                    'student_name' => $csv_get[0],
                    'register_number' => mt_rand(1000000, 9999999),
                    'dob' => $csv_get[1],
                    'gender' => $csv_get[2],
                    'blood_group' => $csv_get[3],
                    'birth_place' => $csv_get[4],
                    'nationality' => $csv_get[5],
                    'mother_tongue' => $csv_get[6],
                    'caste' => 'Hindu',
                    'permanent_address' => 'ktm',
                    'present_address' => 'ktm',
                    'city' => 'ktm',
                    'country' => 'nepal',
                    'state' => 'pradesh 2',
                    'phone' => '2321313',
                    'mobile' => '133222',
                    'email' => 'parvt@gmail.com'
                ]); $roll_val++;      
            }
            return redirect()->back()->with('flash_message_success','Successfully saved...');
        }
        return view('admin.student.student_lists');    
    }

    public function get_class_students(Request $request)
    {
        $data = $request->all();
        $get_classID = $data['get_classID'];
        $get_allStudent = Class1student::all();
        echo $get_allStudent;
    }

    public function search_students(Request $request)
    {
        $data = $request->all();
        $student_search_name = $data['student_search_name'];
        $get_student_names = Class1student::where('student_name', 'like', '%'.$student_search_name.'%')->select('student_name','class','register_number','roll_no')->get();
        echo $get_student_names;
    }

    public function student_profile($reg_id  = null)
    {
        $student_details = Class1student::with('studentparent','studentprevdetail')->where('register_number', $reg_id)->get();
        //date in mm/dd/yyyy format; or it can be in other formats as well
        $birthDate = $student_details[0]['dob']; 
        //explode the date to get month, day and year
        $birthDate = explode("/", $birthDate);
        $birthDate = $birthDate[2];
        $currentDate = date('Y');
        $currentDate = $currentDate-$birthDate;
        // echo "<pre>";
        // print_r($student_details);die;
        return view('admin.student.student_profile')->with(compact('student_details','reg_id','currentDate'));
    }
}
