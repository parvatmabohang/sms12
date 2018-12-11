<?php $__env->startSection('content'); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div style="height: 100em;" class="content-wrapper">
    <!-- Content Header (Page header) 
    -->
    <section class="content-header">
      <h1>
        Fees
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Finance</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Fees</a></li>
        <li class="active">Fees Collection</li>
      </ol>
    </section>
    <!-- Main content -->
    <div class="content">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Student Fees Collection</h4>
                        </div>
                        <div class="panel-body">
                            <div class="input-group input-group-lg">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-block btn-primary" data-toggle="dropdown">Search
                                            <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><button  id="searchby_regid" type="button" class="btn btn-block btn-success btn-sm">Search By Register Id</button></li>
                                                <li><button  id="searchby_regid" type="button" class="btn btn-block btn-danger btn-sm">Search By Class Roll No.</button></li>
                                            </ul>
                                        </div>
                                            <!-- /btn-group -->
                                        <?php if($student_reg_no): ?>    
                                        <input id="student_search_id" name="student_search_id" type="text" class="form-control" value="<?php echo e($student_reg_no); ?>">
                                        <?php else: ?>
                                        <input id="student_search_id" name="student_search_id" type="text" class="form-control">
                                        <?php endif; ?>

                                </div><br>
                            <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    
                                <div class="panel-body">
                                <div class="row">
                                         <div class="form-group col-sm-4">
                                            <label for="reg_input_name" class="req">Student's Name</label>
                                            <input size="84" maxlength="45" class="form-control" value="" name="student_name" id="student_name" type="text" /><div class="school_val_error" id="Employeemaster_employee_code_em_" style="display:none"></div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="reg_input_name" class="req">Student's Class</label>
                                            <input size="84" maxlength="45" class="form-control" value="" name="student_class" id="student_class" type="text" /><div class="school_val_error" id="Employeemaster_employee_code_em_" style="display:none"></div>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="reg_input_name" class="req">Student's Roll No.</label>
                                            <input size="84" maxlength="45" class="form-control" value="" name="student_rollno" id="student_rollno" type="text" /><div class="school_val_error" id="Employeemaster_employee_code_em_" style="display:none"></div>
                                            
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="reg_input_name" class="req">Student's Reg. No.</label>
                                            <input class="form-control" name="student_regno" id="student_regno" type="text" maxlength="256" /><div class="school_val_error" id="Employeedetails_employeedetails_qualification_em_" style="display:none"></div>                                        </div>
                                        </div>
                                        <!-- <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="reg_input_name" class="req">Total Experience</label>
                                            <input class="form-control" name="employee_experience" id="Employeedetails_employeedetails_experience" type="text" maxlength="3" /><div class="school_val_error" id="Employeedetails_employeedetails_experience_em_" style="display:none"></div>                                        </div>
                                            </div> -->
                                    </div>
                                </div>
                            </div>
                           
                             <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Fees Collection</h4>
                                    </div>
                                     <!-- Main content -->
    <section id="printTable" class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> VBES, Sch.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Admin, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: info@almasaeedstudio.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong id="invoice_student_name"></strong><br>
            <span id="invoice_present_address"></span>, <span id="invoice_country"></span><br>
            Phone: <span id="invoice_mobile"></span><br>
            Email: <span id="invoice_email"></span>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Order ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Serial #</th>
              <th>Description</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Call of Duty</td>
              <td>455-981-221</td>
              <td>El snort testosterone trophy driving gloves handsome</td>
              <td><div class="input-group margin">
                <div class="input-group-btn">
                  <span class="btn btn-block btn-primary">NRs.</span>
                </div>
                <!-- /btn-group -->
                <input id="sum1" type="number" class="form-control">
              </div></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Need for Speed IV</td>
              <td>247-925-726</td>
              <td>Wes Anderson umami biodiesel</td>
              <td><div class="input-group margin">
                <div class="input-group-btn">
                  <span class="btn btn-block btn-primary">NRs.</span>
                </div>
                <!-- /btn-group -->
                <input id="sum2" type="number" class="form-control">
              </div></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Monsters DVD</td>
              <td>735-845-642</td>
              <td>Terry Richardson helvetica tousled street art master</td>
              <td><div class="input-group margin">
                <div class="input-group-btn">
                  <span class="btn btn-block btn-primary">NRs.</span>
                </div>
                <!-- /btn-group -->
                <input id="sum3" type="number" class="form-control">
              </div></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Grown Ups Blue Ray</td>
              <td>422-568-642</td>
              <td>Tousled lomo letterpress</td>
              <td><div class="input-group margin">
                <div class="input-group-btn">
                  <span class="btn btn-block btn-primary">NRs.</span>
                </div>
                <!-- /btn-group -->
                <input id="sum4" type="number" class="form-control">
              </div></td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td><span id="sub_total"></span></td>
              </tr>
              <tr>
                <th>Discount(in %)</th>
                <td><div class="input-group margin">
                <!-- /btn-group -->
                <input id="discount" type="number" class="form-control">
                <div class="input-group-btn">
                  <span class="btn btn-block btn-primary">%</span>
                </div>
              </div></td>
              </tr>
              <tr>
                <th>Total:</th>
                <td><span id="grand_total"></span></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <form method="get" action="<?php echo e(url('admin/fees/invoice_print')); ?>">
            <input type="hidden" id="send_invoice_student_name" name="send_invoice_student_name" /> 
            <input type="hidden" id="send_invoice_present_address" name="send_invoice_present_address" />
            <input type="hidden" id="send_invoice_country" name="send_invoice_country" />
            <input type="hidden" id="send_invoice_mobile" name="send_invoice_mobile" />
            <input type="hidden" id="send_invoice_email" name="send_invoice_email" />
            <input type="hidden" id="send_sum1" name="send_sum1" />
            <input type="hidden" id="send_sum2" name="send_sum2" />
            <input type="hidden" id="send_sum3" name="send_sum3" />
            <input type="hidden" id="send_sum4" name="send_sum4" />
            <input type="hidden" id="send_discount" name="send_discount" />
            <input type="hidden" id="send_sub_total" name="send_sub_total" />
            <input type="hidden" id="send_grand_total" name="send_grand_total" />
            <button>Print</button>
          </form>
          <a href="<?php echo e(url('admin/fees/invoice_print')); ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
    <!-- /.content -->
                                    
                                </div>
                            </div>
                        </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script>
      $("#searchby_regid").click(function(){
          var student_search_id = $('#student_search_id').val();
           $.ajax({
               type: 'get',
               url: '/admin/fees/student_search_id',
               data: {student_search_id:student_search_id},
               success:function(resp){
                var obj = JSON.parse(resp);
                $('#student_name').val(obj[0]['student_name']);
                $('#student_class').val('Class '+obj[0]['class']);
                $('#student_rollno').val(obj[0]['roll_no']);
                $('#student_regno').val(obj[0]['register_number']);
                $('#invoice_student_name').text(obj[0]['student_name']);
                $('#invoice_present_address').text(obj[0]['present_address']);
                $('#invoice_country').text(obj[0]['country']);
                $('#invoice_mobile').text(obj[0]['mobile']);
                $('#invoice_email').text(obj[0]['email']);
                $('#send_invoice_student_name').val(obj[0]['student_name']);
                $('#send_invoice_present_address').val(obj[0]['present_address']);
                $('#send_invoice_country').val(obj[0]['country']);
                $('#send_invoice_mobile').val(obj[0]['mobile']);
                $('#send_invoice_email').val(obj[0]['email']);
               },error:function(){
                  alert("Error");
                }   
           });
      });
      if($('#student_search_id').val().length != 0){
        $('#searchby_regid').trigger('click');
      }
    </script>

    <script>
      var sum1 = 0;
      var sum2 = 0;
      var sum3 = 0;var sum4 = 0;var sub_total = 0;
      var discount = 0;var grand_total = 0;
      $("#sum1").keyup(function(){
        sum1 = parseInt($("#sum1").val());
        if(sum1.toString() == "NaN"){
          sum1 = 0;
        }
        sub_total = sum1+sum2+sum3+sum4;
        $("#send_sum1").val(sum1);
        $("#sub_total").text(sub_total);
        $("#send_sub_total").val(sub_total);
        discount = parseInt($("#discount").val());
        if(discount.toString() == "NaN"){
          discount = 0;
        }
        grand_total = sub_total-discount*0.01*sub_total;
        $("#grand_total").text(grand_total);
        $("#send_grand_total").val(grand_total);
      });
       $("#sum2").keyup(function(){
        sum2 = parseInt($("#sum2").val());
        if(sum2.toString() == "NaN"){
          sum2 = 0;
        }
        sub_total = sum1+sum2+sum3+sum4;
        $("#send_sum2").val(sum2);
        $("#sub_total").text(sub_total);
        $("#send_sub_total").val(sub_total);
        discount = parseInt($("#discount").val());
        if(discount.toString() == "NaN"){
          discount = 0;
        }
        grand_total = sub_total-discount*0.01*sub_total;
        $("#grand_total").text(grand_total);
        $("#send_grand_total").val(grand_total);
      });
       $("#sum3").keyup(function(){
        sum3 = parseInt($("#sum3").val());
        if(sum3.toString() == "NaN"){
          sum3 = 0;
        }
        sub_total = sum1+sum2+sum3+sum4;
        $("#send_sum3").val(sum3);
        $("#sub_total").text(sub_total);
        $("#send_sub_total").val(sub_total);
        discount = parseInt($("#discount").val());
        if(discount.toString() == "NaN"){
          discount = 0;
        }
        grand_total = sub_total-discount*0.01*sub_total;
        $("#grand_total").text(grand_total);
        $("#send_grand_total").val(grand_total);
      });
       $("#sum4").keyup(function(){
        sum4 = parseInt($("#sum4").val());
        if(sum4.toString() == "NaN"){
          sum4 = 0;
        }
        sub_total = sum1+sum2+sum3+sum4;
        $("#send_sum4").val(sum4);
        $("#sub_total").text(sub_total);
        $("#send_sub_total").val(sub_total);
        discount = parseInt($("#discount").val());
        if(discount.toString() == "NaN"){
          discount = 0;
        }
        grand_total = sub_total-discount*0.01*sub_total;
        $("#grand_total").text(grand_total);
        $("#send_grand_total").val(grand_total);
      });
       $("#discount").keyup(function(){
        discount = parseInt($("#discount").val());
        if(discount.toString() == "NaN"){
          discount = 0;
        }
        grand_total = sub_total-discount*0.01*sub_total;
        $("#send_discount").val(discount);
        $("#grand_total").text(grand_total);
        $("#send_grand_total").val(grand_total);
      });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>