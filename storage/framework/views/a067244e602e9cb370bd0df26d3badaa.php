<div class="modal fade" id="salary_model" tabindex="-1" role="dialog" aria-labelledby="basicModal"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
   <div class="modal-content">
       <div class="modal-header">
           <h4 class="modal-title" id="myModalLabel"><?php echo e(__('Abbis Farm Employee Salary Info')); ?></h4>
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       </div>
       <div class="modal-body">
           <div class="row">
               <div class="col-md-12">
                   <div class="d-flex">
                       <div id="employee_profile_photo"></div>
                       <div class="ml-3">
                           <div class="h3 text-bold d-inline" id="employee_full_name"></div> (<span id="employee_username"></span>)
                           <br>
                           <span class="text-gray" id="employee_designation"></span>
                           <span class="text-gray" id="employee_department"></span>
                           <br>
                           <a id="employee_id" href=""><?php echo e(__('View Profile')); ?></a>
                       </div>
                   </div>
               </div>
               <div class="col-md-12">
                   <h3 class="mt-5"><?php echo e(__('Employee Salary Details')); ?></h3>
                   <hr>
                   <div class="card-block">
                       <div id="accordion">
                           <div class="card mb-2">
                               <div class="card-header"> <a class="text-dark" data-toggle="collapse" href="#basic_salary" aria-expanded="true"> <strong><span id="payslip_type"></span></strong> </a> </div>
                               <div id="basic_salary" class="collapse in" data-parent="#accordion" aria-expanded="true">
                                   <div class="card-body">
                                       <div class="table-responsive" data-pattern="priority-columns">
                                           <table class="table table-striped table-bordered dataTable no-footer">
                                               <tbody>
                                               <tr>
                                                   <td><strong><span id="monthly_hourly"></span>:</strong><span class="pull-right" id="basic_salary_amount"></span></td>
                                                   <td class="hide-div"><strong><span id="hours_worked"></span>:</strong> <span class="pull-right" id="total_hours_worked"></span></td>
                                                   <td class="hide-div"><strong><span id="hours_worked_amount"></span>:</strong> <span class="pull-right" id="total_hours_worked_amount"></span></td>
                                               </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="card mb-2">
                               <div class="card-header"> <a class="text-dark" data-toggle="collapse" href="#pension" aria-expanded="true"> <strong><?php echo e(__('Pension')); ?></strong></a> </div>
                               <div id="pension" class="collapse in" data-parent="#accordion" aria-expanded="true">
                                   <div class="card-body">
                                       <div class="table-responsive" data-pattern="priority-columns">
                                           <table class="table table-striped table-bordered dataTable no-footer">
                                               <tbody>
                                                   <tr>
                                                       <td><strong><?php echo e(__('Pension Type')); ?></span>:</strong><span class="pull-right" id="pension_type"></span></td>
                                                   </tr>
                                                   <tr>
                                                       <td><strong><?php echo e(__('Pension Amount')); ?></span>:</strong><span class="pull-right" id="pension_amount"></span></td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="card mb-2">
                               <div class="card-header"> <a class="text-dark collapsed" data-toggle="collapse" href="#set_allowances" aria-expanded="false"> <strong><?php echo e(trans('file.Allowances')); ?></strong></a> &nbsp; <a href="#" data-toggle="popover" data-placement="top" data-content="If you don't set this month's amount, the last month's amount will be treated as this month"><i class="fa fa-exclamation-circle text-warning" aria-hidden="true"></i></a></div>
                               <div id="set_allowances" class="collapse" data-parent="#accordion">
                                   <div class="box-body">
                                       <div class="table-responsive" data-pattern="priority-columns">
                                           <table class="table table-striped table-bordered dataTable no-footer">
                                               <tbody>
                                               <tr id="allowance_info"></tr>
                                               <tr>
                                                   <td><strong><?php echo e(trans('file.Total')); ?>:</strong> <span id="total_allowance" class="pull-right"></span></td>
                                               </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="card mb-2">
                               <div class="card-header"> <a class="text-dark collapsed" data-toggle="collapse" href="#set_commissions" aria-expanded="false"> <strong><?php echo e(trans('file.Commissions')); ?></strong></a> &nbsp; <a href="#" data-toggle="popover" data-placement="top" data-content="If you don't set this month's amount, 0 amount will be treated as this month"><i class="fa fa-exclamation-circle text-warning" aria-hidden="true"></i></a> </div>
                               <div id="set_commissions" class="collapse" data-parent="#accordion">
                                   <div class="box-body">
                                       <div class="table-responsive" data-pattern="priority-columns">
                                           <table class="table table-striped table-bordered dataTable no-footer">
                                               <tbody>
                                               <tr id="commission_info"></tr>
                                               <tr>
                                                   <td><strong><?php echo e(trans('file.Total')); ?>:</strong> <span id="total_commission" class="pull-right"></span></td>
                                               </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="card  mb-2">
                               <div class="card-header"> <a class="text-dark collapsed" data-toggle="collapse" href="#set_loan_deductions" aria-expanded="false"> <strong><?php echo e(trans('file.Loan')); ?></strong> </a> </div>
                               <div id="set_loan_deductions" class="collapse" data-parent="#accordion">
                                   <div class="box-body">
                                       <div class="table-responsive" data-pattern="priority-columns">
                                           <table class="table table-striped table-bordered dataTable no-footer">
                                               <tbody>
                                               <tr id="loan_info">

                                               </tr>
                                               <tr>
                                                   <td><strong><?php echo e(trans('file.Total')); ?>:</strong> <span id="total_loan"  class="pull-right"></span></td>
                                               </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="card mb-2">
                               <div class="card-header"> <a class="text-dark collapsed" data-toggle="collapse" href="#statutory_deductions" aria-expanded="false"> <strong><?php echo e(__('Statutory deductions')); ?></strong></a> &nbsp; <a href="#" data-toggle="popover" data-placement="top" data-content="If you don't set this month's amount, the last month's amount will be treated as this month"><i class="fa fa-exclamation-circle text-warning" aria-hidden="true"></i></a> </div>
                               <div id="statutory_deductions" class="collapse" data-parent="#accordion">
                                   <div class="box-body">
                                       <div class="table-responsive" data-pattern="priority-columns">
                                           <table class="table table-striped table-bordered dataTable no-footer">
                                               <tbody>
                                               <tr id="deduction_info"></tr>
                                               <tr>
                                                   <td><strong><?php echo e(trans('file.Total')); ?>:</strong> <span id="total_deduction" class="pull-right"></span></td>
                                               </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="card mb-2">
                               <div class="card-header"> <a class="text-dark collapsed" data-toggle="collapse" href="#set_other_payments" aria-expanded="false"> <strong><?php echo e(__('Over Time')); ?></strong></a> &nbsp; <a href="#" data-toggle="popover" data-placement="top" data-content="If you don't set this month's amount, 0 amount will be treated as this month"><i class="fa fa-exclamation-circle text-warning" aria-hidden="true"></i></a> </div>
                               <div id="set_other_payments" class="collapse" data-parent="#accordion">
                                   <div class="box-body">
                                       <div class="table-responsive" data-pattern="priority-columns">
                                           <table class="table table-striped table-bordered dataTable no-footer">
                                               <tbody>
                                               <tr id="other_payment_info"></tr>
                                               <tr>
                                                   <td><strong><?php echo e(trans('file.Total')); ?>:</strong> <span id="total_other_payment" class="pull-right"></span></td>
                                               </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="card mb-2">
                               <div class="card-header"> <a class="text-dark collapsed" data-toggle="collapse" href="#overtime" aria-expanded="false"> <strong><?php echo e(trans('file.Overtime')); ?></strong></a> &nbsp; <a href="#" data-toggle="popover" data-placement="top" data-content="If you don't set this month's amount, 0 amount will be treated as this month"><i class="fa fa-exclamation-circle text-warning" aria-hidden="true"></i></a> </div>
                               <div id="overtime" class="collapse" data-parent="#accordion">
                                   <div class="card-body">
                                       <div class="table-responsive">
                                           <table class="table table-bordered mb-0">
                                               <thead>
                                               <tr>
                                                   <th>#</th>
                                                   <th><?php echo e(__('Department')); ?></th>
                                                   <th><?php echo e(__('Employee Working Days')); ?></th>
                                                   <th><?php echo e(trans('Daily Target')); ?></th>
                                                   <th><?php echo e(trans('Cost')); ?></th>
                                               </tr>
                                               </thead>
                                               <tbody id="overtime_info">
                                               </tbody>
                                               <tfoot>
                                               <tr>
                                                   <td colspan="4" align="right"><strong><?php echo e(trans('file.Total')); ?>:</strong></td>
                                                   <td id="total_overtime"></td>
                                               </tr>
                                               </tfoot>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="card-header"> <strong class="text-dark"><?php echo e(__('Net Salary')); ?></strong> <strong class="float-right" id="total_salary"></strong></div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('file.Close')); ?></button>
   </div>
