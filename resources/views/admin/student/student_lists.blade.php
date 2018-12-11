@extends('layouts.admin_design')

@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <section class="content-header">
      <h1>
        Student Lists
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Student</a></li>
        <li class="active">Student Lists</li>
      </ol>
    </section>
    <hr style="height: 1px;border: none;background-color: #3c8dbc;">
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
                <div class="row">
                <div class="col-sm-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Class</h4>
                        </div>
                        <div class="panel-body">
                            <button id="Nursery" onclick="selectClass('Nursery')" type="button" class="btn btn-default btn-block btn-sm">Nursery</button>
                            <button id="LKG" onclick="selectClass('LKG')" type="button" class="btn btn-default btn-block btn-sm">LKG</button>
                            <button id="UKG" onclick="selectClass('UKG')" type="button" class="btn btn-default btn-block btn-sm">UKG</button>
                            <button id="Class 1" onclick="selectClass('Class 1')" type="button" class="btn btn-default btn-block btn-sm">Class 1</button>
                            <button id="Class 2" onclick="selectClass('Class 2')" type="button" class="btn btn-default btn-block btn-sm">Class 2</button>
                            <button id="Class 3" onclick="selectClass('Class 3')" type="button" class="btn btn-default btn-block btn-sm">Class 3</button>
                            <button id="Class 4" onclick="selectClass('Class 4')" type="button" class="btn btn-default btn-block btn-sm">Class 4</button>
                            <button id="Class 5" onclick="selectClass('Class 5')" type="button" class="btn btn-default btn-block btn-sm">Class 5</button>
                            <button id="Class 6" onclick="selectClass('Class 6')" type="button" class="btn btn-default btn-block btn-sm">Class 6</button>
                            <button id="Class 7" onclick="selectClass('Class 7')" type="button" class="btn btn-default btn-block btn-sm">Class 7</button>
                            <button id="Class 8" onclick="selectClass('Class 8')" type="button" class="btn btn-default btn-block btn-sm">Class 8</button>
                            <button id="Class 9" onclick="selectClass('Class 9')" type="button" class="btn btn-default btn-block btn-sm">Class 9</button>                   
                            <button id="Class 10" onclick="selectClass('Class 10')"  type="button" class="btn btn-default btn-block btn-sm">Class 10</button>
                                
                            <!-- <div class="row">
                                <div class="col-sm-5">
                                    <div class="form_sep">
                                        <input class="btn btn-info" type="submit" name="yt0" value="Save" />
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="box">
            <div class="box-header">
                <div class="col-sm-6">
                    <h3 style="margin-left: -1em;" class="box-title">Students of <i id="active_class_name"></i></h3>
                    <div id="class_section_button" class="btn-group">
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px;border-radius: 5px;margin-top: -0.4em;">Section A<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Section A</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Section B</a></li>
                      </ul>
                    </div>
                 </div>
                 <!-- btn btn-block btn-primary disabled -->
                <div class="col-sm-6"> 
                    <button id="check_btn_status" style="width: 130px;margin-left: 19em;" type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#add_bulk_student">
                Add Bulk Students</button>
                    <a href="{{ url('admin/student/student_admission') }}" style="border-radius: 5px;width: 120px;margin-top: -3.4em;margin-left: 10em;" class="btn bg-purple btn-flat margin">Add Student</a>   
   
                </div>
            </div>
                        <!-- /.modal -->
            <div class="modal fade" id="add_bulk_student">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i style="color:rgba(24,129,222,0.98)" id="success_mess"></i>
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Students CSV of <i id="active_class_name1"></i></h4>
              </div>
              <div class="modal-body">
                 <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ url('admin/student/student_lists') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                      <div class="col-md-6">
                        <label>CSV file to import</label>
                      </div>
                     <div class="col-md-6">
                        <input type="file" name="csv_file" id="csv_file" required>
                     </div>
                </div>
              </div> 
            </div>
            </div>
            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-default pull-right" name="submit_csv" value="Save CSV">
              </div></form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

            <!-- /.box-header -->
            <div class="box-body">
              <table  id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Academic Year</th>
                  <th>Student Name</th>
                  <th>Register No.</th>
                  <th>Roll. No</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody id="add_ol" >
                <tr id="datatable_no_class">
                  <th></th>
                  <th></th><th></th>
                <th>Click on Class to load Data</th><th></th><th></th><th></th>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Academic Year</th>
                  <th>Student Name</th>
                  <th>Register No.</th>
                  <th>Roll. No</th>
                  <th>Gender</th>
                  <th>DOB</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


                </div>
            </div>
            </form>        </div>

<!-- <ol id="add_ol">
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ol>-->

