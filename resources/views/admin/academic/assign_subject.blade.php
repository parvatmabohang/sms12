@extends('layouts.admin_design')

@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <section class="content-header">
      <h1>
        Assign Subject
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Academic</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Subjects</a></li>
        <li class="active">Assign Subject</li>
      </ol>
    </section>
    <hr style="height: 1px;border: none;background-color: #3c8dbc;">
    <!-- Main content -->
      <div class="content">
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
                    <h3 style="margin-left: -1em;" class="box-title">Subjects For <i id="active_class_name"></i></h3>
                 </div>
                 <!-- btn btn-block btn-primary disabled -->
                <div class="col-sm-6">
                    <button id="check_btn_status" style="width: 120px;margin-left: 20em;" type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#add_subject">
                Add Subject</button>
                <a href="{{ url('admin/academic/subjects/assign_bulk_subjects') }}" style="border-radius: 5px;width: 120px;margin-top: -3.4em;margin-left: 10em;" class="btn bg-purple btn-flat margin" >Bulk Addition</a>
                </div>
            </div>
             <!-- /.modal -->
            <div class="modal fade" id="add_subject">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i style="color:rgba(24,129,222,0.98)" id="success_mess"></i>
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Assign Subject to <i id="active_class_name1"></i></h4>
              </div>
              <div class="modal-body">
                 <!-- form start -->
            <form class="form-horizontal" methos="POST" action="">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Subject:</label>

                  <div class="col-sm-8">
                    <input style="margin-top: -5px;border-radius: 5px;" id="subject_name" name="subject_name" type="text" class="form-control" id="inputEmail3" placeholder="Subject Name" required>
                  </div>
                </div></div> 
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Teacher:</label>

                  <div class="col-sm-8">
                    <input style="margin-top: -5px;border-radius: 5px;" id="subject_teacher" name="subject_teacher" type="text" class="form-control" id="inputPassword3" placeholder="Employee Code" required>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Theory(FM):</label>

                  <div class="col-sm-8">
                    <input style="margin-top: -5px;border-radius: 5px;" id="subject_theory_fm" name="subject_theory_fm" type="number" class="form-control" id="inputEmail3" placeholder="Theory(FM)">
                  </div>
                </div></div> 
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Theory(PM):</label>

                  <div class="col-sm-8">
                    <input style="margin-top: -5px;border-radius: 5px;" id="subject_theory_pm" name="subject_theory_pm" type="number" class="form-control" id="inputPassword3" placeholder="Theory(PM)">
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Practical(FM):</label>

                  <div class="col-sm-8">
                    <input style="margin-top: -5px;border-radius: 5px;" id="subject_practical_fm" name="subject_practical_fm" type="number" class="form-control" id="inputEmail3" placeholder="Practical(FM)">
                  </div>
                </div></div> 
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Practical(PM):</label>

                  <div class="col-sm-8">
                    <input style="margin-top: -5px;border-radius: 5px;" id="subject_practical_pm" name="subject_practical_pm" type="number" class="form-control" id="inputPassword3" placeholder="Practical(PM)">
                  </div>
                </div>
              </div>
            </div><br>
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Code:</label>

                  <div class="col-sm-8">
                    <input style="margin-top: -5px;border-radius: 5px;" id="subject_code" name="subject_code" type="text" class="form-control" id="inputEmail3" placeholder="Subject Code" disabled>
                    <input style="margin-top: -5px;border-radius: 5px;" id="subject_code1" name="subject_code1" type="hidden" class="form-control" placeholder="Subject Code" disabled>
                    <input style="margin-top: -5px;border-radius: 5px;" id="check_classID" name="check_classID" type="hidden" class="form-control" placeholder="Subject Code" disabled>
                  </div>
                </div></div> 
            </div>
            </div>
            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button id="save_subject" type="button" class="btn btn-primary">Save</button>
              </div></form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Subject</th>
                  <th>Theory(FM)</th>
                  <th>Theory(PM)</th>
                  <th>Practical(FM)</th>
                  <th>Practical(PM)</th>
                  <th>Teacher's Assigned</th>
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
                  <th>Code</th>
                  <th>Subject</th>
                  <th>Theory(FM)</th>
                  <th>Theory(PM)</th>
                  <th>Practical(FM)</th>
                  <th>Practical(PM)</th>
                  <th>Teacher's Assigned</th>
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
    var span_text = document.getElementById("active_class_name").innerHTML;
    if(span_text == ""){
      document.getElementById("check_btn_status").setAttribute("data-target", "");
      document.getElementById("check_btn_status").setAttribute("class", "btn btn-block btn-primary disabled");
    }
  </script>
  <script>
    var u = "";
    var v = new Array();
    function selectClass(sel_class) {
     if(sel_class == 'Nursery'){
      document.getElementById("subject_code").value = "NUR-";
      document.getElementById("subject_code1").value = "NUR-";
      document.getElementById("check_classID").value = "NUR";
     }
     if(sel_class == 'LKG'){
      document.getElementById("subject_code").value = "LKG-";
      document.getElementById("subject_code1").value = "LKG-";
      document.getElementById("check_classID").value = "LKG";
     }
     if(sel_class == 'UKG'){
      document.getElementById("subject_code").value = "UKG-";
      document.getElementById("subject_code1").value = "UKG-";
      document.getElementById("check_classID").value = "UKG";
     }
     if(sel_class == 'Class 1'){
      document.getElementById("subject_code").value = "Class1-";
      document.getElementById("subject_code1").value = "Class1-";
      document.getElementById("check_classID").value = "1";
       // ajax request
       $.ajax({
               type: 'get',
               url: '/admin/academic/subjects/get_class_subjects',
               data: {get_classID:1},
               success:function(resp){
                var obj = JSON.parse(resp);
                //$("#jsonTest").text(obj[0]['subject']);
                $('#add_ol > tr').remove();
                var array_subject_length = obj.length;
                for(var lop = 0;lop<array_subject_length;lop++){
                 $("#add_ol").append("<tr><td>"+obj[lop]['subject_code']+"</td><td>"+obj[lop]['subject']+"</td><td>"+obj[lop]['subject_theory_fm']+"</td><td>"+obj[lop]['subject_theory_pm']+"</td><td>"+obj[lop]['subject_practical_fm']+"</td><td>"+obj[lop]['subject_practical_pm']+"</td><td>"+obj[lop]['subject_teacher']+"</td></tr>");
               }
                 $('#example1').DataTable()

               },error:function(){
                  alert("Error");
                }   
           });

     }
     if(document.getElementById("datatable_no_class") == null) {} else {
     document.getElementById("datatable_no_class").style.display = "none";
     } 
     document.getElementById("active_class_name").innerHTML = sel_class;
     document.getElementById("active_class_name1").innerHTML = sel_class;
     document.getElementById("check_btn_status").setAttribute("data-target", "#add_subject");
     document.getElementById("check_btn_status").setAttribute("class", "btn btn-block btn-primary");
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

  $("#save_subject").click(function(){
           var check_classID = $("#check_classID").val();
           var subject_name = $("#subject_name").val();
           var subject_teacher = $("#subject_teacher").val();
           var subject_code = $("#subject_code").val();
           if($("#subject_practical_fm").val()==""){
              var subject_practical_fm = 0;
           } else {
              var subject_practical_fm = $("#subject_practical_fm").val();
           }
           if($("#subject_practical_pm").val()=="") {
              var subject_practical_pm = 0;
           } else {
              var subject_practical_pm = $("#subject_practical_pm").val();
           }
           var subject_theory_fm = $("#subject_theory_fm").val();
           var subject_theory_pm = $("#subject_theory_pm").val();
           $.ajax({
               type: 'get',
               url: '/admin/academic/subjects/store_subject',
               data: {subject_name:subject_name,subject_teacher:subject_teacher,subject_code:subject_code,subject_practical_fm:subject_practical_fm,subject_practical_pm:subject_practical_pm,subject_theory_fm:subject_theory_fm,subject_theory_pm:subject_theory_pm,check_classID:check_classID},
               success:function(resp){
                 if(resp == true) {
                    $("#success_mess").html("<font color='red'>Subject Saved...</font>");
                  } else if(resp == 4){
                   $("#success_mess").html("<font color='green'>Database Location Wrong...</font>");
                   } else {
                    $("#success_mess").html("<font color='green'>Subject Not Saved...</font>");
                   }
               },error:function(){
                  alert("Error");
                }   
           });
         });

</script>

<script>
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

</script>

    
@endsection