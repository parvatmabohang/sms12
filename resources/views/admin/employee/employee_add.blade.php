@extends('layouts.admin_design')

@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
    -->
    <section class="content-header">
      <h1>
        Employee
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Employee</a></li>
        <li class="active">Add Employee</li>
      </ol>
    </section>
    <!-- Main content -->
    <div class="content">
        <form enctype="multipart/form-data" id="employeedetails-form" action="/index.php/core/employeedetails/create" method="post">            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Employee Registration</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Employee Details</h4>
                                    </div>
                                    <div class="panel-body">
                                                                                <div class="row">
                                         <div class="form-group col-sm-4">
                                            <label for="reg_input_name" class="req">Employee Code</label>
                                            <input size="84" maxlength="45" class="form-control" value="" name="employee_code" id="Employeemaster_employee_code" type="text" /><div class="school_val_error" id="Employeemaster_employee_code_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="reg_input_name" class="req">Joining Date</label>
                                            <div data-date-format="dd-mm-yyyy" class="input-group date">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input style="width: 18.75em;" type="text" name="employee_join" class="form-control pull-right" id="datepicker2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-4">

                                            <label for="reg_input" class="req">Department</label>
                                            <select class="form-control" name="employee_department" id="Employeemaster_departmentid">
<option value="">Please Select</option>
<option value="12">English Department new</option>
<option value="13">Math department</option>
<option value="14">Science Department</option>
<option value="15">Social Department New</option>
<option value="16">IT Department</option>
<option value="17">IT Deapartment</option>
<option value="18">It New</option>
<option value="19">Computer Department</option>
<option value="20">Ramayan</option>
<option value="21">Nothing</option>
<option value="22">Admin Department</option>
<option value="23">Abcd</option>
<option value="24">MAth New</option>
<option value="25">dfgh</option>
<option value="26">abcde</option>
<option value="27">Chemistry</option>
<option value="28">Library</option>
<option value="29">Test</option>
<option value="30">Marketing Department</option>
<option value="31">CoCIS</option>
<option value="32">HINDI</option>
<option value="33">MEDICAL</option>
</select><div class="school_val_error" id="Employeemaster_departmentid_em_" style="display:none"></div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="reg_input_name" class="req">Designation</label>
                                            <div id="batch_div">

                                                <select class="form-control" name="employee_designation" id="Employeemaster_designationid">
<option value="">Please Select</option>
<option value="4">Teacher</option>
<option value="5">Principal</option>
<option value="6">CLERK </option>
<option value="7">peon</option>
<option value="8">Lecturer update</option>
<option value="9">developer</option>
<option value="10">Tester</option>
<option value="11">sdcf</option>
<option value="12">Test</option>
<option value="13">Assistant Professor</option>
<option value="14">Professor</option>
<option value="15">Substitute Teacher</option>
<option value="16">Hulk</option>
<option value="17">MD</option>
</select><div class="school_val_error" id="Employeemaster_designationid_em_" style="display:none"></div>                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="reg_input_name" class="req">Qualification</label>
                                            <input class="form-control" name="employee_qualification" id="Employeedetails_employeedetails_qualification" type="text" maxlength="256" /><div class="school_val_error" id="Employeedetails_employeedetails_qualification_em_" style="display:none"></div>                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="reg_input_name" class="req">Total Experience</label>
                                            <input class="form-control" name="employee_experience" id="Employeedetails_employeedetails_experience" type="text" maxlength="3" /><div class="school_val_error" id="Employeedetails_employeedetails_experience_em_" style="display:none"></div>                                        </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                           
                             <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Personal Details</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="reg_input_name" class="req">Employee Name </label>
                                            <input size="84" maxlength="45" class="form-control" name="employee_name" id="Employeemaster_employee_firstname" type="text" /><div class="school_val_error" id="Employeemaster_employee_firstname_em_" style="display:none"></div>                
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_input_name" class="req">Date of Birth</label>
                                            <div data-date-format="dd-mm-yyyy" class="input-group date">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input style="width: 18.75em;" type="text" name="employee_dob" class="form-control pull-right" id="datepicker3">
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Gender" class="req">Gender</label>
                                            <select class="form-control" data-required="true" name="employee_gender" id="Employeemaster_employee_gender">
<option value="" selected="selected">Please Select</option>
<option value="1">Male</option>
<option value="2">Female</option>
</select><div class="school_val_error" id="Employeemaster_employee_gender_em_" style="display:none"></div>                                        </div>
                                    <div class="form-group">
                                <label for="Blood_Group" >Blood Group</label>
                                <select class="form-control" name="employee_bloodgroup" id="Student_student_bloodgroup">
<option value="prompt">Please Select</option>
<option value="1">A+</option>
<option value="2">A-</option>
<option value="3">B+</option>
<option value="4">B-</option>
<option value="5">O+</option>
<option value="6">O-</option>
<option value="7">AB+</option>
<option value="8">AB-</option>
</select><div class="school_val_error" id="Student_student_bloodgroup_em_" style="display:none"></div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Contact Details</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form_sep">
                                            <label for="reg_input_name" class="req">Present Address</label>
                                            <textarea class="form-control" name="employee_address1" id="Employeedetails_employeedetails_address1"></textarea><div class="school_val_error" id="Employeedetails_employeedetails_address1_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group">
                                            <label for="reg_input_name">Permanent Address</label>
                                            <textarea class="form-control" name="employee_address" id="Employeedetails_employeedetails_address2"></textarea><div class="school_val_error" id="Employeedetails_employeedetails_address2_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group">
                                            <label for="reg_input_currency" class="req">City</label>
                                            <input class="form-control" name="employee_city" id="Employeedetails_employeedetails_city" type="text" maxlength="256" /><div class="school_val_error" id="Employeedetails_employeedetails_city_em_" style="display:none"></div>                                        </div>
                                            <div class="form-group">
                                            <label for="Country" class="req">Country</label>
                                            <select class="form-control" name="employee_country" id="Employeedetails_employeedetails_country">
<option value="empty">Please select</option>
</select><div class="school_val_error" id="Employeedetails_employeedetails_country_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group">
                                            <label for="Country" class="req">State</label>
                                            <select class="form-control" name="employee_state" id="Employeedetails_employeedetails_state">
<option value="" selected="selected">Please select</option>
</select><div class="school_val_error" id="Employeedetails_employeedetails_state_em_" style="display:none"></div>                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_input_currency">Phone</label>
                                            <input class="form-control" name="employee_phone" id="Employeedetails_employeedetails_phone" type="text" maxlength="30" /><div class="school_val_error" id="Employeedetails_employeedetails_phone_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group">
                                            <label for="reg_input_currency" class="req">Mobile</label>
                                            <input class="form-control" name="employee_mobile" id="Employeedetails_employeedetails_mobile" type="text" maxlength="30" /><div class="school_val_error" id="Employeedetails_employeedetails_mobile_em_" style="display:none"></div>                                        </div>
                                        <div class="form-group">
                                            <label for="reg_input_currency" class="req">Email</label>
                                            <input class="form-control" name="employee_email" id="Employeedetails_employeedetails_email" type="text" maxlength="256" /><div class="school_val_error" id="Employeedetails_employeedetails_email_em_" style="display:none"></div>                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                             </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>   
    </div>

  </div>
    
@endsection