<!--Edit Modal -->

<div id="EditformModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title"><b><?php echo e(__('file.Edit Goal Type')); ?></b></h5>
                <button type="button" data-dismiss="modal" id="close" aria-label="Close" class="close"><i class="dripicons-cross"></i></button>
            </div>

            <div class="modal-body" id="edit-body">

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="update-button"><?php echo app('translator')->get('file.Update'); ?></button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('file.Close'); ?></button>
            </div>

          </div>
      </div>
  </div>
<?php /**PATH /home/abbisfar/payroll.abbisfarmltd.com/resources/views/performance/goal-type/edit-modal.blade.php ENDPATH**/ ?>