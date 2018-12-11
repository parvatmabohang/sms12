@extends('layouts.admin_design')

@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <section class="content-header">
      <h1>
        Assign Bulk Subject
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Academic</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Subjects</a></li>
        <li class="active">Assign Bulk Subject</li>
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
        <i id="success_mess"></i>
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
                <a href="" style="border-radius: 5px;width: 120px;margin-top: -3.4em;margin-left: 10em;" class="btn bg-purple btn-flat margin" >Bulk Addition</a>
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
                <h4 class="modal-title">Upload Subject CSV of <i id="active_class_name1"></i></h4>
              </div>
              <div class="modal-body">
                 <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ url('admin/academic/subjects/assign_bulk_subjects') }}" enctype="multipart/form-data">
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
                  <th>Click on class to add subject</th>
                  <th></th><th></th>
                <th></th><th></th><th></th><th></th>
                </tr>
                <tr id="datatable_yes_class">
                  <td><input id="c0" style="width: 140px;" type='text' value='Class1-Mathematics'></td>
                  <td><input id="s0" style="width: 120px;" type='text' value='Mathematics' ></td>
                  <td><input id="tf0" style="width: 40px;" type='number' value='100' ></td>
                  <td><input id="tp0" style="width: 40px;" type='number' value='100' ></td>
                  <td><input id="pf0" style="width: 40px;" type='number' value='100' ></td>
                  <td><input id="pp0" style="width: 40px;" type='number' value='100' ></td>
                  <td><input id="ta0" style="width: 130px;" type='text' value='Anoj Bhattarai' ></td>
                  </tr>
                </tbody>

                <tfoot>
                <tr>
                  <th><button id="add_more_subject" type="button" class="btn btn-primary">+</button>
                      <button id="remo" type="button" class="btn btn-primary">-</button> 
                      <button id="save_all_subject" type="button" class="btn btn-primary">Save</button></th>
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
<!-- <input type="text" id="flip">
<div id="panel">Hello world!</div>
<div>sadasd</div> -->
  </div>
  <script>
    document.getElementById("datatable_yes_class").style.display = "none";
    var span_text = document.getElementById("active_class_name").innerHTML;
    if(span_text == ""){
      document.getElementById("check_btn_status").setAttribute("data-target", "");
      document.getElementById("check_btn_status").setAttribute("class", "btn btn-block btn-primary disabled");
    }
  </script>
  <script>
    var u = "";
    var v = new Array();
    var sub_count = "";
    function selectClass(sel_class) {
     if(sel_class == 'Nursery'){

     }
     if(sel_class == 'LKG'){

     }
     if(sel_class == 'UKG'){

     }
     if(sel_class == 'Class 1'){
      // document.getElementById("subject_code").value = "Class1-";
      // document.getElementById("subject_code1").value = "Class1-";
      // document.getElementById("check_classID").value = "1";
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
                sub_count = 0;
                for(var lop = 0;lop<array_subject_length;lop++){
                   sub_count++;
                 $("#add_ol").append("<tr id='"+sub_count+"'><td><input id='c"+sub_count+"' style='width: 140px;' type='text' value='"+obj[lop]['subject_code']+"'></td><td><input id='s"+sub_count+"' style='width: 120px;' type='text' value='"+obj[lop]['subject']+"'></td><td><input id='tf"+sub_count+"' style='width:40px;' type='text' value='"+obj[lop]['subject_theory_fm']+"'></td><td><input id='tp"+sub_count+"' style='width: 40px;' type='text' value='"+obj[lop]['subject_theory_pm']+"'></td><td><input id='pf"+sub_count+"' style='width: 40px;' type='text' value='"+obj[lop]['subject_practical_fm']+"'></td><td><input id='pp"+sub_count+"' style='width: 40px;' type='text' value='"+obj[lop]['subject_practical_pm']+"'></td><td><input id='ta"+sub_count+"' style='width: 130px;' type='text' value='"+obj[lop]['subject_teacher']+"'></td></tr>");
                  
               }

               },error:function(){
                  alert("Error");
                }   
           });
       document.getElementById("datatable_yes_class").style.display = "";
       document.getElementById("datatable_no_class").style.display = "none";
       //$('#example1').DataTable()
     }
     // if(document.getElementById("datatable_no_class") == null) {} else {
     // document.getElementById("datatable_no_class").style.display = "none";
     // } 
     document.getElementById("active_class_name").innerHTML = sel_class;
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

    //$("#test1").click(function(){
    //$.ajax({type: 'get',url: "/admin/academic/subjects/assign_subject", success: function(result){
      //  alert("Success");
    //},error: function(){
      //alert("Error");
   // }});
  //});
  //var sub_count = 0;
  $("#add_more_subject").click(function(){
            sub_count++;
           $("#add_ol").append("<tr id='"+sub_count+"'><td><input id='c"+sub_count+"' style='width: 140px;' type='text' value='Class1-Mathematics'></td><td><input id='s"+sub_count +"' style='width: 120px;' type='text' value='Mathematics' ></td><td><input id='tf"+sub_count +"' style='width: 40px; type='number' value='100' ></td><td><input id='tp"+sub_count +"' style='width: 40px;' type='number' value='100' ></td><td><input id='pf"+sub_count +"'style='width: 40px;' type='number' value='100' ></td><td><input id='pp"+sub_count +"' style='width: 40px;' type='number' value='100' ></td><td><input id='ta"+sub_count +"' style='width: 130px;' type='text' value="+sub_count+" ><a id='remo' class='btn btn-primary'>-</a></td></tr>");
           
           //$('#example1').DataTable()
  });

  $("#remo").click(function(){
      $("#"+sub_count).remove();
      if(sub_count!=0){
        sub_count--;
      }
  });

  $("#save_all_subject").click(function(){
          var cars = new Array();
          for(var sub_test_count=0;sub_test_count<=sub_count;sub_test_count++)
          {

             cars[sub_test_count] = [$("#c"+sub_test_count).val(),$("#s"+sub_test_count).val(),$("#tf"+sub_test_count).val(),$("#tp"+sub_test_count).val(),$("#pf"+sub_test_count).val(),$("#pp"+sub_test_count).val(),$("#ta"+sub_test_count).val()];
            // for(var sub_sub_test_count=0;sub_sub_test_count<=6;sub_sub_test_count++)
            // {
            //   cars[sub_test_count][sub_sub_test_count] = $("#c"+sub_test_count).val();
            // } 
          }
          //var tyu = $("#c1").val();
          
          var myJSON = JSON.stringify(cars);
          
           // var check_classID = $("#check_classID").val();
           // var subject_name = $("#subject_name").val();
           // var subject_teacher = $("#subject_teacher").val();
           // var subject_code = $("#subject_code").val();
           // if($("#subject_practical_fm").val()==""){
           //    var subject_practical_fm = 0;
           // } else {
           //    var subject_practical_fm = $("#subject_practical_fm").val();
           // }
           // if($("#subject_practical_pm").val()=="") {
           //    var subject_practical_pm = 0;
           // } else {
           //    var subject_practical_pm = $("#subject_practical_pm").val();
           // }
           // var subject_theory_fm = $("#subject_theory_fm").val();
           // var subject_theory_pm = $("#subject_theory_pm").val();
           $.ajax({
               type: 'get',
               url: '/admin/academic/subjects/assign_bulk_subject',
               data: {all_subject:myJSON},
               success:function(resp){
                //alert(resp);
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
    // $("#subject_name").keyup(function(){
    //     var poipi = $("#subject_code1").val();
    //     var poip = $("#subject_name").val();
    //     $("#subject_code").val(poipi+poip);
    // });

</script>

    
@endsection