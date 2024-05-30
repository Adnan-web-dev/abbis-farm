
<div id="confirmDeleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h2 class="modal-title"><?php echo e(trans('file.Confirmation')); ?></h2>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <h4 align="center" id="confirmMessage"><?php echo e(__('file.Are you sure you want to remove this data?')); ?></h4>
              <h4 align="center" id="confirmMessage"></h4>
          </div>
          <div class="modal-footer">
              <button type="submit" id="deleteSubmit" class="btn btn-danger"><?php echo e(trans('file.Yes')); ?></button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(trans('file.Cancel')); ?></button>
          </div>
      </div>
  </div>
</div>
<?php /**PATH /home/abbisfar/payroll.abbisfarmltd.com/resources/views/performance/goal-type/delete-confirm-modal.blade.php ENDPATH**/ ?>