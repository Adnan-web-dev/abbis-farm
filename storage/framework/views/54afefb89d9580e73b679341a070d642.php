<!--Create Modal -->
<div class="modal fade" id="EditformModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel"><b><?php echo app('translator')->get('file.Edit Goal Tracking'); ?></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="edit-body">

        <form method="POST" id="updatetEditForm">
          <?php echo csrf_field(); ?>
          <input type="hidden" name="goal_tracking_id" id="goalTrackingIdEdit">

          <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b><?php echo app('translator')->get('file.Company'); ?></b></label>
                        <select name="company_id" id="companyIdEdit" class="form-control selectpicker dynamic"
                            data-live-search="true" data-live-search-style="contains"
                            data-first_name="first_name" data-last_name="last_name"
                            title='<?php echo e(__('Selecting',['key'=>trans('file.Company')])); ?>'>
                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($company->id); ?>" ><?php echo e($company->company_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b><?php echo app('translator')->get('file.Goal Type'); ?></b></label>
                        <select name="goal_type_id" id="goalTypeIdEdit" class="form-control selectpicker dynamic" data-live-search="true" data-live-search-style="contains">
                            <?php $__currentLoopData = $goal_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goalTypes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($goalTypes->id); ?>" ><?php echo e($goalTypes->goal_type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b><?php echo app('translator')->get('file.Subject'); ?></b></label>
                        <input type="text" class="form-control" name="subject" id="subjectEdit">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b><?php echo app('translator')->get('file.Target Achievement'); ?></b></label>
                        <input type="text" class="form-control" name="target_achievement" id="targetAchievementEdit">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label><b><?php echo app('translator')->get('file.Description'); ?></b></label>
                        <textarea class="form-control" name="description" id="descriptionEdit" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b><?php echo app('translator')->get('file.Start Date'); ?></b></label>
                        <input type="text" class="form-control" name="start_date" id="startDateEdit">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b><?php echo app('translator')->get('file.End Date'); ?></b></label>
                        <input type="text" class="form-control" name="end_date" id="endDateEdit">
                    </div>
                </div>


                <div class="col-md-12 form-group show-edit">
                    <label><b><?php echo e(__('file.Progress Bar')); ?></b></label>
                    <input type="text" name="progress" id="progressEdit"
                           class="form-control range-slider "
                           placeholder="<?php echo e(__('Progress Bar')); ?>">
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label><b><?php echo app('translator')->get('file.Status'); ?></b></label>
                        <select name="status" id="statusEdit" class="form-control selectpicker dynamic"
                              data-live-search="true" data-live-search-style="contains">
                              <option value="Not Started"><b>Not Started</b></option>
                              <option value="In Progress"><b>In Progress</b></option>
                              <option value="Completed"><b>Completed</b></option>
                        </select>
                    </div>
                </div>
          </div>
      </form>

      </div>
      <div class="row mb-5">
          <div class="col-sm-2"></div>
          <div class="col-sm-6">
              <div id="alertMessageBoxEdit">
                  <div id="alertMessageEdit" class="text-light"></div>
              </div>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-3">
              <button type="button" class="btn btn-primary" id="update-button"><?php echo app('translator')->get('file.Update'); ?></button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('file.Close'); ?></button>
          </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('#startDateEdit').datepicker({
      uiLibrary: 'bootstrap4'
  });
  $('#endDateEdit').datepicker({
      uiLibrary: 'bootstrap4'
  });

  $(".range-slider").ionRangeSlider({
    type: "single",
    min: 0,
    max: 100,
    step: 1,
    grid: true,
    postfix: "%",
    skin: "round"
});
</script>
<?php /**PATH /home/abbisfar/payroll.abbisfarmltd.com/resources/views/performance/goal-tracking/edit-modal.blade.php ENDPATH**/ ?>