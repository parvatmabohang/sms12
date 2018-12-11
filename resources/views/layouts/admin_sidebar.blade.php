  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input id="search_by_name" type="text" class="form-control" placeholder="Search...">
        </div>
       <!--  <div id="panel">Hello world!</div> -->
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @if(Request::getPathInfo() == '/admin/dashboard')
        <li class="active">
        @else
        <li>
        @endif
          <a href="{{ url('admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-cog"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        @if(Request::getPathInfo() == '/admin/academic/subjects/assign_subject' || Request::getPathInfo() == '/admin/academic/subjects/assign_bulk_subjects')
        <li class="treeview active">
        @else
        <li class="treeview">
        @endif 
          <a href="#">
            <i class="fa fa-fw fa-users"></i>
            <span>Academic</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if(Request::getPathInfo() == '/admin/academic/subjects/assign_subject')
            <li class="active">
            @else
            <li>
            @endif <a href="{{ url('admin/academic/subjects/assign_subject') }}"><i class="fa fa-circle-o"></i> Subject</a>
            </li>
            @if(Request::getPathInfo() == '/admin/academic/subjects/assign_bulk_subjects')
            <li class="active">
            @else
            <li>
            @endif<a href="{{ url('admin/academic/subjects/assign_bulk_subjects') }}"><i class="fa fa-circle-o"></i> Assign Bulk Subjects</a></li>
          </ul>
        </li>
        @if(Request::getPathInfo() == '/admin/student/student_lists' || Request::getPathInfo() == '/admin/student/student_admission')
        <li class="treeview active">
        @else
        <li class="treeview">
        @endif 
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if(Request::getPathInfo() == '/admin/student/student_lists')
            <li class="active">
            @else
            <li>
            @endif<a href="{{ url('admin/student/student_lists') }}"><i class="fa fa-circle-o"></i>Student List</a></li>
            @if(Request::getPathInfo() == '/admin/student/student_admission')
            <li class="active">
            @else
            <li>
            @endif<a href="{{ url('admin/student/student_admission') }}"><i class="fa fa-circle-o"></i>Student Admission</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user-secret"></i> <span>Employee</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <?php 
          $splitted_url = str_split(Request::getPathInfo(),35);
        ?>
        @if(Request::getPathInfo() == '/admin/fees/student_fees_collection' || $splitted_url[0] == '/admin/fees/student_fees_collection' || Request::getPathInfo() == '/admin/fees/student_fees_collection_details')
        <li class="treeview active">
        @else
        <li class="treeview">
        @endif
          <a href="#">
            <i class="fa fa-fw fa-money"></i> <span>Finance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @if(Request::getPathInfo() == '/admin/fees/student_fees_collection' || $splitted_url[0] == '/admin/fees/student_fees_collection')
            <li class="active">
            @else
            <li>
            @endif<a href="{{ url('admin/fees/student_fees_collection') }}"><i class="fa fa-circle-o"></i>Fee Collection</a></li>
            @if(Request::getPathInfo() == '/admin/fees/student_fees_collection_details')
            <li class="active">
            @else
            <li>
            @endif<a href="{{ url('admin/fees/student_fees_collection_details') }}"><i class="fa fa-circle-o"></i>Collection Details</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-book"></i> <span>Library</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Messages/SMS</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-fw fa-line-chart"></i> <span>Performance</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>About Us</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Contact Us</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Blog</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <script> 
$(document).ready(function(){
    $("#search_by_name").keyup(function(){
        if($("#search_by_name").val()==""){
        $("#panel").hide(1000);
        $('#panel').empty();
        }else{
        $("#panel").slideDown("slow");
        var student_search_name = $("#search_by_name").val();
        $('#panel').empty();
        if(student_search_name.length >2) {
          $.ajax({
               type: 'get',
               url: '/admin/student/search_students',
               data: {student_search_name:student_search_name},
               success:function(resp){
                var obj_1 = jQuery.parseJSON(resp);
                //alert(obj_1[0]['student_name']);
                 if(obj_1.length != 0) {
                    for(var lop = 0;lop<obj_1.length;lop++){
                      var student_search_register = obj_1[lop]['register_number'];
                      // $("#panel").append("<div class='col-sm-4 col-md-3'><a href='{{ url('admin/student/student_search_register') }}'><div class='box box-widget widget-user'><div class='widget-user-header bg-aqua-active'><h3 class='widget-user-username'>"+obj_1[lop]['student_name']+"</h3><h4 class='widget-user-desc'>Class"+obj_1[lop]['class']+"</h4></div><div class='widget-user-image'><img class='img-circle' src='{{ asset('student_images/as.jpg') }}' alt='User Avatar'></div><div class='box-footer'><div class='row'><div class='col-sm-6 border-right'><div class='description-block'><h5 class='description-header'>"+student_search_register+"</h5><span class='description-text'>Reg. No.</span></div></div><div class='col-sm-6 border-right'><div class='description-block'><h5 class='description-header'>"+obj_1[lop]['roll_no']+"</h5><span class='description-text'>Roll No.</span></div></div></div></div></div></a></div>");

                       $('#panel').append('<div class="col-sm-4 col-md-3"><a href="{{ url("admin/student") }}/'+student_search_register+'"><div class="box box-widget widget-user"><div class="widget-user-header bg-aqua-active"><h3 class="widget-user-username">'+obj_1[lop]["student_name"]+'</h3><h4 class="widget-user-desc">Class'+obj_1[lop]["class"]+'</h4></div><div class="widget-user-image"><img class="img-circle" src="{{ asset("student_images/as.jpg") }}" alt="User Avatar"></div><div class="box-footer"><div class="row"><div class="col-sm-6 border-right"><div class="description-block"><h5 class="description-header">'+student_search_register+'</h5><span class="description-text">Reg. No.</span></div></div><div class="col-sm-6 border-right"><div class="description-block"><h5 class="description-header">'+obj_1[lop]["roll_no"]+'</h5><span class="description-text">Roll No.</span></div></div></div></div></div></a></div>');
                     }
                  } else {
                    $("#panel").html("<font color='green'>No Records...</font>");
                   }
               },error:function(){
                  alert("Error");
                }   
           });
        } else{
            $("#panel").html("<font color='green'>Enter at least 3 characters...</font>");
        }
        }
        
    });
});
</script>