<!--Create Modal -->
<div class="modal fade" id="createModalForm" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="createModalLabel"><b><?php echo app('translator')->get('file.Give Performance Appraisal'); ?></b></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="submitForm">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"><b><?php echo app('translator')->get('file.Company'); ?></b></label>
                        <div class="col-sm-6">
                            <select name="company_id" id="companyId" class="form-control selectpicker dynamic"
                                data-live-search="true" data-live-search-style="contains" data-first_name="first_name"
                                data-last_name="last_name" title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->company_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"><b><?php echo app('translator')->get('file.Employee'); ?></b></label>
                        <div class="col-sm-6" id="designation-selection">
                            <select name="employee_id" id="employeeId" class="form-control selectpicker"
                                data-live-search="true" data-live-search-style="contains" data-first_name="first_name"
                                data-last_name="last_name" title='<?php echo e(__('Selecting',['key'=>trans('file.Employee')])); ?>'>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"><b><?php echo app('translator')->get('file.Select Date'); ?></b></label>
                        <div class="col-sm-6" id="designation-selection">
                            <input type="text" class="form-control"  name="date" id="date" placeholder="Select Date">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <h5><b><?php echo app('translator')->get('file.Technical Competencies'); ?></b></h5>
                            <br>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-6 col-form-label"><b><?php echo app('translator')->get('file.Customer Experience'); ?></b></label>
                                <div class="col-sm-6">
                                    <select name="customer_experience" id="customerExperience"
                                        class="form-control selectpicker dynamic" data-live-search="true"
                                        data-live-search-style="contains" data-first_name="first_name"
                                        data-last_name="last_name"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                                        <option value="None" selected>None</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermidiate">Intermidiate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Expert/Leader">Expert/Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-6 col-form-label"><b><?php echo app('translator')->get('file.Marketing'); ?></b></label>
                                <div class="col-sm-6">
                                    <select name="marketing" id="marketing" class="form-control selectpicker dynamic"
                                        data-live-search="true" data-live-search-style="contains"
                                        data-first_name="first_name" data-last_name="last_name"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                                        <option value="None" selected>None</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermidiate">Intermidiate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Expert/Leader">Expert/Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-6 col-form-label"><b><?php echo app('translator')->get('file.Administration'); ?></b></label>
                                <div class="col-sm-6">
                                    <select name="administration" id="administration"
                                        class="form-control selectpicker dynamic" data-live-search="true"
                                        data-live-search-style="contains" data-first_name="first_name"
                                        data-last_name="last_name"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                                        <option value="None" selected>None</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermidiate">Intermidiate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Expert/Leader">Expert/Leader</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5><b>Organizational Competencies</b></h5>
                            <br>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-6 col-form-label"><b><?php echo app('translator')->get('file.Professionalism'); ?></b></label>
                                <div class="col-sm-6">
                                    <select name="professionalism" id="professionalism"
                                        class="form-control selectpicker dynamic" data-live-search="true"
                                        data-live-search-style="contains" data-first_name="first_name"
                                        data-last_name="last_name"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                                        <option value="None" selected>None</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermidiate">Intermidiate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Expert/Leader">Expert/Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-6 col-form-label"><b><?php echo app('translator')->get('file.Integrity'); ?></b></label>
                                <div class="col-sm-6">
                                    <select name="integrity" id="integrity" class="form-control selectpicker dynamic"
                                        data-live-search="true" data-live-search-style="contains"
                                        data-first_name="first_name" data-last_name="last_name"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                                        <option value="None" selected>None</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermidiate">Intermidiate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Expert/Leader">Expert/Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-6 col-form-label"><b><?php echo app('translator')->get('file.Attendance'); ?></b></label>
                                <div class="col-sm-6">
                                    <select name="attendance" id="attendance" class="form-control selectpicker dynamic"
                                        data-live-search="true" data-live-search-style="contains"
                                        data-first_name="first_name" data-last_name="last_name"
                                        title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                                        <option value="None" selected>None</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermidiate">Intermidiate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Expert/Leader">Expert/Leader</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"><b><?php echo app('translator')->get('file.Remarks'); ?></b></label>
                        <div class="col-sm-12">
                            <textarea name="remarks" id="remarks" rows="5" class="form-control" placeholder="Remarks"></textarea>
                        </div>
                    </div>

                </form>

            </div>

            <div class="row mb-5">
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <div id="alertMessage">
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-primary" id="save-button"><?php echo app('translator')->get('file.Save'); ?></button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('file.Close'); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#date').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<?php /**PATH /home/abbisfar/payroll.abbisfarmltd.com/resources/views/performance/appraisal/create-modal.blade.php ENDPATH**/ ?>