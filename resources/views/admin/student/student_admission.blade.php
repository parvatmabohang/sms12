@extends('layouts.admin_design')

@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <script src="{{ asset('bower_components/nepali.datepicker.v2.2.min.js') }}"></script>
    <!-- Content Header (Page header) 
    -->
    <section class="content-header">
      <h1>
        Student
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Student</a></li>
        <li class="active">Student Admission</li>
      </ol>
    </section>
    <!-- Main content -->
    <div class="content">
        @if(Session::has('flash_message_error'))
          <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ session('flash_message_error') }}</strong>
              </div>
       @endif
       @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{ session('flash_message_success') }}</strong>
              </div>
       @endif
    <form id="student-form" method="post" action="{{ url('admin/student/student_admission') }}" enctype="multipart/form-data">
       {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-12">
                                    <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Student Admission</h4>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                                                <div class="row">
                            <p><b>OFFICIAL DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-4">
                                <label for="reg_input" class="req">Academic Year</label>
                                <select class="form-control" name="academic_year" id="Student_academicid">
<option value="">Select Academic Year</option>
<option value="1">2018 - 2019</option>
<option value="4">2019 - 2020</option>
<option value="5">2020 - 2021</option>
<option value="6">2017 - 2018</option>
<option value="7">2023 - 2028</option>
<option value="8">2010 - 2022</option>
<option value="9">2013 - 2023</option>
<option value="10">2016 - 2017</option>
<option value="11">2021 - 2025</option>
<option value="12">2003 - 2016</option>
<option value="13">2009 - 2011</option>
</select><div class="school_val_error" id="Student_academicid_em_" style="display:none"></div>                            </div> 
                            <div class="form-group col-sm-4">
                                                                <label for="reg_input_name" class="req">Register Number</label>
                                <input class="form-control" name="register_number" id="Student_student_admissionno" value="<?= mt_rand(1000000, 9999999) ?>" type="text"/>                                <div class="school_val_error" id="Student_student_admissionno_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" class="req">Joining Date</label>
                                <div data-date-format="yyyy-M-d" class="input-group date">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="joining_date" class="form-control pull-right" id="datepicker">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="reg_input" class="req">Class</label>
                                <select class="form-control" name="student_class" id="Student_courseid">
<option value="">Select Class</option>
<option value="nursery">Nursery</option>
<option value="lkg">LKG</option>
<option value="ukg">UKG</option>
<option value="1">Class 1</option>
<option value="2">Class 2</option>
<option value="3">Class 3</option>
<option value="4">Class 4</option>
<option value="5">Class 5</option>
<option value="6">Class 6</option>
<option value="7">Class 7</option>
<option value="8">Class 8</option>
<option value="9">Class 9</option>
<option value="10">Class 10</option>
</select><div class="school_val_error" id="Student_courseid_em_" style="display:none"></div>                            </div>  
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name">Roll No.</label>
                                <input class="form-control" name="student_rollno" id="Student_student_rollno" type="text" maxlength="60" /><div class="school_val_error" id="Student_student_rollno_em_" style="display:none"></div>                
                            </div>
                        </div>
            <div id="count"></div>
                                                <div class="row">
                            <p><b>PERSONAL DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" class="req">Student's Name</label>
                                <input class="form-control" name="student_name" id="Student_student_firstname" type="text" maxlength="45" /><div class="school_val_error" id="Student_student_firstname_em_" style="display:none"></div>                
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" class="req">Date of Birth</label>
                                <div data-date-format="yyyy-M-d" class="input-group date">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input style="width: 18.75em;" type="text" name="student_dob" class="form-control pull-right" id="datepicker1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Gender">Gender</label>
                                <select class="form-control" data-required="true" name="student_gender" id="Student_student_gender">
<option value="prompt">Please Select</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select><div class="school_val_error" id="Student_student_gender_em_" style="display:none"></div>                            </div>

                      
                        </div>
                        <div class="row">
                            
                            <div class="form-group col-sm-4">
                                <label for="Blood_Group" >Blood Group</label>
                                <select class="form-control" name="student_bloodgroup" id="Student_student_bloodgroup">
<option value="prompt">Please Select</option>
<option value="1">A+</option>
<option value="2">A-</option>
<option value="3">B+</option>
<option value="4">B-</option>
<option value="5">O+</option>
<option value="6">O-</option>
<option value="7">AB+</option>
<option value="8">AB-</option>
</select><div class="school_val_error" id="Student_student_bloodgroup_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" >Birth Place</label>
                                <input maxlength="45" class="form-control" name="student_birthplace" id="student_birthplace" type="text" /><div class="school_val_error" id="Student_student_birthplace_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Country">Nationality</label>
                                <select class="form-control" name="student_nationality" id="student_nationality">
<option value="prompt">Please Select</option>
<option value="Nepal">Nepal</option>
</select><div class="school_val_error" id="Student_student_nationality_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="reg_input">Religion</label>
                                <select class="form-control" name="student_religion" id="Student_student_religion">
<option value="">Select Religion</option>
<option value="Islam">Islam</option>
<option value="Christianity">Christianity</option>
<option value="Hindu">Hindu</option>
<option value="sikh">sikh</option>
<option value="Lingayat">Lingayat</option>
<option value="v">v</option>
<option value="Sarna">Sarna</option>
<option value="2">2</option>
<option value="4">4</option>
<option value="mm">mm</option>
<option value="dgfdg">dgfdg</option>
<option value="Honn">Honn</option>
<option value="xcxcxcx">xcxcxcx</option>
<option value="test">test</option>
</select><div class="school_val_error" id="Student_student_religion_em_" style="display:none"></div>                            </div>

                            <div class="form-group col-sm-4">
                                <label for="reg_input">Caste</label>
                                <select class="form-control" name="student_caste" id="Student_student_caste">
<option value="">Select Caste</option>
<option value="gay">gay</option>
<option value="Bagwan">Bagwan</option>
<option value="Brahmins">Brahmins</option>
<option value="yadav">yadav</option>
<option value="okkaliga">okkaliga</option>
<option value="cxvcbvnbnbv">cxvcbvnbnbv</option>
<option value="prajapat">prajapat</option>
<option value="Hindu">Hindu</option>
<option value="hgh">hgh</option>
<option value="fgjhuhh">fgjhuhh</option>
<option value="fgh">fgh</option>
<option value="ljk;.">ljk;.</option>
<option value="fdgh">fdgh</option>
<option value="kumawat">kumawat</option>
<option value="sc">sc</option>
<option value="ry">ry</option>
<option value="dfgsd">dfgsd</option>
<option value="l">l</option>
<option value="Dalin">Dalin</option>
<option value="sdf">sdf</option>
<option value="helloyuh">helloyuh</option>
<option value="jkjkjkl">jkjkjkl</option>
<option value="Christian">Christian</option>
<option value="0">0</option>
<option value="motin khan ">motin khan </option>
<option value="ss">ss</option>
<option value="maratha">maratha</option>
<option value="Phoenix">Phoenix</option>
<option value="xcxcxcx">xcxcxcx</option>
<option value="general">general</option>
<option value="Test1">Test1</option>
<option value="Ravi shankar">Ravi shankar</option>
<option value="MUSLIM">MUSLIM</option>
<option value="hola">hola</option>
<option value="demo">demo</option>
<option value="braminhin">braminhin</option>
</select><div class="school_val_error" id="Student_student_caste_em_" style="display:none"></div>                            </div>
                        <div class="form-group col-sm-4">
                                <label for="reg_input_name" >Mother Tongue</label>
                                <input maxlength="45" class="form-control" name="student_mothertongue" id="student_mothertongue" type="text" /><div class="school_val_error" id="Student_student_mothertoung_em_" style="display:none"></div>                            </div>

                        </div> 
                           <div class="row">
                            <p><b>CONTACT DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-6">
                                <label for="reg_input_name">Permanent Address</label>
                                <textarea class="form-control" name="student_address2" id="Student_student_address2"></textarea><div class="school_val_error" id="Student_student_address2_em_" style="display:none"></div>                            </div>
                            <div class="form_group col-sm-6">
                                <label for="reg_input_name" class="req">Present Address</label>
                                <textarea class="form-control" name="student_address1" id="student_address1"></textarea><div class="school_val_error" id="Student_student_address1_em_" style="display:none"></div>                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency" >City</label>
                                <input class="form-control" name="student_city" id="Student_student_city" type="text" maxlength="45" /><div class="school_val_error" id="Student_student_city_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Country">Country</label>
                                <select class="form-control" name="student_country" id="Student_student_country">
                                 <option value="" selected="selected">Please Select</option>
                                 <option value="Nepal">Nepal</option>
                                  </select><div class="school_val_error" id="Student_student_country_em_" style="display:none"></div>                            </div>
                               <div class="form-group col-sm-4">
                                   <label for="Country">State</label>
                                   <select class="form-control" name="student_state" id="Student_student_state">
                                   <option value="" selected="selected">Please Select</option>
                                   <option value="Pradesh1">Pradesh1</option>
                                    </select><div class="school_val_error" id="Student_student_state_em_" style="display:none"></div>                                        
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency">Phone</label>
                                <input class="form-control" name="student_phone" id="Student_student_phone" type="text" maxlength="45" /><div class="school_val_error" id="Student_student_phone_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency">Mobile</label>
                                <input class="form-control" name="student_mobile" id="Student_student_mobile" type="text" maxlength="45" /><div class="school_val_error" id="Student_student_mobile_em_" style="display:none"></div>                            </div>
                                <div class="form-group col-sm-4">
                                <label for="reg_input_currency">Email</label>
                                <input class="form-control" name="student_email" id="Student_student_email" type="text" maxlength="256" /><div class="school_val_error" id="Student_student_email_em_" style="display:none"></div>                            </div>
                        </div>
                         <div class="row">
                            <p><b>FATHER'S DETAILS:-</b></p><hr>

                            <div class="form-group col-sm-6">
                                <label>Name  </label>
                                <input class="form-control" name="father_name" id="Parentdetails_father_name" type="text" maxlength="60" /><div class="errorMessage" id="Parentdetails_father_name_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-6">
                                <label >Mobile</label>
                                <input class="form-control" name="father_mobile" id="Parentdetails_father_mobile" type="text" maxlength="60" /><div class="school_val_error" id="Parentdetails_father_mobile_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-6">
                                <label>Job</label>
                                <input class="form-control" name="father_job" id="Parentdetails_father_job" type="text" maxlength="60" /><div class="school_val_error" id="Parentdetails_father_job_em_" style="display:none"></div>                            </div>
                                 </div>
                                 <div class="row">
                            <p><b>MOTHER'S DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-6">
                                <label>Name</label>
                                <input class="form-control" name="mother_name" id="Parentdetails_mother_name" type="text" maxlength="60" /><div class="school_val_error" id="Parentdetails_mother_name_em_" style="display:none"></div>                            </div>

                            <div class="form-group col-sm-6">
                                <label for="reg_input_name">Mobile</label>
                                <input class="form-control" name="mother_mobile" id="Parentdetails_mother_mobile" type="text" maxlength="60" /><div class="school_val_error" id="Parentdetails_mother_mobile_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-6">
                                <label for="reg_input_name">Job</label>
                                <input class="form-control" name="mother_job" id="Parentdetails_mother_job" type="text" maxlength="60" /><div class="school_val_error" id="Parentdetails_mother_job_em_" style="display:none"></div>                            </div>

                        </div>
                                             
                        <div class="row">
                            <p><b>PREVIOUS QUALIFICATION DETAILS:-</b></p><hr>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_name" class="">School Name</label>
                                <input class="form-control" name="previousqualification_schoolname" id="Previousqualification_previousqualification_schoolname" type="text" maxlength="256" /><div class="school_val_error" id="Previousqualification_previousqualification_schoolname_em_" style="display:none"></div>                            </div>
                            <div class="form-group col-sm-4">
                                <label for="reg_input_currency" class="">School Address</label>
                                <input class="form-control" name="previousqualification_address" id="Previousqualification_previousqualification_address">
                                <div class="school_val_error" id="Previousqualification_previousqualification_address_em_" style="display:none"></div>                            </div>
                        </div>
                        <hr>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-block btn-primary" name="save_student">Save</button>        
                            </div>
                        </form>                   
                    </div>
                </div>
          
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $('#datepicker').nepaliDatePicker({
    npdMonth: true,
    npdYear: true
     });
     $('#datepicker1').nepaliDatePicker({
    npdMonth: true,
    npdYear: true
     });
      $('#datepicker2').nepaliDatePicker({
    npdMonth: true,
    npdYear: true
     });
       $('#datepicker3').nepaliDatePicker({
    npdMonth: true,
    npdYear: true
     });
</script>
    
@endsection