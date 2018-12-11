<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Class1subject;
use App\User;

class AcademicController extends Controller
{
    public function assign_subject()
    {
    	return view('admin.academic.assign_subject');
    }

    public function store_subject(Request $request)
    {   
    	 $data = $request->all();
         $check_classID = $data['check_classID'];
         $subject_name = $data['subject_name'];
         $subject_code = $data['subject_code'];
         $subject_theory_fm = $data['subject_theory_fm'];
         $subject_theory_pm = $data['subject_theory_pm'];
         $subject_practical_fm = $data['subject_practical_fm'];
         $subject_practical_pm = $data['subject_practical_pm'];
         $subject_teacher = $data['subject_teacher'];
         //echo true;
         if($check_classID==1){
            $create_subject = Class1subject::create([
                'subject' => $subject_name,
                'subject_code' => $subject_code,
                'subject_theory_fm' => $subject_theory_fm,
                'subject_theory_pm' => $subject_theory_pm,
                'subject_practical_fm' => $subject_practical_fm,
                'subject_practical_pm' => $subject_practical_pm,
                'subject_teacher' => $subject_teacher
            ]);
            if($create_subject->save()) {
         	  echo true;
            } else {
         	   echo false;
            }
         } else {
            echo 4;
         }
    }

    public function get_class_subjects(Request $request){
        $data = $request->all();
        $get_classID = $data['get_classID'];
        $get_allSubject = Class1subject::all();
        echo $get_allSubject;
    }

    public function assign_bulk_subjects(Request $request)
    {
        if($request->isMethod('post')) {
            $files=$request->file('csv_file');
            //$name = $_FILES['csv_file']['tmp_name']; 
            $name=$files->getPathName();
            $file = fopen($name, "r");
            $csv_gets = array();
            while (($row = fgetcsv($file)) !== FALSE) 
            {
                $csv_gets[] = $row;
            }
            // while(!feof($file)){
            //     $csv_get[]=fgetcsv($file);
            // }
            array_shift($csv_gets);
            //array_pop($csv_gets);
            // print_r($csv_gets);die;
            foreach ($csv_gets as $csv_get) {
                $create_subject = Class1subject::create([
                    'subject' => $csv_get[0],
                    'subject_code' => 'Class1-'.$csv_get[0],
                    'subject_theory_fm' => $csv_get[2],
                    'subject_theory_pm' => $csv_get[3],
                    'subject_practical_fm' => $csv_get[4],
                    'subject_practical_pm' => $csv_get[5],
                    'subject_teacher' => $csv_get[6]
                ]);       
            }
            return redirect()->back()->with('flash_message_success','Successfully saved...');  
        }
        return view('admin.academic.assign_bulk_subjects');    
    }
    public function assign_bulk_subject(Request $request)
    {
        $data = $request->all();
        $all_subjects = $data['all_subject'];
        $all_sub = json_decode($all_subjects);
        //$count_subject = sizeof($all_sub);
        foreach($all_sub as $in_subject)
        {
        //echo $count_subject;
        //echo $all_sub[1][0];
        // for($test_sub=0;$test_sub<$count_subject;$test_sub++){
        //     //echo $in_subject[6];
            Class1subject::create([
                'subject' => $in_subject[1],
                'subject_code' => $in_subject[0],
                'subject_theory_fm' => $in_subject[2],
                'subject_theory_pm' => $in_subject[3],
                'subject_practical_fm' => $in_subject[4],
                'subject_practical_pm' => $in_subject[5],
                'subject_teacher' => $in_subject[6]
            ]); 
 
         }
        echo true;

    }
}
