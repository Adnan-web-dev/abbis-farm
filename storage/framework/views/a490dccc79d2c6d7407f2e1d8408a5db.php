<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <title><?php echo e(config('app.name')); ?></title>

    <style>
        .page-break {
            page-break-after: always;
        }
        h4 {
            font-size: 80%;
        }
        h5 {
            font-size: 80%;
        }
        h6 {
            font-size: 80%;
        }

        tbody {
            font-size: 80%;
            margin:0px;
            padding: 5px;
        }

        .table thead tr th, {
            border: 1px solid #000;
            font-size: 80%;
            margin:0px;
            padding: 5px;

        }
        .table tr td {
            border: 1px solid #000;
            font-size: 80%;
            margin:0px;
            padding: 5px;
        }
        #heading{
            font-size: 80%;
            color: #CE7749;
            text-align: center;
        }
        #normal-heading{
            font-size: 70%;
            color: #000
        }
    </style>
</head>
<body onload="window.print()" style="font-family: DejaVu Sans;">

    <h3 class="text-center"><?php echo app('translator')->get('file.Payment History'); ?></h3>


    <h5><?php echo e($company['company_name']); ?></h5>
    <h6><?php echo e($company['location']['address1']); ?></h6>
    <h6><?php echo e($company['location']['city']); ?>,<?php echo e($company['location']['country']['name']); ?>-<?php echo e($company['location']['zip']); ?></h6>
    <h6>Phone: <?php echo e($company['contact_no']); ?>| <?php echo e(trans('file.Email')); ?>: <?php echo e($company['email']); ?></h6>
    <hr>

    <div class="center">
        <h5>Employee Profile Details</h5>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td><strong class="help-split"><?php echo e(__('Employee ID')); ?>: </strong><?php echo e($user['username'] ?? ''); ?></td>
                <td><strong class="help-split"><?php echo e(__('Employee Name')); ?>: </strong><?php echo e($first_name); ?> <?php echo e($last_name); ?></td>
                <td><strong class="help-split"><?php echo e(__('Payslip NO')); ?>: </strong><?php echo e($id); ?></td>
            </tr>
            <tr>
                <td><strong class="help-split"><?php echo e(trans('file.Phone')); ?>: </strong><?php echo e($contact_no); ?></td>
                <td><strong class="help-split"><?php echo e(__('Joining Date')); ?>: </strong><?php echo e($joining_date); ?></td>
                <td><strong class="help-split"><?php echo e(__('Payslip Type')); ?>: </strong><?php echo e($payment_type); ?></td>

            </tr>
            <tr>
                <td><strong class="help-split"><?php echo e(trans('file.Company')); ?>: </strong><?php echo e($company['company_name']); ?></td>
                <td><strong class="help-split"><?php echo e(trans('file.Department')); ?>: </strong><?php echo e($department['department_name']); ?></td>
                <td><strong class="help-split"><?php echo e(trans('file.Designation')); ?>: </strong><?php echo e($designation['designation_name']); ?>

                
                </td>
            </tr>
            </tbody>
        </table>
    </div>
   
    <hr>

    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered text-center">
                <tbody>
                 <thead>
                <tr>
                    <th id="heading" colspan="2">Employee Daily and Monthly <?php echo e(trans('file.Earnings')); ?></th>
                </tr>
                </thead>
                <thead>
                <tr>
                    
                    <th id="normal-heading"><i>Job Descriptions and Allowances</i></th>
                    <th id="normal-heading"><?php echo e(trans('file.Amount')); ?></th>
                </tr>
                </thead>
                </tbody>
                <hr>
                
                
                <?php
                    if ($payment_type == 'Monthly')
                    {
                        $total_earnings = $basic_salary;
                    }
                    else
                    {
                        $total_earnings = $hours_amount;
                    }
                ?>
                
                <div class="center">
                                <h5><?php echo e(trans('file.Payslip')); ?> For The Month Of <?php echo e($month_year); ?></h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                         <?php if($payment_type == 'Monthly'): ?>
                                        <td><strong class="help-split"><?php echo e($company['company_name']); ?>: </strong><?php echo e($company['location']['city']); ?> Branch</td>
                                        <td><strong class="help-split"><?php echo e(__('Employee Name')); ?>: </strong><?php echo e($first_name); ?> <?php echo e($last_name); ?></td>
                                        <td><strong class="help-split"><?php echo e(__('Basic Salary')); ?> (<?php echo e(__('Total')); ?>)= </strong><?php echo e($total_earnings); ?></td>
                                        <?php else: ?>
                                        <td><strong class="help-split"><?php echo e($company['company_name']); ?>: </strong><?php echo e($company['location']['city']); ?> Branch</td>
                                        <td><strong class="help-split"><?php echo e(__('Employee Name')); ?>: </strong><?php echo e($first_name); ?> <?php echo e($last_name); ?></td>
                                        <td><strong class="help-split"> Monthly <?php echo e(__('Basic Salary')); ?> (<?php echo e(__('Total')); ?>)= </strong><?php echo e($total_earnings); ?></td>
                                        <?php endif; ?>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            
                <?php if($allowances): ?>
                    <?php $__currentLoopData = $allowances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allowance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                     <div class="center">
                                <h5>Allowances</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                        <td><strong class="help-split"><?php echo e($allowance['allowance_title']); ?> Allowance</strong></td>
                                        <td><strong class="help-split">Allowance Amount = </strong></td>
                                        <td><strong class="help-split"><?php echo e($allowance['allowance_amount']); ?></strong></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        
                        <?php
                            $total_earnings = $total_earnings + $allowance['allowance_amount'] ;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if($commissions): ?>
                    <?php $__currentLoopData = $commissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="center">
                                <h5>Commission</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                        <td><strong class="help-split"><?php echo e($commission['commission_title']); ?></strong></td>
                                        <td><strong class="help-split">Commission Amount = </strong></td>
                                        <td><strong class="help-split"><?php echo e($commission['commission_amount']); ?></strong></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                       
                        <?php
                            $total_earnings = $total_earnings + $commission['commission_amount'] ;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if($other_payments): ?>
                    <?php $__currentLoopData = $other_payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other_payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="center">
                                <h5>Over Time</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                        <td><strong class="help-split"><?php echo e($other_payment['other_payment_title']); ?></strong></td>
                                        <td><strong class="help-split">Overt Time Amount = </strong></td>
                                        <td><strong class="help-split"><?php echo e($other_payment['other_payment_amount']); ?></strong></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        
                        <?php
                            $total_earnings = $total_earnings + $other_payment['other_payment_amount'] ;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                
                <div><strong>Salary Per Day</strong></div>

                <?php if($overtimes): ?>
                    <?php $__currentLoopData = $overtimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $overtime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                             <!--div class="center">
                                <h5><?php echo e(trans('file.Payslip')); ?>: <?php echo e($month_year); ?></h5>
                            </div-->
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        
                                    <tr>
                                        <td><strong class="help-split"><?php echo e($overtime['month_year']); ?></strong></td>
                                        <td><strong class="help-split"><?php echo e($overtime['overtime_designation']); ?></strong></td>
                                        <td><strong class="help-split"><?php echo e($overtime['job_location']); ?></strong></td>
                                        <td><strong class="help-split">Actual Work Done = </strong><?php echo e($overtime['employee_actual_work_done']); ?></td>
                                        <td><strong class="help-split">Cost = </strong><?php echo e($overtime['overtime_rate']); ?></td>
                                         <td><strong class="help-split">Total Work Done = </strong><?php echo e($overtime['rate_actual_work_done']); ?></td>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        
                        <?php
                            $total_earnings = $total_earnings + $overtime['overtime_amount'] ;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <tr>
                    <td class="py-3">Total Salary Per Day Plus Other Tips =</td>
                    <?php if(config('variable.currency_format') =='suffix'): ?>
                        <td id="total_earnings"><?php echo e($total_earnings); ?> <span style="font-family: DejaVu Sans; sans-serif;"><?php echo e(config('variable.currency')); ?></span></td>
                    <?php else: ?>
                        <td id="total_earnings"><span style="font-family: DejaVu Sans; sans-serif;"><?php echo e(config('variable.currency')); ?></span> <?php echo e($total_earnings); ?> </td>
                    <?php endif; ?>
                </tr>


            </table>
        </div>
        <!-- /.col -->
    </div>
    <hr>


    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered text-center">

                <thead>
                <tr>
                    <th id="heading" colspan="2"><?php echo e(trans('file.Deductions')); ?></th>
                </tr>
                </thead>
                <thead>
                <tr>
                    <th id="normal-heading"><?php echo e(trans('file.Description')); ?></th>
                    <th id="normal-heading"><?php echo e(trans('file.Amount')); ?></th>
                </tr>
                </thead>

                <?php
                    $total_deductions = 0;
                ?>

                <?php if($loans): ?>
                    <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="py-3"><?php echo e($loan['loan_title']); ?></td>
                            <td><?php echo e($loan['monthly_payable']); ?></td>
                        </tr>
                        <?php
                            $total_deductions = $total_deductions + $loan['monthly_payable'] ;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if($deductions): ?>
                    <?php $__currentLoopData = $deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deduction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="py-3"><?php echo e($deduction['deduction_title']); ?></td>
                            <td><?php echo e($deduction['deduction_amount']); ?></td>
                        </tr>
                        <?php
                            $total_deductions = $total_deductions + $deduction['deduction_amount'] ;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                    <tr>
                        <td class="py-3"><?php echo e(__('Pension Amount')); ?></td>
                        <td><?php echo e($pension_amount); ?></td>
                    </tr>

                    <?php
                        $total_deductions = $total_deductions + $pension_amount;
                    ?>



                <tr>
                    <td class="py-3"><?php echo e(trans('file.Total')); ?></td>
                    <?php if(config('variable.currency_format') =='suffix'): ?>
                        <td id="total_deductions"><?php echo e($total_deductions); ?> <span style="font-family: DejaVu Sans; sans-serif;"><?php echo e(config('variable.currency')); ?></span></td>
                    <?php else: ?>
                        <td id="total_deductions"><span style="font-family: DejaVu Sans; sans-serif;"><?php echo e(config('variable.currency')); ?></span> <?php echo e($total_deductions); ?> </td>
                    <?php endif; ?>
                </tr>


            </table>
        </div>
        <!-- /.col -->
    </div>
    <?php if(config('variable.currency_format') =='suffix'): ?>
        <p class="text-danger"><?php echo e(__('Total Paidssss')); ?> : <strong><?php echo e($net_salary); ?> <span style="font-family: DejaVu Sans; sans-serif;"><?php echo e(config('variable.currency')); ?></span></strong></p>
    <?php else: ?>
        <p class="text-danger"><?php echo e(__('Total Net Paidssss')); ?> :<span style="font-family: DejaVu Sans; sans-serif;"><?php echo e(config('variable.currency')); ?></span> <strong><?php echo e($net_salary); ?></strong></p>
    <?php endif; ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH /home/abbisfar/payroll.abbisfarmltd.com/resources/views/salary/payslip/pdf.blade.php ENDPATH**/ ?>