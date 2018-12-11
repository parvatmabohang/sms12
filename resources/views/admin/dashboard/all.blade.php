@extends('layouts.admin_design')

@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
    -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Total Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-graduation-cap"></i>
            </div>
            <a href="{{ url('admin/student/student_lists') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Total Employees</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-user-secret"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Total Course</p>
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-book"></i>
            </div>
            <a href="{{ url('admin/academic/subjects/assign_subject') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Total Batch
            </div>
            <div class="icon">
              <i class="fa fa-fw fa-file-text-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
     <!--  below block -->
      <div class="navbar navbar-default navbar-component navbar-xs">
        <ul class="nav navbar-nav visible-xs-block">
            <li class="full-width text-center"><a data-target="#navbar-filter" data-toggle="collapse"><i class="icon-menu7"></i></a>
            </li>
        </ul>
        <div id="navbar-filter" class="navbar-collapse collapse">
            <ul class="nav navbar-nav element-active-slate-400">
                <li class="active"><a data-toggle="tab" href="#activity"><i class="fa fa-fw fa-bars"></i> Activity</a>
                </li>
                <li><a data-toggle="tab" href="#schedule"><i class="fa fa-fw fa-calendar"></i> Schedule </a>
                </li>
                <li><a data-toggle="tab" href="#fees_tab" onclick="feegraph()"><i class="glyphicon glyphicon-signal position-left"></i> Fee reports </a>
                </li>
            </ul>
            <div class="navbar-right">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                   <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="glyphicon glyphicon-th"></i> <span class="visible-xs-inline-block position-right"> Options</span> 
                   <span class="caret"></span></a>
                   <ul class="dropdown-menu dropdown-menu-right" style="width: 260px">
                   <div class="category-content">
                   <div class="row">
                    <div class="col-xs-6">
                      <a class="btn btn-app" href="{{ url('/admin/student/student_admission') }}" style="background-color:#00c0ef;color:white;">
                      <i class="fa fa-fw fa-users"></i> <span>Student Admission</span></a>
                      <a href="{{ url('/admin/fees/student_fees_collection') }}" class="btn btn-app" style=" width: 108px;background-color:#f39c12;color:white;"><i class="fa fa-fw fa-money"></i> <span>Fee Collection</span></a>
                    </div>
                    <div class="col-xs-6">
                    <a href="{{ url('/admin/employee/employee_add') }}" class="btn btn-app" style="width: 90px;background-color:#00a65a;color:white;"><i class="fa fa-fw fa-user-secret"></i><span>Add Employee</span></a>
                        <a href="" class="btn btn-app" style=" width: 90px;background-color:#dd4b39;color:white;"><i class="fa fa-fw fa-line-chart"></i> <span>Fee Details</span></a>
                    </div>
                  </div>
                  </div>
                  </ul>
                </li>
                <li><a href="/usermanual"><i class="fa fa-fw fa-support"  tooltip="usermanual"></i>Support</a></li>
              </ul>
            </div>
        </div>
      </div>
     <!-- Tab Open -->
      <div class="content">
        <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="tabbable">
                    <div class="tab-content">
                                                <div id="activity" class="tab-pane fade active in">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Students' Daily Attendance Overview</h6>

                                <div class="panel-body">                            
                                    <div class="position-relative">
                                     
                                      <button type="button" class="btn btn-success"></button>
                                        &nbsp;Present  &nbsp;&nbsp;&nbsp;
                                      <button type="button" class="btn btn-default"></button>
                                        &nbsp;Absent 
                                             <!--  Chart -->
              <!-- /.col (LEFT) -->
              <!-- BAR CHART -->
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart</h3>

                 <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                 </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                 </div>
                </div>
              <div class="box-body">
                <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
               </div>
              </div>
            <!-- /.box-body -->
             </div>
    <!-- /.content -->
        </div></div></div></div></div>

                                

                        <div class="tab-pane fade" id="schedule"> 
                            <div class="panel panel-white"> 
                                <div class="panel-heading">
                                    <h6 class="panel-title">School's Calendar</h6>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                                </div>
                                <div class="panel-body">
                                    <div class="box box-solid bg-green-gradient">
                                      <div class="box-header">
                                        <i class="fa fa-calendar"></i>
                                        <h3 class="box-title">Calendar</h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                           <!-- button with a dropdown -->
                                          <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bars"></i></button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                              <li><a href="#">Add new event</a></li>
                                              <li><a href="#">Clear events</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">View calendar</a></li>
                                            </ul>
                                          </div>
                                          <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                          <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                        </div>
                                       <!-- /. tools -->
                                      </div>
                                      <!-- /.box-header -->
                                      <div class="box-body no-padding">
                                        <!--The calendar -->
                                        <div id="calendar" style="width: 100%"></div>
                                      </div>
                                     <!-- /.box-body -->
                                      <div class="box-footer text-black">
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <!-- Progress bars -->
                                            <div class="clearfix">
                                              <span class="pull-left">Task #1</span>
                                              <small class="pull-right">90%</small>
                                            </div>
                                            <div class="progress xs">
                                              <div class="progress-bar progress-bar-green" style="width: 90%;">
                                              </div>
                                            </div>
                                            <div class="clearfix">
                                              <span class="pull-left">Task #2</span>
                                              <small class="pull-right">70%</small>
                                            </div>
                                            <div class="progress xs">
                                              <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                            </div>
                                          </div>
                <!-- /.col -->
                                          <div class="col-sm-6">
                                            <div class="clearfix">
                                              <span class="pull-left">Task #3</span>
                                              <small class="pull-right">60%</small>
                                            </div>
                                            <div class="progress xs">
                                              <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                            </div>

                                            <div class="clearfix">
                                              <span class="pull-left">Task #4</span>
                                              <small class="pull-right">40%</small>
                                            </div>
                                            <div class="progress xs">
                                              <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                            </div>
                                          </div>
                <!-- /.col -->
                                        </div>
              <!-- /.row -->
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="fees_tab" class="tab-pane fade">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Fee reports</h6>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                <div class="panel-body" id="">

                                    <div class="col-sm-11">
                                        <div id="feereport_graph1" allign="center">
                                            <span class='fone'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Total
                                            <span class='ftwo'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Collected
                                            <span class='fthree'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;Remaining
                                        </div><br/>
                                        <div id="loader"  style="display:none;"></div>
                                        <canvas id="fee" style="height:150;width:50%;"></canvas>
                                        <div id="feereport_graph">

                                        </div>                                  
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            </div>
            <div class="col-lg-4">
             <div class="box box-primary">
              <div class="box-header with-border">
                <i class="fa fa-bar-chart-o"></i>
                <h3 class="box-title">Gender Chart</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                <div id="donut-chart" style="height: 344px;"></div>
              </div>
            <!-- /.box-body-->
             </div>
            </div>



          </div>
        </div>  

       <!--  Another tab -->
       <div class="page-header">
        <div class="breadcrumb-line">
          <ul class="breadcrumb">
            Other Demograph Data            
          </ul>
        </div>
       </div>
       <!-- Data -->
             <div class="row">
        <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Religion Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="donut-chart1" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Donut chart -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title">Age Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="donut-chart2" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
        





    </section>
    <!-- /.content -->
  </div>
@endsection