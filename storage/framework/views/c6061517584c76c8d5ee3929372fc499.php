<section>

    <span id="loan_general_result"></span>


    <div class="mb-3" style="background-color:lightblue;">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('set-salary')): ?>
            <button type="button" class="btn btn-info" name="create_record" id="create_loan_record"><i class="fa fa-plus"></i><?php echo e(__('Add Borrow Request')); ?></button>
        <?php endif; ?>
    </div>

    <div class="row">
        <div class="table-responsive" style="background-color:lightblue;">
            <table id="loan-table" class="table ">
                <thead>
                <tr>
                    <th><?php echo e(__('Month-Year')); ?></th>
                    <th><?php echo e(trans('Borrow/Loan')); ?></th>
                    <?php if(config('variable.currency_format')=='suffix'): ?>
                        <th><?php echo e(__('Loan Amount')); ?> (<?php echo e(config('variable.currency')); ?>)</th>
                    <?php else: ?>
                        <th>(<?php echo e(config('variable.currency')); ?>) <?php echo e(__('Loan Amount')); ?></th>
                    <?php endif; ?>
                    <th><?php echo e(__('Borrowed/Loan Time')); ?></th>
                    <th><?php echo e(__('Borrowed/Loan Remaining')); ?></th>
                    <th class="not-exported"><?php echo e(trans('file.action')); ?></th>
                </tr>
                </thead>

            </table>
        </div>
    </div>

    <div id="LoanformModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title"><?php echo e(__('Add Borrow/Loan')); ?></h5>
                    <button type="button" data-dismiss="modal" id="close" aria-label="Close" class="loan-close"><i class="dripicons-cross"></i></button>
                </div>

                <div class="modal-body">
                    <span id="loan_form_result"></span>
                    <form method="post" id="loan_sample_form" class="form-horizontal" autocomplete="off">

                        <?php echo csrf_field(); ?>
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label><?php echo e(__('Month Year')); ?> *</label>
                                <input class="form-control month_year"  name="month_year" type="text" id="month_year">
                            </div>

                            <div class="col-md-6 form-group">
                                <label><?php echo e(__('Borrow/Loan Option')); ?> *</label>
                                <select name="loan_type" id="loan_type" required class="form-control selectpicker"
                                        
                                        title='<?php echo e(__('Borrowed/Loan Option')); ?>'>
                                    <option value="For Treatment"><?php echo e(__('For Treatment')); ?></option>
                                    <option value="Education"><?php echo e(__('Education')); ?></option>
                                     <option value="House Rent"><?php echo e(__('House Rent')); ?></option>
                                      <option value="Food"><?php echo e(__('Food')); ?></option>
                                       <option value="Transportation"><?php echo e(__('Transportation')); ?></option>
                                    <option value="Other Request"><?php echo e(__('Other Request')); ?></option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label><?php echo e(trans('Enter Other Request')); ?> *</label>
                                <input type="text" name="loan_title" id="loan_title" placeholder=<?php echo e(trans('other request')); ?>

                                        required class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <?php if(config('variable.currency_format')=='suffix'): ?>
                                    <label><?php echo e(__('Amount')); ?> (<?php echo e(config('variable.currency')); ?>) *</label>
                                <?php else: ?>
                                    <label>(<?php echo e(config('variable.currency')); ?>) <?php echo e(__('Amount')); ?> *</label>
                                <?php endif; ?> <input type="text" name="loan_amount" id="loan_amount"
                                              placeholder=<?php echo e(trans('file.Amount')); ?>

                                                      required class="form-control">
                            </div>


                            <div class="col-md-6 form-group">
                                <label><?php echo e(__('Number of installment')); ?></label>
                                <input type="text" name="loan_time" id="loan_time" placeholder=<?php echo e(__('Number of installment')); ?>

                                        required class="form-control">
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="reason"><?php echo e(trans('Reason For Borrowing')); ?></label>
                                    <textarea class="form-control" name="reason" id="loan_reason"
                                              rows="3"></textarea>
                                </div>
                            </div>


                            <div class="container">
                                <br>
                                
                                <div class="form-group" align="center">
                                    <input type="hidden" name="action" id="loan_action"/>
                                    <input type="hidden" name="hidden_id" id="loan_hidden_id"/>
                                    <input type="submit" name="action_button" id="loan_action_button"
                                           class="btn btn-warning" value=<?php echo e(trans('file.Add')); ?> />
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade confirmModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><?php echo e(trans('file.Confirmation')); ?></h2>
                    <button type="button" class="loan-close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;"><?php echo e(__('Are you sure you want to remove this data?')); ?></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button"  class="btn btn-danger loan-ok"><?php echo e(trans('file.OK')); ?></button>
                    <button type="button" class="loan-close btn-default" data-dismiss="modal"><?php echo e(trans('file.Cancel')); ?></button>
                </div>
            </div>
        </div>
    </div>


</section>

<?php /**PATH C:\xampp\htdocs\laravel\abbisfarm\resources\views/employee/salary/loan/index.blade.php ENDPATH**/ ?>