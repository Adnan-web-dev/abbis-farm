<!--Create Modal -->
<div class="modal fade" id="createModalForm" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel"><b><?php echo app('translator')->get('file.Add New Goal Tracking'); ?></b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" id="submitForm">
                <?php echo csrf_field(); ?>

                <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label><b><?php echo app('translator')->get('file.Company'); ?> &nbsp;<span class="text-danger">*</span> </b></label>
                              <select name="company_id" id="company_id" class="form-control selectpicker dynamic"
                                    data-live-search="true" data-live-search-style="contains"
                                    data-first_name="first_name" data-last_name="last_name"
                                    title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($company->id); ?>"><?php echo e($company->company_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label><b><?php echo app('translator')->get('file.Goal Type'); ?> &nbsp;<span class="text-danger">*</span></b></label>
                              <select name="goal_type_id" id="goal_type_id" class="form-control selectpicker dynamic"
                                    data-live-search="true" data-live-search-style="contains"
                                    data-first_name="first_name" data-last_name="last_name"
                                    title='<?php echo e(__('Select Goal Type')); ?>'>
                                    <?php $__currentLoopData = $goal_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goalType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($goalType->id); ?>"><?php echo e($goalType->goal_type); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label><b><?php echo app('translator')->get('file.Subject'); ?> &nbsp;<span class="text-danger">*</span></b></label>
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label><b><?php echo app('translator')->get('file.Target Achievement'); ?> &nbsp;<span class="text-danger">*</span></b></label>
                              <input type="text" class="form-control" name="target_achievement" id="targetAchievement" placeholder="Target Achievement">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label><b><?php echo app('translator')->get('file.Description'); ?></b></label>
                              <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Description"></textarea>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label><b><?php echo app('translator')->get('file.Start Date'); ?> &nbsp;<span class="text-danger">*</span></b></label>
                              <input type="text" class="form-control"  name="start_date" id="start_date" placeholder="Start Date">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label><b><?php echo app('translator')->get('file.End Date'); ?> &nbsp;<span class="text-danger">*</span></b></label>
                              <input type="text" class="form-control"  name="end_date" id="end_date" placeholder="End Date">
                          </div>
                      </div>
                </div>

            </form>
        </div>
        <div class="row mb-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div id="alertMessageBox">
                    <div id="alertMessage" class="text-light"></div>
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
    $('#start_date').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#end_date').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
<?php /**PATH /home/abbisfar/payroll.abbisfarmltd.com/resources/views/performance/goal-tracking/create-modal.blade.php ENDPATH**/ ?>