</div>
</div>


<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    (function($) {
        "use strict";

        $(document).on('click', '.details', function () {
            //individual salary id from pay_list table
            let id = $(this).attr('id');
            let filter_month_year = $('#month_year').val();
            let currency_format = '<?php echo e(config('variable.currency_format')); ?>';

            //target contains payslip.show
            // let target = '<?php echo e(route('paySlip.index')); ?>/' + id;
            let target = '<?php echo e(route('paySlip.show')); ?>';

            $.ajax({
                url: target,
                // dataType: "json",
                type: "GET",
                data: {id:id, filter_month_year:filter_month_year},
                success: function (result) {
                    console.log(result.data);
                    // console.log(result.data.allowances[0]);

                    $('#employee_username').html(result.data.employee_username);
                    $('#employee_full_name').html(result.data.employee_full_name);
                    if (result.data.employee_designation=='') {
                        $('#employee_designation').html(result.data.employee_designation);
                    }
                    else {
                        $('#employee_designation').html(result.data.employee_designation + ', ');
                    }
                    $('#employee_department').html(result.data.employee_department);
                    $('#employee_join_date').html(result.data.employee_join_date);
                    $('#employee_id').attr("href","<?php echo e(url('staff/employees/')); ?>/"+result.data.employee_id);
                    if (result.data.employee_profile_photo=='') {
                        $('#employee_profile_photo').html("<img src=<?php echo e(URL::to('/public')); ?>/uploads/profile_photos/avatar.jpg  width='100'  class='rounded-circle' />");
                    }
                    else {
                        $('#employee_profile_photo').html("<img src=<?php echo e(URL::to('/public')); ?>/uploads/profile_photos/" + result.data.employee_profile_photo + " width='100'  class='rounded-circle' />");
                    }
                    $('#pension_type').html(result.data.pension_type);

                    let total_allowance = 0;
                    (result.data.allowances).forEach(function (a) {
                        total_allowance = total_allowance + parseFloat(a.allowance_amount);
                        $('#allowance_info').append('<tr><td><strong>'+ a.allowance_title+ '---</strong><div class="pull-right">'+a.allowance_amount+'</div></td></tr>');
                    });

                    let total_commission = 0;
                    (result.data.commissions).forEach(function (a) {
                        total_commission = total_commission + parseFloat(a.commission_amount);
                        $('#commission_info').append('<tr><td><strong>'+ a.commission_title+'---</strong><span class="pull-right">'+a.commission_amount+'</span></td></tr>');
                    });

                    let total_loan = 0;
                    (result.data.loans).forEach(function (a) {
                        total_loan = total_loan + parseFloat(a.monthly_payable);
                        $('#loan_info').append('<tr>' +
                            '<td><strong>Total Loan---     </strong> <div class="float-right">'+a.loan_amount+'</div></td>' +
                            '<td><strong>Monthly Payable---     </strong> <div class="float-right">'+a.monthly_payable+'</div></td>' +
                            '<td><strong>Installment Remaining---     </strong> <div class="float-right">'+a.time_remaining+'</div></td>' +
                            '<td><strong>Amount Remaining---     </strong> <div class="float-right">'+a.amount_remaining+'</div></td>' +
                            '</tr>');
                    });

                    let count = 0;
                    let total_overtime = 0;
                    (result.data.overtimes).forEach(function (a) {
                        count = count +1;
                        total_overtime = total_overtime + (parseFloat(a.overtime_rate) * parseInt(a.overtime_hours));
                        $('#overtime_info').append(
                            '<tr>'+
                            '<td><strong>'+ count+'</strong></td>' +
                            '<td><strong>'+ a.overtime_title+'</strong></td>' +
                            '<td><strong>'+ a.no_of_days+'</strong></td>' +
                            '<td><strong>'+ a.overtime_hours+'</strong></td>' +
                            '<td><strong>'+ a.overtime_rate+'</strong></td>'+
                                '</tr>'
                            );
                    });

                    let total_deduction = 0;
                    (result.data.deductions).forEach(function (a) {
                        total_deduction = total_deduction + parseFloat(a.deduction_amount);
                        $('#deduction_info').append('<tr><td><strong>'+ a.deduction_title+'---</strong> <span class="float-right">'+a.deduction_amount+'</span></td></tr>');
                    });

                    let total_other_payment = 0;
                    (result.data.other_payments).forEach(function (a) {
                        total_other_payment = total_other_payment + parseFloat(a.other_payment_amount);
                        $('#other_payment_info').append('<tr><td><strong>'+ a.other_payment_title+'---</strong><div class="float-right">'+a.other_payment_amount+'</div></td></tr>');
                    });

                    let total_salary = result.data.basic_total - result.data.pension_amount + total_allowance - total_loan + total_commission
                        - total_deduction + total_other_payment + total_overtime;

                    if (total_salary < 0) {
                        total_salary = 0;
                    }

                    if (result.data.payslip_type == 'Monthly') {
                        $('#payslip_type').html('<?php echo e(__('Monthly Payslip')); ?>');
                        $('#monthly_hourly').html('<?php echo e(__('Basic Salary')); ?>');
                        $('.hide-div').hide();
                        $('#hours_worked').html('');
                        $('#total_hours_worked').html('');
                        $('#hours_worked_amount').html('');
                        $('#total_hours_worked_amount').html('');
                    }
                    else {
                        $('.hide-div').show();
                        $('#payslip_type').html('<?php echo e(__('Hourly Payslip')); ?>');
                        $('#monthly_hourly').html('<?php echo e(__('Per Hour Salary')); ?>');
                        $('#hours_worked').html('<?php echo e(__('Total Hours Worked This Month')); ?>');
                        $('#total_hours_worked').html(result.data.monthly_worked_hours);
                        $('#hours_worked_amount').html('<?php echo e(__('Total Amount')); ?>');
                        $('#total_hours_worked_amount').html(result.data.monthly_worked_amount);
                    }

                    if (currency_format == 'suffix') {

                        $('#basic_salary_amount').html(result.data.basic_salary + ' <?php echo e(config('variable.currency')); ?>');
                        $('#pension_amount').html(result.data.pension_amount + ' <?php echo e(config('variable.currency')); ?>');
                        $('#total_allowance').html(total_allowance + ' <?php echo e(config('variable.currency')); ?>');
                        $('#total_commission').html(total_commission + ' <?php echo e(config('variable.currency')); ?>');
                        $('#total_loan').html(total_loan + ' <?php echo e(config('variable.currency')); ?>');
                        $('#total_overtime').html(total_overtime + ' <?php echo e(config('variable.currency')); ?>');
                        $('#total_deduction').html(total_deduction + ' <?php echo e(config('variable.currency')); ?>');
                        $('#total_other_payment').html(total_other_payment + ' <?php echo e(config('variable.currency')); ?>');
                        $('#total_salary').html(total_salary + ' <?php echo e(config('variable.currency')); ?>');
                    }
                    else {
                        $('#basic_salary_amount').html('<?php echo e(config('variable.currency')); ?> ' + result.data.basic_salary);
                        $('#pension_amount').html('<?php echo e(config('variable.currency')); ?> ' + result.data.pension_amount);
                        $('#total_allowance').html('<?php echo e(config('variable.currency')); ?> '+ total_allowance);
                        $('#total_commission').html('<?php echo e(config('variable.currency')); ?> ' + total_commission);
                        $('#total_loan').html('<?php echo e(config('variable.currency')); ?> '+ total_loan);
                        $('#total_overtime').html('<?php echo e(config('variable.currency')); ?> '+ total_overtime);
                        $('#total_deduction').html('<?php echo e(config('variable.currency')); ?> '+ total_deduction);
                        $('#total_other_payment').html('<?php echo e(config('variable.currency')); ?> '+ total_other_payment);
                        $('#total_salary').html('<?php echo e(config('variable.currency')); ?> '+ total_salary);
                    }

                    $('#salary_model').modal('show');
                }
            });
        });


    })(jQuery);

</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\laravel\abbisfarm\resources\views/salary/pay_list/includes/view_details.blade.php ENDPATH**/ ?>