<!--  <button id="test1">Append list item</button> -->

  </div>
  <script>
    var u = "";
    var v = new Array();
    document.getElementById("class_section_button").style.display = "none";
    function selectClass(sel_class) {
    if(document.getElementById("datatable_no_class") == null) {} else {
     document.getElementById("datatable_no_class").style.display = "none";
     }
     document.getElementById("active_class_name").innerHTML = sel_class;
     if (u == sel_class){
      u = sel_class;
     }
     else{
        u = sel_class;
        v.push(u);
        if(v.length >= 2) { 
           var x = v.shift();
           document.getElementById(x).className = "btn btn-default btn-block btn-sm";
        } 
     }
     document.getElementById(sel_class).className = "btn btn-block btn-primary";
     if(sel_class == 'Nursery'){

     }
     if(sel_class == 'LKG'){

     }
     if(sel_class == 'UKG'){

     }
     if(sel_class == 'Class 1'){
      $("#class_section_button").show();
       // ajax request
      $.ajax({
               type: 'get',
               url: '/admin/student/get_class_students',
               data: {get_classID:1},
               async: false,
               success:function(resp){
                var obj = JSON.parse(resp);
                //$("#jsonTest").text(obj[0]['subject']);
                $('#add_ol > tr').remove();
                var array_subject_length = obj.length;
                for(var lop = 0;lop<array_subject_length;lop++){
                 $("#add_ol").append("<tr><td>"+obj[lop]['academic_year']+"</td><td>"+obj[lop]['student_name']+"</td><td><a href='{{ url('admin/student') }}/"+obj[lop]['register_number']+"'>"+obj[lop]['register_number']+"</a></td><td>"+obj[lop]['roll_no']+"</td><td>"+obj[lop]['gender']+"</td><td>"+obj[lop]['dob']+"</td><td></td></tr>");
               }
                 $('#example1').DataTable();

               },error:function(){
                  alert("Error");
                }   
           });
      // $(document).ajaxStop(function(){
      //       alert("All AJAX requests completed");
      //    });

     }
}
  </script>


<script>
    //$("#test1").click(function(){
    //$.ajax({type: 'get',url: "/admin/academic/subjects/assign_subject", success: function(result){
      //  alert("Success");
    //},error: function(){
      //alert("Error");
   // }});
  //});

 // $("#save_subject").click(function(){
     //      var check_classID = $("#check_classID").val();
        //   var subject_name = $("#subject_name").val();
        //   var subject_teacher = $("#subject_teacher").val();
          // var subject_code = $("#subject_code").val();
           //if($("#subject_practical_fm").val()==""){
             // var subject_practical_fm = 0;
          // } else {
            ///  var subject_practical_fm = $("#subject_practical_fm").val();
           //}
           //if($("#subject_practical_pm").val()=="") {
             // var subject_practical_pm = 0;
           //} else {
             // var subject_practical_pm = $("#subject_practical_pm").val();
           //}
           //var subject_theory_fm = $("#subject_theory_fm").val();
           //var subject_theory_pm = $("#subject_theory_pm").val();
           //$.ajax({
             //  type: 'get',
               //url: '/admin/academic/subjects/store_subject',
              // data: {subject_name:subject_name,subject_teacher:subject_teacher,subject_code:subject_code,subject_practical_fm:subject_practical_fm,subject_practical_pm:subject_practical_pm,subject_theory_fm:subject_theory_fm,subject_theory_pm:subject_theory_pm,check_classID:check_classID},
             //  success:function(resp){
               //  if(resp == true) {
                 //   $("#success_mess").html("<font color='red'>Subject Saved...</font>");
                 // } else if(resp == 4){
                 //  $("#success_mess").html("<font color='green'>Database Location Wrong...</font>");
                 //  } else {
                 //   $("#success_mess").html("<font color='green'>Subject Not Saved...</font>");
                  // }
             //  },error:function(){
               //   alert("Error");
              //  }   
         //  });
         // });

</script>

<!-- <script>
//subject code available
    $("#subject_name").keyup(function(){
        var poipi = $("#subject_code1").val();
        var poip = $("#subject_name").val();
        $("#subject_code").val(poipi+poip);
    });
//write data
$("#save_subject").click(function(){
var subject_name = $("#subject_name").val();
var subject_teacher = $("#subject_teacher").val();var subject_code = $("#subject_code").val();
var subject_practical_fm = $("#subject_practical_fm").val();var subject_practical_pm = $("#subject_practical_pm").val();
var subject_theory_fm = $("#subject_theory_fm").val();var subject_theory_pm = $("#subject_theory_pm").val();
$("#add_ol").append("<tr><td>"+subject_code+"</td><td>"+subject_name+"</td><td>"+subject_theory_fm+"</td><td>"+subject_theory_pm+"</td><td>"+subject_practical_fm+"</td><td>"+subject_practical_pm+"</td><td>"+subject_teacher+"</td></tr>");
$("#subject_name").val("");$("#subject_teacher").val("");$("#subject_theory_fm").val("");$("#subject_theory_pm").val("");$("#subject_practical_fm").val("");$("#subject_practical_pm").val("");$("#subject_code").val($("#subject_code1").val());

});

</script> -->

    
@endsection